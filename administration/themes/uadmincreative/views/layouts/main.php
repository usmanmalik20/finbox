<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <!-- start: Meta -->
        <meta charset="utf-8">
        <title>Universal Admin Dashboard theme | BLANKing</title>
        <meta name="description" content="Universal Admin Dashboard  theme! it can be used with any kinda website and portals for admin controls">
        <meta name="author" content="Majoo">
        <meta name="keyword" content="universal admin, Dashboard, Bootstrap, Admin, Template, Theme, ResponsiveS">
        <!-- end: Meta -->
        <link id="page_favicon" href="favicon.ico" rel="icon" type="image/x-icon" />
        <!-- start: CSS -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/bootstrap/css/bootstrap-flat.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link id="base-style" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" rel="stylesheet">
        <link id="base-style" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style-responsive.css" rel="stylesheet">


        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/common.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/bootstrap/js/bootstrap.min.js"></script>



    </head>
    <body>
        <!-- start: Header -->
        <div class="navbar  navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a><!-- nav-collapse -->  
                    <button type="button" class="btn btn-navbar visible-phone" id="menu-toggler">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/logo_small.png" class="pull-left nav_logo">
                    <a class="brand" href=""><span> Universal Administrator</span></a>
                    <!-- start: Header Menu -->
                    <div class="nav-collapse collapse header-nav">
                       
                        <ul class="nav  pull-right">
                            <li class="dropdown">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="badge">13</span>
                                    <i class="icon-tasks"></i>
                                </a>


                                <ul class="dropdown-menu">

                                    <li >
                                        <a tabindex="-1" href="#">You have <strong>13</strong> tasks in progress</a>
                                    </li>


                                    <li>
                                        <a>
                                            <strong>Prepare Report</strong><span class="pull-right">30%</span>
                                            <div class="progress progress-danger active">
                                                <div class="bar" style="width: 30%;"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <strong>Make new update</strong><span class="pull-right">40%</span>
                                            <div class="progress progress-info active">
                                                <div class="bar" style="width: 40%;"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <strong>Fix critical bugs</strong><span class="pull-right">80%</span>
                                            <div class="progress progress-striped active">
                                                <div class="bar" style="width: 80%;"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <strong>Complete project</strong><span class="pull-right">5%</span>
                                            <div class="progress progress-success active">
                                                <div class="bar" style="width: 5%;"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <strong>Others</strong><span class="pull-right">15%</span>
                                            <div class="progress progress-warning active">
                                                <div class="bar" style="width: 15%;"></div>
                                            </div>
                                        </a>
                                    </li>


                                    <li class="nav-taks-footer">
                                        <a tabindex="-1" href="#">View all tasks
                                        </a>
                                    </li>

                                </ul>

                            </li>
                            <li class="divider-vertical"></li>
                            <li class="dropdown nav-messages">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="badge">8</span>
                                    <i class="icon-envelope"></i>
                                </a>


                                <ul class="dropdown-menu">

                                    <li class="nav-messages-header">
                                        <a tabindex="-1" href="#">You have <strong>8</strong> new messages</a>
                                    </li>


                                    <li class="nav-message-body">
                                        <a>
                                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/shaan.png" alt="User">
                                            <div>
                                                <small class="pull-right">Just Now</small>
                                                <strong>majoo bla</strong>
                                            </div>
                                            <div>
                                                Lorem ipsum dolor sit amet, consectetur...
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-message-body">
                                        <a>
                                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/content/half.png" alt="User">
                                            <div>
                                                <small class="pull-right">Just Now</small>
                                                <strong>shawn kan</strong>
                                            </div>
                                            <div>
                                                Lorem ipsum dolor sit amet, consectetur...
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-message-body">
                                        <a>
                                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/content/smile.png" alt="User">
                                            <div>
                                                <small class="pull-right">Just Now</small>
                                                <strong>John Doe</strong>
                                            </div>
                                            <div>
                                                Lorem ipsum dolor sit amet, consectetur...
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-message-body">
                                        <a>
                                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/content/shaan.png" alt="User">
                                            <div>
                                                <small class="pull-right">Just Now</small>
                                                <strong>lol man</strong>
                                            </div>
                                            <div>
                                                Lorem ipsum dolor sit amet, consectetur...
                                            </div>
                                        </a>
                                    </li>


                                    <li class="nav-messages-footer">
                                        <a tabindex="-1" href="inbox2.html">View all messages
                                        </a>
                                    </li>

                                </ul>

                            </li>
                            <li class="divider-vertical"></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <span class="badge">9</span>
                                    <i class="icon-bell icon-white warning-sign"></i>
                                </a>
                                <ul class="dropdown-menu notifications">
                                    <li>
                                        <a href="#"> <span >You have 11 notifications</span></a>
                                    </li>	
                                    <li>
                                        <a href="#">
                                            + <i class="icon-user icon-white icon-2x"></i> <span class="message">New user registration</span> <span class="time">1 min</span> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            + <i class="icon-user icon-white icon-2x"></i> <span class="message">New comment</span> <span class="time">7 min</span> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            + <i class="icon-user icon-white icon-2x"></i> <span class="message">New comment</span> <span class="time">8 min</span> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            + <i class="icon-user icon-white icon-2x"></i> <span class="message">New comment</span> <span class="time">16 min</span> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            + <i class="icon-user icon-white icon-2x"></i> <span class="message">New user registration</span> <span class="time">36 min</span> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            + <i class="icon-user icon-white icon-2x"></i> <span class="message">2 items sold</span> <span class="time">1 hour</span> 
                                        </a>
                                    </li>
                                    <li class="warning">
                                        <a href="#">
                                            - <i class="icon-user icon-white icon-2x"></i> <span class="message">User deleted account</span> <span class="time">2 hour</span> 
                                        </a>
                                    </li>
                                    <li class="warning">
                                        <a href="#">
                                            - <i class="icon-user icon-white icon-2x"></i> <span class="message">Transaction was canceled</span> <span class="time">6 hour</span> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            + <i class="icon-user icon-white icon-2x"></i> <span class="message">New comment</span> <span class="time">yesterday</span> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            + <i class="icon-user icon-white icon-2x"></i> <span class="message">New user registration</span> <span class="time">yesterday</span> 
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-menu-sub-footer">View all notifications</a>
                                    </li>	
                                </ul>
                            </li>
                            <!-- start: Message Dropdown -->
                            <li class="divider-vertical"></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <img  width="27" height="27"  class="img-circle" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/shaan.png" >     Hello Shawn
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="public_profile.html"><i class="icon-user icon-white"></i> Profile</a></li>
                                    <li><a href="login.html"><i class="icon-off icon-white"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                    <!-- end: Header Menu -->

                </div>
            </div>
        </div>
        <!-- start: Header -->
        <div class="wrap">
           

            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span1">

                        <!-- start: Main Menu -->
                        <div id="sidebar-nav">
                            <ul id="dashboard-menu">
                                <li >

                                    <a href="index.html">
                                        <i class="icon-home"></i>
                                        <span>Home</span>
                                    </a>
                                </li>            
                                <li>

                                    <a href="charts.html">
                                        <i class="icon-signal"></i>
                                        <span>Charts</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-toggle" href="#">
                                        <i class="icon-group"></i>
                                        <span>Users</span>

                                    </a>
                                    <ul class="submenu">
                                        <li><a href="users.html"><i class="icon-list icon-2x"></i> User list</a></li>
                                        <li><a href="profile_edit.html"><i class="icon-cog"></i> Settings</a></li>
                                        <li><a href="public_profile.html"><i class="icon-star"></i> User profile</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="dropdown-toggle" href="#">
                                        <i class="icon-edit"></i>
                                        <span>Forms</span>

                                    </a>
                                    <ul class="submenu">
                                        <li><a href="forms.html"><i class="icon-edit-sign"></i> Form</a></li>
                                        <li><a href="form_wizard.html"><i class="icon-arrow-right"></i> Wizard</a></li>
                                    </ul>
                                </li>
                                <li >

                                    <a href="gallery-grid.html">
                                        <i class="icon-picture"></i>
                                        <span>Gallery</span>
                                    </a>
                                </li>
                                <li>

                                    <a href="calendar.html">
                                        <i class="icon-calendar-empty"></i>
                                        <span>Calendar</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="database.html">
                                        <i class="icon-th-large"></i>
                                        <span>Tables</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <!-- end: Main Menu -->


                    <!-- start: Content -->
                    <div id="content" class="span11" >
                        <ul class="breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="index.html">Dashboard</a>
                                <span class="icon-angle-right"></span>
                            </li>
                            <li><a href="#">Admin pages</a>
                                <span class="icon-angle-right"></span>
                            </li>
                            <li><a href="blank.html">Blank Page</a>
                            </li>
                        </ul>
<?php echo $content; ?>
                    </div>

                </div>
            </div><!--/#content.span11-->
         
        
            
            
            
            <div class="clearfix"></div>
            <div class="container-fluid m-t-large">
                
                
                <footer>
                    <p>
                        <span class="pull-left">© <a href="" target="_blank">uExel</a> 2013</span>
                        <span class="hidden-phone pull-right">Powered by: <a href="#">uAdmin Dashboard</a></span>
                    </p>
                    <p class="text-center">
                        <a class="btn btn-mini btn-circle btn-facebook " href="#"><i class="icon-facebook"></i></a>
                        <a class="btn btn-mini btn-circle btn-gplus " href="#"><i class="icon-google-plus"></i></a>
                        <a class="btn btn-mini btn-circle btn-twitter " href="#"><i class="icon-twitter"></i></a>

                    </p>
                </footer>
            </div>


        </div>




    </body>

</html>
