<?php

namespace App\Http\Controllers;

use App\Category;
use App\Formation;
use App\Session;
use App\Tag;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\File;


class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formations = Formation::all();
        $sessions = Session::all();
        $categories = Category::all();
        
        
        return view('admin.formations.index', compact('formations', 'sessions', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::lists('title', 'id');
        $sessions = Session::all();

        return view('admin.formations.create', compact('categories', 'sessions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\FormRequest $request)
    {

        $formation = Formation::create($request->all());
        $title = $request->titre;



        if (!is_null($request->media)) {

            $img = $request->media;


            $ext = $img->getClientOriginalExtension();

            $fileName = md5(uniqid(rand(), true)) . ".$ext";
            $img->move(env('UPLOADS'), $fileName);

            $formation->uri = $fileName;

            $formation->save();
        }

        if (!is_null($request->pdf)) {

            $pdf = $request->pdf;
            $ext = $pdf->getClientOriginalExtension();
            $fileName = "$title" . ".$ext";

            $pdf->move(env('UPLOADS'), $fileName);

            $formation->pdf = $fileName;

            $formation->save();
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


            $formation->uri_video = $youtubeId;
            $formation->save();

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
        $published ='';
        $unpublished='';
        $formation = Formation::find($id);

        ($formation->status == 'published')? $published ='checked': $unpublished ='checked';

        $categories = Category::lists('title', 'id');
        $tags = Tag::lists('name', 'id');
        $sessions = Session('date', 'id');



        return view('admin.formations.edit', compact('formation', 'sessions','categories','tags', 'published', 'unpublished'));
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
        $formation = Formation::find($id);
        $formation->update($request->all());


        if (!is_null($request->modif_media)) {

            if(!is_null($formation->uri))
            {
                $fileName = public_path('assets/images/' . $formation->uri);
                if (File::exists($fileName)) {
                    File::delete($fileName);
                }

            }

            if (!is_null($request->media)) {

                $img = $request->media;


                $ext = $img->getClientOriginalExtension();

                $fileName = md5(uniqid(rand(), true)) . ".$ext";
                $img->move(env('UPLOADS'), $fileName);

                $formation->uri = $fileName;

                $formation->save();
            }

        }

        if (!is_null($request->modif_pdf)) {

            if(!is_null($formation->pdf))
            {
                $fileName = public_path('assets/images/' . $formation->pdf);
                if (File::exists($fileName)) {
                    File::delete($fileName);
                }

            }

            if (!is_null($request->pdf)) {

                $pdf = $request->pdf;


                $ext = $pdf->getClientOriginalExtension();

                $pdf->move(env('UPLOADS'), $ext);

                $formation->pdf = $ext;

                $formation->save();
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


                $formation->uri_video = $youtubeId;
                $formation->save();

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
       
        Formation::destroy($id);
        return back()->with(['message'=>'deleted with success']);
    }
}
