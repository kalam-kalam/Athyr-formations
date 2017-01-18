@extends('layout.admin')
@section('content')


        <!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    <small></small>
                </h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Rechercher...">
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
            <div class="col-md-8 col-sm-8 col-xs-8">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><a href={{url("/")}}>Toutes les sessions </a></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false"></a>
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

                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Lieu</th>
                                <th>Début</th>
                                <th>Fin</th>
                                <th>Crée le</th>
                                <th>Formations</th>
                                <th></th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($sortSessions as $session)
                                <tr>
                                        <th scope="row">{{$session->id}}</th>
                                        <td>{{$session->place}}</td>
                                        <td>{{$session->session_start}}</td>
                                        <td>{{$session->session_end}}</td>
                                        <td>{{$session->created_at->format('d/m/y')}}</td>
                                    <td>
                                    @foreach($formations as $formation)
                                        @if($session->formation_id == $formation->id)
                                        {{$formation->titre}}
                                        @endif
                                    @endforeach
                                        </td>

                                        <td>
                                            <a href="{{url('admin/sessions/' .$session->id .'/edit')}}"
                                               class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                                            <button type="button" data-id="{{$session->id}}" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#confirmDeleteSession">Supprimer</button>


                                            <div id="confirmDeleteSession" class="modal fade" role="dialog">
                                                <div class="modal-dialog">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">

                                                        {!! Form::open(['id'=>'SessionDelForm','method'=>'DELETE']) !!}
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


                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

<!-- /page content -->


@endsection

