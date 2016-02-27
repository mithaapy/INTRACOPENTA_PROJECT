<!DOCTYPE html>
<html>
  <head>
    <title>Admin EIDWHD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui-1.10.3.custom.min.css" />
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
    <link rel="icon" href="<?php echo base_url() ?>assets/img/eadmin.png" type="image/png">

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>assets/css/iconfont.css" rel="stylesheet">
   <link href='http://fonts.googleapis.com/css?family=Signika+Negative' rel='stylesheet' type='text/css'>
    <!--[if IE]>
      <script src="<?php echo base_url(); ?>assets/js/html5shiv.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      /* Space out content a bit */
      body {
        padding-top: 20px;
        padding-bottom: 20px;
      }

      h1{
         font-size: 50px;
         font-family: 'Signika Negative', sans-serif;
      }
      
      h5{
         font-size: 13px;
         font-family: 'Signika Negative', sans-serif;
      }
    
      /* Everything but the jumbotron gets side spacing for mobile first views */
      .header,
      .marketing,
      .footer {
        padding-left: 15px;
        padding-right: 15px;
      }

      /* Custom page header */
      .header {
        border-bottom: 1px solid #e5e5e5;
      }

      /* Make the masthead heading the same height as the navigation */
      .header h3 {
        margin-top: 0;
        margin-bottom: 0;
        line-height: 40px;
        padding-bottom: 19px;
      }

      /* Custom page footer */
      .footer {
        padding-top: 19px;
        color: #777;
        border-top: 1px solid #e5e5e5;
      }

      .jumbotronbtn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Responsive: Portrait tablets and up */
      @media screen and (min-width: 768px) {
        /* Remove the padding we set earlier */
        .header,
        .footer {
          padding-left: 0;
          padding-right: 0;
        }
        /* Space out the masthead */
        .header {
          margin-bottom: 30px;
        }
        /* Remove the bottom border on the jumbotron for visual effect */
        .jumbotron {
          border-bottom: 0;
        }

        .container {
          max-width: 1024px;
        }
      }

    </style>
   </head>
   <body>
   <div class="container">
   	<div class='well'>
   		<ul class="nav nav-tabs" id="myTab">
		  <li class="active"><a href="#access" data-toggle="tab">Access</a></li>
		  <li><a href="#accessgroup" data-toggle="tab">Access Group</a></li>
		  <li><a href="#admin" data-toggle="tab">Admin</a></li>
		  <li><a href="#adduser" data-toggle="tab">Add User</a></li>
		  <li><a href="#edituser" data-toggle="tab">Delete User</a></li>
		  <li><a href="#resetuser" data-toggle="tab">Reset Password</a></li>
		</ul>
		<div class="tab-content">
		  <div class="tab-pane active" id="access">
	   		<?php 
	   			if(!empty($info)){
	   				echo "<h5>".$info."</h5>";
	   			}
	   		?>
		   	<form role="form" action="../tempAdmin">
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
			</form>
		  </div>
		  	  
		</div>
   		
		  
   	</div>
   	
   	<div class="footer">
          <p>&copy; EID Supply 2013 | Ericsson Indonesia | Best View with Chrome </p>
      </div>
   </div>
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
   </body>
</html>