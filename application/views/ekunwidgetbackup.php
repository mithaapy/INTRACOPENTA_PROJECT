<!DOCTYPE html>                                                                                                                 
<html>
    <head>
        <meta charset="UTF-8">
        <title>EIDWHD | Widget</title>
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
                                        

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
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
		        <li class="active"><a href="#access" data-toggle="tab"><i class="glyphicon glyphicon-road"></i> Widget</a></li>
		        <li><a href="#admin" data-toggle="tab"><i class="glyphicon glyphicon-user"></i> Admin</a></li>
      		        <li><a href="#adduser" data-toggle="tab"><i class="glyphicon glyphicon-plus-sign"></i> Add User</a></li>
		        <li><a href="#edituser" data-toggle="tab"><i class="glyphicon glyphicon-remove-sign"></i> Delete User</a></li>
		        <li><a href="#resetuser" data-toggle="tab"><i class="glyphicon glyphicon-retweet"></i> Reset Password</a></li><li><i class="glyphicon glyphicon-retweetingkunbar"></i></li>
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
                        Widget
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
			</form>
			<form role="form">
			    <h5>Aplikasi</h5>
			    	<?php
			    	$set = 3;
			    	foreach($aplikasi AS $key){
			    		$cek = 0;
			    		foreach($list AS $key2){
			    			if($key2['aplikasi']==$key['id_app']){
			    				$cek = 1;
			    			}
			    			
			    		}
			    		
			    		if($set===3){
			    			echo "<div class='row'>";
			    			$set = 0;
			    		}
			    		
			    		
			    		if($cek === 1){
			    			echo "<div class='form-group col-md-4'><label class=\"form-control\" class=\"checkbox-inline\">";
				    		echo "<input type=\"checkbox\" id='".$key['id_app']."' name='aplikasi[]' value='".$key['id_app']."' checked> ".$key['name_app'];
				    		echo "</label></div>";
			    		}else{
			    			echo "<div class='form-group col-md-4'><label class=\"form-control\" class=\"checkbox-inline\">";
				    		echo "<input type=\"checkbox\" id='".$key['id_app']."' name='aplikasi[]' value='".$key['id_app']."'> ".$key['name_app'];
				    		echo "</label></div>";
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
			    ?>
			  <div class="row">
		  	  	<div class="form-group col-md-1"><button type="submit" class="btn btn-default">Submit</button></div>
		  	  	<div class="form-group col-md-2"><a href="<?php echo base_url(); ?>index.php/frontpage/menu"  class="btn btn-warning">Back to Menu</a></div>
		  	  </div>
			</form>
		  </div>



		  <div class="tab-pane" id="accessgroup">
	   		<?php 
	   			if(!empty($info)){
	   				echo "<h5>".$info."</h5>";
	   			}
	   		?>
		   	<form role="form" action="../tempGroup">
			  <div class="form-group">
			    <h5>Group</h5><?php echo $from[0]['from'];?>
			    <select class="form-control" id="from" name="from">
			    	<option value="0"></option>
			    	<?php 
			    	foreach($from AS $key){
			    		if(isset($from)){
			    			if($from==$key['from']){
			    				echo "<option value='".$key['from']."' selected='selected'>".$key['from']."</option>";
			    			}else{
			    				echo "<option value='".$key['from']."'>".$key['from']."</option>";
			    			}
			    		}else{
			    			echo "<option value='".$key['from']."'>".$key['from']."</option>";
			    		}
			    	} 
			    	?>
			    </select>
			  </div>
			</form>
			<form role="form">
			    <h5>Aplikasi</h5>
			    	<?php
			    	$set = 3;
			    	foreach($aplikasi AS $key){
			    		$cek = 0;
			    		foreach($list AS $key2){
			    			if($key2['aplikasi']==$key['id_app']){
			    				$cek = 1;
			    			}
			    			
			    		}
			    		
			    		if($set===3){
			    			echo "<div class='row'>";
			    			$set = 0;
			    		}
			    		
			    		
			    		if($cek === 1){
			    			echo "<div class='form-group col-md-4'><label class=\"form-control\" class=\"checkbox-inline\">";
				    		echo "<input type=\"checkbox\" id='".$key['id_app']."' name='aplikasi[]' value='".$key['id_app']."' checked> ".$key['name_app'];
				    		echo "</label></div>";
			    		}else{
			    			echo "<div class='form-group col-md-4'><label class=\"form-control\" class=\"checkbox-inline\">";
				    		echo "<input type=\"checkbox\" id='".$key['id_app']."' name='aplikasi[]' value='".$key['id_app']."'> ".$key['name_app'];
				    		echo "</label></div>";
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
			    ?>
			  <div class="row">
		  	  	<div class="form-group col-md-1"><button type="submit" class="btn btn-default">Submit</button></div>
		  	  	<div class="form-group col-md-2"><a href="<?php echo base_url(); ?>index.php/frontpage/menu"  class="btn btn-warning">Back to Menu</a></div>
		  	  </div>
			</form>
		  </div>
		  
		  <div class="tab-pane" id="admin"><br>
		  	<form role="form" action="../setAdmin">
		  	  <h5>Admin</h5>
			    	<?php
			    	$set = 3;
			    	foreach($user AS $key){
			    		$cek = 0;
			    		if($key['admin']==1){
			    			$cek = 1;
			    		}
			    		
			    		if($set===3){
			    			echo "<div class='row'>";
			    			$set = 0;
			    		}
			    		
			    		
			    		if($cek === 1){
			    			echo "<div class='form-group col-md-4'><label class=\"form-control\" class=\"checkbox-inline\">";
				    		echo "<input type=\"checkbox\" name='admin[]' value='".$key['id']."' checked> ".$key['name'];
				    		echo "</label></div>";
			    		}else{
			    			echo "<div class='form-group col-md-4'><label class=\"form-control\" class=\"checkbox-inline\">";
				    		echo "<input type=\"checkbox\" name='admin[]' value='".$key['id']."'> ".$key['name'];
				    		echo "</label></div>";
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
			    ?>
			  <div class="row">
		  	  	<div class="form-group col-md-1"><button type="submit" class="btn btn-default">Submit</button></div>
		  	  	<div class="form-group col-md-2"><a href="<?php echo base_url(); ?>index.php/frontpage/menu"  class="btn btn-warning">Back to Menu</a></div>
		  	  </div>
			</form>
		  </div>
		  	
		  <div class="tab-pane" id="adduser"><br>
		  	<form role="form" action="../addUser" method="post">
		  	  <div class="row">
			    <div class="form-group col-md-2"><h5>Name</h5></div>
			    <div class="form-group col-md-4"><input class="form-control" type="text" id="name" name="name"></div>
			    <div class="form-group col-md-2"><h5>From</h5></div>
			    <div class="form-group col-md-4"><input class="form-control" type="text" id="from" name="from"></div>
			  </div>
			  <div class="row">
			    <div class="form-group col-md-2"><h5>Username</h5></div>
			    <div class="form-group col-md-4"><input class="form-control" type="text" id="username" name="username"></div>
			    <div class="form-group col-md-2"><h5>Password</h5></div>
			    <div class="form-group col-md-4"><input class="form-control" type="password" id="password" name="password"></div>
			  </div>
			  <div class="row">
			    <div class="form-group col-md-2"><h5>Admin</h5></div>
			    <div class="form-group col-md-4">
			    	<select class="form-control" id='admin' name='admin'>
			    		<option value="0">No</option>
			    		<option value="1">Yes</option>
			    	</select>
			    </div>
			  </div>
			  <div class="row">
			    <div class="form-group col-md-2"></div>
			    <div class="form-group col-md-1"><button type="submit" class="btn btn-default">Submit</button></div>
			    <div class="form-group col-md-2"><a href="<?php echo base_url(); ?>index.php/frontpage/menu"  class="btn btn-warning">Back to Menu</a></div>
			  </div>
			</form>
		  </div>	
		  
		  <div class="tab-pane" id="edituser"><br>
		  	<form role="form" action="../deleteUser" method="post">
		  	  <div class="row">
			    <div class="form-group col-md-2"><h5>Name</h5></div>
			    <div class="form-group col-md-4">
			    	<select class="form-control" id="user" name="user">
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
			    <div class="form-group col-md-1"><button type="submit" class="btn btn-default">Delete</button></div>
			    <div class="form-group col-md-2"><a href="<?php echo base_url(); ?>index.php/frontpage/menu"  class="btn btn-warning">Back to Menu</a></div>
			  </div>
			</form>
		  </div>

                  <div class="tab-pane" id="resetuser"><br>
		  	<form role="form" action="../ekunbardoresetpassword" method="post">
		  	  <div class="row">
			    <div class="form-group col-md-2"><h5>Password</h5></div>
			    <div class="form-group col-md-4"><input class="form-control" type="password" id="pass" name="pass"></div>

			    <!--<div class="form-group col-md-2"><h5>From</h5></div>
			    <div class="form-group col-md-4"><input class="form-control" type="text" id="from" name="from"></div>
			  </div>
			  <div class="row">
			    <div class="form-group col-md-2"><h5>Username</h5></div>
			    <div class="form-group col-md-4"><input class="form-control" type="text" id="username" name="username"></div>
			    <div class="form-group col-md-2"><h5>Password</h5></div>
			    <div class="form-group col-md-4"><input class="form-control" type="password" id="password" name="password"></div>
			  </div>
			  <div class="row">
			    <div class="form-group col-md-2"><h5>Admin</h5></div>
			    <div class="form-group col-md-4">
			    	<select class="form-control" id='admin' name='admin'>
			    		<option value="0">No</option>
			    		<option value="1">Yes</option>
			    	</select>
			    </div>
			  </div>-->
			  <div class="row">
			    <div class="form-group col-md-2"></div>
			    <div class="form-group col-md-1"><button type="submit" class="btn btn-default">Submit</button></div>
			    <div class="form-group col-md-2"><a href="<?php echo base_url(); ?>index.php/frontpage/menu"  class="btn btn-warning">Back to Menu</a></div>
			  </div>
			</form></section></div>

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