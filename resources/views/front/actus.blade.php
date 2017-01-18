@extends('layout.navigation')

@section('content')


    <style>
        #banner {
            background-image: url({{url('assets/images/actu/actus_banner.jpg')}});
            background-repeat: no-repeat;
            background-size: cover;
            height: 300px;
        }

        #footer {
            background-color: black;
        }
    </style>

    <div class="ariane" id="ariane_actu">
        <a href="url{{'front/home'}}">ACCUEIL</a> >
        <a href="url{{'front/actus'}}">ACTUALITÉS</a>
    </div>



    <div class="singlePage_title" id="actus_title">
        <h1>QUOI DE NEUF ?</h1>
    </div>


    <section id="actu_container">

        <div id="actu_page_container">

            @foreach($articles as $article)
                @if($article->status=='published')

                    <div class="article_encart">

                            <div class="image_article" style="background-image: url({{url('assets/'.$article->uri)}});
                                    background-repeat: no-repeat;
                                    background-size: cover;">
                                <a href="{{url ('front', ['actus',$article->id])}}">
                                <img class="plus_art" src="{{url('assets/images/actu/actu_picto_plus.jpg')}}">
                                </a>
                            </div>


                        <div class="text_encart_article">

                            <div class="cat_article_container">
                                    @foreach($categories as $category)
                                    @if($article->category_id == $category->id)
                                        <h3>{{$category->title}}</h3>
                                    @endif
                                @endforeach
                                    <span>{{$article->created_at->format('d/m/Y')}}</span>


                                </div>

                                <a href="{{url ('front', ['actus',$article->id])}}"><h1>{!! $article->title !!}</h1></a>



                        </div>
                        <div class="article_abstract" >
                            {!! $article->abstract !!}

                        </div>

                    </div>



                @endif




            @endforeach

            <div class="pagination">
                {{$articles->links()}}
            </div>

        </div>

    </section>



@endsection