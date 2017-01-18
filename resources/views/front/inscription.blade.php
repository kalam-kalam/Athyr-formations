@extends('layout.navigation')
@section('content')

<style>
    #banner {
        background-image: url("../assets/images/financement/Photo-intro.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        height: 300px;
    }

    #footer {
        background-color: black;
    }
</style>

<div class="ariane" id="ariane_inscription">
    <a href="url{{'front/home'}}">ACCUEIL</a> > <a href="url{{'front/financement'}}">TEAM-BUILDING</a>
</div>


<div class="singlePage_title" id="inscription_title">
    <h1>FORMULAIRE DE PRÉ-INSCRIPTION</h1>
</div>

<section id="inscription_container">
<form  id="inscript_form" action="" method="POST">

    {{csrf_field()}}

<div id="inscript_form_left">
    <p>
        <label for="civilité">Civilité: </label>
        <select>
            <option value="Monsieur">Mr</option>
            <option value="Madame">Mme</option>
        </select>
        @if ($errors->has('title')) <span class="admin__error">{{$errors->first('title')}}</span>
        @endif
    </p>

    <p>
        <label for="name">Nom :</label>
        <input id="name" type="text" name="name" required>
        @if ($errors->has('name')) <span class="admin__error">{{$errors->first('name')}}</span>
        @endif
    </p>

    <p>
        <label for="firstname">Prénom :</label>
        <input id="firstname" type="text" name="firstname" required>
        @if ($errors->has('firstname')) <span class="admin__error">{{$errors->first('firstname')}}</span>
        @endif
    </p>

    <p>
        <label for="email">E-mail:</label>
        <input id="email" type="email" name="email" required>
        @if ($errors->has('email')) <span class="admin__error">{{$errors->first('email')}}</span>
        @endif
    </p>
    <p>
        <label for="telephone">Téléphone:</label>
        <input id="telephone" name="telephone">
        @if ($errors->has('telephone')) <span class="admin__error">{{$errors->first('telephone')}}</span>
        @endif
    </p>
    <p>
        <label for="telephone">Situation:</label>
        <select>
            <option value="Monsieur">Mr</option>
            <option value="Madame">Mme</option>


        </select>
        @if ($errors->has('session')) <span class="admin__error">{{$errors->first('session')}}</span>
        @endif
    </p>


</div>
    <div id="inscript_form_right">
        <p>
            <label for="telephone">Formation:</label>
            <select>
            @foreach($formations as $formation)
                <option value="{{$formation->id}}">{{$formation->titre}}</option>
            @endforeach
            </select>
            @if ($errors->has('formation')) <span class="admin__error">{{$errors->first('formation')}}</span>
            @endif
        </p>
        <p>
            <label for="telephone">Session:</label>
            <select>
                @foreach($sessions as $session)
                    <option value="{{$session->id}}">{{$session->session_start}}</option>
                @endforeach
            </select>
            @if ($errors->has('session')) <span class="admin__error">{{$errors->first('session')}}</span>
            @endif
        </p>
    <p>
        <label for="message">Votre message:</label>
        <textarea id="message" type="text" name="message"></textarea>
        @if ($errors->has('message')) <span class="admin__error">{{$errors->first('message')}}</span>
        @endif
    </p>
    <p>
        <span> * champs obligatoires</span> <input  class="contact_button" type="submit"
                                                   value="ENVOYER">
    </p>
    </div>
</form>

</section>


@endsection