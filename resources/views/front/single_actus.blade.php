@extends('layout.navigation')

@section('content')


    <style>
        #banner {
            background-image: url({{url('assets/images/actu/actus_banner.jpg')}});
            background-repeat: no-repeat;
            background-size: cover;
            height: 300px;
        }
        #meme_theme {
            background-image: url("{{url('assets/images/actu/fond_orange_actu.jpg')}}");
            background-repeat: no-repeat;
            -moz-background-size: cover;
            -webkit-background-size:cover;
            background-size: cover;
        }

        #footer {
            background-color: black;
        }
    </style>

    <div class="ariane" id="ariane_actu">
        <a href="url{{'front/home'}}">ACCUEIL</a> >
        <a href="url{{'front/actus'}}">ACTUALITÉS</a>
        > "{!! $article->title !!}"
    </div>



    <div class="singlePage_title" id="actu_single_title">
        <span>{{$article->created_at->format('d/m/Y')}}</span>
        <h1>{!! $article->title !!}</h1>
    </div>


    <div id="actu_single_container">


        <div id="actu_single_page_container">

            <div class="content_single_article">
            {!! $article->content!!}
            </div>
            <div class="image_single_article">
                <img src="{{url('assets/'.$article->uri)}}">
                <div class="rs_icone" id="rs_icone_actu_single">
                    <p>PARTAGER</p>
                    <a href="http://www.facebook.com" target="_blank"><img src="{{url('/assets/images/formation/Partage-FB.png')}}"></a>
                        <a href="http://www.twitter.com" target="_blank"><img src="{{url('assets/images/formation/Partage-T.png')}}"></a>
                </div>
            </div>





        </div>
    </div>

    <div id="uptitle_meme_theme"> <h1>SUR LE MÊME THÈME</h1> </div>

    <div id="meme_theme">
        <div id="meme_theme_container">

        @php($countArticle = 0)

        @foreach($articles as $art)
            @if($countArticle < 3 && $article->category_id == $art->category_id)
                @if($article->id != $art->id && $art->status =='published')
                @php($countArticle ++)

                        <div class="article_encart">
                            <a href="{{url ('front', ['actus',$art->id])}}">
                                <div class="image_article" style="background-image: url({{url('assets/'.$art->uri)}});
                                        background-repeat: no-repeat;
                                        background-size: cover;">

                                    <a href="{{url ('front', ['actus',$art->id])}}">
                                        <img class="plus_art" src="{{url('assets/images/actu/actu_picto_plus.jpg')}}">
                                    </a>
                                </div>
                            </a>
                            <div class="text_encart_article">

                                <div class="cat_article_container">
                                    @foreach($categories as $category)
                                        @if($art->category_id == $category->id)
                                            <h3>{{$category->title}}</h3>
                                        @endif
                                    @endforeach
                                    <span>{{$art->created_at->format('d/m/Y')}}</span>


                                </div>

                                <a href="{{url ('front', ['actus',$art->id])}}"><h1>{!! $art->title !!}</h1></a>



                            </div>
                            <div class="article_abstract" >
                                {!! $article->abstract !!}

                            </div>

                        </div>


                @endif
            @endif



        @endforeach

        </div>

                <input class="button" id="actu_all" type="button" value="TOUTES LES ACTUALITÉS">




    </div>



@endsection