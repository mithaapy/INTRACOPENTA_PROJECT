                                                                                                
<!DOCTYPE html>
<html>
  <head>
    <title>iBoard - EIDWHD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Bootstrap -->
    <link rel="icon" href="<?php echo base_url(); ?>/assets/img/elogo.png" type="image/png">
    <!-- <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/erismall.png"> -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/css/bootstrap.min.css"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui-1.10.3.custom.min.css" />
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Signika+Negative' rel='stylesheet' type='text/css'>
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

    
    @font-face {
    font-family: EricssonCapital;
    src: url(../../assets/font/EricssonCapitalTT.ttf);
    }    
    
    .codejudul{font-size:50px; font-family: Arial, Helvetica, sans-serif; font-weight: 300; letter-spacing: -2px}
    

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
      height: 60px;
      background-color: #f5f5f5;
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
  <body onload="startTime()">
    <!-- Wrap all page content here -->
    <div id="wrap">

      <!-- Fixed navbar -->
      <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="#"><h5><img src="<?php echo base_url() ?>assets/img/elogo.png" class="iboard" />iBoard</h5></a>
          </div>
        </div>
      </div>
      
      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <code class="codejudul"><?php echo $name ?> | <?php echo $from ?></code>
          <span style="float: right; color: grey; font-size: 11px; margin: 10px 0px;  font-family: Arial, Helvetica, sans-serif;">
             <?php
              $dt = new DateTime();
              echo $dt->format('D, d-m-Y');
             ?>
             
             <div id="txt" align="right"></div></span>
        </div>        
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="well">
                <div class="media">
                  <a class="pull-left" href="#">
                    <img class="media-object" src="<?php echo base_url(); ?>assets/img/forklift.png">
                  </a>
                  <div class="media-body">
                    <h6 class="media-heading" style=" font-family: Arial, Helvetica, sans-serif;">Warehouse</h6>
                      <?php
                      	$tempada = 0;
                      	foreach($list AS $key){
                      		if($key['group']=="Warehouse"){
                      			$tempada=1;
                      			echo "<a href='".$key['link']."' class='btn btn-success btn-sm' style='margin-right:5px;margin-top:5px'>".$key['name_app']."</a>";
                      		}
                      	}
                      	if($tempada==0){
                      		echo "<a href='#' class='btn btn-danger btn-sm' style='margin-right:5px;margin-top:3px'>Empty</a>";
                      	}
                      ?>
                  </div><br>
                  <a class="pull-left" href="#">
                    <img class="media-object" src="<?php echo base_url(); ?>assets/img/truck.png">
                  </a>
                  <div class="media-body">
                    <h6 class="media-heading" style=" font-family: Arial, Helvetica, sans-serif;">Distribution</h6>
                    	<?php
                      	  $tempada = 0;
                      	  foreach($list AS $key){
                      		if($key['group']=="Transport"){
                      			$tempada=1;
                      			echo "<a href='".$key['link']."' class='btn btn-success btn-sm' style='margin-right:5px;margin-top:3px'>".$key['name_app']."</a>";
                      		}
                      	  }
                      	  if($tempada==0){
                      		echo "<a href='#' class='btn btn-danger btn-sm' style='margin-right:5px;margin-top:3px'>Empty</a>";
                      	  }
	                ?>
                  </div><br>
                  <a class="pull-left" href="#">
                    <img class="media-object" src="<?php echo base_url(); ?>assets/img/user.png">
                  </a>
                  <div class="media-body">
                    <h6 class="media-heading" style=" font-family: Arial, Helvetica, sans-serif;">iDaman</h6>
                    	<?php
                      	  $tempada = 0;
                      	  foreach($list AS $key){
                      		if($key['group']=="iDaman"){
                      			$tempada=1;
                      			echo "<a href='".$key['link']."' class='btn btn-success btn-sm' style='margin-right:5px;margin-top:3px'>".$key['name_app']."</a>";
                      		}
                      	  }
                      	  if($tempada==0){
                      		echo "<a href='#' class='btn btn-danger btn-sm' style='margin-right:5px;margin-top:3px'>Empty</a>";
                      	  }
                      	  if($from=="EID LDM"){
                               
                      	  	echo "<a href='http://ldm.eidwhd.com/' class='btn btn-warning btn-sm' style='margin-right:5px;margin-top:3px;width: 120px;'  >Complaint Desk</a>";
                      	  }
                      	  if($admin){
                               
                      	  	echo "<a href='http://eidwhd.com/index.php/frontpage/admin/0' class='btn btn-danger btn-sm' style='margin-right:5px;margin-top:3px'  >Admin</a>";
                      	  }
                          if($admin!="1"){
                            echo "<a href='http://efast.eidwhd.com/index.php/main/contactekunbar'  class='btn btn-danger btn-sm' style='margin-right:5px;margin-top:3px'>E Fast - IT Support</a>
                        ";
                          }
	                ?>
                  </div><br>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="panel panel-default" style="text-align:center">
                <div class="panel-heading">
                  <h3 class="panel-title" style=" font-family: Arial, Helvetica, sans-serif;">Profile Picture</h3>
                </div>
                <div class="panel-body">
                  <button class='img-thumbnail' data-toggle='modal' data-target='#myModal2'><img src="<?php echo base_url(); ?>assets/img/cover/<?php if($pict!=''){ echo $pict;} else {echo 'unknown';} ?>.jpg" style="width:200px" class="img-thumbnail"></button><br>
               <h6><button class='btn btn-warning btn-sm detailzoom' data-toggle='modal' data-target='#myModal'>Change Password</button> <a href="logout" class="btn btn-danger btn-sm">Logout</a></h6>
                </div>
              </div>
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
       
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <div id="container">
            <h1 style="font-family: EricssonCapital">Change Picture</h1><hr/>
               <?php echo form_open_multipart('frontpage/changepicture');?>
               
               <input class="btn btn-default" type="file" name="userfile" id="userfile" size="20" required> <br />
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
		
    <div id="footer">
      <div class="container">
        <p class="text-muted credit">Created by EID Supply 2013  &copy; Ericsson Indonesia | Best View with Chrome | <a href="<?php echo base_url(); ?>index.php/frontpage/iboardnew">Upgrade iBoard View</a></p>
      </div>
    </div>
  </body>
</html>
                            
                            
                            