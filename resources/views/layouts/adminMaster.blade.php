<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        
        <title> @yield('title') </title>

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('font-awesome-old/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('font-awesome/css/all.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- <link href="{{ URL::asset('assets/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" /> -->
        <link href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->

        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ URL::asset('css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->

        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{ URL::asset('css/layout.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('css/darkblue.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />

        <!-- BEGIN ADMIN STYLES -->
        <!-- <link href="{{ URL::asset('assets/css/admin-styles.css') }}" rel="stylesheet" type="text/css" /> -->

        <!--<link rel="shortcut icon" href="favicon.ico" /> -->
    </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    
                    <a href="{{ route('dashboard') }}">
                        <!-- <img src="{{ URL::asset('assets/img/logo/lg.png') }}" alt="logo" class="logo-default" /> -->
                        MUUNGANO
                    </a>

                    <div class="menu-toggler sidebar-toggler" style="color:#FFFFFF;"> <i class="fa fa-bars fa-lg"></i> </div>
                
                </div>
                <!-- END LOGO -->
                
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                </a>
                <!-- END RESPONSIVE MENU TOGGLER -->

                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
        
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle" src="{{ URL::asset('assets/img/profile/team8.jpg') }}" />
                                <span class="username username-hide-on-mobile"> {{ Auth::user()->middle_name }} {{ Auth::user()->last_name }} </span>
                                <i class="fa fa-angle-down"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="page_user_profile_1.html">
                                        <i class="icon-user"></i> My Profile </a>
                                </li>
                                
                                <li>
                                    <a href="">
                                        <i class="icon-key"></i> Log Out </a>
                                </li>
                            </ul>

                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->

        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->

        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar navbar-collapse collapse">
                    
                    <!-- BEGIN SIDEBAR MENU -->                    
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">                        

                        <li class="sidebar-search-wrapper">
                            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                            <form class="sidebar-search  " action="page_general_search_3.html" method="POST">
                                <a href="javascript:;" class="remove">
                                    <i class="icon-close"></i>
                                </a>
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <a href="javascript:;" class="btn submit">
                                            <i class="icon-magnifier"></i>
                                        </a>
                                    </span>
                                </div>
                            </form>
                            <!-- END RESPONSIVE QUICK SEARCH FORM -->
                        </li>

                        <li class="nav-item @yield('dashboard-active') ">
                            <a href="{{ route('dashboard') }}" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                            </a>
                        </li>

                        <li class="heading">
                            <h3 class="uppercase">Feature Actions</h3>
                        </li>
                        
                        <!-- BEGIN CLIENT SIDE MENU -->
                        <li class="nav-item @yield('houses-active') ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-home"></i>
                                <span class="title">Houses</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="{{ route('create-house') }}" class="nav-link ">
                                        <span class="title">Add New</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{{ route('all-houses') }}" class="nav-link ">
                                        <span class="title">View All</span>
                                    </a>
                                </li>                                
                            </ul>
                        </li>
                        <!-- END CLIENT SIDE MENU -->
                        
                        <!-- BEGIN EVENTS SIDE MENU -->
                        <li class="nav-item @yield('rooms-active') ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-bed"></i>
                                <span class="title">Rooms</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="" class="nav-link ">
                                        <span class="title">Add New</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{{ route('all-rooms') }}" class="nav-link ">
                                        <span class="title">View All</span>
                                    </a>
                                </li>                                
                            </ul>
                        </li>
                        <!-- END EVENTS SIDE MENU -->

                        <!-- BEGIN ACTIVITY SIDE MENU -->
                        <li class="nav-item @yield('activity-active') ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-users"></i>
                                <span class="title">Tenants</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="" class="nav-link ">
                                        <span class="title">Add New</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="" class="nav-link ">
                                        <span class="title">View All</span>
                                    </a>
                                </li>                                
                            </ul>
                        </li>
                        <!-- END ACTIVITY SIDE MENU -->

                        <!-- BEGIN SPONSOR SIDE MENU -->
                        <!--
                        <li class="nav-item @yield('sponsors-active') ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-money"></i>
                                <span class="title">Sponsor</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="" class="nav-link ">
                                        <span class="title">Add New</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="" class="nav-link ">
                                        <span class="title">View All</span>
                                    </a>
                                </li>                                
                            </ul>
                        </li>
                        -->
                        <!-- END SPONSOR SIDE MENU -->

                        <!-- BEGIN OUR SERVICES SIDE MENU -->
                        <!--
                        <li class="nav-item @yield('services-active') ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-cog"></i>
                                <span class="title">Our Services</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="" class="nav-link ">
                                        <span class="title">Add New</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="" class="nav-link ">
                                        <span class="title">View All</span>
                                    </a>
                                </li>                                
                            </ul>
                        </li>
                        -->
                        <!-- END OUR SERVICE SIDE MENU -->
                        
                        <!-- BEGIN SERVICE PROVIDER SIDE MENU -->
                        <!--
                        <li class="nav-item @yield('service-provider-active') ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-user"></i>
                                <span class="title">Service Provider</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="" class="nav-link ">
                                        <span class="title">Add New</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="" class="nav-link ">
                                        <span class="title">View All</span>
                                    </a>
                                </li>                                
                            </ul>
                        </li>
                        -->
                        <!-- END SERVICE PROVIDER SIDE MENU -->
                        
                        <!-- BEGIN MESSAGE SIDE MENU -->
                        
                        <li class="heading">
                            <h3 class="uppercase">Messages</h3>
                        </li>
                        
                        
                        <li class="nav-item @yield('messages-active') ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-envelope"></i>
                                <span class="title">Inbox</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <!--<li class="nav-item  ">
                                    <a href="" class="nav-link ">
                                        <span class="title">Add New</span>
                                    </a>
                                </li> -->
                                <li class="nav-item  ">
                                    <a href="" class="nav-link ">
                                        <span class="title">View All</span>
                                    </a>
                                </li>                                
                            </ul>
                        </li>
                        <!-- END MESSAGE SIDE MENU -->

                        <!-- BEGIN MESSAGE SIDE MENU -->
                        
                        <li class="heading">
                            <h3 class="uppercase">Statistics</h3>
                        </li>
                        
                        
                        <li class="nav-item @yield('pages-active') ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-home"></i>
                                <span class="title">Houses</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="" class="nav-link ">
                                        <span class="title">Header</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="" class="nav-link ">
                                        <span class="title">About</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link ">
                                        <span class="title">Services Title</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link ">
                                        <span class="title">Events Title</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link ">
                                        <span class="title">Contact Title</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item @yield('pages-active') ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-bed"></i>
                                <span class="title">Rooms</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="" class="nav-link ">
                                        <span class="title">Header</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="" class="nav-link ">
                                        <span class="title">About</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link ">
                                        <span class="title">Services Title</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link ">
                                        <span class="title">Events Title</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link ">
                                        <span class="title">Contact Title</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                        <!-- END MESSAGE SIDE MENU -->
                                
                    </ul>
                    <!-- END SIDEBAR MENU -->
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->

            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">

                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="{{ route('dashboard') }}">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>
                                    @yield('page-title')
                                </span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    
                    @yield('content')

            <!--|
                |
                |
                |
                |
                |
                |
            -->
                </div>
                <!-- END CONTENT BODY -->
    
            </div>
            <!-- END CONTENT -->

        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <!--<div class="page-footer-inner"> 2014 &copy; Metronic by keenthemes.
                <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
            </div>-->
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->
        <!--[if lt IE 9]>
            <script src="../assets/global/plugins/respond.min.js"></script>
            <script src="../assets/global/plugins/excanvas.min.js"></script> 
        <![endif]-->
        
        <!-- BEGIN CORE PLUGINS -->
        <script src="{{ URL::asset('ckeditor/ckeditor.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('js/js.cookie.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('js/jquery.blockui.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('js/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('js/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('bootstrap/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{ URL::asset('js/morris/morris.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('js/morris/raphael-min.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{ URL::asset('js/app.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('js/jquery.waypoints.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('js/jquery.counterup.min.js') }}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="{{ URL::asset('js/layout.min.js') }}" type="text/javascript"></script> 
        <script src="{{ URL::asset('js/quick-sidebar.min.js') }}" type="text/javascript"></script> 
        <!-- END THEME LAYOUT SCRIPTS -->

        @yield('scripts')
    </body>

</html>



