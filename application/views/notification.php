<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?php echo $name ?> - Profile</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="<?php echo base_url(); ?>assets/profile/js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/profile/js/jquery.dropotron.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/profile/js/jquery.scrolly.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/profile/js/jquery.onvisible.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/profile/js/skel.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/profile/js/skel-layers.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/profile/js/init.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/profile/css/skel.css" />
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/profile/css/style.css" />
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/profile/css/style-desktop.css" />
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/profile/css/style-noscript.css" />
		<noscript>
		</noscript>

    <style type="text/css">
        body{
			overflow-x: hidden;
		}
		input.btn {
			background: #fff;
			color: #df7366;border: 1px solid #FFFFFF;
		}
		button {
			margin: 0 0 0 -20px;
			padding: 0;
			background-color: white;
			border: 0;
		}
		#modal{
			font-family: tahoma;
		}
		button.close{
			color: rgb(233, 156, 146);
			background: rgb(223, 115, 102);
			text-shadow: 0 1px 0 #fff;
			font: 56px tahoma;
			float: right;
			cursor: pointer;
		}.crop {
                    float: left;
                    overflow: hidden; /* this is important */
                    position: relative; /* this is important too */
                    max-width: 360px; min-width: 360px;
                    max-height: 450px; min-height: 320px;
                }
                .crop img {
                    position: absolute;
                    top: -20px;
                    left: -55px;
                }
		input#userfile {
			-webkit-appearance: none;
