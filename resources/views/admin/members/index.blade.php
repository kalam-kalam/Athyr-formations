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

                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Prenom</th>
                                <th>E-mail</th>
                                <th>Formation</th>
                                <th>Situation</th>
                                <th>Enregistré le</th>
                                <th>Newsletter</th>
                                <th></th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($members as $member)
                                <tr>
                                    @if ($member->status == 'prospect')
                                        <th scope="row">{{$member->id}}</th>
                                        <td>{{$member->firstname}}</td>
                                        <td>{{$member->email}}</td>
                                        <td>{{$member->formation}}</td>
                                        <td>{{$member->situation}}</td>
                                        <td>{{$member->created_at}}</td>
                                        <td>@if($member->newsletter=='YES')
                                                inscrit
                                            @else
                                                pas inscrit
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{url('admin/members/' .$member->id .'/edit')}}"
                                               class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                                            <button type="button" data-id="{{$member->id}}" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#confirmDeleteMember">Supprimer</button>


                                            <div id="confirmDeleteMember" class="modal fade" role="dialog">
                                                <div class="modal-dialog">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">

                                                        {!! Form::open(['id'=>'MemberdelForm','method'=>'DELETE']) !!}
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
                                    @endif
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        {{ $members->links() }}

                    </div>
                </div>
            </div>


            <div class="clearfix"></div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2><a href={{url("/")}}>Inscrits </a></h2>
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
                                    <th>Prenom</th>
                                    <th>E-mail</th>
                                    <th>Formation</th>
                                    <th>Situation</th>
                                    <th>Enregistré le</th>
                                    <th>Newsletter</th>
                                    <th></th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($members as $member)
                                    <tr>
                                        @if ($member->status == 'inscrit')
                                            <th scope="row">{{$member->id}}</th>
                                            <td>{{$member->firstname}}</td>
                                            <td>{{$member->email}}</td>
                                            <td>{{$member->formation}}</td>
                                            <td>{{$member->situation}}</td>
                                            <td>{{$member->created_at}}</td>
                                            <td>@if($member->newsletter=='YES')
                                                    inscrit
                                                @else
                                                    pas inscrit
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{url('admin/members/' .$member->id .'/edit')}}"
                                                   class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                                                <form action="{{route('admin.members.destroy', [$member->id])}}"
                                                      method="post">

                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                                    <input class="btn btn-danger btn-xs" type="submit" value="Delete">
                                                </form>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            {{ $members->links() }}

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<!-- /page content -->


@endsection

