@extends('layout.admin')

@section('content')


    <div class="row">
        <div class="col-md-3">.col-md-8</div>
        <div class="col-md-8">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Ajouter une formation </h2>
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
                    <form id="demo-form"  action="{{url('admin/formations')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <label for="titre">Titre * :</label>
                        <input type="text" id="titre" class="form-control" name="titre" required/>
                        <br/>

                        <br/>
                        <label>Statut *:</label>

                        <p>
                            Publié:
                            <input type="radio" class="flat" name="statut" id="published" value="publishé" />
                            Dépublié:
                            <input type="radio" class="flat" name="statut" id="unpublished" value="non_publié" />


                        </p>
                        <br/>

                        <label>Séance de suivi:</label>

                        <p>
                            Offerte:
                            <input type="radio" class="flat" name="session_suivi"  value="offerte" />
                            En supplément:
                            <input type="radio" class="flat" name="session_suivi"  value="en_supplement" />


                        </p>
                        <br/>

                        <label for="durée">Durée :</label>
                        <input type="text" id="durée" class="form-control" name="durée" required/>
                        <br/>

                        <label for="category_id">Catégorie *:</label>
                        <select name="category_id" id="category_id" class="" required/>
                            @forelse($categories as $id => $title)
                                <option value="{{$id}}">{{$title}}</option>
                            @empty
                                aucune catégorie
                            @endforelse
                        </select>

                            <br/>
                        </br>
                            <label for="abstract">Abstract : <span>Résumé pour la home page.</span></label><br/>
                            Il vous reste: <span id="countdown"></span>  caractères.

                            <textarea  name="abstract" maxlength="10" rows="6" id="abstract" class="summer"></textarea>
                        <br/>


                        <label for="objectifs">Objectifs :</label>
                          <textarea rows="6" id="obj" class="summernote" name="objectifs"></textarea>
                        <br/>

                        <label for="pré-requis">Pré-requis :</label>
                          <textarea rows="6" class="summernote"  class="form-control" name="pré_requis"></textarea>
                        <br/>

                        <label for="effectif">Effectif Max :</label>
                        <input type="number" id="effectif" class="form-control" name="effectif_max" />
                        <br/>

                        <label for="price">Prix :</label>
                        <input type="number" class="form-control" name="price" />
                        <br/>



                            <label id="technig" for="programme">Programme:</label>
                            <textarea rows="6" class="summernote" class="form-control" name="programme">
                                      </textarea>


                        <label id="technig" for="presentation">Présentation :</label>
                            <textarea rows="6" class="summernote" class="form-control" name="présentation">
                                      </textarea>

                        <br/>

                            <label for="presentation">Moyens techniques :</label>
                            <textarea rows="6" class="summernote" class="form-control" name="moyens_techniques"></textarea>

                            <br/>

                            <label for="presentation">Financement :</label>
                            <textarea rows="6" class="summernote" class="form-control"
                                      name="financement"></textarea>

                            <br/>

                        <label for="image">Image: </label> <span>(Idéal: 200x300px environ)</span>
                        <input type="file"  name="media">
                        </br>

                            <label for="pdf">Programme pdf: </label>
                            <input type="file"  name="pdf">
                            </br>

                        <label for="image">Video: </label>
                        <input type="text"  name="video" >
                        </br>

                        <input type="submit" class="btn btn-warning">


                    </form>
                </div>
            </div>
        </div>

    </div>



@endsection