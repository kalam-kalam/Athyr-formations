@extends('layout.navigation')
@section('content')

    <style>
        #banner {
            background-image: url("../assets/images/financement/Photo-intro.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            height: 300px;
        }

    </style>

    <div class="ariane" id="ariane_actu">
        <a href="{{url('front/home')}}">ACCUEIL</a> >
        NOS ENGAGEMENTS >
        NOS PARTENAIRES
    </div>



    <div class="singlePage_title" id="partners_title">
        <h1>NOS PARTENAIRES</h1>
    </div>


    <section id="partner_container">

        <div id="partner_page_container">

            <div class="partner_page_subtitle">
                <h3>PARTENAIRES PRIVÉS</h3>
            </div>

                <div class="partner_images_container">
                    <div class="partner_img_container" id="partner_img_container_top">
                    <img src="{{url('assets/images/partners/ableton.jpg')}}">
                    </div>
                    <div class="partner_img_container" id="partner_img_container_top">
                    <img src="{{url('assets/images/partners/cubase.jpg')}}">
                        </div>
                    <div class="partner_img_container" id="partner_img_container_top">
                    <img src="{{url('assets/images/partners/logic.jpg')}}">
                        </div>
                    <div class="partner_img_container" id="partner_img_container_top">
                    <img src="{{url('assets/images/partners/protools.jpg')}}">
                        </div>
                </div>


            <div class="partner_page_subtitle">
                <h3>PARTENAIRES INSTITUTIONNELS</h3>
            </div>

                <div class="partner_images_container">
                    <div class="partner_img_container">
                    <img src="{{url('assets/images/partners/instit-pole.png')}}">
                        </div>
                    <div class="partner_img_container">
                    <img src="{{url('assets/images/partners/instit-lamiel.jpg')}}">
                        </div>
                    <div class="partner_img_container">
                    <img src="{{url('assets/images/partners/instit-initiative.png')}}">
                        </div>
                </div>


        </div>
    </section>

    <a href="{{url('front/home')}}">
        <div class="back_link_container">
            <img src="{{url('assets/images/financement/Picto-retour.png')}}">
            <p class="back_link"> RETOUR A L'ACCUEIL </p>
        </div>
    </a>

@endsection