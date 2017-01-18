<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin Layout</title>

    <meta name="viewport" content="width=device-width, user-scalable=no">

    <link rel="stylesheet" type="text/css" href="{{url('assets/css/plugin/swiper/css/swiper.min.css')}}"/>

    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
    <link href="{{url('assets/css/admin.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/app.min.css')}}" rel="stylesheet">


</head>

<body>

<style>

    #banner {
        background-image: url("../assets/images/rechercher/recherche_banner.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        height: 300px;
    }
    #pyramide {
        background-image: url({{url('assets/images/oups/pyramide.png')}});
        background-repeat: no-repeat;
        background-size: cover;
        margin-top: 30px;
        height: 600px;
        width: 687px;
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-align-items: flex-end;
        align-items: flex-end;
        -webkit-justify-content: flex-end;
        justify-content: flex-end;

    }


</style>


<section id="banner">

    <div id="menu_container_desktop">

        <a id="container_logo" href="{{url('front/home')}}">


            <img id="logo" src="{{url('assets/images/Last_logo.svg')}}">

        </a>

    </div>

    <section>


    <div id="content_oups">
        <div id="pyramide">

        <div id="message_oups">
           <h1>OUPS !</h1>
            <p>DÉSOLÉ, LA PAGE QUE VOUS DEMANDEZ EST INTROUVABLE</p>
        </div>

        </div>

        <a href="{{url('front/home')}}"><input class="button" id="retour_accueil_404" type="button" value="RETOUR À L'ACCUEIL"></a>



</body>
</html>
