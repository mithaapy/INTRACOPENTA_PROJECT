<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EIDWHD | Definition</title>
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
        
        <!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui-1.10.3.custom.min.css" />-->

        <style>
        .small-box-footer{border: 0;width: 100%;}
        .content{padding:0;overflow:hidden;}
        .bg-blue{background-color: #0073B7 !important;}
        .bg-red{background-color: #CE0000 !important}
        .modal-content{background: rgba(0, 0, 0, 0.8) !important;border-radius:0;}
        #myDIV {
            width: 100%;
            background: #85144B;
            -webkit-animation: mymove 10s infinite; /* Chrome, Safari, Opera */
            animation: mymove 10s infinite;
        }
        /* Chrome, Safari, Opera */
        @-webkit-keyframes mymove {
            50% {background-color: #0073B7;}
        }
        /* Standard syntax */
        @keyframes mymove {
            50% {background-color: #0073B7;}
        }
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
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
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
          <script src="<?php echo base_url(); ?>assets/js/html5shiv.js"></script>
          <script src="<?php echo base_url(); ?>assets/js/respond.min.js"></script>
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
    src: url(../../assets/font/EricssonCapitalTT.ttf);
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


    /* Custom page CSS
    -------------------------------------------------- */
    /* Not required for template or sticky footer method. */

    #wrap > .container {
      padding: 60px 15px 0;
    }
    .container .credit {
      margin: 20px 0;
      font-size: 12px;
    }

    #footer > .container {
      padding-left: 15px;
      padding-right: 15px;
    }

    code {
      font-size: 80%;
    }
    </style>
  </head>
    <body class="skin-<?php if($userlengkap[0]['ekunbar_theme']!=''){echo $userlengkap[0]['ekunbar_theme'];}else{echo 'black';}?>"  onload="startTime()">
        <!-- header logo: style can be found in header.less -->


        <header class="header">
            <a href="<?php echo base_url(); ?>" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                My Profile
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
		        <li class="active"><a href="<?php echo base_url() ?>index.php/frontpage/myprofile"><i class="glyphicon glyphicon-cog"></i> My Profile</a></li>

                        <li>

                            <a href="http://eidwhd.com/index.php/ekunbarwidget/editwidgetekunbar/kuncoro">
                                <i class="glyphicon glyphicon-pushpin"></i> <span>Configure Widget</span> <small class="badge pull-right bg-green">new</small>
                            </a>
                        </li>
                                                <li>
                            <a href="<?php echo base_url(); ?>" style="color:#EE3535">
                                <i class="glyphicon glyphicon-share-alt"></i> <span>Dashboard</span>
                            </a>
                        </li></ul>
                    <ul class="sidebar-menu just-mobile" style="bottom:0;position:absolute;background: #444;width:100%;padding:20px 4%"><li class="active" style="font-size:10px;color: #f6f6f6;width:100%">Ekunbar © EID Supply 2014 | Ericsson Indonesia <br/>Best View with Chrome</li></ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="display:none">
                    <h1 style="color:#FBFBFB">
                        Dashboard 
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                        <li class="active">My Profile</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-12 connectedSortable"> 
                            <!-- Box (with bar chart) -->
                            <div class="small-box" id="loading-example">                                
                                <div class="box-body no-padding">
                                <div id="myDIV" style="height:170px; margin-bottom:-140px">
                            </div>
      <!-- Begin page content -->
      <div class="container">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div>
            <table style="color:#eee; font-size:40px; font-family: EricssonCapital; font-weight: 300; letter-spacing: -2px; margin-left:5px">
              <tr>
                <td style="width: 150px">
                    Name 
                </td>
                <td>
                    : <?php echo $name ?> 
                </td>
              </tr>
              <tr style="font-size:30px">
                <td><?php echo $from ?>  
                </td>
                <td> 
                </td>
              <tr>
            </table>  <br/><br/>
            <table style="font-family: Helvetica; font-size:12px; margin-left:8px;color:#999" class="table table-striped">
              
              <tr>
                <td style="width:150px">USERNAME
                </td>
                <td style="width:600px">: <?php echo $user ?> 
                </td>
              </tr>
              <tr>
                <td>POSITION
                </td>
                <td>: <?php echo $userlengkap[0]['position']; ?> 
                </td>
              </tr>
              <tr>
                <td>PHONE 1
                </td>
                <td>: <?php echo $userlengkap[0]['phone']; ?> 
                </td>
              </tr>
              <tr>
                <td>PHONE 2
                </td>
                <td>: <?php echo $userlengkap[0]['phone2']; ?> 
                </td>
              </tr>
              <tr>
                <td>EMAIL 
                </td>
                <td>: <?php echo $userlengkap[0]['email']; ?> 
                </td>
              </tr>
            </table>  
              </div>
            </div>

            <div class="col-md-3">
                <div class="panel-body" style="float:right">
                  <button style="padding:0px; width:100%; border:1px solid #ddd" data-toggle='modal' data-target='#myModal2'><img src="<?php echo base_url(); ?>assets/img/cover/<?php if($pict!=''){ echo $pict;} else {echo 'unknown';} ?>.jpg" style="width:100%;height:auto"></button><br>
                   
                
              </div>
            </div>
          </div><hr/>
          <div>
                <!--<button class='btn btn-default btn-sm detailzoom' data-toggle='modal' data-target='#myModal3'>Account Information</button>-->

                    <div class="row">
                        <div class="col-lg-4 col-xs-12">
                            <!-- small box -->
                            <div class="small-box bg-blue">
                                <div class="inner">
                                    <h3>
                                        Picture
                                    </h3>
                                    <p>
                                        <?php if($pict!=''){ echo $pict;} else {echo 'unknown';} ?>
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-picture-o"></i>
                                </div>
                <button class='small-box-footer' data-toggle='modal' data-target='#myModal2'>Change Picture <i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-4 col-xs-12">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        Information 
                                    </h3>
                                    <p>
                                        <?php if($user!=''){ echo $user;} else {echo 'Contact Admin';} ?>
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-edit"></i>
                                </div>
                <button class='small-box-footer' data-toggle='modal' data-target='#myModal3'>Update Information <i class="fa fa-arrow-circle-right"></i></button> 
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-4 col-xs-12">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        Credential
                                    </h3>
                                    <p>
                                        *******
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-ellipsis-h"></i>
                                </div>
                <button class='small-box-footer' data-toggle='modal' data-target='#myModal'>Change Password <i class="fa fa-arrow-circle-right"></i></button> 
                            </div>
                        </div><!-- ./col -->
                     </div>

          </div>
          
        </div>
      </div>
      
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h5 class="modal-title" id="myModalLabel" style="font-family: EricssonCapital">Change Password</h5>
	      </div>
	      <div class="modal-body">
	        <form method="post" action="updatePassword">
	        <div class="row">
		  <div class="col-md-3"><h7>Old Password</h7></div>
		  <div class="col-md-6"><input type="password" class="form-control" id="old" name="old" required></div>
		</div><br>
		<div class="row">
		  <div class="col-md-3"><h7>New Password</h7></div>
		  <div class="col-md-6"><input type="password" class="form-control" id="new" name="new" required></div>
		</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <input type="submit" value="Save Changes" class="btn btn-primary">
	        </form>
	      </div>
	    </div>
	  </div>
	</div>

      <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog" style="width:800px">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h5 class="modal-title" id="myModalLabel" style="font-family: EricssonCapital">Account Detail</h5>
	      </div>
	      <div class="modal-body">
	        <form method="post" action="updateaccount">
	        <div class="row">
		  <div class="col-md-3"><h7>Full Name</h7></div>
		  <div class="col-md-8"><input type="text" class="form-control" id="name" name="name" value="<?php echo $name ?>" readonly></div>
		</div><br>
		<div class="row">
		  <div class="col-md-3"><h7>Position</h7></div>
		  <div class="col-md-4"><input type="text" class="form-control" id="position" name="position" value="<?php echo $userlengkap[0]['position']; ?>"></div>
		</div><br>
		<div class="row">
		  <div class="col-md-3"><h7>Phone 1</h7></div>
		  <div class="col-md-4"><input type="text" class="form-control" id="phone1" name="phone1" value="<?php echo $userlengkap[0]['phone']; ?>"></div>
		</div><br>
		<div class="row">
		  <div class="col-md-3"><h7>Phone 2</h7></div>
		  <div class="col-md-4"><input type="text" class="form-control" id="phone2" name="phone2" value="<?php echo $userlengkap[0]['phone2']; ?>"></div>
		</div><br>
		<div class="row">
		  <div class="col-md-3"><h7>Email</h7></div>
		  <div class="col-md-6"><input type="text" class="form-control" id="email" name="email" value="<?php echo $userlengkap[0]['email']; ?>"></div>
		</div><br>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <input type="submit" value="Save Changes" class="btn btn-primary">
	        </form>
	      </div>
	    </div>
	  </div>
	</div>
       
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>	        
          <h5 class="modal-title" id="myModalLabel" style="font-family: EricssonCapital">Change Picture</h5> 
        </div>
        <div class="modal-body">
        <div id="container">
               <?php echo form_open_multipart('frontpage/changepicture');?>
               
               <input type="file" name="userfile" id="userfile" size="20" /> <br />
               <p style="font-size:10px; color:red;">File Type : .jpg<br/>Recomended Size : 200x263px<br/><br/>*Notes: If your profile Picture not Updated, Log-out and Log-in Again.</p>
               <div class="row">
		  <div class="col-md-8">
		  <span><b>For Security Reason, please verify your Password:<input type="password" class="form-control" id="old" name="old" placeholder="Your Password" required><br/><br/></b></span></div>
		</div>
               <input type="submit" value="Upload" class="btn btn-primary"/> <br/>
             </form>
             <form method="post" action="resetpicture"><input type="submit" value="Reset Picture" class="btn btn-danger" style="margin-top: -10%;margin-left: 80px;" onclick="return confirmation();" /></form><br/>
	      </div>
      </div>
	    </div>
	  </div>
	</div>
      
    </div>
                                </div><!-- /.box-body--></div><!-- /.box --> 

                    <!-- top row -->
                    <div class="row">
                        <div class="col-xs-12 connectedSortable">
                            
                        </div><!-- /.col -->
                    </div>
                    <!-- /.row -->

                        </section><!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


    <script>
      (function(document) {
    'use strict';

    var LightTableFilter = (function(Arr) {

        var _input;

        function _onInputEvent(e) {
            _input = e.target;
            var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
            Arr.forEach.call(tables, function(table) {
                Arr.forEach.call(table.tBodies, function(tbody) {
                    Arr.forEach.call(tbody.rows, _filter);
                });
            });
        }

        function _filter(row) {
            var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
            row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
        }

        return {
            init: function() {
                var inputs = document.getElementsByClassName('light-table-filter');
                Arr.forEach.call(inputs, function(input) {
                    input.oninput = _onInputEvent;
                });
            }
        };
    })(Array.prototype);

    document.addEventListener('readystatechange', function() {
        if (document.readyState === 'complete') {
            LightTableFilter.init();
        }
    });

})(document);
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