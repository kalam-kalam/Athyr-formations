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
            <div class="col-md-2"></div>
            <div class="col-md-10 col-sm-10 col-xs-10">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><a href={{url("/")}}>Prospects </a></h2>
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
                        {!!$members->links()!!}

                        <table table id="sort_table" class="display">
                            <thead>
                            <tr>
                                <th>Prenom</th>
                                <th>E-mail</th>
                                <th>Formation</th>
                                <th>Session</th>
                                <th>Situation</th>
                                <th>Créé le</th>
                                <th>Newsletter</th>
                                <th>Question</th>
                                <th></th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($members as $member)
                                <tr>
                                    @if ($member->status == 'prospect')
                                        <td>{{$member->firstname}}</td>
                                        <td>{{$member->email}}</td>
                                        <td>
                                            @foreach($formations as $formation)
                                            @if($member->formation_id == $formation->id)
                                                {{$formation->titre}}
                                            @endif
                                            @endforeach
                                        </td>
                                    <td>
                                        @foreach($sessions as $session)
                                            @if($session->id == $member->session_id)
                                                {{$session->place}}-{{$session->session_start}}
                                            @endif
                                        @endforeach
                                    </td>
                                        <td>{{$member->situation}}</td>
                                        <td>{{$member->created_at->format('j/m/y')}}</td>
                                        <td>
                                            @if($member->newsletter == 'yes')
                                                inscrit
                                            @else
                                                pas inscrit
                                            @endif
                                        </td>
                                        <td>
                                            @if($member->user_comment)
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#voir_question">Voir</button>
                                                @endif
                                        </td>

                                        <!-- Modal -->
                                        <div id="voir_question" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Question de {{$member->firstname}} </h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p style="word-wrap: break-word">{{$member->user_comment}}</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <td>
                                            <a href="{{url('admin/members/' .$member->id .'/edit')}}"
                                               class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editer</a>
                                            <button type="button" data-id="{{$member->id}}"
                                                    class="btn btn-danger btn-xs" data-toggle="modal"
                                                    data-target="#confirmDeleteMember">Supprimer
                                            </button>


                                            <div id="confirmDeleteMember" class="modal fade" role="dialog">
                                                <div class="modal-dialog">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">

                                                        {!! Form::open(['id'=>'MemberDelForm','method'=>'DELETE']) !!}
                                                        <div class="modal-header">
                                                            <button type="button" class="close"
                                                                    data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title">Supprimer</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Êtes vous certain(e) de vouloir supprimer cet élément de
                                                                la base de donnée ?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal">Close
                                                            </button>
                                                            {{Form::submit('Delete', array('class'=>'btn btn-danger'))}}

                                                            {!! Form::close() !!}

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        {!!$members->links()!!}

                    </div>
                </div>
            </div>


            <div class="clearfix"></div>

            <div class="clearfix"></div>


            <div class="col-md-3"></div>
            <div class="col-lg-8">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Formations & Ateliers </h2>
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
                        <div>
                            {!! $formations->links() !!}
                            <table id="sort_table_form" class="display">
                                <thead>
                                    <th>
                                        <input type="checkbox" id="check-all" class="flat">
                                    </th>
                                    <th class="column-title">Intitulé</th>
                                    <th class="column-title">Sessions</th>
                                    <th class="column-title"></th>

                                </thead>

                                <tbody>


                                @foreach($formations as $formation)


                                    <tr class="even pointer">
                                        <td class="a-center ">
                                            <input type="checkbox" class="flat" name="table_records">
                                        </td>
                                        <td class=" ">{{$formation->titre}}</td>
                                        <td class=" ">

                                            @foreach($sessions as $session)

                                                @if($formation->id == $session->formation_id)

                                                    {{$session->place}} - Du {{$session->session_start}}
                                                    au {{$session->session_end}}
                                                @endif
                                            @endforeach

                                        </td>


                                        <td>

                                            <a href="{{url('admin/formations/' .$formation->id .'/edit')}}"
                                               class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editer</a>
                                            <button type="button" data-id="{{$formation->id}}"
                                                    class="btn btn-danger btn-xs" data-toggle="modal"
                                                    data-target="#confirmDeleteFormation">Supprimer
                                            </button>


                                            <div id="confirmDeleteFormation" class="modal fade" role="dialog">
                                                <div class="modal-dialog">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">

                                                        {!! Form::open(['id'=>'FormDelForm','method'=>'DELETE']) !!}
                                                        <div class="modal-header">
                                                            <button type="button" class="close"
                                                                    data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title">Supprimer</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Êtes vous certain(e) de vouloir supprimer cet élément de
                                                                la base de donnée ?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal">Close
                                                            </button>
                                                            {{Form::submit('Delete', array('class'=>'btn btn-danger'))}}

                                                            {!! Form::close() !!}

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>


                                            <a href="{{url('admin/formations/' .$formation->id .'/edit')}}"

                                               @if($formation->statut == 'non_publié')
                                               class="btn btn-warning btn-xs"><i class="fa fa-external-link"></i>

                                                @else
                                                    <i class="fa fa-external-link"></i>

                                            </a>
                                            @endif

                                        </td>
                                    </tr>


                                @endforeach

                                </tbody>

                            </table>
                            {!! $formations->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->


@endsection