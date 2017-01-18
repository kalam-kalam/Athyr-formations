@extends('layout.admin')

@section('content')


    <div class="row">
        <div class="col-md-3">.col-md-8</div>
        <div class="col-md-8">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Ajouter un article </h2>
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
                    <form id="demo-form" data-parsley-validate action="{{url('admin/articles')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <label for="title">Titre * :</label>
                        <input type="text" id="title" class="form-control" name="title" required/>
</br>

                        <label>Statut *:</label>
                        <p>
                            Publié :
                            <input type="radio" class="flat" name="status" id="published" value="published" checked="">
                            Dépublié :
                            <input type="radio" class="flat" name="status" id="unpublished" value="unpublished"/>
                            Focus :
                            <input type="radio" class="flat" name="status" id="focus" value="focus"/>

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
                                    <option value="{{$id}}">{{$title}}</option>
                                @empty
                                    aucune catégorie
                                @endforelse
                            </select>
                            </br>

                            <label for="abstract">Abstract :</label>
                            <br/>
                            Il vous reste: <span id="countdown"></span>  caractères.
                          <textarea rows="6" id="abstract" required="required" class="summer" name="abstract"></textarea>

                            <br/>

                            <label for="content">Article:</label>

                        <textarea name="content" type="text" id="editor" class="summernote" ></textarea>

                        <label for="image">Image: </label> <span>(Idéal: 200x300px environ)</span>
                        <input type="file" name="media">
                            </br>

                        <label for="video">Video: </label>
                        <input type="text"  name="video">

                        </br>
                            </br>
                        <input type="submit" class="btn btn-warning">


                </form>
            </div>
        </div>
    </div>

    </div>



@endsection