display: block;
border: 0;
background: #fafafa;
width: 100%;
border-radius: 0.5em;
border: solid 1px #E5E5E5;
padding: 1em;
		}
    </style>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="homepage">

		<!-- Header -->

			<div id="header">
						
				<!-- Inner -->
					<div class="inner">
						<header>
							<h1><a href="index.html" id="logo"><?php echo $name ?></a></h1>
							<hr />
							<p><?php echo $from ?></p>
						</header>
						<footer>
							<a href="#banner" class="button circled scrolly"><img class="button circled scrolly" src="<?php echo base_url(); ?>assets/img/cover/<?php if($pict!=''){ echo $pict;} else {echo 'unknown';} ?>.jpg" class="img-circle" alt="User Image" /></a>
						</footer>
					</div>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li>
								<a href="">Profile</a>
								<ul>
									<li><a href="#banner">Personal Information</a></li>
									<li><a href="#main">Your Photo</a></li>
									<li><a href="<?php echo base_url(); ?>">Back to iBoard</a></li>
								</ul>
							</li>
						</ul>
					</nav>

			</div>

			
		<!-- Banner -->
			<section id="banner">
				<header>
					<h2>Your Personal <strong>Information</strong>.</h2>
					<p style="text-align:left;padding-left:10%;font-size:20px;font-family: EricssonCapital; ">
						<table style="text-align:left;margin-left:15%;">
              				<tr>
               				   <td>
                    			Name 
				               </td>
 				               <td>
		                        : <?php echo $name ?> 
				               </td>
              				</tr>
              				<tr>
				                <td>From  
				                </td>
				                <td>: <?php echo $from ?>
				                </td>
			              	</tr>
              				<tr>
				                <td>Phone  
				                </td>
				                <td>: <?php echo $userlengkap[0]['phone'] ?>
				                </td>
			              	</tr>
              				<tr>
				                <td>Phone 2  
				                </td>
				                <td>: <?php echo $userlengkap[0]['phone2'] ?>
				                </td>
			              	</tr>
              				<tr>
				                <td>Email  
				                </td>
				                <td>: <?php echo $userlengkap[0]['email'] ?>
				                </td>
			              	</tr>
			            </table>  <br/><br/>
					</p>
				</header>
			</section>



			<!-- Main -->
			<div class="wrapper style2">

				<article id="main" class="container special" style="width:100%">
					<a href="#" class="image featured"><img src="<?php echo base_url(); ?>assets/img/cover/<?php if($pict!=''){ echo $pict;} else {echo 'unknown';} ?>.jpg" class="img-circle" alt="User Image" /></a>
					<footer>
						<button class='btn btn-default btn-sm detailzoom' style="font-size:20px;padding:0 20px" data-toggle='modal' data-target='#myModal2'><a href="#" class="button">Change Picture</a>
						</button>
						<button class='btn btn-default btn-sm detailzoom' style="font-size:20px;padding:0 20px" data-toggle='modal' data-target='#myModal1'><a href="#" class="button">Update Information</a>
						</button>
						<button class='btn btn-default btn-sm detailzoom' style="font-size:20px;padding:0 20px" data-toggle='modal' data-target='#myModal3'><a href="#" class="button">Change Password</a>
						</button>
					</footer>
				</article>
				<!-- Pop Up 1 -->
					<div style="display:none;margin-top:1em;padding:0 4em 0 4em;background:#df7366;" class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	        			<div class="modal-dialog" style="padding:0 15%">
    	    				<div class="modal-content">
    	      					<div class="modal-header">
  	        						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>	        
              						<h5 class="modal-title" id="myModalLabel" style="padding-top:50px;font-size:30px">CHANGE PICTURE</h5> 
           					 	</div><br/>
            				<div class="modal-body">
              				<div id="container">
               				<?php echo form_open_multipart('frontpage/changepicture');?>   
               				<input type="file" name="userfile" id="userfile" size="20" /> <br />
               				<p style="font-size:14px; color:white;">File Type : .jpg | Recomended Size : 200x263px <br/> Notes: If your profile Picture not Updated, Log-out and Log-in Again.</p>
                 			<div class="row">
		              	<div class="col-md-8">
            		  <span><b>Before Click Upload, <b>You Must</b> verify Your Login Password:<input type="password" class="form-control" id="old" name="old" placeholder="Your Password"><br/><br/></b></span>
                 		</div>
             		  </div>
               		<input type="submit" value="Upload" class="btn btn-primary"/> 
              	</form>
             	<form method="post" action="resetpicture" style="float: right;margin-top: -50px;"><input type="submit" value="Reset Picture" class="btn btn-danger" style="margin-top: -10%;margin-left: 80px;" onclick="return confirmation();" /></form><br/>
             	<br/><br/><br/>
	         </div>
          		</div>
	       			</div>
    	   		</div>
    	   	</div>
			<!-- PopUp -->
				<!-- Pop Up 2-->
					<div style="display:none;margin-top:1em;padding:0 4em 0 4em;background:#df7366;" class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	        			<div class="modal-dialog" style="padding:0 15%">
    	    				<div class="modal-content">
    	      					<div class="modal-header">
  	        						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>	        
              						<h5 class="modal-title" id="myModalLabel" style="padding-top:50px;font-size:30px">UPDATE INFORMATION</h5> 
           					 	</div><br/>
            				<div class="modal-body">
              				<div id="container">
               				<?php echo form_open_multipart('frontpage/changepicture');?>   
               				<input type="file" name="userfile" id="userfile" size="20" /> <br />
               				<p style="font-size:14px; color:white;">File Type : .jpg | Recomended Size : 200x263px <br/> Notes: If your profile Picture not Updated, Log-out and Log-in Again.</p>
                 			<div class="row">
		              	<div class="col-md-8">
            		  <span><b>Before Click Upload, <b>You Must</b> verify Your Login Password:<input type="password" class="form-control" id="old" name="old" placeholder="Your Password"><br/><br/></b></span>
                 		</div>
             		  </div>
               		<input type="submit" value="Upload" class="btn btn-primary"/> 
              	</form>
             	<form method="post" action="resetpicture" style="float: right;margin-top: -50px;"><input type="submit" value="Reset Picture" class="btn btn-danger" style="margin-top: -10%;margin-left: 80px;" onclick="return confirmation();" /></form><br/>
             	<br/><br/><br/>
	         </div>
          		</div>
	       			</div>
    	   		</div>
    	   	</div>
			<!-- PopUp -->
			</div>


		

		<!-- Carousel -->
			<section class="carousel" style="padding:0 0 2em 0;">
				<div class="reel">
                               <?php
                                    $tempada = 0;
                                    foreach($userSemualengkap AS $key){
                                    if($key['pict']!=""){
                                    $tempada=1;
                                    echo "<article style='padding: 0 1em 1em 1em;'><button class='btn btn-default btn-sm detailzoom' data-toggle='modal' data-target='#myModal2'><img src='".base_url()."assets/img/cover/";
                                    if($key['pict']!=''){ echo $key['pict'];} else {echo 'unknown';};
                                    echo ".jpg' alt='' class='crop'/></button><header>";
                                    echo "<h3><a href='".$key['pict']."'>".$key['NAMENYA']."</a></h3></header>";
                                    echo "<p>".$key['from']."</p>";
                                    echo "</article>";
                                    }
                                }
                                if($tempada==0){
                                echo "<li>empty</li>";
                                }
                                ?>
					
				
					

				</div>
			</section>
			

		<!-- Footer -->
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="12u">
							
							<!-- Contact -->
								<section class="contact">
									<header>
										<h3>Need more Information?</h3>
									</header>
									<p>Contact me on E-Fast</p>
									<ul class="icons">
										<li><a href="http://eidwhd.com" class="#" style="width:300px"><span class="label">BACK TO EIDWHD.COM</span></a></li>
									</ul>
								</section>
					<hr />
							
							<!-- Copyright -->
								<div class="copyright">
									<ul class="menu">
										<li>&copy; Ekunbar. All rights reserved.</li><li>Design: <a href="http://about.me/coroowicaksono">Kuncoro Wicaksono</a></li>
									</ul>
								</div>
							
						</div>
					
					</div>
				</div>
			</div>
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
	</body>
</html>