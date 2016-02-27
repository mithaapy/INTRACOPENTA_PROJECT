<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $userlengkap[0]['name']; ?> | EIDWHD</title>
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
        
        <!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui-1.10.3.custom.min.css" />-->

        <style>
.panel.panel-default{border-radius:0}
.panel-body{padding:0}
.img-avatar-thumb {
  margin: 5px;
  -webkit-box-shadow: 0 0 0 5px rgba(255,255,255,0.4);
  box-shadow: 0 0 0 5px rgba(255,255,255,0.4);
}
.img-avatar {
  display: inline-block !important;
  width: 64px;
  height: 64px;
  border-radius: 50%;
}
        .small-box-footer{border: 0;width: 100%;}
        .content{padding:0;overflow:hidden;}
        .bg-blue{background-color: #0073B7 !important;}
        .bg-red{background-color: #CE0000 !important}
        .modal-content{background: rgba(0, 0, 0, 0.8) !important;border-radius:0;}
                </style>
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

        <![endif]-->

        <!-- Bootstrap -->
        <link rel="icon" href="<?php echo base_url(); ?>/assets/img/elogo.png" type="image/png">
        <!-- <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/erismall.png"> -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui-1.10.3.custom.min.css" />
        <!--<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href='http://fonts.googleapis.com/css?family=Signika+Negative' rel='stylesheet' type='text/css'>-->
        <!--[if IE]>

        <![endif]-->
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
    <script>
        function confirmation()
        {
        var answer = confirm("Are you sure to reset your Profile Picture?")
           if (answer)
           {
               return true;
           } else {
           if (window.event) // True with IE, false with other browsers
           {
           window.event.returnValue=false; //IE specific
           } else {
              return false
           }
        }
        }
    </script>
    <style type="text/css">
    html,
    body {
      height: 100%;
      /* The html and body elements cannot have any padding or margin. */
    }

    .btn-default {
       width:150px;
    }

    
    @font-face {
    font-family: EricssonCapital;
    src: url(<?php echo base_url;?>assets/font/EricssonCapitalTT.ttf);
    }    
    
    .modal-header {
      //background-color: #333;
      color:#eee;
      border:0;
    }
    
    .modal-footer{
      border:0;
    }

    button.close {
      color: white;
    }

    h5{
      font-size: 30px;
      font-family: 'Signika Negative', sans-serif;
    }

    h6{
      font-size: 20px;
      font-family: 'Signika Negative', sans-serif;
    }
    
    h7{
      font-size: 15px;
      font-family: 'Signika Negative', sans-serif;
    }

    /* Wrapper for page content to push down footer */
    #wrap {
      min-height: 100%;
      height: auto;
      /* Negative indent footer by its height */
      margin: 0 auto -60px;
      /* Pad bottom by footer height */
      padding: 0 0 60px;
    }

    /* Set the fixed height of the footer here */
    #footer {
      text-align: center;
      bottom:0;
      position: absolute;
      width: 100%;
    }



    </style>
  </head>
    <body style="overflow-y: hidden;" class="skin-<?php if($userlengkap[0]['ekunbar_theme']!=''){echo $userlengkap[0]['ekunbar_theme'];}else{echo 'black';}?>"  onload="startTime()">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="<?php echo base_url(); ?>" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                EIDWHD
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
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas collapse-left">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side strech" style="background-color:#f5f5f5">
                <!-- Main content -->
                <section class="content">
                    <!-- Main row -->
                    <div class="row">
                        <section class="col-lg-12 connectedSortable"> 
                            <!-- Box (with bar chart) -->
                            <div class="small-box" id="loading-example">                                
                                <div class="box-body no-padding">
                                <div id="ekunbardiv" style="height:300px; margin-bottom:-100px;background:url(<?php echo base_url(); ?>assets/img/ekunlate.jpg)">
                            </div>
                                  <!-- Begin page content -->
                            <div class="container">
                             <div class="container-fluid">
                              <div class="row">
                               <div class="col-md-8">
                                <img class="img-avatar img-avatar-thumb" style="float:left;margin-right:30px" src="<?php echo base_url(); ?>assets/img/cover/<?php if($pict!=''){ echo $pict;} else {echo 'unknown';} ?>.jpg" class="img-circle" alt="User Image" /> 
                                <div style='color: white;'>
                                   <span style="font-size:32px;"><?php echo $userlengkap[0]['name'];?></span><br/><?php echo $userlengkap[0]['from'];?>
                                </div>
                               </div>
                              </div>
                             </div> <br/><br/><br/>

                             <div class="row">
                              <div class="col-md-8">
                               <div class="col-md-12">
                               <div class="panel panel-default">
                                <div class="panel-heading">Login Captured</div>
                                <div class="panel-body small-box bg-yellow" style="background-color: #FFF !important;color:#333 !important;">
                                <div class="inner">
                                    <p style="font-size:14px" class="box-title">Last Login<br>2015-06-28 20:20:16</p>
                                     <h3 align="right" style="margin-top:-50px">21% </h3><br style="margin-top:-5px">
                                     <div class="progress sm progress-striped active" style="margin-top: -5px;">
                                                    <div class="progress-bar progress-bar-success" style="width: 21%"></div>
                                </div></div></div>
                               </div>
                              </div>
                              <div class="col-md-12">
                               <div class="panel panel-default">
                                <div class="panel-heading">About</div>
                                <div class="panel-body" style="padding:15px;background-color: #FFF !important;color:#333 !important;">
                                 <div class="row">
                                  <div class="col-md-4">
                                   Position
                                  </div>
                                  <div class="col-md-8">
                                   <?php echo $userlengkap[0]['position']; ?> 
                                  </div>
                                 </div>
                                </div>
                               </div>
                              </div>
                              </div>
                              <div class="col-md-4 desktop">
                               <div class="panel panel-default">
                                <div class="panel-heading">Profile Picture</div>
                                 <div class="panel-body">
                                  <img src="<?php echo base_url(); ?>assets/img/cover/<?php if($pict!=''){ echo $pict;} else {echo 'unknown';} ?>.jpg" style="width:100%;height:auto">                                 </div>
                                </div>
                               </div>
                              </div>
                            </div>
                           </div><hr/>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->



        
                <script src="<?php echo base_url('assets/js/jquery-ui-1.10.3.min.js') ?>" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?php echo base_url('assets/js/plugins/morris/morris.min.js') ?>" type="text/javascript"></script>
        
        <!-- AdminLTE App -->
        <script src="<?php echo base_url('assets/js/ekunbar/app.js') ?>" type="text/javascript"></script>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url('assets/js/ekunbar/dashboard.js') ?>" type="text/javascript"></script>     
        
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url('assets/js/ekunbar/demo.js') ?>" type="text/javascript"></script>
  </body>
</html>