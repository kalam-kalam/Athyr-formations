@extends('layout.navigation')
@section('content')

    <style>
        #banner {
            background-image: url("../assets/images/rechercher/recherche_banner.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            height: 300px;
        }

        #footer {
            background-color: black;
        }
    </style>
    <div class="ariane" id="ariane_search">
            <a href="{{url('front/home')}}">ACCUEIL</a> > RECHERCHE > " {{$query}} "
    </div>

    <div class="singlePage_title" id="financement_title">
        <h1>RÉSULTATS POUR : <span>"{{$query}}"</span> </h1>
    </div>
    <section id="search_page_container">


        @if(count($category_query)< 1 && count($articles)< 1 && count($formations)< 1)
            <p>{{"Votre recherche n'a donné aucun résultat"}}</p>

        @elseif((count($articles)>=1))
            @foreach($articles as $article)
                @foreach($categories as $category)
                    @if($article->category_id == $category->id)

                        <div id="one_result">
                            <h2 class="search_category_title">{{$category->title}}</h2>
                            <h1 class="search_article_title">
                                <a href="{{url('front/actus/'.$article->id)}}">
                                {{$article->title}}
                                </a>
                            </h1>
                            <div>{!! $article->abstract !!}</div>
                        </div>

                    @endif
                @endforeach
            @endforeach
        @elseif (count($category_query)>=1)

        @foreach($all_articles as $article)
            @foreach($category_query as $cat)

            @if($article->category_id == $cat->id)


                        <div id="one_result">
                            <h1 class="search_article_title">{{$article->title}}</h1>
                            <div>{!! $article->abstract !!}</div>
                        </div>
                @endif
                @endforeach
            @endforeach

        @elseif (count($formations)>=1)

                @foreach($formations as $formation)
                <div id="one_result">
                            <h1 class="search_article_title">
                                <a href="{{url('front/formations/'. $formation->id)}}">
                                {{$formation->titre}}
                            </a>
                            </h1>
                            <div>{!!$formation->présentation!!}</div>
                </div>
                @endforeach

        @endif



    </section>

    @endsection


