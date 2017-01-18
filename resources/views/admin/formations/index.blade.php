@extends('layout.admin')
@section('content')



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


                <div class="table-responsive">
                    <table id= "sort_table_index_form" class="display">
                        <thead>
                        <tr class="headings">
                            <th>
                                <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">Intitulé</th>
                            <th class="column-title">Catégorie</th>
                            <th class="column-title">Sessions</th>
                            <th class="column-title">Statut</th>
                            <th class="column-title"></th>


                        </tr>
                        </thead>

                        <tbody>


                        @foreach($formations as $formation)


                            <tr class="even pointer">
                                <td class="a-center ">
                                    {{$formation->id}}
                                </td>
                                <td class=" ">{{$formation->titre}}</td>
                                <td class=" ">
                                    @foreach($categories as $categorie)
                                        @if($formation->category_id == $categorie->id)
                                            {{$categorie->title}}
                                        @endif
                                    @endforeach
                                </td>
                                <td class=" ">
                                    @php($nbSessions= 0)
                                    @foreach($sessions as $session)
                                        @if($session->formation_id == $formation->id)
                                            @php($nbSessions++)
                                        @endif
                                    @endforeach
                                    {{$nbSessions}}
                                </td>
                                <td>
                                    <form action="{{url('admin/publish/'.$formation->id)}}" method="POST">
                                        {{csrf_field()}}
                                        {{method_field('PUT')}}
                                        @if($formation->statut == 'publishé')
                                            <input type="submit" name="statut" class="btn btn-success btn-xs"
                                                   value="publié">
                                        @elseif ($formation->statut == 'non_publié')
                                            <input type="submit" name="statut" class="btn btn-info btn-xs"
                                                   value="dépublié">

                                        @endif
                                    </form>
                                </td>


                                <td>
                                    <a href="{{url('admin/formations/' .$formation->id .'/edit')}}"
                                       class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit</a>

                                        <button type="button" data-id="{{$formation->id}}" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#confirmDeleteFormation">Supprimer</button>


                                        <div id="confirmDeleteFormation" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">

                                                    {!! Form::open(['id'=>'FormDelForm','method'=>'DELETE']) !!}
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

@endsection

