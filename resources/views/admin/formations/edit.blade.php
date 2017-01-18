@extends('layout.admin')

@section('content')


    <div class="row">
        <div class="col-md-3">.col-md-8</div>
        <div class="col-md-8">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Modifier une formation </h2>
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
                    <form id="demo-form"  action="{{url('admin/formations/'. $formation->id)}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{method_field('PUT')}}

                        <label for="titre">Titre * :</label>
                        <input type="text" id="titre" class="form-control" name="titre" value="{{$formation->titre}}" required/>
                        <br/>

                        <p>
                            Publié:
                            <input type="radio" class="flat" name="statut" id="published" value="publishé" {{$formation->statut =='publishé'? 'checked' : ''}} />
                            Dépublié:
                            <input type="radio" class="flat" name="statut" id="unpublished" value="non_publié" {{$formation->statut =='non_publié'? 'checked' : ''}}/>


                        </p>
                        <br/>

                        <label>Séance de suivi:</label>

                        <p>
                            Offerte:
                            <input type="radio" class="flat" name="session_suivi"  value="offerte" {{$formation->session_suivi =='offerte'? 'checked' : ''}}/>
                            En supplément:
                            <input type="radio" class="flat" name="session_suivi"  value="en_supplement" {{$formation->session_suivi =='en_supplement'? 'checked' : ''}}/>


                        </p>
                        <br/>

                        <label for="titre">Durée :</label>
                        <input type="text" id="durée" class="form-control" value="{{$formation->durée}}" name="durée"/>
                        <br/>

                        <label for="category_id">Catégorie *:</label>
                        <select name="category_id" id="category_id" class="form-control" required>
                            @forelse($categories as $id => $title)

                                <option value="{{$id}}"
                                        {{($formation->category_id == $id)? 'selected': '' }}>
                                    {{$title}}
                                </option>

                            @empty
                                aucune catégorie
                            @endforelse
                        </select>

                        <br/>

                        <label for="abstract">Abstract : <span>Résumé pour la home page.</span></label>
                        <textarea rows="6" id="obj" class="summernote" name="abstract">
                            {!!$formation->abstract!!}
                        </textarea>

                        <br/>

                        <label for="objectifs">Objectifs :</label>
                          <textarea class="summernote" rows="6" id="presentation" required="required" class="form-control" name="objectifs">
                             {{$formation->objectifs}}
                          </textarea>

                        <br/>

                        <label for="pré-requis">Pré-requis :</label>
                          <textarea class="summernote" rows="6" id="pré-requis" required="required" class="form-control" name="pré_requis">
                              {!!$formation->pré_requis!!}
                          </textarea>

                        <br/>

                        <label for="effectif">Effectif Max :</label>
                        <input type="number" id="effectif" class="form-control" name="effectif_max" value="{{$formation->effectif_max}}" required/>
                        <br/>

                        <label for="price">Prix :</label>
                        <input type="number" id="formateur" class="form-control" name="price" value="{{$formation->price}}">


                        <label for="financement">Financement :</label>
                            <textarea class="summernote" rows="6" id="financement" name="financement" required="required" class="form-control">
                                {!! $formation->financement !!}
                            </textarea>

                        <br/>

                        <label for="moyens">Moyens techniques :</label>
                          <textarea class="summernote" rows="6" id="moyens" name="moyens_techniques" required="required" class="form-control">
                              {!! $formation->moyens_techniques !!}
                          </textarea>

                        <br/>

                        <label id="technig" for="programme">Programme:</label>
                            <textarea rows="6" class="summernote" class="form-control" name="programme">
                                     {!! $formation->programme !!} </textarea>

                        <label for="presentation">Présentation (100 caractères max) :</label>
                            <textarea class="summernote" rows="6" id="presentation" name="présentation" required="required" class="form-control">
                                {!! $formation->présentation !!}
                            </textarea>

                        <br/>


                        @if($formation->uri)

                            <img src="{{url('assets', ['images', $formation->uri])}}" alt="{{$formation->uri}}" >
                        </br>
                            <input type="checkbox" name="modif_media"> Modifier l'image <br>
                            </br>
                            <input type="file" name="media">
                            </br>

                        @else
                            <label for="image">Image: </label> <span>(Idéal: 200x300px environ)</span>
                            <input type="file" name="media">
                        @endif

                        @if($formation->pdf)
                            <img src="{{url('assets', ['images', $formation->pdf])}}" alt="{{$formation->pdf}}" >
                            </br>
                            <input type="checkbox" name="modif_pdf"> Télécharger un autre programme : <br>
                            </br>
                            <input type="file" name="pdf">
                            </br>

                        @else
                            <label for="pdf">Programme pdf : </label>
                            <input type="text"  name="pdf">
                            @endif
                            <br>

                        </br>


                        @if($formation->uri_video)
                            <iframe  width="337" height="180" src="{{url('https://www.youtube.com/embed/'.$formation->uri_video)}} " frameborder="0" allowfullscreen></iframe>
                        </br>
                            <input type="checkbox" name="modif_video"> Modifier la video <br>
                        </br>
                            <input type="text"  name="video" value="ex: https://www.youtube.com/?hl=fr&gl=FR">
                            </br>


                        @else
                            <label for="video">Video: </label>
                            <input type="text"  name="video" >
                        @endif

                        </br>

                        <input type="submit" class="btn btn-warning">


                    </form>
                </div>
            </div>
        </div>

    </div>



@endsection