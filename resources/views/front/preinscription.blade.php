@extends('layout.navigation')

@section('content')


    <style>
        #banner {
            background-image: url("{{url('assets/images/inscription/launch-pad-1505184_1920.jpg')}}");
            background-repeat: no-repeat;
            background-size: cover;
            height: 300px;
        }

        #footer {
            background-color: black;
        }
    </style>


    <div class="ariane" id="ariane_financement">
        <a href="url{{'front/home'}}">ACCUEIL</a> > <a href="url{{'front/inscript'}}">PRE-INSCRIPTION</a>
    </div>

    @if(session('notification'))
        <div id="notif_content">
            <h3 id="notification_teamb">{{session('notification')}}</h3>
        </div>
    @endif



    <div class="singlePage_title" id="financement_title">
        <h1>FORMULAIRE DE PRÉ-INSCRIPTION</h1>
    </div>


    <section id="preinscription_container">


        <form id="form_preinscription" action="{{url('front/inscript')}}" method="POST" onsubmit="return verifForm(this)">

            {{csrf_field()}}

            <div class="form_inscript_column">
                <p>
                    <label for="title">Civilité : </label>
                    <select name="title" id="title" class="form-control">
                        <option value='MADAME'>Madame</option>
                        <option value='MONSIEUR'>Monsieur</option>
                    </select>
                </p>

                <p>
                    <label for="lastname">Nom *:</label>
                    <input class="inscript_input" id="lastname" type="text" name="lastname" required>
                    @if ($errors->has('name')) <span class="admin__error">{{$errors->first('lastname')}}</span>
                    @endif
                </p>

                <p>
                    <label for="firstname">Prénom *:</label>
                    <input class="inscript_input" id="firstname" type="text" name="firstname" required>
                    @if ($errors->has('name')) <span class="admin__error">{{$errors->first('firstname')}}</span>
                    @endif
                </p>

                <p>
                    <label for="email">E-mail *:</label>
                    <input class="inscript_input" id="email" type="text" name="email" onblur="verifMail(this)" required>
                    @if ($errors->has('email')) <span class="admin__error">{{$errors->first('email')}}</span>
                    @endif
                </p>
                <p>
                    <label for="telephone">Téléphone *:</label>
                    <input class="inscript_input" id="telephone" type="text" name="phone_number" onblur="verifTel(this)" required>
                    @if ($errors->has('phone_number')) <span
                            class="admin__error">{{$errors->first('phone_number')}}</span>
                    @endif
                </p>
                <p>
                    <label for="title">Situation: </label>
                    <select name="situation" id="situation" class="form-control">
                        <option value="intermittent">Intermittent</option>
                        <option value="particular">Particulier</option>
                        <option value="other">Autre</option>
                    </select>
                </p>
                <p>


                    <label for="formations">Formation : </label>
                    <select name="formation_id" id="preinscription_formation_field"
                            class="form-control">
                        @foreach($formations as $formation)
                            @if( $formation->id == $id && $formation->statut =='publishé')
                                <option value="{{$id}}">{{$formation->titre}}</option>

                            @endif
                        @endforeach
                    </select>
                </p>



                <p>

                    <label for="formations">Session : </label>
                    <select name="session_id" id="preinscription_sessions_field"
                            class="form-control">
                        @foreach($sessions as $session)
                            @if($session->formation_id == $id)
                                <option value="{{$session->id}}">{{$session->place}} - {{$session->session_start}}</option>

                            @endif
                        @endforeach
                    </select>

                </p>


            </div>

            <div class="form_inscript_column">

                <p>
                    <label for="message">Message *:</label>
                    <textarea id="message" type="text" name="user_comment" required></textarea>
                    @if ($errors->has('message')) <span class="admin__error">{{$errors->first('message')}}</span>
                    @endif
                </p>

                <p>
                    <label for="newsletter">Je souhaite recevoir la newsletter *:</label>

                    Oui
                    <input id="newsletter" type="radio" name="newsletter" value="YES" required>
                    Non
                    <input id="newsletter" type="radio" name="newsletter" value="NO" required>


                </p>
                <p>
                    <span id="required_mention"> * champs obligatoires</span> <input id="inscript_button"
                                                                                     class="contact_button"
                                                                                     type="submit"
                                                                                     value="ENVOYER">
                </p>
            </div>

        </form>

        <p class="loi_1978">Conformément à la loi du 6 janvier 1978, tout utilisateur dispose d'un droit d'accès, de
            rectification et de radiation aux informations le concernant. </br>
            Ce droit s’exerce par contact à l'adresse contact@athyr.fr.</p>


    </section>

    <a href="{{url('front/home')}}">
        <div class="back_link_container">
            <img src="{{url('assets/images/financement/Picto-retour.png')}}">
            <p class="back_link"> RETOUR A L'ACCUEIL </p>
        </div>
    </a>





@endsection