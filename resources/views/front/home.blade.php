@extends('layout.navigation')

@section('content')


    <style>

        #actus_blog {
            background-image: url("{{url('assets/images/actu/fond_orange_actu.jpg')}}");
            background-repeat: no-repeat;
            -moz-background-size: cover;
            -webkit-background-size:cover;
            background-size: cover;
        }

        #focus {
            background-image: url("{{url('assets/images/actu/actu1.jpg')}}");
            background-repeat: no-repeat;
            -moz-background-size: cover;
            -webkit-background-size:cover;
            background-size: cover;

        }

        .actu_pic {
            background-color: black;
        }

        .actu_text {
            background-color: black;
        }

        #footer {
            background-color: black;
        }



        #actus_blog_resp {
            background-image: url("{{url('assets/images/actu/fond_orange_actu.jpg')}}");
            background-repeat: no-repeat;
            -moz-background-size: cover;
            -webkit-background-size:cover;
            background-size: cover;
        }


    </style>
<section id="banner_swiper">
    <div class="swiper-container" id="banner_slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img class="slide_pic"
                                           src="{{url('assets/images/header/mixing-desk-351478_1920.jpg')}}">
            </div>
            <div class="swiper-slide"><img class="slide_pic" src="{{url('assets/images/header/1300X600/visuel1.jpg')}}"></div>
            <div class="swiper-slide"><img class="slide_pic" src="{{url('assets/images/header/1300X600/visuel2.jpg')}}"></div>
            <div class="swiper-slide"><img class="slide_pic" src="{{url('assets/images/header/1300X600/visuel3.jpg')}}"></div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination" id="banner_swiper_pagination"></div>
    </div>
