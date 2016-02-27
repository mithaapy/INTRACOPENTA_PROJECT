<!DOCTYPE html>                                                                                                                 
<html>
    <head>
        <meta charset="UTF-8">
        <title>EIDWHD | Dashboard</title>
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/elogo.png" />
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        <!-- Notification-->
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/strip/strip.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/strip/strip.css"/>
        <!-- here end notification jquery -->



        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url(); ?>assets/css/font-awesome-ekunbar.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url(); ?>assets/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?php echo base_url(); ?>assets/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo base_url(); ?>assets/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="<?php echo base_url(); ?>assets/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo base_url(); ?>assets/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url(); ?>assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui-1.10.3.custom.min.css" />

    <!-- Attach Coro CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/cor/joyride-2.1.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/cor/demo-style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/cor/mobile.css">

    </head>
  <body class="skin-black"  onload="startTime()">
    <!--<body class="skin-<?php if($userlengkap[0]['ekunbar_theme']!=''){echo $userlengkap[0]['ekunbar_theme'];}else{echo 'black';}?>"  onload="startTime()">
         header logo: style can be found in header.less -->


    <!--<div style="position:fixed; bottom:20px; left:20px; z-index: 1">
        <?php
              $dt = new DateTime();
              echo $dt->format('D, d-m-Y');
             ?>
             <div id="txt" align="left"></div></span>
    </div>-->
        <header class="header">
            <a href="<?php echo base_url(); ?>" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                iBoard
            </a>
                            
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="just-mobile logo-mobile" style=""><a href="<?php echo base_url(); ?>" class="">
                    iBoard
                </a>
                </div>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu" style="display:none">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-danger"><?php if(isset($countnotif[0]['jumlah'])) echo $countnotif[0]['jumlah']; else echo ""; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have <?php if(isset($countnotif[0]['jumlah'])) echo $countnotif[0]['jumlah']; else echo ""; ?> notification</li>
                                 <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                <?php
                                    $tempada = 0;
                                    foreach($notif AS $key){
                                    if($key['status']=="Active"){
                                    $tempada=1;
                                    echo "<li><a href='".base_url()."' class='strip' data-strip-caption='".$key['desc_notif']."'><i class='fa fa-users warning'></i>".$key['title_notif']."</a></li>";
                                    }
                                }
                                if($tempada==0){
                                echo "<li><a href='#' style='color:#666'><i class='fa fa-angle-double-right'></i>No Access</a></li>";
                                }
                                ?>                                      
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">-</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <?php
                            if($admin){
                              
                            echo "<a href='http://eidwhd.com/index.php/frontpage/admin/0'>
                                <i class='fa fa-wrench'></i>
                                <span>Admin </span></a>";
                            }
                            ?>                          
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $name; ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    
                                    <img src="<?php echo base_url(); ?>assets/img/cover/<?php if($pict!=''){ echo $pict;} else {echo 'unknown';} ?>.jpg" alt="User Image" />
                                    
                                    <p>
                                        <?php echo $name; ?>
                                        <small>Member of <?php echo $from; ?></small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?php echo base_url('index.php/frontpage/myprofile') ?>" class="btn btn-default btn-flat"><i class="fa fa-cog"></i>  Profile</a>
                                    </div>
                                    <div class="pull-right">                                        
                                        <a href="logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li><div class="row" style="margin-top:50px;z-index:1;">
     <div class="four columns">
      </div>
      <div class="eight columns">
        <h3 id="numero2" class="someclass"></h3>
      </div>
    </div>
                    </ul>
                </div>
            </nav>
        </header><div class="row" style="margin-left:100px;">
     <div class="four columns">
      </div>
      <div class="eight columns">
        <h3 id="numero3" class="so-cool"></h3>
      </div>
    </div><!-- tutorial notif -->
                                <div class="row" style="margin-left:20px;"><div class="four columns"></div>
                                <div class="eight columns"><h3 id="numero8" class="someclass"></h3></div></div>
                                <!-- sampe sini -->
            <!-- Header Navbar: style can be found in header.less -->
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo base_url(); ?>assets/img/cover/<?php if($pict!=''){ echo $pict;} else {echo 'unknown';} ?>.jpg" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <?php $name; $namaawal = explode(" ", $name); echo $namaawal[0]; ?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> <?php echo $from ?></a>
                        </div>
                    </div>
                    <!-- search form -->
                    <!--<form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>-->
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="<?php echo base_url(); ?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <!--<li>
                            <a href="pages/widgets.html">
                                <i class="fa fa-th"></i> <span>Widgets</span> <small class="badge pull-right bg-green">new</small>
                            </a>
                        </li>-->
                        <li class="treeview">
                        
                                <!-- tutorial notif -->
                                <div class="row" style="margin-left:20px;"><div class="four columns"></div>
                                <div class="eight columns"><h3 id="numero4" class="someclass"></h3></div></div>
                                <!-- sampe sini -->
                            <a href="#">
                                <i class="fa fa-archive"></i>
                                <span>Warehouse</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <?php
                                    $tempada = 0;
                                    foreach($list AS $key){
                                    if($key['group']=="Warehouse"){
                                    $tempada=1;
                                    echo "<li><a href='".$key['link']."'><i class='fa fa-angle-double-right'></i>".$key['name_app']."</a></li>";
                                    }
                                }
                                if($tempada==0){
                                echo "<li><a href='#' style='color:#666'><i class='fa fa-angle-double-right'></i>No Access</a></li>";
                                }
                                ?>
                            </ul>
                        </li>
                        <li class="treeview">
                            <!-- tutorial notif -->
                                <div class="row" style="margin-left:20px;"><div class="four columns"></div>
                                <div class="eight columns"><h3 id="numero5" class="someclass"></h3></div></div>
                                <!-- sampe sini -->
                            <a href="#">
                                <i class="fa fa-truck"></i>
                                <span>Distribution</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <?php
                                    $tempada = 0;
                                    foreach($list AS $key){
                                    if($key['group']=="Transport"){
                                    $tempada=1;
                                    echo "<li><a href='".$key['link']."'><i class='fa fa-angle-double-right'></i>".$key['name_app']."</a></li>";
                                    }
                                }
                                if($tempada==0){
                                echo "<li><a href='#' style='color:#666'><i class='fa fa-angle-double-right'></i>No Access</a></li>";
                                }
                                ?>
                            </ul>
                        </li>
                        <li class="treeview">
                            <!-- tutorial notif -->
                                <div class="row" style="margin-left:20px;"><div class="four columns"></div>
                                <div class="eight columns"><h3 id="numero6" class="someclass"></h3></div></div>
                                <!-- sampe sini -->
                            <a href="#">
                                <i class="fa fa-desktop"></i>
                                <span>Monitoring</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                              <li><a href='contactperson'><i class='fa fa-angle-double-right'></i>Contact Card</a></li>
                                <?php
                                    $tempada = 0;
                                    foreach($list AS $key){
                                    if($key['group']=="iDaman"){
                                    $tempada=1;
                                    echo "<li><a href='".$key['link']."'><i class='fa fa-angle-double-right'></i>".$key['name_app']."</a></li>";
                                    }
                                }
                                if($tempada==0){
                                echo "<li><a href='#' style='color:#666'><i class='fa fa-angle-double-right'></i>No Access</a></li>";
                                }
                                ?>

                            </ul>
                        </li>

                        <?php /*
                          if($from=="EID LDM"){
                               
                            echo "<li class='#'><a href='http://ldm.eidwhd.com/'>
                                <i class='fa fa-ticket'></i><span>Complaint Desk</span>
                                <i class='#'></i></a>
                        </li>";
                          } */
                        ?>

                        <?php
                          if($admin){
                               
                            echo "<li  class='desktop'>
                                <div class='row' style='margin-left:20px;'><div class='four columns'></div>
                                <div class='eight columns'><h3 id='numero7' class='someclass'></h3></div></div><a href='mailto:kuncoro.wicaksono.adi.baroto@ericsson.com'>
                                <i class='fa fa-ticket'></i><span style='margin-right:10px'>E Fast </span><small class='label label-danger'>IT Support</small>
                                <i class='#'></i></a>
                        </li>";
                          }
                        ?>

                        <?php
                          if($admin!="1"){
                            echo "<li  class='desktop'>
                                <div class='row' style='margin-left:20px;'><div class='four columns'></div>
                                <div class='eight columns'><h3 id='numero7' class='someclass'></h3></div></div><a href='mailto:kuncoro.wicaksono.adi.baroto@ericsson.com'>
                                <i class='fa fa-ticket'></i><span style='margin-right:10px'>E Fast </span><small class='label label-danger'>IT Support</small>
                                <i class='#'></i></a>
                        </li>";
                          }
                        ?>
                        
                        <li class="treeview just-mobile">
                            <a href="#">
                                <i class="fa fa-cogs"></i> <span>Setting</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu"><?php
                          if($admin){
                               
                            echo "<li class='just-mobile'><a href='http://efast.eidwhd.com/index.php/main/chartlevel'>
                                <i class='fa fa-ticket'></i><span style='margin-right:10px'>E Fast </span><small class='label label-danger'>IT Support</small>
                                <i class='#'></i></a>
                        </li>";
                          }
                        ?>

                        <?php
                          if($admin!="1"){
                            echo "<li class='just-mobile'><a href='http://efast.eidwhd.com/index.php/main/contactekunbar'>
                                <i class='fa fa-ticket'></i><span style='margin-right:10px'>E Fast </span><small class='label label-danger'>IT Support</small>
                                <i class='#'></i></a>
                        </li>";
                          }
                        ?>
                        
                                <li><a href="iboardfortutorial"><i class="fa fa-question"></i> <span>Tutorial</span></a></li>
                                <li><a href="<?php echo base_url('index.php/frontpage/myprofile') ?>"><i class="fa fa-cog"></i> My Profile</a></li>
                                <li><a href="logout"><i class="fa fa-sign-out"></i> Log Out</a></li>
                            </ul>
                        </li>
                        
                        <li class="desktop" style="margin-top:50px">
                            <a href="iboardfortutorial">
                                <i class="fa fa-question"></i> <span>Help </span>
                                <small class="badge bg-yellow" style="margin-left:10px">See Tutorial</small>
                            </a>
                        </li>
                        
                        <!--<li>
                            <a href="pages/calendar.html">
                                <i class="fa fa-calendar"></i> <span>Calendar</span>
                                <small class="badge pull-right bg-red">3</small>
                            </a>
                        </li>
                        <li>
                            <a href="pages/mailbox.html">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                <small class="badge pull-right bg-yellow">12</small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Examples</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/examples/invoice.html"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
                                <li><a href="pages/examples/login.html"><i class="fa fa-angle-double-right"></i> Login</a></li>
                                <li><a href="pages/examples/register.html"><i class="fa fa-angle-double-right"></i> Register</a></li>
                                <li><a href="pages/examples/lockscreen.html"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
                                <li><a href="pages/examples/404.html"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>
                                <li><a href="pages/examples/500.html"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>
                                <li><a href="pages/examples/blank.html"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>
                            </ul>
                        </li>-->
                    </ul>
                    <ul class="sidebar-menu just-mobile" style="bottom:0;position:absolute;background: #444;width:100%;padding:20px 4%"><li class="active" style="font-size:10px;color: #f6f6f6;width:100%">Ekunbar © EID Supply 2014 | Ericsson Indonesia <br/>Best View with Chrome</li></ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard 
                        <small>Control panel</small>
                    </h1>
                    <div class="row">
                      <div class="six columns"><h2 id="numero1" class="so-awesome"></h2></div>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-12 connectedSortable"> 
                            <!-- Box (with bar chart) -->
                            <div class="box box-info" id="loading-example">
                                <div class="box-header">
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <button class="btn btn-info btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                    </div><!-- /. tools -->
                                    <i class="fa fa-pencil"></i>

                                    <h3 class="box-title">Welcome to New iBoard</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <ul class="todo-list">
