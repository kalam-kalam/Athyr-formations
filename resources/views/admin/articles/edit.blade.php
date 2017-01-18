@extends('layout.admin')

@section('content')


    <div class="row">
        <div class="col-md-3">.col-md-8</div>
        <div class="col-md-8">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Modifier l'article </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <!-- start form for validation -->
                    <form id="demo-form" data-parsley-validate action="{{url('admin/articles/'.$article->id)}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{method_field('PUT')}}

                        <label for="title">Titre * :</label>
                        <input type="text" id="title" class="form-control" name="title" value="{{$article->title}}" required/>


                        <label>Statut *:</label>
                        <p>
                            Publié:
                            <input type="radio" class="flat" name="status" id="published" value="published"
                                   {{$article->status =='published'? 'checked' : ''}}
                                   required/> Dépublié:
                            <input type="radio" class="flat" name="status" id="unpublished" value="unpublished"
                                    {{$article->status =='unpublished'? 'checked' : ''}}
                            required/>Focus :
                            <input type="radio" class="flat" name="status" id="focus" value="focus"
                                   {{$article->status =='focus'? 'checked' : ''}}
                                   required/>
                        </p>

                        <label>Tags (mise en place en cours):</label>
                        <p style="padding: 5px;">

                            <input type="checkbox" name="tags[]" id="hobby2" value="run" class="flat"/> Cubase
                            <br/>

                            <input type="checkbox" name="tags[]" id="hobby3" value="eat" class="flat"/> Teambuilding
                            <br/>

                            <input type="checkbox" name="tags[]" id="hobby4" value="sleep" class="flat"/> Apple
                            <br/>
                        <p>

                            <label for="category_id">Catégorie *:</label>
                            <select name="category_id" id="category_id" class="form-control" required >
                                @forelse($categories as $id => $title)
                                    <option value="{{$id}}"
                                            {{$article->category_id ==$id? 'selected' : ''}}>
                                        {{$title}}
                                    </option>
                                @empty
                                    aucune catégorie
                                @endforelse
                            </select>

                            <label for="abstract">Abstract (100 caractères max) :</label>
                          <textarea rows="6" id="abstract" required="required" class="summernote" name="abstract">
                              {!!$article->abstract!!}
                          </textarea>

                            <br/>

                            <label for="content">Article:</label>
                        <div class="btn-toolbar editor" data-role="editor-toolbar"
                             data-target="#editor">
                            <div class="btn-group">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i
                                            class="fa fa-font"></i><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                </ul>
                            </div>


                            <div class="btn-group">
                                <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                                <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i
                                            class="fa fa-italic"></i></a>
                                <a class="btn" data-edit="strikethrough" title="Strikethrough"><i
                                            class="fa fa-strikethrough"></i></a>
                                <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i
                                            class="fa fa-underline"></i></a>
                            </div>

                            <div class="btn-group">
                                <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i
                                            class="fa fa-list-ul"></i></a>
                                <a class="btn" data-edit="insertorderedlist" title="Number list"><i
                                            class="fa fa-list-ol"></i></a>
                                <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i
                                            class="fa fa-dedent"></i></a>
                                <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                            </div>

                            <div class="btn-group">
                                <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i
                                            class="fa fa-align-left"></i></a>
                                <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i
                                            class="fa fa-align-center"></i></a>
                                <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i
                                            class="fa fa-align-right"></i></a>
                                <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i
                                            class="fa fa-align-justify"></i></a>
                            </div>

                            <div class="btn-group">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i
                                            class="fa fa-link"></i></a>
                                <div class="dropdown-menu input-append">
                                    <input class="span2" placeholder="URL" type="text" data-edit="createLink"/>
                                    <button class="btn" type="button">Add</button>
                                </div>
                                <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                            </div>

                            <div class="btn-group">
                                <input name="media" type="file">
                            </div>

                            <div class="btn-group">
                                <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                                <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i
                                            class="fa fa-repeat"></i></a>
                            </div>
                        </div>

                        <textarea name="content" type="text" id="editor" class="summernote" contenteditable="true">
                            {!! $article->content !!}
                        </textarea>

                        <br/>

                        @if($article->uri)

                            <img src="{{url('assets', ['images', $article->uri])}}" alt="{{$article->uri}}" >
                            </br>
                            <input type="checkbox" name="modif_media"> Modifier l'image <br>
                            </br>
                            <input type="file" name="media">
                            </br>

                        @else
                            <label for="image">Image: </label> <span>(Idéal: 200x300px environ)</span>
                            <input type="file" name="media">
                        @endif


                        @if($article->uri_video)
                            <iframe  width="337" height="180" src="{{url('https://www.youtube.com/embed/'.$article->uri_video)}} " frameborder="0" allowfullscreen></iframe>
                            </br>
                            <input type="checkbox" name="modif_video"> Modifier la video <br>
                            </br>
                            <input type="text"  name="video" value="ex: https://www.youtube.com/?hl=fr&gl=FR">
                            </br>


                        @else
                            <label for="video">Video: </label>
                            <input type="text"  name="video">
                            @endif

                            </br>

                        <input type="submit" class="btn btn-warning">


                    </form>
                </div>
            </div>
        </div>

    </div>



@endsection