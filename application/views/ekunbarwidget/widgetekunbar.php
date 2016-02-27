<!DOCTYPE html>                                                                                                                 
<html>
    <head>
        <meta charset="UTF-8">
        <title>EIDWHD | Widget Configuration</title>
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
                <style>.icheckbox_minimal, .iradio_minimal{width:32px}</style>
        <style>input[type="radio"], input[type="checkbox"]{opacity:100 !important}.nav-tabs>li>a{border-radius: 0;}
        .nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus{color:#111;background:#ddd}</style>
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
                Widget Control
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
                                        

                            <a href="#"><i class="fa fa-circle text-success"></i> </a>
                        </div>
                    </div>
                    <!-- search form -->
                    <!--<form action="#" method="get" class="sidebar-form">
                        <div class="input-group" style="margin-left: auto;margin-right: auto;width: 70%;background-color: #b0e0e6;">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>-->
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
		        <li><a href="<?php echo base_url() ?>index.php/frontpage/myprofile"><i class="glyphicon glyphicon-cog"></i> My Profile</a></li>
		        <li class="active"><a href="#access" data-toggle="tab"><i class="glyphicon glyphicon-pushpin"></i> Configure Widget</a></li>
                        <li>
                            <a href="<?php echo base_url(); ?>" style="color:#EE3535">
                                <i class="glyphicon glyphicon-share-alt"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <!--<li>
                            <a href="pages/widgets.html">
                                <i class="fa fa-th"></i> <span>Widgets</span> <small class="badge pull-right bg-green">new</small>
                            </a>
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
                        Widget Configuration
                        <?php if($popupshow[0]['ekunbarsaiditdeleted']==0){  ?><br/><br/>
                        <small><div class="alert alert-success" role="alert">We still developing multiple cool widget. Do you have any idea to show ? <a href='mailto:kuncoro.wicaksono.adi.baroto@ericsson.com'>Sent an idea .</a> <i class='glyphicon glyphicon-send'></i></div></small><?php }else{ ?>
                        <small><div class="alert alert-danger" role="alert">You have been disable <i>Widget Popup Message</i>, if you need to active it again just <a href="<?php echo base_url(); ?>index.php/ekunbarwidget/enableshowpopuplogin">click here</a> . <i class='glyphicon glyphicon-exclamation-sign'></i></div></small>
                        <?php } ?>
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
                        
               
                <section class="col-lg-12 connectedSortable"> 
   		<!--<ul class="nav nav-tabs" id="myTab">
		  <li class="active"><a href="#access" data-toggle="tab">Access</a></li>
		  
		  <li><a href="#admin" data-toggle="tab">Admin</a></li>
		  <li><a href="#adduser" data-toggle="tab">Add User</a></li>
		  <li><a href="#edituser" data-toggle="tab">Delete User</a></li>
		  <li><a href="#resetuser" data-toggle="tab">Reset Password</a></li>
		</ul>-->
		<div class="tab-content">
		  <div class="tab-pane active" id="access">
	   		<?php 
	   			if(!empty($info)){
	   				echo "<h5>".$info."</h5>";
	   			}
	   		?>
                        <?php if($admin==1){ ?>
		   	<form role="form" action="../tempAdminEkunbar">
			  <div class="form-group">
			    <h5>User</h5>
			    <select class="form-control" id="user" name="user">
			    	<option value="0"></option>
			    	<?php 
			    	foreach($user AS $key){
			    		if(isset($username)){
			    			if($username==$key['user']){
			    				echo "<option value='".$key['user']."' selected='selected'>".$key['name']."</option>";
			    			}else{
			    				echo "<option value='".$key['user']."'>".$key['name']."</option>";
			    			}
			    		}else{
			    			echo "<option value='".$key['user']."'>".$key['name']."</option>";
			    		}
			    	} 
			    	?>
			    </select>
			  </div>
			</form><?php }else{} ?>
			<form role="form">
			    <h5>Widget Configuration</h5>
			    	<?php
			    	$set = 3;
		    		

			    	foreach($aplikasi AS $key){
			    		$cek = 0; //echo $key['id_widget'];
			    		foreach($list AS $key2){
			    			if($key2['widget']==$key['id_widget']) {
			    				$cek = 1;
			    			}
			    			
			    		}
			    		
			    		if($set===3){
			    			echo "<div class='row'>";
			    			$set = 0;
			    		}
			    		
			    		if($cek === 1){
			    			echo "<div class='form-group col-md-6'><label class=\"form-control\" class=\"checkbox-inline\" style='height: 200px;padding: 0px 0px 0px 20px;'>";
				    		echo "<input type=\"checkbox\" style='margin-left: 20px;max-width:20px;float:left;' id='".$key['id_widget']."' name='widget[]' value='".$key['id_widget']."'> <span style='max-width:80px;float:left;'>".$key['name_widget']."</span>";
				    		echo $key['Desc']."</label></div>";
			    		}else{
			    			echo "<div class='form-group col-md-6'><label class=\"form-control\" class=\"checkbox-inline\" style='height: 200px;padding: 0px 0px 0px 20px;'>";
				    		echo "<input type=\"checkbox\" style='margin-left: 20px;max-width:20px;float:left;' id='".$key['id_widget']."' name='widget[]' value='".$key['id_widget']."'> <span style='max-width:80px;float:left;'>".$key['name_widget']."</span>";
				    		echo $key['Desc']."</label></div>";
			    		}
			    		
			    		if($set===2){
			    			echo "</div>";
			    			$set = 3;
			    		}else{
			    			$set++;
			    		}
			    	}
			    	
			    	if($set!=3){
			    		echo "</div>";
			    	}

			    			echo "<div class='row'><div class='form-group col-md-6'><label class=\"form-control\" class=\"checkbox-inline\" style='height: 200px;padding: 0px 0px 0px 20px;'>";
				    		echo "<input type=\"checkbox\" id='monmom' name='widget[]' value='monmom' style='margin-left: 20px;max-width:20px;float:left;' checked> <span style='max-width:100px;float:left;'>MOM</span> ";
                                                echo "<img src='http://eidwhd.com/assets/img/widget/widgetmom.jpg' style='height:200px;float:right'/>";
				    		echo "</label></div></div>";
			    ?>
			  <div class="row">
		  	  	<div class="form-group col-md-9"></div>
		  	  	<div class="form-group col-md-1"><button type="submit" class="btn btn-default">Submit</button></div>
		  	  	<div class="form-group col-md-2"><a href="<?php echo base_url(); ?>index.php/frontpage/menu"  class="btn btn-warning">Back to Menu</a></div>
		  	  </div>
			</form>
		  </div>



                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->

<script type="text/javascript">
   	$('#user').change(function() {
	    this.form.submit();
	    //if ($(this).val() === '2') {
	        // Do something for option "b"
	    //}
	});

   	$('#from').change(function() {
	    this.form.submit();
	    //if ($(this).val() === '2') {
	        // Do something for option "b"
	    //}
	});
	
	$('#myTab a').click(function (e) {
	  e.preventDefault()
	  $(this).tab('show')
	})
   </script>
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