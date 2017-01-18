@extends('layout.navigation')

@section('content')


    <style>
        #banner {
            background-image: url("{{url("assets/images/valeurs/banner_valeurs.jpg")}}");
            background-repeat: no-repeat;
            background-size: cover;
            height: 300px;
        }

    </style>

    <div class="ariane" id="ariane_valeurs">
        <a href="{{url('front/home')}}">ACCUEIL</a> >
     NOS ENGAGEMENTS >
        NOS VALEURS
    </div>


    <div class="singlePage_title" id="valeurs_title">
        <h1>NOS VALEURS</h1>
    </div>


    <section id="valeurs_container">


<div id="valeurs_page_container">

    <div class="valeur">


        <div class="valeur_text">


            <h1>Une formule "réussite"</h1>

            <p>

            Danish candy lollipop powder jelly-o gingerbread chupa chups macaroon apple pie.
            Tootsie roll powder topping. Chocolate bar chocolate cake muffin sesame snaps oat cake oat cake chocolate bar.
            Biscuit icing cheesecake. Brownie tart toffee cookie toffee cotton candy chocolate cake. Gingerbread gummies bear
            claw croissant bear claw sweet roll soufflé wafer topping.

        Danish candy lollipop powder jelly-o gingerbread chupa chups macaroon apple pie.
        Tootsie roll powder topping. Chocolate bar chocolate cake muffin sesame snaps oat cake oat cake chocolate bar.
        Biscuit icing cheesecake. Brownie tart toffee cookie toffee cotton candy chocolate cake. Gingerbread gummies bear
        claw croissant bear claw sweet roll soufflé wafer topping.
        </p>
            </div>
        <div class="cont_valeur_img">
        <img src="{{url('assets/images/valeurs/pouce_orange.png')}}">
            </div>
    </div>

    <div class="valeur" id="valeur_m">
<div class="cont_valeur_img">
        <img id="valeur_img_middle" src="{{url('assets/images/valeurs/ordi_heart.png')}}">
</div>

        <div id="valeur_text_middle">
        <h1>Au coeur de vos projets</h1>

        <p>

            Bonbon brownie pie. Muffin wafer cake jelly chocolate cake. Cheesecake sweet gummies fruitcake marshmallow biscuit.
            Chocolate cake powder halvah soufflé chupa chups sweet roll pudding macaroon muffin. Ice cream danish croissant pudding.
            Oat cake bear claw sugar plum tootsie roll soufflé. Oat cake fruitcake halvah dragée. Brownie bear claw cake soufflé apple pie.
            Candy canes liquorice chocolate cake icing apple pie gingerbread oat cake pie.
        Danish candy lollipop powder jelly-o gingerbread chupa chups macaroon apple pie.
        Tootsie roll powder topping. Chocolate bar chocolate cake muffin sesame snaps oat cake oat cake chocolate bar.
        Biscuit icing cheesecake. Brownie tart toffee cookie toffee cotton candy chocolate cake. Gingerbread gummies bear
        claw croissant bear claw sweet roll soufflé wafer topping.
        </p>
</div>


    </div>
    <div class="valeur">

        <div class="valeur_text">

            <h1>Des pros à vos côtés</h1>

        <p>
            Danish candy lollipop powder jelly-o gingerbread chupa chups macaroon apple pie.
            Tootsie roll powder topping. Chocolate bar chocolate cake muffin sesame snaps oat cake oat cake chocolate bar.
            Biscuit icing cheesecake. Brownie tart toffee cookie toffee cotton candy chocolate cake. Gingerbread gummies bear
            claw croissant bear claw sweet roll soufflé wafer topping.

        Danish candy lollipop powder jelly-o gingerbread chupa chups macaroon apple pie.
        Tootsie roll powder topping. Chocolate bar chocolate cake muffin sesame snaps oat cake oat cake chocolate bar.
        Biscuit icing cheesecake. Brownie tart toffee cookie toffee cotton candy chocolate cake. Gingerbread gummies bear
        claw croissant bear claw sweet roll soufflé wafer topping.
        </p>

            </div>
        <div class="cont_valeur_img">
        <img src="{{url('assets/images/valeurs/equipe_orange.png')}}">
            </div>
    </div>


</div>


    </section>





    <a href="{{url('front/home')}}">
        <div class="back_link_container">
            <img src="../assets/images/financement/Picto-retour.png">
            <p class="back_link"> RETOUR A L'ACCUEIL </p>
        </div>
    </a>


@endsection