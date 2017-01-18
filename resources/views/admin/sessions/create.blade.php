@extends('layout.admin')

@section('content')


    <div class="row">
        <div class="col-md-3">.col-md-8</div>
        <div class="col-md-8">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Créer une session </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false"><i class="fa fa-wrench"></i></a>
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

                    <!-- start form for validation -->
                    <form id="demo-form" data-parsley-validate action="{{url('admin/sessions')}}" method="post">
                        {{csrf_field()}}

                        <label for="place">Lieu * :</label>
                        <input type="text" id="place" class="form-control" name="place" required/>


                            <label for="formation_id">Formation *:</label>
                            <select name="formation_id" id="formation_id" class="form-control" required >
                                @forelse($formations as $id => $titre)
                                    <option value="{{$id}}">{{$titre}}</option>
                                @empty
                                    aucune catégorie
                                @endforelse
                            </select>

                        </br>

                        <label for="session_dates">Dates *:</label></br>
                        <div class="input-append date form_datetime">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <input name="session_start" id="session_start" class="session col-md-7 col-xs-12" required="required" type="text" >
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <input name="session_end" id="session_end" class="session col-md-7 col-xs-12" required="required" type="text" >
                            </div>
                        </div>
                        <br/>

                        <input type="submit" class="btn btn-warning">
                    </form>
                </div>
            </div>
        </div>

    </div>



@endsection