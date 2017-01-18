<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Administration! | </title>

    <!-- Bootstrap -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Font Awesome -->

    <script src="{{url('https://use.fontawesome.com/cc7a02ead7.js')}}"></script>
    <!-- iCheck -->
    <link href="{{url('assets/css/green.css')}}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{url('assets/css/bootstrap-progressbar-3.3.4.css')}}" rel="stylesheet">
    <!-- jVectorMap -->
    <link href="{{url('assets/css/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/jquery-ui.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/jquery-ui.structure.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/jquery-ui.theme.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->

    <link href="{{url('assets/css/custom.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.css">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="{{url('assets/css/admin.min.css')}}" rel="stylesheet">

</head>


<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{url('admin/dashboard')}}" class="site_title"><img id="logo_admin"
                                                                                 src="{{url('assets/images/Logo.svg')}}"/>
                        <span>ADMIN</span></a>
                </div>
                <style>
                    #logo_admin {
                        width: 50px;
                        height: 50px;
                        margin-right: 20px;
                        border-radius: 100%;
                    }

                    .navbar nav_title span {
                        font-size: 1em;
                    }
                </style>
                <div class="clearfix"></div>


                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="">Menu</a></li>
                                    <li><a href="">Footer</a></li>
                                    <li><a href="">Content</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="menu_section">
                        <ul class="nav side-menu">

                            <li><a><i class="fa fa-graduation-cap"></i>Formations <span
                                            class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{route('admin.formations.index')}}">Liste</a></li>
                                    <li><a href="{{route('admin.formations.create')}}">Ajouter une formation</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-calendar"></i> Sessions <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{url('admin/sessions/create')}}">Créer une session</a></li>
                                    <li><a href="{{url('admin/sessions')}}">Toutes les sessions</a></li>
                                </ul>
                            </li>

                            <li><a><i class="fa fa-tags"></i> Catégories & Tags <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{url('admin/categories')}}">Toutes les catégories</a></li>
                                    <li><a href="{{url('admin/categories/create')}}">Ajouter une catégorie </a></li>

                                </ul>
                            </li>
                        </ul>


                    </div>

                    <div class="menu_section">
                        <ul class="nav side-menu">

                            <li><a><i class="fa fa-user"></i> Membres <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{url('admin/members')}}">Tous les contacts </a></li>
                                    <li><a href="{{url('admin/members/create')}}">Ajouter un membre </a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-tags"></i> Teambuildings <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{url('admin/teamb')}}">Demandes de teambuilding</a></li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="menu_section">

                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-credit-card"></i> Paiements <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="e_commerce.html"></a></li>
                                    <li><a href="projects.html"></a></li>
                                    <li><a href="project_detail.html"></a></li>
                                    <li><a href="contacts.html"></a></li>
                                    <li><a href="profile.html"></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="menu_section">

                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-envelope"></i> Newsletter <span
                                            class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="">Créer une newsletter</a></li>

                                </ul>
                            </li>

                            <li><a><i class="fa fa-pencil"></i> Actualités <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{route('admin.articles.index')}}">Liste des articles</a></li>
                                    <li><a href="{{route('admin.articles.create')}}">Ajouter un article</a></li>

                                </ul>
                            </li>
                        </ul>
                    </div>


                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a href="{{url("logout")}}" data-toggle="tooltip" data-placement="top" title="Logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav class="" role="navigation">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                </nav>
            </div>
        </div>
        <!-- /top navigation -->


    </div>
</div>




<div class="container">
    <section>
        @include('partials/_flash')
        @yield('content')
    </section>
</div>

<!-- jQuery -->


<script src="{{url('http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js')}}"></script>

<script src="{{url('assets/js/jquery.min.js')}}"></script>
<script src="{{url('assets/js/jquery-ui.js')}}"></script>
<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.js')}}"></script>
<!-- jQuery Sparklines -->
<script src="{{url('assets/js/jquery.sparkline.min.js')}}"></script>
<!-- Flot -->
<script src="{{url('assets/js/jquery.flot.js')}}"></script>
<script src="{{url('assets/js/jquery.flot.time.js')}}"></script>
<script src="{{url('assets/js/jquery.flot.stack.js')}}"></script>
<script src="{{url('assets/js/jquery.flot.resize.js')}}"></script>
<!-- Flot plugins -->
<script src="{{url('assets/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{url('assets/js/date.js')}}"></script>
<script src="{{url('assets/js/jquery.flot.spline.js')}}"></script>
<script src="{{url('assets/js/curvedLines.js')}}"></script>
<script src="{{url('assets/js/moment.min.js')}}"></script>



<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/mode/xml/xml.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>



<!-- Custom Theme Scripts -->
<script src="{{url('assets/js/app.min.js')}}"></script>


<script type="text/javascript">
    $(document).ready(function() {


        $('#sort_table').DataTable();
        $('#sort_table_form').DataTable();
        $('#sort_table_index_form').DataTable();


            $(".session").datepicker("setDate",new Date()).datepicker({
                showOtherMonths: true,
                selectOtherMonths: false,
                altField: "#alternate",
                altFormat: "mm/dd/yy",
                dateFormat: "mm/dd/yy"
            });



        $('.summer').summernote({

            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ],

            callbacks: {

                onKeydown: function (e) {
                    var t = e.target.innerText;
                    if (t.trim().length >= 200) {
                        //delete key
                        if (e.keyCode != 8)
                            e.preventDefault();
                    }
                },
                onKeyup: function (e) {
                    var t = e.target.innerText;
                    $('#countdown').text(200 - t.trim().length);
                },
                onPaste: function (e) {
                    var t = e.target.innerText;
                    var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                    e.preventDefault();
                    var all = t + bufferText;
                    document.execCommand('insertText', false, all.trim().substring(0, 200));
                    $('#countdown').text(200 - t.length);
                }
            }
        });

        $('.summernote').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['Titillium', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ],
            lineHeights: ['0.3', '0.5', '1.0', '1.2', '1.4', '1.5', '1.6', '1.8', '2.0', '3.0'],

        });


        $('#confirmDeleteFormation').on('show.bs.modal', function (e) {
            var Id = $(e.relatedTarget).data('id');
            $('#FormDelForm').attr('action', 'formations/' + Id);
        });

        $('#confirmDeleteMember').on('show.bs.modal', function (e) {
            var Id = $(e.relatedTarget).data('id');
            $('#MemberDelForm').attr('action', 'members/' + Id);
        });

        $('#confirmDeleteSession').on('show.bs.modal', function (e) {
            var Id = $(e.relatedTarget).data('id');
            $('#SessionDelForm').attr('action', 'sessions/' + Id);
        });

        $('#confirmDeleteArticle').on('show.bs.modal', function (e) {
            var Id = $(e.relatedTarget).data('id');
            $('#ArticleDelForm').attr('action', 'articles/' + Id);
        });
        $('#confirmDeleteCategory').on('show.bs.modal', function (e) {
            var Id = $(e.relatedTarget).data('id');
            $('#CategoryDelForm').attr('action', 'categories/' + Id);
        });



    });





</script>




</body>
</html>