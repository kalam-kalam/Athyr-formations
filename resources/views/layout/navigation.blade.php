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
     #menu_container_resp {
         background-image: url({{url('assets/images/header/mixing-desk-351478_1920.jpg')}});
         background-repeat: no-repeat;
         background-size: cover;
         height: 300px;
     }
</style>



<section id="banner">


    <div id="menu_container_desktop">

        <a id="container_logo" href="{{url('front/home')}}">


                <img id="logo" src="{{url('assets/images/Last_logo.svg')}}">

        </a>
        <div id="all_nav_desktop">
            <div id="contact_follow_desktop">

                <div id="phone">

                    <div id="phone_icone">
                        <img src="{{url('assets/images/header/picto_telephone_header.png')}}">
                    </div>
                    <div id="phone_number">
                        <strong> 09 53 20 25 76</strong>
                    </div>
                </div>
                <div id="rs_icone_container">
                    <div>
                        <a href="{{url('front/actus')}}"><img class="rs_icone" src="{{url('assets/images/header/picto_actus_header.png')}}"></a>
                        <a href="http://www.facebook.com" target="_blank"><img class="rs_icone" src="{{url('assets/images/header/picto_fb_header.png')}}"></a>
                        <a href="http://www.youtube.com" target="_blank"><img class="rs_icone" src="{{url('assets/images/header/picto_youtube_header.png')}}"></a>
                    </div>

                </div>

            </div>


            <nav class="menu" id="main_nav_desktop">

                <ul class="nav">

                    <li id="formation_click" class="menu_click">
                        <div class="icone_container"><img class="menu_icone" src="{{url('assets/images/header/picto_formation-pro_header.png')}}"></div>
                        <a href="#toggle_ul_formation" class="title_menu" id="toggle_formation"> FORMATION PRO</a>


                        <ul class= "toggle_ul" id="toggle_ul_formation">

                            <div id="invisible"><div class="flèche_toggle"></div></div>


                            @foreach($formations as $formation)
                                @if($formation->statut=='publishé' && $formation->category_id !=5)

                            <a href="{{url ('front', ['formations',$formation->id])}}">
                                <li>{{$formation->titre}}</li>
                            </a>

                                @endif

                            @endforeach

                        </ul>
                    </li>




                    <li id="init_click" class="menu_click">
                        <div class="icone_container"><img class="menu_icone"
                                  src="{{url('assets/images/header/picto_initiation_header.png')}}"></div>
                        <a href="#toggle_ul_init" class="title_menu" id="toggle_init"> INITIATION</a>
                        <ul class="toggle_ul" id="toggle_ul_init">
                            <div id="invisible"><div class="flèche_toggle"></div></div>


                            @foreach($formations as $formation)
                                @if($formation->category_id == 5 )


                            <a href="{{url('front/formations/' .$formation->id)}}">
                                <li>{{$formation->titre}}</li>
                            </a>
                                @endif

                                @endforeach


                        </ul>
                    </li>

                    <li id="teambuilding_click" class="menu_click">
                        <a href="{{url('front/teamb')}}"> <div class="icone_container"><img class="menu_icone"
                                  src="{{url('assets/images/header/picto_teambuilding_header.png')}}"></div>
                            <a href="{{url('front/teamb')}}" class="title_menu">TEAM-BUILDING</a></a>

                    </li>

                    <li id="financement_click" class="menu_click">
                        <a href="{{url('front/financement')}}"> <div class="icone_container"><img class="menu_icone"
                                  src="{{url('assets/images/header/picto_financement_header.png')}}"></div>
                            <a href="{{url('front/financement')}}" class="title_menu">FINANCEMENT</a></a>
                    </li>

                    <li id="engagement_click" class="menu_click">

                        <div class="icone_container"><img class="menu_icone"
                                  src="{{url('assets/images/header/picto_engagements_header.png')}}"></div>
                        <a href="#toggle_ul_engagement" class="title_menu" id="toggle_formation"> NOS ENGAGEMENTS</a>
                        <ul class="toggle_ul" id="toggle_ul_engagement">
                            <div id="invisible"><div class="flèche_toggle"></div></div>

                            <a href="{{url('front/valeurs')}}">
                                <li>NOS VALEURS</li>
                            </a>
                            {{--<a href="{{url('front/equipe')}}">
                                <li>L'ÉQUIPE PÉDAGOGIQUE</li>
                            </a>--}}
                            <a href="{{url('front/avis')}}">
                                <li>AVIS DES STAGIAIRES</li>
                            </a>
                            <a href="{{url('front/partners')}}">
                                <li>NOS PARTENAIRES</li>
                            </a>
                        </ul>
                    </li>

                    <li id="search">
                        <div class="icone_container">
                        <a href="#toggle_ul_search" id="toggle_search">
                        <img src="{{url('assets/images/header/picto_loupe_header.png')}}">
                            </a>
                            </div>
                        <ul class="toggle_ul" id="toggle_ul_search">
                            <form id="form_search_desk" action="{{url('front/search')}}" method="post" role="search">
                                <div>
                            <input   id="search_desk" type="search" placeholder="Rechercher" name="the_search">
                                <input id="submit_search_desk" type="submit" value="Go!">
                                </div>
                            </form>

                            </ul>


                    </li>
                </ul>
            </nav>
        </div>
    </div>


    <div id="menu_container_resp">
        <div id="voile_blanc">

            <div id="logo_container_resp">


                    <a href="{{url('front/home')}}"><img id="logo" src="{{url('assets/images/Logo (1).svg')}}"></a>


                <div id="burger_contain">
                    <a href="" id="box-shadow-burger">

                    </a>


                </div>


            </div>
        </div>


        <div id="all_nav_resp">
            <div id="contact_follow_resp">

                <div id="rs_icone_container">
                    <div>
                        <a href="{{url('front/actus')}}"><img class="rs_icone" src="{{url('assets/images/header/picto_actus_header.png')}}"></a>
                        <a href="http://www.facebook.com" target="_blank"><img class="rs_icone" src="{{url('assets/images/header/picto_fb_header.png')}}"></a>
                        <a href="http://www.youtube.com" target="_blank"><img class="rs_icone" src="{{url('assets/images/header/picto_youtube_header.png')}}"></a>
                    </div>

                    <div id="burger_cross">
                        <img src="{{url('assets/images/header/cancel.svg')}}">

                    </div>

                </div>

            </div>



            <nav class="menu" id="main_nav_resp">

                <ul class="nav">
                    <li class="menu_click_resp"><img class="menu_icone" src="{{url('assets/images/header/picto_formation-pro_header.png')}}">
                       FORMATION PRO
                    <ul class="toggle_ul_resp">
                        @foreach($formations as $formation)
                            <a href="{{url('front/formations/'.$formation->id)}}"><li>{{$formation->titre}}</li></a>
                        @endforeach
                    </ul>

                    </li>
                    <li class="menu_click_resp"><img class="menu_icone" src="{{url('assets/images/header/picto_initiation_header.png')}}">
                        INITIATION
                        <ul class="toggle_ul_resp">
                        @foreach($formations as $formation)
                            @if($formation->category_id == 5)
                            <a href="{{url('front/formations'.$formation->id)}}"><li>{{$formation->titre}}</li></a>
                            @endif
                        @endforeach
                        </ul>
                    </li>
                    <li class="menu_click_resp"><img class="menu_icone" src="{{url('assets/images/header/picto_teambuilding_header.png')}}">
                        <a href="{{url('front/teamb')}}">TEAM-BUILDING</a></li>
                    <li class="menu_click_resp"><img class="menu_icone" src="{{url('assets/images/header/picto_financement_header.png')}}">
                        <a href="{{url('front/financement')}}">FINANCEMENT</a></li>
                    <li class="menu_click_resp"><img class="menu_icone" src="{{url('assets/images/header/picto_engagements_header.png')}}">
                       NOS ENGAGEMENTS

                        <ul class="toggle_ul_resp" >

                            <a href="{{url('front/valeurs')}}">
                                <li>NOS VALEURS</li>
                            </a>
                            <a href="{{url('front/equipe')}}">
                                <li>L'ÉQUIPE PÉDAGOGIQUE</li>
                            </a>
                            <a href="{{url('front/avis')}}">
                                <li>AVIS DES STAGIAIRES</li>
                            </a>
                            <a href="{{url('front/partners')}}">
                                <li>NOS PARTENAIRES</li>
                            </a>
                        </ul>

                    </li>
                    <form id="form_search_resp" action="{{url('front/search')}}" method="post" role="search">
                    <li class="menu_click_resp" id="search"><a href=""><img src="{{url('assets/images/header/picto_loupe_header.png')}}"></a>
                        <input type="search" placeholder="" name="the_search" id="resp_searchbar"></li>
                        </form>
                </ul>
            </nav>
        </div>
    </div>


