@extends('layout.admin')

@section('content')


    <div class="row">
        <div class="col-md-3">.col-md-8</div>
        <div class="col-md-8">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Ajouter une membre </h2>
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
                    <form id="demo-form"  action="{{url('admin/members')}}" method="POST">
                        {{csrf_field()}}


                        <p>
                            Mme:
                            <input type="radio" class="flat" name="title" id="mr" value="MONSIEUR" checked=""
                                   required/> Mr:
                            <input type="radio" class="flat" name="title" id="mme" value="MADAME"/>
                        </p>
                        <br/>

                        <p>
                            <label for="status">Statut :</label>
                            Prospect :
                            <input type="radio" class="flat" name="status"  value='PROSPECT'
                                   required/>
                            Inscrit :
                            <input type="radio" class="flat" name="status"  value='INSCRIT'
                                   required/>
                            En formation :
                            <input type="radio" class="flat" name="status"  value='EN_FORMATION'
                                   required/>
                            Ancien :
                            <input type="radio" class="flat" name="status"  value='ANCIEN'
                                   required/>
                        </p>
                        <br/>

                        <label for="lastname">Nom * :</label>
                        <input type="text" id="nom" class="form-control" name="lastname" required/>
                        <br/>
                        <label for="firstname">Prénom :</label>
                        <input type="text" id="prenom" class="form-control" name="firstname">
                        <br/>
                        <label for="birthdate">Date de naissance :</label>
                        <input type="date" id="birthdate" class="form-control" name="birthdate">
                        <br/>

                        <label for="address">Adresse* :</label>
                        <input type="text" id="address" class="form-control" name="address" required/>
                        <br/>

                        <label for="city">Ville* :</label>
                        <input type="text"   id="nom" class="form-control" name="city" required/>
                        <br/>

                        <label for="zipcode">Code postal* :</label>
                        <input type="text" pattern="[0-9]*" maxlength="5"  id="zipcode" class="form-control" name="zipcode" required/>
                        <br/>

                        <label for="city">Email* :</label>
                        <input type="email"  id="email" class="form-control" name="email" required/>
                        <br/>

                        <label for="phone">Téléphone* :</label>
                        <input type="tel"  id="email" class="form-control" name="email" required/>
                        <br/>

                        <label for="situation">Situation *:</label>
                        <select name="situation" id="situation" class="form-control" required >

                                <option value="INTERMITTENT">Intermittent</option>
                                <option value="PARTICULAR">Particulier</option>
                                <option value="OTHER">Autre</option>

                        </select>
                        </br>

                        <label for="objectifs">Objectifs (100 caractères max) :</label>
                          <textarea rows="6" id="presentation" required="required" class="form-control" name="objectifs"
                                    data-parsley-trigger="keyup" data-parsley-minlength="20"
                                    data-parsley-maxlength="100"
                                    data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                                    data-parsley-validation-threshold="10"></textarea>

                        <br/>

                        <label for="funding_option">Financement (100 caractères max) :</label>
                            <textarea rows="6" id="funding_option" required="required" class="form-control"
                                      name="funding_option" ></textarea>

                        <br/>


                        <label for="comment">Commentaire (100 caractères max) :</label>
                            <textarea rows="6" id="presentation" required="required" class="form-control"
                                      name="présentation"
                                      data-parsley-trigger="keyup" data-parsley-minlength="20"
                                      data-parsley-maxlength="100"
                                      data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                                      data-parsley-validation-threshold="10"></textarea>

                        <br/>


                        <input type="submit" class="btn btn-warning">


                    </form>
                </div>
            </div>
        </div>

    </div>



@endsection