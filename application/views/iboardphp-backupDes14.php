                                                                                                                                
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
        <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url('assets/css/font-awesome-ekunbar.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url('assets/css/ionicons.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?php echo base_url('assets/css/morris/morris.css') ?>" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo base_url('assets/css/jvectormap/jquery-jvectormap-1.2.2.css') ?>" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="<?php echo base_url('assets/css/fullcalendar/fullcalendar.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo base_url('assets/css/daterangepicker/daterangepicker-bs3.css') ?>" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo base_url('assets/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url('assets/css/AdminLTE.css') ?>" rel="stylesheet" type="text/css" />
        
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
                        <li class="dropdown notifications-menu">
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
                               
                            echo "<li class='desktop'><a href='http://efast.eidwhd.com/index.php/main/chartlevel'>
                                <i class='fa fa-ticket'></i><span style='margin-right:10px'>E Fast </span><small class='label label-danger'>IT Support</small>
                                <i class='#'></i></a>
                        </li>";
                          }
                        ?>

                        <?php
                          if($admin!="1"){
                            echo "<li class='desktop'><a href='http://efast.eidwhd.com/index.php/main/contactekunbar'>
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
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard 
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        
                        <div class="col-lg-3 col-xs-6">
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
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="<?php echo base_url('idist/index.php/main/chartfrontpage?due_date='.date('Y').'-W'.(date('W')-1).'&dsp=DSC&kpi=ericsson') ?>" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red" style="background-color: #CE0000 !important;">
                                <div class="inner">
                                    <span align="right" style="float:right; margin-top:-5px; font-size:12px;">Total : <?php echo $idist[0]['MRSCH']; ?> MR<br/>Week <?php echo $idist[0]['WEEKNYA']; ?></span>
                                    <h3>                                        
                                        <?php 
                                        $listTtl = "";
                                        $listFail = "";
                                        $listPct = 0;
                                        foreach ($idist as $key) {
                                            $listTtl .= $key['MRSCH'];
                                            $listFail .= $key['MRSCHFAIL'];
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
                                        SCH
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="<?php echo base_url('idist/index.php/main/chartfrontpage?due_date='.date('Y').'-W'.(date('W')-1).'&dsp=SCH&kpi=ericsson') ?>" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
<div class="col-lg-3 col-xs-6">
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
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="<?php echo base_url('idist/index.php/main/chartfrontpage?due_date='.date('Y').'-W'.(date('W')-1).'&dsp=DGF&kpi=ericsson') ?>" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-orange" style="background-color: #F60 !important;">
                                <div class="inner">
                                    <span align="right" style="float:right; margin-top:-5px; font-size:12px;">Total : <?php echo $idist[0]['MRTNT']; ?> MR<br/>Week <?php echo $idist[0]['WEEKNYA']; ?></span>
                                    <h3>
                                        <?php 
                                        $listTtl = "";
                                        $listFail = "";
                                        $listPct = 0;
                                        foreach ($idist as $key) {
                                            $listTtl .= $key['MRTNT'];
                                            $listFail .= $key['MRTNTFAIL'];
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
                                        TNT
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="<?php echo base_url('idist/index.php/main/chartfrontpage?due_date='.date('Y').'-W'.(date('W')-1).'&dsp=TNT&kpi=ericsson') ?>" class="small-box-footer">
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

                                        $ekunbar_mom .= "                                 
                                        <li>
                                            <span class='handle'>
                                                <i class='fa fa-ellipsis-v'></i>
                                                <i class='fa fa-ellipsis-v'></i>
                                            </span>  
                                            <span class='text' style='vertical-align:middle;width:77%;font-weight:normal'><b>".$key['title']."</b></i><br/>".$string = $key['update']."</span>
                                            <small class='label label-info'><i class='fa fa-clock-o'></i> ".$key['date_complaint']."</small>
                                            <small class='label label-danger'><i class='fa fa-clock-o'></i> ".$key['DifferenceInDays']." Days</small>  <div class='tools'>
                                            <a  onclick=\"Edit('".$key['id_complaint']."','".$key['date_complaint']."','".$key['title']."','".$key['site']."','".$key['category']."','".$key['task']."','".$key['person_responsibility']."','".$key['person_report']."','".$key['due_date']."','".$key['update_date']."','".$key['status']."','".$key['dsp']."','".$key['textnya']."')\" title='Edit'>
                                            <span style='cursor:pointer' class='fa fa-edit'></span></a> 
                                            
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
<div id="dialog2" title="Edit MoM" style="font-size: 12px; padding:10px 50px 20px 50px">
            <form id='edit' name='edit' action='<?php echo base_url(); ?>index.php/frontpage/editMoM' method='post'>
                <table style="font-size:12px">
                    <tr>
                        <td style="width:150px"><label>Title</label></td>
                        <td><input style="width:250px" type="text" id="title" name="title"><input type="hidden" id="id_complaint" name="id_complaint"></td>
                    </tr>
                    <tr>
                        <td><label>Site</label></td>
                        <td><input type="text" id="site" name="site"></td>
                    </tr>
                    <tr>
                        <td><label>Category</label></td>
                        <td><input type="text" id="category" name="category"></td>
                    </tr>
                    <tr style="vertical-align:top">
                        <td><label>Task</label></td>
                        <td><textarea type="text" id="task" name="task" cols="50" rows="2"></textarea></td>
                    </tr>
                    <tr style="vertical-align:top">
                        <td><label>Update</label></td>
                        <td><textarea type="text" id="textnya" name="textnya" cols="50" rows="7"></textarea></td>
                    </tr>
                    <tr>
                        <td><label>Person responsibility</label></td>
                        <td><input type="text" id="person_responsibility" name="person_responsibility"></td>
                    </tr>
                    <tr>
                        <td><label>Person report</label></td>
                        <td><input type="text" id="person_report" name="person_report"></td>
                    </tr>
                    <tr>
                        <td><label>Status</label></td>
                        <td>
                            <select id="status" name="status">
                                <option value="Open">Open</option>
                                <option value="On Progress">On Progress</option>
                                <option value="Closed">Closed</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Division</label></td>
                        <td>
                            <select id="dsp" name="dsp">
                                <option value="EID">EID</option>
                                <option value="CEVA">CEVA</option>
                                <option value="DGF">DGF</option>
                                <option value="DSC">DSC</option>
                                <option value="SCH">SCH</option>
                                <option value="TNT">TNT</option>
                                <option value="PSS">PSS</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="float:right"><input type="submit" value="Save" class="btn btn-danger"></td>
                    </tr>
                </table>
            </form>
        </div>
                                                

        
                            <script type="text/javascript">
        function Add(){
            $("#dialog").dialog("open");
        }

        function Edit(id_complaint,date_complaint,title,site,category,task,person_responsibility,person_report,due_date,update_date,status,dsp,update){
            $("#dialog2").dialog("open");
            $('#id_complaint').val(id_complaint);
            $('#date_complaint').val(date_complaint);
            $('#title').val(title);
            $('#site').val(site);

            $('#category').val(category);
            $('#task').val(task);
            $('#person_responsibility').val(person_responsibility);
            $('#person_report').val(person_report);
            $('#date_complaint').val(date_complaint);
            $('#due_date').val(due_date);
            $('#update_date').val(update_date);
            $('#status').val(status);
            $('#dsp').val(dsp);
            $('#textnya').val(update);


        }

        $(document).ready(function(){
            $("#dialog").dialog({
                width:'auto',
                autoOpen:false,
                show: {
                    effect: "drop",
                    duration: 500
                },
                hide: {
                    effect: "drop",
                    duration: 500
                }
            });

            $("#dialog2").dialog({
                width:'auto',
                autoOpen:false,
                show: {
                    effect: "drop",
                    duration: 500,
                    direction: "right"
                },
                hide: {
                    effect: "drop",
                    duration: 500,
                    direction: "right"
                }
            });
        });
    </script>
                        </section><!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        
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
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            