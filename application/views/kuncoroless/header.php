<!DOCTYPE html>                                                                                                                 
<html>
    <head>
        <meta charset="UTF-8">
        <title>INTA | Cross Selling</title>
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/elogo.png" />
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        <!-- Notification-->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/strip/strip.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/strip/strip.css"/>
        <!-- here end notification jquery -->



        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url(); ?>assets/js/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

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

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>

        <style>.modal-content{border-radius:0}</style>

    </head>
    <body class="skin-<?php if ($userlengkap[0]['ekunbar_theme'] != '') {
    echo $userlengkap[0]['ekunbar_theme'];
} else {
    echo 'black';
} ?>"  onload="startTime()">
        <header class="header">
            <a href="<?php echo base_url(); ?>" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->

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
                        INTA
                    </a>
                </div>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->

                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <?php
                            if ($admin) {

                                echo "<a href='" . base_url() . "index.php/frontpage/adminekunbar/0'>
                                <i class='glyphicon glyphicon-cog'></i>
                                <span>Admin </span></a>";
                            }
                            ?>                          
                        </li>
                        <li class="dropdown user user-menu">
                            <?php
                            if ($admin) {

                                echo "<a href='" . base_url() . "index.php/ekunbarwidget/editwidgetekunbar/" . $user . "'>
                                <i class='fa fa-wrench'></i>
                                <span>Widget </span></a>";
                            }
                            ?>                          
                        </li>

                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $name; ?> <i class="caret" style="border-top-color:black"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">

                                    <img src="<?php echo base_url(); ?>assets/img/cover/<?php if ($pict != '') {
                                echo $pict;
                            } else {
                                echo 'unknown';
                            } ?>.jpg" alt="User Image" />

                                    <p>
<?php echo $name; ?>
                                        <small><?php echo $company; ?> <br/> <?php echo $from; ?></small>
                                    </p>
                                </li>
                                <!-- Menu Body -->

                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?php echo base_url(); ?>index.php/frontpage/myprofile" class="btn btn-default btn-flat"><i class="fa fa-cog"></i>  Profile</a>
                                    </div>
                                    <div class="pull-right">                                        
                                        <a href="<?php echo base_url(); ?>index.php/frontpage/logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>