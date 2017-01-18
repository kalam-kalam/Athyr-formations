@extends('layout.navigation')

@section('content')


    <style>

        #banner {
            background-image: url("../assets/images/equipe/banner_equipe.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            height: 300px;

        }

        #footer {
            background-color: black;
        }

    </style>



        <div class="ariane" id="ariane_valeurs">
            <a href="{{url('front/home')}}">ACCUEIL</a> > L'ÉQUIPE
    </div>

    <div class="singlePage_title" id="financement_title">
        <h1>L'ÉQUIPE PÉDAGOGIQUE </h1>
    </div>

    <div id="equipe_page_container">

        <div id="formateur_1" class="formateur">

            <div class="photo_formateur">
                <img src="{{url('assets/images/equipe/portrait1.png')}}">
            </div>
            <div class="abstract_formateur">
                <h3>OLIVIER BERTRAND</br>
                    Compositeur, arangeur</h3>
                <p>Une question concernant Pro-Tools ou Garageband ? Olivier a forcément la réponse !
                    Compositeur chevronné, il s’est forgé une solide réputation dans le milieu du rock français :
                    les
                    Rita Mitsuko, Noir Désir, Mademoiselle K, il a contribué à forger l’emprunte sonore de nombreux
                    groupes à succès.
                    Pédagogue « par nature », Olivier a choisi Athyr Formation pour se lancer dans l’enseignement
                    (Et il a bien raison !).</p>

            </div>
            <div class="tag_button_container">
                <input type="button" class="tags_button" value="Garage Band">
                <input type="button" class="tags_button" value="Pro Tools">
            </div>


        </div>
        <div id="formateur_2" class="formateur">
            <div class="photo_formateur">

                <img src="../assets/images/equipe/portrait2.png">

            </div>
            <div class="abstract_formateur">
                <h3>ADELINE VINCENT</br>
                    Compositeur, arangeur</h3>
                <p>Le talent n’attend pas le nombre des années : Alice a remporté son 1er prix d’interprétation à 10
                    ans. Violoniste classique de formation, elle s’est ensuite tournée vers une carrière d’ingénieur
                    du son. La passion pour son métier l’a poussé s’orienter vers la formation. Rigoureuse et
                    méthodique (mais pas maniaque !), Adeline vous livre les clés de Cubase et Logic Pro en toute
                    simplicité.</p>
            </div>
            <div class="tag_button_container">
                <input type="button" class="tags_button" value="Garage Band">
                <input type="button" class="tags_button" value="Pro Tools">
            </div>


        </div>
        <div id="formateur_3" class="formateur">
            <div class="photo_formateur">
                <img src="../assets/images/equipe/portrait3.png">
            </div>

            <div class="abstract_formateur">
                <h3>MALIK EL BILAL</br>
                    DJ, mucisien</h3>
                <p>Ne lui dites surtout pas qu’il fait le même métier qu’un certain David Guetta… DJ résident au
                    Pacha Club, Malik enflamme le dancefloor avec des sets au « groove supersonique ». Récemment
                    distingué par DJ mag, il partage volontiers ses trucs et astuces qui ont fait de lui un artiste
                    reconnu par ses pairs.
                    Si vous êtes un peu en avance, demandez-lui de vous faire une petite démo de beat-box (c’est
                    bluffant !). </p>

            </div>
            <div class="tag_button_container">
                <input type="button" class="tags_button" value="Garage Band">
                <input type="button" class="tags_button" value="Pro Tools">
            </div>


        </div>

    </div>

    <a href="{{url('front/home')}}">
        <div class="back_link_container">
            <img src="../assets/images/financement/Picto-retour.png">
            <p class="back_link"> RETOUR A L'ACCUEIL </p>
        </div>
    </a>


@endsection