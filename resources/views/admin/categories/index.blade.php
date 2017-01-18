@extends('layout.admin')
@section('content')

<div class="col-md-3"></div>
<div class="col-lg-8">
    <div class="x_panel">
        <div class="x_title">
            <h2>Catégories </h2>
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
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                    <tr class="headings">
                        <th>
                            <input type="checkbox" id="check-all" class="flat">
                        </th>
                        <th class="column-title">Intitulé</th>
                        <th class="column-title"></th>
                        <th class="column-title"></th>


                    </tr>
                    </thead>

                    <tbody>


                        @foreach($categories as $category)

                            <tr class="even pointer">
                                <td class="a-center ">
                                    <input type="checkbox" class="flat" name="table_records">
                                </td>
                                <td class=" ">{{$category->title}}</td>
                                <td class=" ">


                                </td>


                                <td>
                                    <a href="{{url('admin/categories/' .$category->id .'/edit')}}"
                                       class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                                    <button type="button" data-id="{{$category->id}}" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#confirmDeleteCategory">Supprimer</button>


                                    <div id="confirmDeleteCategory" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">

                                                {!! Form::open(['id'=>'CategoryDelForm','method'=>'DELETE']) !!}
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