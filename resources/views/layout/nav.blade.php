<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Smart Weather | @yield('title')</title>

    <link href="{{asset('storage/inspinia/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('storage/inspinia/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{asset('storage/inspinia/css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">

    <!-- Gritter -->
    <link href="{{asset('storage/inspinia/js/plugins/gritter/jquery.gritter.css')}}" rel="stylesheet">

    <link href="{{asset('storage/inspinia/js/plugins/gritter/jquery.gritter.css')}}" rel="stylesheet">
    <link href="{{asset('storage/inspinia/css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
    <link href="{{asset('storage/inspinia/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('storage/inspinia/css/style.css')}}" rel="stylesheet">
    <script src="{{asset('storage/inspinia/js/jquery-3.1.1.min.js')}}"></script>
    @livewireStyles

</head>
@php
$v=session()->get('user_info');
@endphp


<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <img alt="image" class="rounded-circle" src="{{asset('storage/inspinia/img/user/rana.jpg')}}"/>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="block m-t-xs font-bold">{{$v[0]->user_name}}</span>
                                <span class="text-muted text-xs block">Admin<b class="caret"></b></span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                                <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                                <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                                <!-- <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="login.html">Logout</a></li> -->
                                </ul>
                            </div>
                            <div class="logo-element">
                                Smart Shop
                            </div>
                        </li>
                        
                         <li id="prodcutSetup">
                            <a href="#" aria-expanded="false"><i class="fa fa-product-hunt"></i> <span class="nav-label">Weather</span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse" aria-expanded="false">
                                <li id="productUnit"><a  href="{{route('dashboard')}}">Dashboard</a></li>
                                <li id="productVariant"><a  href="{{route('getWeatherData')}}">Get Weather Data</a></li>
                                
                            </ul>
                        </li>
                        
                        
                        
                        
                    </ul>

                </div>
            </nav>


            <div id="page-wrapper" class="gray-bg dashbard-1">
                <div class="row border-bottom">
                    <nav class="navbar navbar-static-top bg-white" role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">
                            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary" href="#"><i class="fa fa-bars"></i> </a>
                            
                        </div>
                        <ul class="nav navbar-top-links navbar-right">
                           
                          
                            


                            <li>
                                <a href="{{route('LogOut')}}">
                                    <i  class="fa fa-sign-out"></i> Log out
                                </a>
                            </li>
                            
                        </ul>


                    </nav>
                </div> 
               <div class="wrapper wrapper-content animated fadeInRight">
                   @yield('content')
               </div>
               <div class="footer">
                <div class="float-right">
                    <strong>Version</strong> 1.0.0
                </div>
                <div>
                    <strong>Copyright</strong>  &copy; {{date('Y')}}
                </div>
            </div>
        </div>
        
    </div>

</div>
</div>

<!-- Mainly scripts -->
<script src="{{asset('storage/inspinia/js/popper.min.js')}}"></script>
<script src="{{asset('storage/inspinia/js/bootstrap.js')}}"></script>
<script src="{{asset('storage/inspinia/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('storage/inspinia/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('storage/inspinia/js/plugins/dataTables/datatables.min.js')}}"></script>
<script src="{{asset('storage/inspinia/js/plugins/dataTables/dataTables.bootstrap4.min.js')}}"></script>
<!-- Flot -->
<script src="{{asset('storage/inspinia/js/plugins/flot/jquery.flot.js')}}"></script>
<script src="{{asset('storage/inspinia/js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('storage/inspinia/js/plugins/flot/jquery.flot.spline.js')}}"></script>
<script src="{{asset('storage/inspinia/js/plugins/flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('storage/inspinia/js/plugins/flot/jquery.flot.pie.js')}}"></script>

<!-- Peity -->
<script src="{{asset('storage/inspinia/js/plugins/peity/jquery.peity.min.js')}}"></script>
<!-- <script src="{{asset('storage/inspinia/js/demo/peity-demo.js')}}"></script> -->

<!-- Custom and plugin javascript -->
<script src="{{asset('storage/inspinia/js/inspinia.js')}}"></script>
<script src="{{asset('storage/inspinia/js/plugins/pace/pace.min.js')}}"></script>

<!-- jQuery UI -->
<!-- <script src="{{asset('storage/inspinia/js/plugins/jquery-ui/jquery-ui.min.js')}}"></script> -->

<!-- GITTER -->
<script src="{{asset('storage/inspinia/js/plugins/gritter/jquery.gritter.min.js')}}"></script>

<!-- Sparkline -->
<script src="{{asset('storage/inspinia/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>

<!-- Sparkline demo data  -->
<script src="{{asset('storage/inspinia/js/demo/sparkline-demo.js')}}"></script>

<!-- ChartJS-->
<script src="{{asset('storage/inspinia/js/plugins/chartJs/Chart.min.js')}}"></script>
@livewireScripts
<!-- Toastr -->
<!--  <script src="{{asset('storage/inspinia/js/plugins/toastr/toastr.min.js')}}"></script> -->

<script type="text/javascript">
    
    $( document ).ready(function() {
        $('.dataTables').DataTable({
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                {extend: 'csv'},
                {extend: 'excel', title: 'productInfo'},
                {extend: 'pdf', title: 'productInfo'},

                {extend: 'print',
                customize: function (win){
                    $(win.document.body).addClass('white-bg');
                    $(win.document.body).css('font-size', '10px');

                    $(win.document.body).find('table')
                    .addClass('compact')
                    .css('font-size', 'inherit');
                }
            }
            ]

        });
    });
    
</script>

</body>
</html>
