<!DOCTYPE html>
<html lang="en" dir="rtl">


<!-- Mirrored from www.radixtouch.in/templates/admin/lorax/source/rtl/pages/examples/login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Nov 2020 20:34:31 GMT -->
<head>
<meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Online Statistics</title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/js/bundles/materialize-rtl/materialize-rtl.min.css')}}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- You can choose a theme from css/styles instead of get all themes -->
    <link href="{{asset('assets/css/styles/all-themes.css')}}" rel="stylesheet" />
	<style>
		.contact100-form-checkbox .form-check .form-check-label,
		.wrap-input100 .material-icons {
			text-align: right;
		}
		.default-select option{
			color:#000;
		}
	</style>
</head>

<body class="light rtl">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30">
                <img class="loading-img-spin" src="{{asset('assets/images/loading.png')}}" width="20" height="20" alt="admin">
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" onClick="return false;" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="#" onClick="return false;" class="bars"></a>
                <a class="navbar-brand" href="">
                    <img src="{{asset('assets/images/logo.png')}}" alt="" />
                    <span class="logo-name">statistics</span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="pull-right">
                    <li>
                        <a href="#" onClick="return false;" class="sidemenu-collapse">
                            <i class="material-icons">reorder</i>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Full Screen Button -->
                    <li class="fullscreen">
                        <a href="javascript:;" class="fullscreen-btn">
                            <i class="fas fa-expand"></i>
                        </a>
                    </li>
                  
                    <li class="dropdown user_profile">
                        <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                            role="button">
                            <img src="{{asset('assets/images/prof.jpg')}}" width="32" height="32" alt="User">
                        </a>
                        <ul class="dropdown-menu pullDown">
                            <li class="body">
                                <ul class="user_dw_menu">
                                   
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <i class="material-icons">feedback</i>Feedback
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <i class="material-icons">help</i>Help
                                        </a>
                                    </li>
                                   
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right">
                        <a href="#" onClick="return false;" class="js-right-sidebar" data-close="true">
                            <i class="fas fa-cog"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <div>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="sidebar-user-panel active">
                        <div class="user-panel">
                            <div class=" image">
                                <img src="{{asset('assets/images/prof.jpg')}}" class="img-circle user-img-circle"
                                    alt="User Image" />
                            </div>
                        </div>
                        <div class="profile-usertitle">
                            <div class="sidebar-userpic-name"> Abdullah Allan </div>
                            <div class="profile-usertitle-job ">Manager </div>
                        </div>
                    </li>
                    <li class="active">
                        <a href="{{url('/index1')}}"  >
                            <i class="fas fa-tachometer-alt"></i>
                            <span>الصفحه الرئيسيه</span>
                        </a>
                    </li>
                   
                      
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <!--<i class="material-icons">location_city</i> -->
                            <i class="material-icons">location_city</i>
                            <span>نابلس</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/index_Nablus')}}">بيانات نابلس</a>
                            </li>
                            <li>
                                <a href="{{url('/unregistered_Nablus')}}">كشف باسماء الغير مسجلين</a>
                            </li>
                            
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                           <i class="material-icons">location_city</i>
                            <span>طولكرم</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/index_Tulkarm')}}">بيانات طولكرم</a>
                            </li>
                           
                            <li>
                                <a href="{{url('/unregistered_Tulkarm')}}">كشف باسماء الغير مسجلين</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                           <i class="material-icons">location_city</i>
                            <span>القدس</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/index_Jerusalem')}}">بيانات القدس</a>
                            </li>
                           
                            <li>
                                <a href="{{url('/unregistered_Jerusalem')}}">كشف باسماء الغير مسجلين</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                           <i class="material-icons">location_city</i>
                            <span>رام الله والبيره</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/index_Ramallah')}}">بيانات رام الله والبيره</a>
                            </li>
                            <li>
                                <a href="{{url('/unregistered_Ramallah')}}">كشف باسماء الغير مسجلين</a>
                            </li>
                            
                        </ul>
                    </li>
                   
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                           <i class="material-icons">location_city</i>
                            <span>الخليل</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/index_Hebron')}}">بيانات الخليل</a>
                            </li>
                            <li>
                                <a href="{{url('/unregistered_Hebron')}}">كشف باسماء الغير مسجلين</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                           <i class="material-icons">location_city</i>
                            <span>بيت لحم</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/index_Bethlehem')}}">بيانات بيت لحم</a>
                            </li>
                            <li>
                                <a href="{{url('/unregistered_Bethlehem')}}">كشف باسماء الغير مسجلين</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                           <i class="material-icons">location_city</i>
                            <span>قلقيليه</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/index_Qalqilya')}}">بيانات قلقيليه</a>
                            </li>
                            <li>
                                <a href="{{url('/unregistered_Qalqilya')}}">كشف باسماء الغير مسجلين</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                           <i class="material-icons">location_city</i>
                            <span>سلفيت</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/index_Salfit')}}">بيانات سلفيت</a>
                            </li>
                            <li>
                                <a href="{{url('/unregistered_salfit')}}">كشف باسماء الغير مسجلين</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                           <i class="material-icons">location_city</i>
                            <span>اريحا</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/index_Jericho')}}">بيانات اريحا</a>
                            </li>
                            <li>
                                <a href="{{url('/unregistered_Jericho')}}">كشف باسماء الغير مسجلين</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                           <i class="material-icons">location_city</i>
                            <span>جنين</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/index_jenin')}}">بيانات جنين</a>
                            </li>
                            <li>
                                <a href="{{url('/unregistered_Jenin')}}">كشف باسماء الغير مسجلين</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                           <i class="material-icons">location_city</i>
                            <span>طوباس</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/index_Tubas')}}">بيانات طوباس</a>
                            </li>
                            <li>
                                <a href="{{url('/unregistered_Tubas')}}">كشف باسماء الغير مسجلين</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('/gropTable')}}"  class="menu-toggle">
                            <i class="fas fa-table"></i>
                            <span>مقارنه بيانات بين المحاظات</span>
                        </a>
                    </li>
                   
                    <li>
                        <a href="{{url('/floatChart')}}"  class="menu-toggle">
                            <i class="fas fa-chart-line"></i>
                            <span>نمو قاعده البيانات</span>
                        </a>
                      
                    </li>
                    <li>
                        <a href="{{url('/dateTable')}}"  class="menu-toggle">
                           <i class="material-icons">location_city</i>
                            <span>مواعيد جمع البيانات</span>
                        </a>
                        
                    </li>
                   
                </ul>
            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation">
                    <a href="#skins" data-toggle="tab" class="active">SKINS</a>
                </li>
                <li role="presentation">
                    <!-- <a href="#settings" data-toggle="tab">SETTINGS</a> -->
                </li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane in active in active stretchLeft" id="skins">
                    <div class="demo-skin">
                        <div class="rightSetting">
                           
                        </div>
                        <div class="rightSetting">
                            <p>SIDEBAR MENU COLORS</p>
                            <button type="button"
                                class="btn btn-sidebar-light btn-border-radius p-l-20 p-r-20">Light</button>
                            <button type="button"
                                class="btn btn-sidebar-dark btn-default btn-border-radius p-l-20 p-r-20">Dark</button>
                        </div>
                        <div class="rightSetting">
                            <p>THEME COLORS</p>
                            <button type="button"
                                class="btn btn-theme-light btn-border-radius p-l-20 p-r-20">Light</button>
                            <button type="button"
                                class="btn btn-theme-dark btn-default btn-border-radius p-l-20 p-r-20">Dark</button>
                        </div>
                        <div class="rightSetting">
                            <p>SKINS</p>
                            <ul class="demo-choose-skin choose-theme list-unstyled">
                                <li data-theme="black" class="actived">
                                    <div class="black-theme"></div>
                                </li>
                                <li data-theme="white">
                                    <div class="white-theme white-theme-border"></div>
                                </li>
                                <li data-theme="purple">
                                    <div class="purple-theme"></div>
                                </li>
                                <li data-theme="blue">
                                    <div class="blue-theme"></div>
                                </li>
                                <li data-theme="cyan">
                                    <div class="cyan-theme"></div>
                                </li>
                                <li data-theme="green">
                                    <div class="green-theme"></div>
                                </li>
                                <li data-theme="orange">
                                    <div class="orange-theme"></div>
                                </li>
                            </ul>
                        </div>
                       
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane stretchRight" id="settings">
                   
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">مقارنه بعض القيم</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="{{url('/index1')}}">
                                    <i class="fas fa-home"></i> الصفحه الرئيسيه</a>
                            </li>
                            <!-- <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Tables</a>
                            </li>
                            <li class="breadcrumb-item active">Group</li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <!-- <h2>
                                Row Group
                            </h2> -->
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="#" onClick="return false;">Action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Another action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <table id="tableGroup" class="table table-bordered table-hover  dataTable"
                                style="width: 100%">
                                <thead>
                                    <tr>
                                        <th class="align-center">نسبه الذكور</th>
                                        <th class="align-center">نسبه الاناث</th>
                                        <th class="align-center">نسبه الشباب</th>
                                        <th class="align-center">نسبه الاعاقه</th>
                                        <th class="align-center">نسبه العاطلين عن العمل</th>
                                        <th class="align-center">نسبه الاميه</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>نابلس</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>الخليل</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>جنين</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>طوباس</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>طولكرم</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>رام الله و البيره</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>اريحا</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>قلقيليه</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>بيت لحم</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>القدس</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Plugins Js -->
    <script src="{{asset('assets/js/app.min.js')}}"></script>
    <script src="{{asset('assets/js/table.min.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{asset('assets/js/admin.js')}}"></script>
    <script src="{{asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>
    <!-- Demo Js -->
</body>



</html>