</section>

    <section id="engagements_athyr_desktop">
        <div class="cont" id="engagements_container">
            <div class="engagement" id="réussite">
                <h1>Une formule "réussite"</h1>
                <div class="engagement_picto">
                <img id="pouce" src="{{url('assets/images/engagements/pouce.png')}}">
                </div>

                <p>Cultivez vos talents grâce à </br>
                    notre méthode pédagogique et </br>
                    un accompagnement personnalisé.</p>

            </div>
            <div class="engagement" id="equipe_pro">
                <h1>Au coeur de vos projets</h1>
                <div class="engagement_picto">
                <img src="{{url('assets/images/valeurs/ordi_heart_white.png')}}">
                    </div>


                <p>Nous pouvons intégrer vos projets</br>
                    musicaux à notre pédagogie, pour des</br>
                    formations qui vous ressemblent vraiment.</p>
            </div>
            <div class="engagement" id="materiel">
                <h1>Des pros à vos côtés</h1>
                <div class="engagement_picto">
                <img id="cochon" src="{{url('assets/images/engagements/equipe.png')}}">
                    </div>


                <p>Professionnels en activité, nos</br>
                    formateurs vous font partager leur</br>
                    expérience de terrain.</p>
            </div>


        </div>
        <a href="{{url('front/valeurs')}}"><input class="button" id="decouvrir_engagements" type="button" value="DECOUVRIR NOS ENGAGEMENTS"></a>
    </section>


    <section id="engagements_athyr_resp">
        <div class="swiper-container" id="engagements_slider">
            <div class="swiper-wrapper" id="engagements_swiper_wrapper">

                <div class="swiper-slide" id="engagements_slide1">
                    <div class="engagement" id="écoute">
                        <h1>Une formule "réussite"</h1>
                        <div class="engagement_picto">
                        <img id="pouce" src="{{url('assets/images/engagements/pouce.png')}}">
                        </div>

                        <p>Cultivez vos talents grâce à </br>
                            notre méthode pédagogique et </br>
                            un accompagnement personnalisé.</p>

                    </div>
                </div>
                <div class="swiper-slide" id="engagements_slide2">
                    <div class="engagement" id="equipe_pro">
                        <h1>Au coeur de vos projets</h1>
                        <div class="engagement_picto">
                            <img src="{{url('assets/images/valeurs/ordi_heart_white.png')}}">
                        </div>


                        <p>Nous pouvons intégrer vos projets</br>
                            musicaux à notre pédagogie, pour des</br>
                            formations qui vous ressemblent vraiment.</p>
                    </div>
                </div>
                <div class="swiper-slide" id="engagements_slide3">
                    <div class="engagement" id="materiel">
                        <h1>Des pros à vos côtés</h1>
                        <div class="engagement_picto">
                            <img id="cochon" src="{{url('assets/images/engagements/equipe.png')}}">
                        </div>


                        <p>Professionnels en activité, nos</br>
                            formateurs vous font partager leur</br>
                            expérience de terrain.</p>
                    </div>

                </div>

            </div>
            <div class="swiper-pagination"></div><!-- Add Pagination -->
        </div>

        <input class="button" id="decouvrir_engagements" type="button" value="DECOUVRIR NOS ENGAGEMENTS">

    </section>


    <section id="actu_formation">

        <div id="encart_formations">

        @php($formationIds= [])
        @php ($encartPerSection= 0)


            @foreach($sortSessions as $session)
                @foreach($formations as $formation)

                    @if($session->formation_id == $formation->id && $formation->statut == 'publishé')
                        @if(!in_array($formation->id, $formationIds) && $encartPerSection < 3)
                            @php (array_push($formationIds, $formation->id))
                            @php($encartPerSection ++)
                                <div class="next_formation" id="next1">
                                    <div class="formation_img" id="left_img_formation" style="
                                        background-image: url('{{url('assets/images/'. $formation->uri)}}');
                                        background-repeat: no-repeat;
                                        -moz-background-size: cover;
                                        -webkit-background-size:cover;
                                        background-size: cover;">
                                        <div>
                                            @foreach($categories as $cat)
                                                @if($formation->category_id == $cat->id)
                                                    <div class="cat_button">{{$cat->title}}</div>
                                                    @endif
                                                @endforeach

                                        </div>
                                    <div class="formation_date">
                                 <span id="day">
                                        @php $i= $session->session_start;
                                        $my_date = date('j', $i);
                                        echo $my_date;
                                        @endphp

                                 </span>
                                    <span id="month">
                                        @php
                                        $i= $session->session_start;
                                        setlocale(LC_ALL,  "fr_FR");
                                        $monthName = utf8_encode(strftime("%b", $i));
                                        echo $monthName;
                                        @endphp

                                    </span>


                                    </div>
                                    <div>
                                        <h1>FORMATION </br>
                                            {!! $formation->titre !!}</h1>

                                    </div>

                                </div>

                                <div class="formation_text" id="formation_text_left">

                                    <h3>{{$session->place}} - {!! $formation->durée!!} </br>
                                        {!! $formation->price !!} euros
                                    </h3>

                                    <div id="formation_objectifs">
                                        <div id="formation_obj_p">{!! $formation->abstract !!}</div>
                                    </div>

                                    <div class="input_box">
                                        <a href="{{url('front/formations/'. $formation->id)}}"><input class="small_btn"
                                                                                                      type="button"
                                                                                                      value="PROGRAMME"></a>
                                        <a href="{{url('front/inscript/create')}}"><input class="small_btn"
                                                                                          type="button"
                                                                                          value="PRÉ-INSCRIPTION"></a>
                                    </div>
                                </div>

                            </div>
                        @endif

                    @endif


                @endforeach


            @endforeach


                    </div>

                    {{--<input class="button" id="formations_all" type="button" value="TOUTES LES FORMATIONS">--}}


    </section>
    <section id="actus_blog">

        <div class="cont" id="actus_container">

            <div id="focus">
                <div id="focus_picto">


                    <a @foreach ($sortArticles as $sortArticle)
                            @if($sortArticle->status == 'focus')
                       href="{{url('front/actus/'.$sortArticle->id)}}"
                            @endif
                            @endforeach>

                        <img class="plus" id="focus_plus" src="{{url('assets/images/actu/actu_picto_plus.jpg')}}"></a>

                </div>
                <h4>FOCUS</h4>

                <div id="focus_text">



                    @foreach ($sortArticles as $sortArticle)
                    @if ($sortArticle->status == 'focus')
                    <p>NEWS FORMATIONS <span> {{$sortArticle->created_at->format('d/m/20y')}}</span></p>
                    <h3> <a href="{{url('front/actus/'.$sortArticle->id)}}">{{$sortArticle->title}}</a></h3>
                        @endif
                    @endforeach


                </div>

            </div>


            <div id="from_blog">

                @php($countArticle =0)


                    @foreach ($sortArticles as $article)
                    @if($countArticle < 2)

                    <div class="article_blog" id="temoignages">

                    <a href="{{url('front/actus/'.$article->id)}}" class="actu_pic" id="temoin_pic" style="background-image: url('{{url('assets/'. $article->uri)}}'); background-repeat: no-repeat;
                            background-size: cover;" >

                            <img class="plus" id="focus_plus" src="{{url('assets/images/actu/actu_picto_plus.jpg')}}"></a>

                    <div class="actu_text" id="temoin_text">

                        @foreach($categories as $category)
                            @if($category->id == $article->category_id)
                        <h3>{{$category->title}}
                            @endif
                            <span>{{$article->created_at->format('d/m/20y')}} </span>
                        </h3>
                                    @endforeach
                            <p><a href="{{url('front/actus/'.$article->id)}}">{{$article->title}}</a></p>


                    </div>

                </div>
                    <div class="story">{!! $article->abstract !!}</div>
                    @php($countArticle ++)

                    @endif

                    @endforeach




            </div>

        </div>
        <a href="{{url('front/actus')}}"><input class="button" id="actu_all" type="button" value="TOUTES LES ACTUALITÉS"></a>
    </section>


    <section id="actus_blog_resp">
        <div class="swiper-container" id="actu_slider">
            <div class="swiper-wrapper" id="actu_wrapper">

                @php($countArticle =0)


                @foreach ($sortArticles as $article)
                    @if($countArticle < 2)

                <div class="swiper-slide" id="actu_slide">

                        <div class="article_blog" id="temoignages">

                            <a href="{{url('front/actus/'.$article->id)}}" class="actu_pic" id="temoin_pic" style="background-image: url('{{url('assets/images/'. $article->uri)}}'); background-repeat: no-repeat;
                                    background-size: cover;" >

                                <img class="plus" id="focus_plus" src="{{url('assets/images/actu/actu_picto_plus.jpg')}}"></a>

                            <div class="actu_text" id="temoin_text">

                                @foreach($categories as $category)
                                    @if($category->id == $article->category_id)
                                        <h3>{{$category->title}}
                                            @endif
                                            <span>{{$article->created_at->format('d/m/20y')}} </span>
                                        </h3>
                                        @endforeach
                                        <p><a href="{{url('front/actus/'.$article->id)}}">{{$article->title}}</a></p>


                            </div>
                    </div>
                    <div class="story">{!! $article->abstract !!}</div>
                    @php($countArticle ++)
                </div>
                    @endif
                    @endforeach

            </div>
            <!-- Add Pagination -->

        </div>
        <div class="swiper-pagination" id="actu_swiper_pagination"></div>
        <a href="{{url('front/actus')}}"><input class="button" id="actu_all" type="button" value="TOUTES LES ACTUALITÉS"></a>

    </section>


@endsection