<li style="padding-left:5%">Hi everyone!<br/><br/>

<p align="justify">For the last several months (seems like a half of years) we’ve been quietly working behind the scenes to upgrade, create any new application and actually update the design of eidwhd.com to make it easier to use on different screen sizes or any devices such as tablets. We are delighted to present our new “semi” responsive design that changes shape depending on whether you are viewing the site on a desktop computer (or another device) with any browser (You can see this in action if you are on a computer; just use different browser, such as chrome, internet explorer or mozilla and watch how various elements changes on the page.)<br/></p>

<p align="justify">We’ve simplify the list of application to read, and packed a lot more into the category lists (you can see in the left menu), making it easier to find application based on main menu (warehouse, distribution and monitoring/idaman). You’ll also find a handy widget in the top-right page called “My Profile”. Click on that to change your profile (actually we still develop it for more responsive and attractive).<br/></p>

<p align="justify">As with any major change to the site, there will invariably be things that don’t work the way they should. Please take a look around, and “E-Fast” (using it for called me or contact me for a better eidwhd's developed website). And if you still have any problem with this new design of iboard, you can use menu 
                            <a href="iboardfortutorial">
                                <small class="badge bg-yellow" style="margin:0 2px">See Tutorial</small>
                            </a> in the left menu of the page.<br/></p>

<p align="justify">Let’s us know what you like, what you wish would work better, and if anything seems wacky or out of sorts. There will be bugs, and we want to fix them! But first we have to find them. And if you needs any program for simplify your works, you may ask me or my manager. So any help you can give us in E-Fast or directly contact me is greatly appreciated.<br/></p>

<p align="justify">Finally, please join me in thanking Mr. Imanuel Hendarto, my CU Local Distribution Manager, Ericsson Indonesia and website planner and think a head, for give his time and money to creating this website, eidwhd.com.<br/></p>
<br/><br/>
<p align="right" style="font-size:12px;">Ekunbar © EID Supply 2014 | Ericsson Indonesia | Best View with Chrome</p></li>
                                                                             
                                    </ul>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->      




                    

        <!-- add new calendar event modal -->

      <!-- Tip Content -->
    <ol id="joyRideTipContent">
      <li data-class="so-awesome" data-text="Next" data-options="tipLocation:right;tipAnimation:fade">
        <h2>Hello, <?php $name; $namaawal = explode(" ", $name); echo $namaawal[0]; ?></h2>
        <p>Welcome to Dashbord EIDWHD.COM</p>
      </li>
      <li data-id="numero2" data-button="Next" data-options="tipAnimation:fade">
        <h2>Profile</h2>
        <p>When you have logon, your name will always be shown in here</p>
      </li>
      <li data-class="so-too" data-button="Next" data-options="tipAnimation:fade">
        <h2>MENU</h2>
        <p>Now, i will explain to you about Application on eidwhd.com</p>
      </li>
      <li data-class="so-cool" data-button="Next" data-options="tipAnimation:fade">
        <h2>-</h2>
        <p>Now, i will explain to you about Application on eidwhd.com</p>
      </li>
      <li data-button="Next">
        <h2>MENU</h2>
        <p><span  style="align:center">part of application on eidhwd.com divide to 3-Sub Menu : <br/>1. Warehouse<br/>2. Distribution<br/>3. Monitoring</span></p>
      </li>
      <li data-id="numero4" data-button="Next" data-options="tipLocation:right">
        <h2>1. Warehouse</h2>
        <p>You can found application about warehouse in here, such as : <br/>1. iBAST for BAST<br/>2. WH Acc for Accuracy Warehousing, etc.</p>
      </li>
      <li data-id="numero5" data-button="Next" data-options="tipLocation:right">
        <h2>2. Distribution</h2>
        <p>You can found application about Distribution in here, such as :<br/>1. iDist for Distribution<br/>2. iClaim for Claim & Repair<br/>3. etc.</p>
      </li>
      <li data-id="numero6" data-button="Next" data-options="tipLocation:right">
        <h2>3. Monitoring</h2>
        <p>It will help you to simplify monitoring for warehouse, such :<br/>- Looking up updated Contact Person</p>
      </li>
      <li data-id="numero7" data-button="Next" data-options="tipLocation:right">
        <h2>E-Fast</h2>
        <p>This Electronic IT Support will help you to catch any problem in eidwhd.com, so if you have any problem about eidwhd.com you can tell me on here.</p>
      </li>
      <li data-id="numero8" data-button="Close">
        <h2></h2>
        <p>Now what are you waiting for? <br/>Lets Get Started!</p>
      </li>
    </ol>

    <!-- Run the plugin -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/cor/jquery-1.10.1.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/cor/jquery.cookie.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/cor/modernizr.mq.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/cor/jquery.joyride-2.1.js"></script>
    <script>
      $(window).load(function() {
        $('#joyRideTipContent').joyride({
          autoStart : true,
          postStepCallback : function (index, tip) {
          if (index == 2) {
            $(this).joyride('set_li', false, 1);
          }
        },
        modal:true,
        expose: true
        });
      });
    </script>

        
                <script src="<?php echo base_url('assets/js/jquery-ui-1.10.3.min.js') ?>" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?php echo base_url('assets/js/plugins/morris/morris.min.js') ?>" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url('assets/js/plugins/sparkline/jquery.sparkline.min.js') ?>" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url('assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="<?php echo base_url('assets/js/plugins/fullcalendar/fullcalendar.min.js') ?>" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo base_url('assets/js/plugins/jqueryKnob/jquery.knob.js') ?>" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo base_url('assets/js/plugins/daterangepicker/daterangepicker.js') ?>" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url('assets/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url('assets/js/plugins/iCheck/icheck.min.js" type="text/javascript') ?>"></script>

        <!-- AdminLTE App -->
        <script src="<?php echo base_url('assets/js/ekunbar/app.js') ?>" type="text/javascript"></script>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url('assets/js/ekunbar/dashboard.js') ?>" type="text/javascript"></script>     
        
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url('assets/js/ekunbar/demo.js') ?>" type="text/javascript"></script>

    </body>
</html>