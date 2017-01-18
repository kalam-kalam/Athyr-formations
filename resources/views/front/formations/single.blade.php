@extends('layout.navigation')
@section('content')


    <style>

        #banner {
            background-image: url("{{url('assets/images/formation/Photo-intro-formation.jpg')}}");
            background-repeat: no-repeat;
            background-size: cover;
            height: 300px;

        }

        #footer {
            background-color: black;
        }


    </style>


    <div class="ariane" id="ariane_financement">
        <a href="{{url('front/home')}}">ACCUEIL</a> > {!! $formation->titre !!}
    </div>

    <div class="singlePage_title" id="financement_title">
        <h1>{!! $formation->titre !!}</h1>
    </div>

    <div id="formation_page_container" class="page_container">
        <div id="toggle_formation_container" class="toggle_container">

            <div id="abstract">
                <div id="formation_presentation">
                {!! $formation->présentation !!}
                </div>

                @if($formation->uri_video)
                    <div id="video_formation">
                <iframe  width="100%" height="100%" src="{{url('https://www.youtube.com/embed/'.$formation->uri_video)}}" frameborder="0" allowfullscreen></iframe>
                    </div>
                @endif

            </div>

            <div class="toggle_single" id="intermittents">
                <div class="subtitle_toggle_content">
                    <a href="#details_compositeurs" id="toggle_compositeurs_fin"><h2>OBJECTIFS</h2></a>
                </div>
                <a href="#details_compositeur" id="toggle_compositeurs_fin">
                    <img class="toggle_plus" id="toggle_plus_compositeur"
                         src="{{url('assets/images/financement/Bouton-+.png')}}"></a>

                <a href="#details_compositeurs" id="toggle_compositeurs_fin">
                    <img class="toggle_moins" src="{{url('assets/images/financement/Bouton--.png')}}"></a>

                <div id="#details_compositeurs" class="details_toggle_single">
                    {!! $formation->objectifs!!}
                </div>
            </div>

            <div class="toggle_single" id="intermittents">
                <div class="subtitle_toggle_content">
                    <a href="#details_compositeurs" id="toggle_compositeurs_fin"><h2>PROGRAMME</h2></a>
                </div>
                <a href="#details_compositeur" id="toggle_compositeurs_fin">
                    <img class="toggle_plus" id="toggle_plus_compositeur"
                         src="{{url('assets/images/financement/Bouton-+.png')}}"></a>

                <a href="#details_compositeurs" id="toggle_compositeurs_fin">
                    <img class="toggle_moins" src="{{url('assets/images/financement/Bouton--.png')}}"></a>

                <div id="#details_compositeurs" class="details_toggle_single">
                    {!! $formation->programme!!}
                </div>
            </div>

            <div class="toggle_single" id="intermittents">
                <div class="subtitle_toggle_content">
                    <a href="#details_compositeurs" id="toggle_compositeurs_fin"><h2>PRÉ-REQUIS</h2></a>
                </div>
                <a href="#details_compositeur" id="toggle_compositeurs_fin">
                    <img class="toggle_plus" id="toggle_plus_compositeur"
                         src="{{url('assets/images/financement/Bouton-+.png')}}"></a>

                <a href="#details_compositeurs" id="toggle_compositeurs_fin">
                    <img class="toggle_moins" src="{{url('assets/images/financement/Bouton--.png')}}"></a>

                <div id="#details_compositeurs" class="details_toggle_single">
                    {!! $formation->pré_requis!!}
                </div>
            </div>

            <div class="toggle_single" id="intermittents">
                <div class="subtitle_toggle_content">
                    <a href="#details_compositeurs" id="toggle_compositeurs_fin"><h2>MOYENS TECHNIQUES</h2></a>
                </div>
                <a href="#details_compositeur" id="toggle_compositeurs_fin">
                    <img class="toggle_plus" id="toggle_plus_compositeur"
                         src="{{url('assets/images/financement/Bouton-+.png')}}"></a>

                <a href="#details_compositeurs" id="toggle_compositeurs_fin">
                    <img class="toggle_moins" src="{{url('assets/images/financement/Bouton--.png')}}"></a>

                <div id="#details_compositeurs" class="details_toggle_single">
                    {!! $formation->moyens_techniques!!}
                </div>
            </div>

            @if($formation->category_id !=5)

            <div class="toggle_single" id="intermittents">
                <div class="subtitle_toggle_content">
                    <a href="#details_compositeurs" id="toggle_compositeurs_fin"><h2>FINANCEMENT</h2></a>
                </div>
                <a href="#details_compositeur" id="toggle_compositeurs_fin">
                    <img class="toggle_plus" id="toggle_plus_compositeur"
                         src="{{url('assets/images/financement/Bouton-+.png')}}"></a>

                <a href="#details_compositeurs" id="toggle_compositeurs_fin">
                    <img class="toggle_moins" src="{{url('assets/images/financement/Bouton--.png')}}"></a>

                <div id="#details_compositeurs" class="details_toggle_single">
                    {!! $formation->financement!!}
                </div>
            </div>

            @endif

            <div id="partager_container">
                <p>PARTAGER</p>
                <a href="http://www.facebook.com" target="_blank">
                    <img src="{{url('assets/images/formation/fb-share.png')}}" alt="Facebook">
                    <a href="https://twitter.com" target="_blank">
                        <img src="{{url('assets/images/formation/twit_share.png')}}"></a>

                @if($formation->pdf)

                <a id="pdf_link" href="{{url('assets/images/'.$formation->pdf)}}" target="_blank" download="{{$formation->pd}}">
                <p>Télécharger le programme</p>
                <img src="{{url('assets/images/formation/PDF-hover.png')}}">
                </a>

                @endif

            </div>



        </div>


        <div class="aside_single">
            <div class="aside_element">

                <div class="info_title">
                    <h2>INFOS PRATIQUES</h2></div>

                <div id="info_pratiques">
                    <ul>
                        <li>
                            <div class="fin_list_num"><img src="{{url('assets/images/formation/Picto-argent.png')}}"></div>
                            <div class="fin_list_text">
                                <h4>{{$formation->price}} euros</h4>

                            </div>
                        </li>
                        <li>
                            <div class="fin_list_num"><img src="{{url('assets/images/formation/Picto-horloge.png')}}"></div>
                            <div class="fin_list_text">
                                <h4>{{$formation->durée}}</h4>
                            </div>
                        </li>
                        <li>
                            <div class="fin_list_num"><img src="{{url('assets/images/formation/Picto-materiel.png')}}"></div>
                            <div class="fin_list_text">
                                <h4>Matériel fourni</h4>

                            </div>
                        </li>
                        @if($formation->session_suivi =='offerte')
                            <li>
                                <div class="fin_list_num"><img src="{{url('assets/images/formation/Picto-cadeau.png')}}"></div>
                                <div class="fin_list_text">
                                    <h4>Séance de suivi offerte</h4>

                                </div>
                            </li>
                        @endif


                    </ul>
                        @if($formation->category_id !=5)
                        <a href="{{url('front/financement')}}">
                        <input type="button" class="contact_button" value="FINANCEMENT">
                        </a>
                        @endif
                </div>

                <div class="info_title">
                    <h2>PROCHAINES SESSIONS</h2></div>

                <div id="formation_sessions">

                    @php($sessionsPubliées = 0)

                    @foreach($sessions as $session)


                        @if($formation->id == $session->formation_id)
                            @php ($sessionsPubliées ++)

                        <div class="formation_session_input_container">

                                <input type="radio" class="flat" name="session" id="session" value="{{$session->id}}"/>
                            <p>{{$session->place}} - {{$session->session_start}}</p>

                        </div>

                        @endif
                            @endforeach

                        @if($sessionsPubliées == 0)

                            <p>De nouvelles sessions prochainement!</p>

                        @endif

                    <a href="{{url('front/inscript/create')}}">

                        <input type="button" class="contact_button" value="PRÉ-INSCRIPTION"></a>


                </div>

                @if(!empty($avis))

                <div class="info_title">
                    <h2>AVIS DES STAGIAIRES</h2></div>
                <div id="avis_stagiaires">
                    <img id="etoiles" src="{{url('assets/images/formation/Etoile.png')}}">
                    <a href=""><p>Tous les avis</p></a>
                </div>

                @endif

            </div>


            <div id="question">

                <h1>Une question</h1>
                <div id="contact_fiancement">
                    <img src="{{url('assets/images/financement/Picto-tel.png')}}">
                    <p>09 53 20 25 76</p>

                    <div id="rep_48">
                        <p>Réponse </br>sous 48h</p>
                    </div>

                </div>
                <input type="button" onclick="div_show('popup_question')" class="contact_button" value="CONTACT">

            </div>

        </div>

        <div id="popup_question" style="display: none">


            <div class="content_subscribe">

                <img class="popup_cross" src="{{url('assets/images/header/cancel.svg')}}" onclick="div_hide('popup_question')">

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

                </form>
                <p class="loi_1978">Conformément à la loi du 6 janvier 1978, tout utilisateur dispose d'un droit d'accès, de rectification et de radiation aux informations le concernant. </br>
                    Ce droit s’exerce par contact à l'adresse contact@athyr.fr.</p>



            </div>

        </div>




    </div>

    <div class="back_link_section">
    <a href="{{url('front/home')}}">
        <div class="back_link_container">
            <img src="{{url('assets/images/financement/Picto-retour.png')}}">
            <p class="back_link"> RETOUR A L'ACCUEIL </p>
        </div>
    </a>
    </div>


@endsection