<!DOCTYPE html>                                                                                                                 
<html>
    <head>
        <meta charset="UTF-8">
        <title>EIDWHD | Dashboard</title>
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/elogo.png" />
        <meta content='width=device-width, initial-scale=1, m aximum-scale=1, user-scalable=no' name='viewport'>

        <!-- Notification-->
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/strip/strip.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/strip/strip.css"/>
        <!-- here end notification jquery -->

<style>
/* Paste this css to your style sheet file or under head tag */
/* This only works with JavaScript, 
if it's not present, don't show loader */
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(http://eidwhd.com/assets/img/loading.gif) center no-repeat #fff;
}
</style>


<script>
	//paste this code under head tag or in a seperate js file.
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
</script>


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


        <script>
            function startTime() {
                var today=new Date();
                var h=today.getHours();
                var m=today.getMinutes();
                var s=today.getSeconds();
                m = checkTime(m);
                s = checkTime(s);
                document.getElementById('txt').innerHTML = h+":"+m+":"+s;
                var t = setTimeout(function(){startTime()},500);
                }
        
            function checkTime(i) {
                if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
                return i;
            }
        </script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-<?php if($userlengkap[0]['ekunbar_theme']!=''){echo $userlengkap[0]['ekunbar_theme'];}else{echo 'black';}?>"  onload="startTime()">
        <!-- header logo: style can be found in header.less -->


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
            <!-- Header Navbar: style can be found in header.less -->
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
                        <li class="dropdown notifications-menu" style="<?php if($countnotif[0]['jumlah']=='0'){echo 'display:none';}?>">
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
                                    echo "<li><a href='".base_url()."assets/img/notification/".$key['images'].".png' class='strip' data-strip-caption='".$key['desc_notif']."'><i class='fa fa-users warning'></i>".$key['title_notif']."</a></li>";
                                    }
                                }
                                if($tempada==0){
                                echo "<li><a href='#' style='color:#666'><i class='fa fa-angle-double-right'></i>No Notification</a></li>";
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
                              
                            echo "<a href='http://eidwhd.com/index.php/frontpage/adminekunbar/0'>
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
                                        <a href="<?php echo base_url(); ?>index.php/frontpage/myprofile" class="btn btn-default btn-flat"><i class="fa fa-cog"></i>  Profile</a>
                                    </div>
                                    <div class="pull-right">                                        
                                        <a href="logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
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

                        <?php 
                          foreach($listGroupUser AS $key){
                             if($key['group']=="ekunbardata"){

                             echo "<li class='treeview'><a href='#'><i class='fa fa-refresh'></i><span>Data Refreshment</span>";
                             echo "<i class='fa fa-angle-left pull-right'></i></a>";
                             echo "<ul class='treeview-menu'>";
                                    $tempada = 0;
                                    foreach($list AS $key){
                                    if($key['group']=="ekunbardata"){
                                    $tempada=1;
                                    echo "<li><a href='".$key['link']."'>".$key['name_app']."</a></li>";
                                    }
                                }
                                if($tempada==0){
                                echo "<li><a href='#' style='color:#666'><i class='fa fa-angle-double-right'></i>No Access</a></li>";
                                }
                            echo "</ul></li>";
                            }}
                        ?>
                        <?php /*
                          if($from=="EID LDM"){
                               
                            echo "<li class='#'><a href='http://ldm.eidwhd.com/'>
                                <i class='fa fa-ticket'></i><span>Complaint Desk</span>
                                <i class='#'></i></a>
                        </li>";
                          } */
                        ?>

                        <?php
                            echo "<li class='#'><a href='../ekunbarwidget/iboardekunbar'>
                                <i class='glyphicon glyphicon-dashboard'></i><span style='margin-right:10px'>Widget </span><small class='label label-success'>New</small><i class='#'></i></a></li>";
                        ?>

                        <?php
                          if($admin){
                               
                            echo "<li class='desktop'><a href='mailto:kuncoro.wicaksono.adi.baroto@ericsson.com'>
                                <i class='fa fa-ticket'></i><span style='margin-right:10px'>E Fast </span><small class='label label-danger'>IT Support</small>
                                <i class='#'></i></a>
                        </li>";
                          }
                        ?>

                        <?php
                          if($admin!="1"){
                            echo "<li class='desktop'><a href='mailto:kuncoro.wicaksono.adi.baroto@ericsson.com'>
                                <i class='fa fa-ticket'></i><span style='margin-right:10px'>E Fast </span><small class='label label-danger'>IT Support</small>
                                <i class='#'></i></a>
                        </li>";
                          }
                        ?>
                        <li class="treeview just-mobile" style="width:100%">
                            <a href="#">
                                <i class="fa fa-cogs"></i> <span>Setting</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu"><?php
                          if($admin){
                               
                            echo "<li><a href='mailto:kuncoro.wicaksono.adi.baroto@ericsson.com'>
                                <i class='fa fa-ticket'></i><span style='margin-right:10px'>E Fast </span><small class='label label-danger'>IT Support</small>
                                <i class='#'></i></a>
                        </li>";
                          }
                        ?>

                        <?php
                          if($admin!="1"){
                            echo "<li><a href='mailto:kuncoro.wicaksono.adi.baroto@ericsson.com'>
                                <i class='fa fa-ticket'></i><span style='margin-right:10px'>E Fast </span><small class='label label-danger'>IT Support</small>
                                <i class='#'></i></a>
                        </li>";
                          }
                        ?>
                        
                                <li><a href="iboardfortutorial"><i class="fa fa-question"></i> <span>Tutorial</span></a></li>
                                <li><a href="<?php echo base_url() ?>index.php/frontpage/myprofile"><i class="fa fa-cog"></i> My Profile</a></li>
                                <li><a href="logout"><i class="fa fa-sign-out"></i> Log Out</a></li>
                            </ul><br/><br/>
                        </li>
                        
                        <li class="desktop" style="margin-top:50px">
                            <a href="iboardfortutorial">
                                <i class="fa fa-question"></i> <span>Help </span>
                                <small class="badge bg-yellow" style="margin-left:10px">See Tutorial</small>
                            </a>
                        </li>
                        
                        <!--<li>
                            <a href="pages/mailbox.html">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                <small class="badge pull-right bg-red">12</small>
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
                <div class="se-pre-con"></div>
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Material Request 
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Stat box) -->
                    <div class="row" style='margin-bottom:10px'>
                        <div class="col-lg-4 col-xs-6">
                             <div class="input-group">
                                  <input type="text" class="form-control">
                                  <span class="input-group-btn">
                                      <button class="btn btn-info btn-flat" type="button">Go!</button>
                                  </span>
                             </div>
                        </div>
                        <div class="col-lg-8 col-xs-6">
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-lg-4 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-blue" >
                                <div class="inner">
                                    <span align="right" style="float:right; margin-top:-5px; font-size:12px;">Total : <?php echo $idist[0]['MRDSC']; ?> MR<br/>Week <?php echo $idist[0]['WEEKNYA']; ?></span>
                                    <h3>
                                        <?php 
                                        $listTtl = "";
                                        $listFail = "";
                                        $listPct = 0;
                                        foreach ($idist as $key) {
                                            $listTtl .= $key['MRDSC'];
                                            $listFail .= $key['MRDSCFAIL'];
                                        }
                                        if($listFail!=0){                           
                                           $ltemp = 100-number_format(($listFail/$listTtl),2)*100;
                                           echo $ltemp ;
                                        }
                                        else
                                        {
                                            echo 100;
                                        }
                                        ?>
                                        <sup style="font-size: 20px">%</sup>
                                    </h3>
                                    <p>
                                        DSC
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="glyphicon glyphicon-stats"></i>
                                </div>
                                <a href="<?php echo base_url('idist/index.php/main/detailweekdata?due_date='.date('Y').'-W'.$idist[0]['WEEKNYA'].'&dsp=DSC&kpi=ericsson') ?>" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-4 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow" style="background-color: #FFCC00 !important;">
                                <div class="inner">
                                    <span align="right" style="float:right; margin-top:-5px; font-size:12px;">Total : <?php echo $idist[0]['MRDGF']; ?> MR<br/>Week <?php echo $idist[0]['WEEKNYA']; ?></span>
                                    <h3>
                                        <?php 
                                        $listTtl = "";
                                        $listFail = "";
                                        $listPct = 0;
                                        foreach ($idist as $key) {
                                            $listTtl .= $key['MRDGF'];
                                            $listFail .= $key['MRDGFFAIL'];
                                        }
                                        if($listFail!=0){                          
                                           $ltemp = 100-number_format(($listFail/$listTtl),2)*100;
                                           echo $ltemp ;
                                        }
                                        else
                                        {
                                            echo 100;
                                        }
                                        ?><sup style="font-size: 20px">%</sup>
                                    </h3>
                                    <p>
                                        DGF
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="glyphicon glyphicon-stats"></i>
                                </div>
                                <a href="<?php echo base_url('idist/index.php/main/detailweekdata?due_date='.date('Y').'-W'.$idist[0]['WEEKNYA'].'&dsp=DGF&kpi=ericsson') ?>" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->

                        <div class="col-lg-4 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow" style="background-color: #FFF !important;color:#333 !important;">
                                <div class="inner">
                                    <p style='font-size:14px' class="box-title">Last Login<br/><?php echo $lastlog[0]['when']; ?></p>
                                    <?php $youandeidwhd = $yourlogin[0]['totallogin']/$yourlogin[0]['totalsemualogin']; $persentaselogin = $youandeidwhd*100; ?> <h3 align='right' style='margin-top:-50px'><?php echo number_format($persentaselogin,0)."%";?> </h3>
                                     <?php echo "<div class='progress sm progress-striped active'>
                                                    <div class='progress-bar progress-bar-success' style='width: ".number_format($persentaselogin,0)."%'></div>";?>

                                </div></div>
                                <div class="icon">
                                    <i class="glyphicon glyphicon-signal"></i>
                                </div>
                                <a href='loginlog' class="small-box-footer" style="color:#444 !important">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->

                    <!-- top row -->
                    <div class="row">
                        <div class="col-xs-12 connectedSortable">
                            
                        </div><!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-12 connectedSortable"> 
                            <!-- Box (with bar chart) -->
                            <div class="box box-danger" id="loading-example">
                                <div class="box-header">
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <button class="btn btn-danger btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-danger btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                    </div><!-- /. tools -->
                                    <i class="fa fa-pencil"></i>

                                    <h3 class="box-title">MoM</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <ul class="todo-list">
                                        <?php 
                                        $listdate_complaint = "";
                                        $listupdate = "";
                                        $listtitle = "";
                                        $ekunbar_mom = "";
                                        $idcomplaint = "";
                                        foreach ($mom as $key) {
                                            $listdate_complaint .= $key['date_complaint'];
                                            $listupdate .= $key['update'];
                                            $listtitle .= $key['title'];
                                            $idcomplaint .= $key['id_complaint'];
                                            if($key['dsp']=='EID'){
                                               $dspdilih='dash';
                                            }else{$dspdilih=$key['dsp'];}

                                        $ekunbar_mom .= "                                 
                                        <li>
                                            <span class='handle'>
                                                <i class='fa fa-ellipsis-v'></i>
                                                <i class='fa fa-ellipsis-v'></i>
                                            </span>  
                                            <span class='text' style='vertical-align:middle;width:77%;font-weight:normal'><b>".$key['title']."</b></i><br/>".$string = $key['update']."</span>
                                            <small class='label label-info'><i class='fa fa-clock-o'></i> ".$key['date_complaint']."</small>
                                            <small class='label label-danger'><i class='fa fa-clock-o'></i> ".$key['DifferenceInDays']." Days</small>  <div class='tools'>
                                            
                                            <a href='http://warehouse.eidwhd.com/index.php/dash/newmom".$dspdilih."/".$key['id_complaint']."/".$key['dsp']."'><span style='cursor:pointer' class='fa fa-edit'></span></a> 
                                            
                                            </div>                                          
                                        </li>
                                        ";
                                        }
                                        if($listupdate!=''){
                                            echo $ekunbar_mom;  
                                        }
                                        else{
                                            echo "<li>
                                            <span class='handle'>
                                                <i class='fa fa-ellipsis-v'></i>
                                                <i class='fa fa-ellipsis-v'></i>
                                            </span>                                   
                                            <span class='text' style='vertical-align:middle'>Empty<br/></span></li>";
                                        }                                       
                                        ?>                                        
                                    </ul>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->   
                         
                        </section><!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


<!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>assets/js/AdminLTE/app.js" type="text/javascript"></script>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url(); ?>assets/js/AdminLTE/dashboard.js" type="text/javascript"></script>     
        
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url(); ?>assets/js/AdminLTE/demo.js" type="text/javascript"></script>

    </body>
</html>