</section>


<div>
    @yield('content')
</div>


<div id="footer">

    <div class="cont" id="newsletter_container">
        <h1>RECEVEZ NOTRE NEWSLETTER</h1>

        <input class="button_wide" onclick="div_show('popup_newsletter')" id="open_subscribe_popup" type="button"
               value="JE M'INSCRIS">

    </div>
    <div class="cont" id="foots_container">
        <div id="foot_contact">
            <h1>Contact</h1>

            <div id="contact_follow_box">
                <div id="num_address">
                    <div class="contact">
                        <img src="{{url('assets/images/footer/picto_telephone_footer.png')}}">
                        <strong id="numero_telephone_footer_resp">09 53 20 25 76</strong>
                    </div>
                    <div class="contact">
                        <img src="{{url('assets/images/footer/picto_enveloppe_footer.png')}}">
                        <p>contact@athyr.fr</p>
                    </div>
                </div>

                <div id="follow">

                    <a href="{{url('front/actus')}}"><img src="{{url('assets/images/footer/picto_actus_footer.png')}}"></a>
                        <a href="http://www.facebook.com" target="_blank"><img src="{{url('assets/images/footer/picto_fb_footer.png')}}"></a>
                            <a href="http://www.facebook.com" target="_blank"><img src="{{url("assets/images/footer/Lequipe-Athyr-v3_03.png")}}"></a>


                    <p>Suivez nous</p>

                </div>
            </div>
        </div>
        <div id="foot_ul">

            <ul>
                <h3>FORMATION PRO</h3>
                @foreach($formations as $formation)
                    @if($formation->category_id !=5)
                    <li>{{$formation->titre}}</li>
                    @endif
                @endforeach
            </ul>

            <ul>
                <h3>INITIATION</h3>
                @foreach($formations as $formation)
                    @if($formation->category_id == 5 )
                        <li>{{$formation->titre}}</li>
                    @endif
                @endforeach


            </ul>

        </div>

    </div>

    <div id="footer_menu">

        <nav>
            <ul>
                <li>Mentions légales</li>
                <li>CGV</li>
                <a href="{{url('front/faq')}}"><li>FAQ</li></a>
                <a href="#" onclick="div_show('popup_question_footer')"><li>Contact</li></a>
            </ul>
        </nav>

    </div>

    <div id="popup_question_footer" style="display: none">


        <div class="content_subscribe">

            <img class="popup_cross" src="{{url('assets/images/header/cancel.svg')}}" onclick="div_hide('popup_question_footer')">

            <form id="popup_newsletter_form" action="{{url('front/newsletter')}}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <p><label>Prénom :</label>
                    <input type="text" class="form-control" placeholder="Prénom" name="firstname" id="firstname"></p>
                <p><label>Nom :</label>
                    <input type="text" class="form-control" placeholder="Nom" name="lastname" id="lastname"></p>
                <p><label>E-mail :</label>
                    <input type="email" class="form-control" placeholder="votre@email.com" name="email" id="email"></p>
                <p><label>Téléphone :</label>
                    <input type="tel" class="form-control" name="phone_number" id="phone_number"></p>
                <label>Votre question :</label>
                    <textarea type="text" class="form-control" name="user_comment" id="input_question"></textarea>

                <input type="submit" class="button_wide" value="ENVOYER">

                <p class="loi_1978">Conformément à la loi du 6 janvier 1978, tout utilisateur dispose d'un droit d'accès, de rectification et de radiation aux informations le concernant. </br>
                    Ce droit s’exerce par contact à l'adresse contact@athyr.fr.</p>


            </form>


        </div>

    </div>

