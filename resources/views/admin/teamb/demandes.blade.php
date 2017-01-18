@extends('layout.admin')
@section('content')



    <div class="clearfix"></div>


    <div class="col-md-3"></div>
    <div class="col-lg-8">
        <div class="x_panel">
            <div class="x_title">
                <h2>Demandes de Teambuilding </h2>
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
                            <th class="column-title">Société</th>
                            <th class="column-title">Nom</th>
                            <th class="column-title">Email</th>
                            <th class="column-title">Tèl</th>
                            <th class="column-title">Rappel</th>
                            <th class="column-title">Message</th>
                            <th class="column-title">Reçu le</th>
                            <th class="column-title"> </th>


                        </tr>
                        </thead>

                        <tbody>

                        @foreach($teambs as $teamb)


                                <tr class="even pointer">
                                    <td class="a-center ">
                                        <input type="checkbox" class="flat" name="table_records">
                                    </td>
                                    <td class=" ">{{$teamb->societe}}</td>
                                    <td class=" ">{{$teamb->name}}</td>
                                    <td class=" ">{{$teamb->email}}</td>
                                    <td class=" ">{{$teamb->phone_number}}</td>
                                    <td class=" ">{{$teamb->rappel}}</td>
                                    <td class=" "> <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View</a></td>
                                    <td class=" ">{{$teamb->created_at}}</td>


                                    <td>

                                        <a href="{{url('admin/formations/' .$teamb->id .'/edit')}}"
                                           class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                                        <form action="{{route('admin.formations.destroy', [$teamb->id])}}"
                                              method="post">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                            <input class="btn btn-danger btn-xs" type="submit" value="Delete">
                                        </form>



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