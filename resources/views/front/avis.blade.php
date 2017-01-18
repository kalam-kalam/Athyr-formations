@extends('layout.navigation')
@section('content')

<style>
    #banner {
    background-image: url("../assets/images/fond_avis.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    height: 300px;

    }

    @media (max-width: 1145px) {
        #banner {
            height: 300px;

        }
    }

    #footer {
    background-color: black;
    }

</style>

<div class="ariane" id="ariane_financement">
        <a href="{{url('front/home')}}">ACCUEIL</a> > NOS ENGAGEMENTS > AVIS DES STAGIAIRES
</div>

<div class="singlePage_title" id="avis_title">
    <h1>ILS SONT PASSÉS CHEZ NOUS</h1>
</div>
<div id="avis_container_page">

<div id="slider_avis">
    <div class="swiper-container" id="avis_slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img class="slide_pic_avis" src="../assets/images/avis/Capture d’écran 2016-09-08 à 09.29.58.png">
            </div>
            <div class="swiper-slide"><img class="slide_pic_avis" src="../assets/images/avis/Capture d’écran 2016-09-08 à 09.29.58.png"></div>
            <div class="swiper-slide"><img class="slide_pic_avis" src="../assets/images/avis/Capture d’écran 2016-09-08 à 09.29.58.png"></div>
            <div class="swiper-slide"><img class="slide_pic_avis" src="../assets/images/avis/Capture d’écran 2016-09-08 à 09.29.58.png"></div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination" id="avis_swiper_pagination"></div>
    </div>

</div>

</div>


@endsection