</div>

<div id="footer_resp">

    <div class="cont" id="newsletter_container">
        <h1>RECEVEZ NOTRE NEWSLETTER</h1>

        <input class="button_wide" onclick="div_show('popup_newsletter')" id="open_subscribe_popup" type="button"
               value="JE M'INSCRIS">

    </div>
    <div class="cont" id="foots_container">
        <div id="foot_contact">
            <h1>Contact</h1>

            <div id="contact_follow_box">
                <div id="num_address">
                    <div class="contact">
                        <img src="{{url('assets/images/footer/picto_telephone_footer.png')}}">
                        <strong>09 53 20 25 76</strong>
                    </div>
                    <div class="contact">
                        <img src="{{url('assets/images/footer/picto_enveloppe_footer.png')}}">
                        <p>contact@athyr.fr</p>
                    </div>
                </div>

            </div>
            <div id="follow">
                <p>Suivez nous</p>
                <a href="{{url('front/actus')}}"><img src="{{url('assets/images/footer/picto_actus_footer.png')}}"></a>
                <a href="http://www.facebook.com" target="_blank"><img src="{{url('assets/images/footer/picto_fb_footer.png')}}"></a>
                <a href="http://www.facebook.com" target="_blank"><img src="{{url("assets/images/footer/Lequipe-Athyr-v3_03.png")}}"></a>


            </div>
        </div>

    </div>

    <div id="footer_menu">

        <nav>
            <ul>
                <li>Mentions légales</li>
                <li>CGV</li>
                <li>FAQ</li>
                <li>Contact</li>
            </ul>
        </nav>

    </div>

