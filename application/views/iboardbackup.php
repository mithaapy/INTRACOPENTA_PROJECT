                                                                                                                                                                                                                                <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EIDWHD | Dashboard</title>
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/elogo.png" />
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
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
                <div class="navbar-right"
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-warning">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 notification</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users warning"></i> Welcome to new image of EIDWHD
                                            </a>
                                        </li>  
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-mail-reply bg-green"></i> Check left side for the List of App
                                            </a>
                                        </li>    
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-bar-chart-o blue"></i> Monitor your DSP performance This week
                                            </a>
                                        </li>     
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-exclamation danger"></i> Alert for pending MoM
                                            </a>
                                        </li>                                       
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
                                echo "<li><i class='fa fa-angle-double-right'></i>empty</li>";
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
                                echo "<li><i class='fa fa-angle-double-right'></i>empty</li>";
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
                                echo "<li><i class='fa fa-angle-double-right'></i>empty</li>";
                                }
                                ?>
                            </ul>
                        </li>

                        <?php
                          if($from=="EID LDM"){
                               
                            echo "<li class='#'><a href='http://ldm.eidwhd.com/'>
                                <i class='fa fa-ticket'></i><span>Complaint Desk</span>
                                <i class='#'></i></a>
                        </li>";
                          }
                        ?>
                        
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
                            <div class="small-box bg-aqua">
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
                            <div class="small-box bg-green">
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
                            <div class="small-box bg-yellow">
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
                            <div class="small-box bg-red">
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
                                        foreach ($mom as $key) {
                                            $listdate_complaint .= $key['date_complaint'];
                                            $listupdate .= $key['update'];
                                            $listtitle .= $key['title'];

                                        $ekunbar_mom .= "                                 
                                        <li>
                                            <span class='handle'>
                                                <i class='fa fa-ellipsis-v'></i>
                                                <i class='fa fa-ellipsis-v'></i>
                                            </span>  
                                            <span class='text' style='vertical-align:middle'>".$key['title']."<br/>".$string = substr($key['update'],0,120).' ...'."</span>
                                            <small class='label label-info'><i class='fa fa-clock-o'></i> ".$key['date_complaint']."</small>
                                            <small class='label label-danger'><i class='fa fa-clock-o'></i> ".$key['DifferenceInDays']." Days</small>                                            
                                        </li>
                                        ";
                                        }
                                        echo $ekunbar_mom;                                        
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
                            
                            
                            
                            
                            
                            
                            