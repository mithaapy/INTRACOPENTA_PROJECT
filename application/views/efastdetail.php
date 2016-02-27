<!DOCTYPE html>                                                                                                                 
<html>
    <head>
        <meta charset="UTF-8">
        <title>EIDWHD | EFAST</title>
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
                        <li>
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
                               
                            echo "<li class='active desktop'><a href='http://efast.eidwhd.com/index.php/main/chartlevel'>
                                <i class='fa fa-ticket'></i><span style='margin-right:10px'>E Fast </span><small class='label label-danger'>IT Support</small>
                                <i class='#'></i></a>
                        </li>";
                          }
                        ?>

                        <?php
                          if($admin!="1"){
                            echo "<li class='active desktop'><a href='http://efast.eidwhd.com/index.php/main/contactekunbar'>
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
                               
                            echo "<li><a href='http://efast.eidwhd.com/index.php/main/chartlevel'>
                                <i class='fa fa-ticket'></i><span style='margin-right:10px'>E Fast </span><small class='label label-danger'>IT Support</small>
                                <i class='#'></i></a>
                        </li>";
                          }
                        ?>

                        <?php
                          if($admin!="1"){
                            echo "<li><a href='http://efast.eidwhd.com/index.php/main/contactekunbar'>
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
                        Complaint Reference :
                        <small><?php echo $efastdetail[0]['comp_refference']; ?></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="http://eidwhd.com"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                        <li><a href="../efast">Efast</a></li>
                        <li class="active">Detail Efast</li>
                    </ol>
                </section>

                <div class="pad margin no-print">
                    <div class="alert alert-info" style="margin-bottom: 0!important;">
                        <i class="fa fa-info"></i>
                        <b>Note:</b> This page has been enhanced for printing. Click the print button at the bottom of the complaint refference from EFAST.
                    </div>
                </div>

                <!-- Main content -->
                <section class="content invoice">
                    <!-- title row -->
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="page-header">
                                <i class="fa fa-globe"></i> EFAST, Inc.
                                <small style="font-size:12px" class="pull-right"><?php if($efastdetail[0]['status']!='Open'){ echo "Closed Date: ".$efastdetail[0]['actual_date'];} else {echo 'Still Not Closed';} ?></small>
                            </h2>
                        </div><!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                            Complainer <div style="float:right;width: 50px;margin-right: 50px;padding-top:15px">
                            <div class="lockscreen-item">
                               <div class="lockscreen-image">
                               <img src="http://eidwhd.com/assets/img/cover/<?php if($pict!=''){ echo $pict;} else {echo 'unknown';} ?>.jpg" alt="user image"/>
                               </div>
                            </div><!-- /.lockscreen-item --></div>
                            <address>
                                <strong><?php echo $userlengkap[0]['name']; ?></strong><br>
                                <?php echo $userlengkap[0]['from']; ?><br>
                                <?php if($userlengkap[0]['company']!=''){ echo $userlengkap[0]['company'];} else {echo '-';} ?><br>
                                <?php echo $userlengkap[0]['phone']; ?><br/>
                                <?php echo $userlengkap[0]['email']; ?>
                            </address>
                        </div><!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            Administrator <div style="float:right;width: 50px;margin-right: 50px;padding-top:15px">
                            <div class="lockscreen-item">
                               <div class="lockscreen-image">
                               <img src="http://eidwhd.com/assets/img/cover/C360_2012-09-08-16-22-54.jpg" alt="user image"/>
                               </div>
                            </div><!-- /.lockscreen-item --></div>
                            <address>
                                <strong>Kuncoro Wicaksono</strong><br>
                                EID/OIY/A<br>
                                Ericsson Indonesia<br>
                                (+62) 81218543812<br/>
                                kuncoro.wicaksono.adi.baroto@ericsson.com
                            </address>
                        </div><!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            <b>Complaint Reference :</b><br/> #<?php echo $efastdetail[0]['comp_refference']; ?>
                            <br/><br/>
                            <b>Status: </b> <?php echo $efastdetail[0]['status']; ?><br/>
                            <b>Complaint On:</b> <?php echo $efastdetail[0]['com_date']; ?><small></small><br/>
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <!-- Table row -->
                    <div class="row">
                        <div class="col-xs-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Admin</th>
                                        <th>Activity</th>
                                        <th>Time Activity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Kuncoro Wicaksono</td>
                                        <td>Open</td>
                                        <td><?php echo $efastdetail[0]['com_date']; ?></td>
                                    </tr><?php if($efastdetail[0]['conf_date']!=''){ ?>
                                    <tr>
                                        <td>Kuncoro Wicaksono</td>
                                        <td>Confirmation</td>
                                        <td><?php echo $efastdetail[0]['conf_date']; ?></td>
                                    </tr><?php }else if($efastdetail[0]['onprogress_date']!=''){ ?>
                                    <tr>
                                        <td>Kuncoro Wicaksono</td>
                                        <td>On Progress</td>
                                        <td><?php echo $efastdetail[0]['onprogress_date']; ?></td>
                                    </tr><?php }else if($efastdetail[0]['closed_date']!=''){ ?>
                                    <tr>
                                        <td>Kuncoro Wicaksono</td>
                                        <td>Closed</td>
                                        <td><?php echo $efastdetail[0]['closed_date']; ?></td>
                                    </tr><?php }else{} ?>
                                </tbody>
                            </table>
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-xs-6">
                            <p class="lead">Detail Problem</p>
                            <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                                <?php echo $efastdetail[0]['issue']; ?>
                            </p>
                        </div><!-- /.col -->
                        <div class="col-xs-6">
                            <p class="lead">Problem Solving</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th style="width:30%">Action :</th>
                                        <td><?php echo $efastdetail[0]['action']; ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <!-- this row will not appear when printing -->
                    <div class="row no-print">
                        <div class="col-xs-12">
                            <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                        </div>
                    </div>
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