</div>

<div id="popup_newsletter" style="display: none">


    <div class="content_subscribe">

        <img class="popup_cross" src="{{url('assets/images/header/cancel.svg')}}" onclick="div_hide('popup_newsletter')">

        <div id="bulle">

            <h1>Abonnez-vous</br>
                à notre newsletter! </h1>
            <p id="bulle_p1">Retrouvez toute l'actualité de la MAO</p>
            <p id="bulle_p2">Suivez nos conseils et astuces</p>
            <p id="bulle_p3">Bénéficiez d'offres spéciales</p>
        </div>


        <form id="popup_newsletter_form" action="{{url('front/newsletter')}}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <input id="newsletter" type="hidden" name="newsletter" value="YES"/>
            <p><label>Prénom</label>
                <input type="text" class="form-control" placeholder="prénom" name="firstname" id="firstname"></p>
            <p><label>E-mail</label>
                <input type="text" class="form-control" placeholder="votre@email.com" name="email" id="email"></p>

            <input type="submit" class="button_wide" value="JE M'INSCRIS">



        </form>


    </div>

</div>





<script src="{{url('http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js')}}"></script>
<script src="{{url('assets/js/jquery.min.js')}}"></script>

<script href="{{url('https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.js')}}"></script>

<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js')}}"></script>
<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js')}}"></script>

<script src="{{url('assets/css/plugin/swiper/js/swiper.min.js')}}"></script>


<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>

<script src="{{url('assets/js/front.min.js')}}"></script>

<script type="text/javascript">

    function div_show(popup_newsletter) {
        document.getElementById(popup_newsletter).style.display = 'flex';
    }

    function div_hide(popup_newsletter) {
        document.getElementById(popup_newsletter).style.display = 'none';
    }

    function div_show_question(popup_question) {
        document.getElementById(popup_question).style.display = 'flex';
    }

    function div_hide_question(popup_question) {
        document.getElementById(popup_question).style.display = 'none';
    }

    function div_show_question_footer(popup_question_footer) {
        document.getElementById(popup_question_footer).style.display = 'flex';
    }

    function div_hide_question_footer(popup_question_footer) {
        document.getElementById(popup_question_footer).style.display = 'none';
    }


    function activateSess() {

        var preins_form = document.getElementById("preinscription_formation_field");
        var preins_sess_hidden = document.querySelector(".hidden_form_sessions");
        var preins_sess_shown = document.querySelector(".display_form_sessions");

        if (preins_sess_hidden){
            preins_sess_hidden.classList.remove("hidden_form_sessions");
    }
        else if(preins_sess_shown){
            preins_sess_shown.classList.add("display_form_sessions");
        }


    }

    function surligne(champ, erreur)
    {
        if(erreur)
            champ.style.backgroundColor = "#fba";
        else
            champ.style.backgroundColor = "";
    }

    function verifMail(champ)
    {
        var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
        if(!regex.test(champ.value))
        {
            surligne(champ, true);
            return false;
        }
        else
        {
            surligne(champ, false);
            return true;
        }
    }

    function verifTel(champ)
    {
        var regex = /^0[1-9]([-. ]?[0-9]{2}){4}$/;
        if(!regex.test(champ.value))
        {
            surligne(champ, true);
            return false;
        }
        else
        {
            surligne(champ, false);
            return true;
        }
    }

    function verifForm(f)
    {
        var mailOk = verifMail(f.email);
        var telOk = verifTel(f.phone_number);

        if(mailOk && telOk)
            return true;
        else
        {
            alert("Veuillez remplir correctement tous les champs");
            return false;
        }
    }



</script>

</body>
</html>