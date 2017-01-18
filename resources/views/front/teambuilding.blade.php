@extends('layout.navigation')

@section('content')

    <style>
        #banner {
            background-image: url("{{url('assets/images/valeurs/valeur_background.jpg')}}");
            background-repeat: no-repeat;
            background-size: cover;
            height: 300px;
        }

    </style>

    <div class="ariane" id="ariane_financement">
        <a href="{{url('front/home')}}">ACCUEIL</a> > TEAMBUILDING
    </div>


    @if(session('notification'))

    <div id="notif_content">
        <h3 id="notification_teamb">{{session('notification')}}</h3>
    </div>
    @endif

    <div class="singlePage_title" id="financement_title">
        <h1>NOS ATELIERS TEAM-BUILDING</h1>
    </div>

    <section id="teamb_container">

        <div id="teamb_left" class="teamb_column">
            <h2>CONSOLIDEZ VOTRE ÉQUIPE</br> AUTOUR D'UN PROJET MUSICAL</h2>
            <img src="{{url('assets/images/tembuilding/teamb_left.png')}}">
            <h3>L'objectif</h3>
            <p>Lorem Ipsum është një tekst shabllon i industrisë së printimit dhe shtypshkronjave. Lorem Ipsum ka qenë
                teksti shabllon i industrisë që nga vitet 1500, kur një shtypës i panjohur morri një galeri shkrimesh
                dhe i ngatërroi për të krijuar një libër mostër. Teksti i ka mbijetuar jo vetëm pesë shekujve, por edhe
                kalimit në shtypshkrimin elektronik, duke ndenjur në thelb i pandryshuar.</p>
            <h3>L'organisation</h3>
            <p>Lorem Ipsum është një tekst shabllon i industrisë së printimit dhe shtypshkronjave. Lorem Ipsum ka qenë
                teksti shabllon i industrisë që nga vitet 1500, kur një shtypës i panjohur morri një galeri shkrimesh
                dhe i ngatërroi për të krijuar një libër mostër. Teksti i ka mbijetuar jo vetëm pesë shekujve, por edhe
                kalimit në shtypshkrimin elektronik, duke ndenjur në thelb i pandryshuar.</p>
            <h3>Des formations sur mesure</h3>
            <p>Lorem Ipsum është një tekst shabllon i industrisë së printimit dhe shtypshkronjave. Lorem Ipsum ka qenë
                teksti shabllon i industrisë që nga vitet 1500, kur një shtypës i panjohur morri një galeri shkrimesh
                dhe i ngatërroi për të krijuar një libër mostër. Teksti i ka mbijetuar jo vetëm pesë shekujve, por edhe
                kalimit në shtypshkrimin elektronik, duke ndenjur në thelb i pandryshuar.</p>
        </div>
        <div id="teamb_right" class="teamb_column">


            <h2>PLUS D'INFORMATIONS</h2>
            <form id="form_teamb" action="{{url('front/teamb')}}" method="POST">

                {{csrf_field()}}

                <p>
                    <label for="societe">Société: </label>
                    <input id="societe" type="text" name="societe">
                    @if ($errors->has('societe')) <span class="admin__error">{{$errors->first('societe')}}</span>
                    @endif
                </p>

                <p>
                    <label for="name">Nome et prénom:</label>
                    <input id="name" type="text" name="name">
                    @if ($errors->has('name')) <span class="admin__error">{{$errors->first('name')}}</span>
                    @endif
                </p>

                <p>
                    <label for="email">E-mail:</label>
                    <input id="email" type="email" name="email">
                    @if ($errors->has('email')) <span class="admin__error">{{$errors->first('email')}}</span>
                    @endif
                </p>
                <p>
                    <label for="phone_number">Téléphone:</label>
                    <input id="telephone" name="phone_number">
                    @if ($errors->has('phone_number')) <span class="admin__error">{{$errors->first('phone_number')}}</span>
                    @endif
                </p>
                <p>
                    <label for="rappel">Vous souhaitez être rappelé(e):</label>
                    Le matin:
                    <input id="rappel" type="radio" name="rappel" value="MATIN">
                    L'après midi:
                    <input id="rappel" type="radio" name="rappel" value="APRES_MIDI">

                </p>
                <p>
                    <label for="message">Votre message:</label>
                    <textarea id="message" type="text" name="user_comment"></textarea>
                    @if ($errors->has('message')) <span class="admin__error">{{$errors->first('message')}}</span>
                    @endif
                </p>
                <p>
                    <span> * champs obligatoires</span> <input id="teamb_input" class="contact_button" type="submit"
                                                               value="ENVOYER">
                </p>
            </form>


        </div>


    </section>


    <a href="{{url('front/home')}}">
        <div class="back_link_container">
            <img src="{{url('assets/images/financement/Picto-retour.png')}}">
            <p class="back_link"> RETOUR A L'ACCUEIL </p>
        </div>
    </a>



@endsection