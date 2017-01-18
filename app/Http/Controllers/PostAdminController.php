<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;

use App\Tag;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManagerStatic as Image;


class PostAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('created_at','desc')->paginate(15);


        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::lists('title', 'id');
        return view('admin.articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\FormRequest $request)
    {
        $article = Article::create($request->all());


        if (!is_null($request->media)) {

            $img = Image::make($request->media);


            /*if($img->width() > $img->height()){
                $img->crop(300,200);
            }
            elseif($img->width() < $img->height()){
                $img->crop(300,200);
            }*/

            $width= $img->width();
            $height= $img->height();

            if($width > $height){
                $img->crop($height, $height);
            }
            elseif ($width < $height){
                $img->crop($width, $width);
            }


            $mime = $img->mime();
              //edited due to updated to 2.x
            if ($mime == 'image/jpeg')
                $ext = '.jpg';
            elseif ($mime == 'image/png')
                $ext = '.png';
            elseif ($mime == 'image/gif')
                $ext = '.gif';
            else
                $ext = '';

            $fileName = md5(uniqid(rand(), true)) . "$ext";


            $article->uri = $fileName;

            
            $path = "assets/$fileName";


            $img->save($path);


            $article->save();

        }

        if ($request->video){
            

            $video = $request->video;


            $regexstr = '~
			# Match Youtube link and embed code
			(?:				 				
				(?:&lt;iframe [^&gt;]*src=")?	 	# If iframe match up to first quote of src
				|(?:				 		# Group to match if older embed
					(?:&lt;object .*&gt;)?		# Match opening Object tag
					(?:&lt;param .*&lt;/param&gt;)*  # Match all param tags
					(?:&lt;embed [^&gt;]*src=")?  # Match embed tag to the first quote of src
				)?				 			# End older embed code group
			)?				 				# End embed code groups
			(?:				 				# Group youtube url
				https?:\/\/		         	# Either http or https
				(?:[\w]+\.)*		        # Optional subdomains
				(?:               	        # Group host alternatives.
				youtu\.be/      	        # Either youtu.be,
				| youtube\.com		 		# or youtube.com 
				| youtube-nocookie\.com	 	# or youtube-nocookie.com
				)				 			# End Host Group
				(?:\S*[^\w\-\s])?       	# Extra stuff up to VIDEO_ID
				([\w\-]{11})		        # $1: VIDEO_ID is numeric
				[^\s]*			 			# Not a space
			)				 				# End group
			"?				 				# Match end quote if part of src
			(?:[^&gt;]*&gt;)?			 			# Match any extra stuff up to close brace
			(?:				 				# Group to match last embed code
				&lt;/iframe&gt;		         	# Match the end of the iframe	
				|&lt;/embed&gt;&lt;/object&gt;	        # or Match the end of the older embed
			)?				 				# End Group of last bit of embed code
			~ix';

            preg_match($regexstr, $video, $matches);

            $youtubeId = $matches[1];


            $article->uri_video = $youtubeId;
            $article->save();

        }
        
        return back()->with(['message' => 'votre post a bien été ajouté']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $published = ' ';
        $unpublished = ' ';

        $article = Article::find($id);

        ($article->status == 'published') ? $published = 'checked' : $unpublished = 'checked';

        $categories = Category::lists('title', 'id');
        $tags = Tag::lists('name', 'id');

        return view('admin.articles.edit', compact('article', 'published', 'unpublished', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\FormRequest $request, $id)
    {
        $article = Article::find($id);
        $article->update($request->all());


        if (!is_null($request->modif_media)) {

            if(!is_null($article->uri))
            {
                $fileName = public_path('assets/images/' . $article->uri);
                if (File::exists($fileName)) {
                    File::delete($fileName);
                }

            }

            if (!is_null($request->media)) {

                $img = $request->media;


                $ext = $img->getClientOriginalExtension();

                $fileName = md5(uniqid(rand(), true)) . ".$ext";
                $img->move(env('UPLOADS'), $fileName);

                $article->uri = $fileName;

                $article->save();
            }

        }

        if ($request->modif_video) {

            if ($request->video){

                $video = $request->video;


                $regexstr = '~
			# Match Youtube link and embed code
			(?:				 				
				(?:&lt;iframe [^&gt;]*src=")?	 	# If iframe match up to first quote of src
				|(?:				 		# Group to match if older embed
					(?:&lt;object .*&gt;)?		# Match opening Object tag
					(?:&lt;param .*&lt;/param&gt;)*  # Match all param tags
					(?:&lt;embed [^&gt;]*src=")?  # Match embed tag to the first quote of src
				)?				 			# End older embed code group
			)?				 				# End embed code groups
			(?:				 				# Group youtube url
				https?:\/\/		         	# Either http or https
				(?:[\w]+\.)*		        # Optional subdomains
				(?:               	        # Group host alternatives.
				youtu\.be/      	        # Either youtu.be,
				| youtube\.com		 		# or youtube.com 
				| youtube-nocookie\.com	 	# or youtube-nocookie.com
				)				 			# End Host Group
				(?:\S*[^\w\-\s])?       	# Extra stuff up to VIDEO_ID
				([\w\-]{11})		        # $1: VIDEO_ID is numeric
				[^\s]*			 			# Not a space
			)				 				# End group
			"?				 				# Match end quote if part of src
			(?:[^&gt;]*&gt;)?			 			# Match any extra stuff up to close brace
			(?:				 				# Group to match last embed code
				&lt;/iframe&gt;		         	# Match the end of the iframe	
				|&lt;/embed&gt;&lt;/object&gt;	        # or Match the end of the older embed
			)?				 				# End Group of last bit of embed code
			~ix';

                preg_match($regexstr, $video, $matches);

                $youtubeId = $matches[1];


                $article->uri_video = $youtubeId;
                $article->save();

            }

        }
        
        return back()->with(['message' =>'updated with success']);

    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::destroy($id);

        return back()->with(['message'=>'deleted with success']);
    }
}
