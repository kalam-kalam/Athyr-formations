@extends('layout.admin')

@section('content')

        <!-- page content -->
<div class="right_col" role="main">
    <div class="">


        <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">

        <div class="col-md-3"></div>

        <div class="col-md-9">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Articles</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <p>Editez ici le contenu de chaque article</p>
                    {{ $articles->links() }}
                    <!-- start project list -->
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th style="width: 30%">Titre</th>
                            <th style="width: 40%">Date</th>
                            <th>Photo</th>
                            <th style="width: 10%">Statut</th>
                            <th style="width: 20%">Éditer</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($articles as $article)
                            <tr>
                                <td>{{$article->title}}</td>
                                <td>
                                    <small>Ecrit le: {{$article->created_at->format('d/m/Y')}}</small></br>
                                    <small>Dernière modification le: {{$article->updated_at->format('d/m/Y')}}</small>
                                </td>
                                <td>
                                    <ul class="list-inline">
                                        <li>
                                            <img src="{{url ('assets', ['images', $article->uri])}}" class="avatar" alt="Avatar">
                                        </li>

                                    </ul>
                                </td>
                                <td>
                                    <form action="{{url('admin/publishart/'.$article->id)}}" method="POST">
                                        {{csrf_field()}}
                                        {{method_field('PUT')}}
                                        @if($article->status == 'published')
                                            <input type="submit" name="status" class="btn btn-success btn-xs"
                                                   value="publié">
                                        @elseif ($article->status == 'unpublished')
                                            <input type="submit" name="status" class="btn btn-info btn-xs"
                                                   value="dépublié">
                                        @endif
                                    </form>
                                </td>


                                <td>

                                    <a href="{{url('admin',['articles',$article->id,'edit'])}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Modifier </a>

                                    <button type="button" data-id="{{$article->id}}" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#confirmDeleteArticle">Supprimer</button>


                                    <div id="confirmDeleteArticle" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">

                                                {!! Form::open(['id'=>'ArticleDelForm','method'=>'DELETE']) !!}
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Supprimer</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Êtes vous certain(e) de vouloir supprimer cet élément de la base de donnée ?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    {{Form::submit('Delete', array('class'=>'btn btn-danger'))}}

                                                    {!! Form::close() !!}

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </td>
                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                    {{ $articles->links() }}
                    <!-- end project list -->

                </div>
            </div>
        </div>

    </div>


</div>

<!-- /page content -->

@endsection