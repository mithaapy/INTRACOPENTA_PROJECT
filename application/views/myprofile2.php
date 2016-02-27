<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $name ?> - EIDWHD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Bootstrap -->
    <link rel="icon" href="<?php echo base_url(); ?>/assets/img/elogo.png" type="image/png">
    <!-- <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/erismall.png"> -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
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

    .btn-default {
       width:150px;
    }

    
    @font-face {
    font-family: EricssonCapital;
    src: url(../../assets/font/EricssonCapitalTT.ttf);
    }    
    
    .modal-header {
      background-color: #333;
      color:#eee;
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
  <body onload="startTime()">
    <!-- Wrap all page content here -->
    <div id="wrap">
     
      <!-- Fixed navbar -->
      <div class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color:#333; font-family: 'Kaushan Script', cursive; border:0">
        <div class="container">
            <a class="navbar-brand" style="padding: 15px 0px 0px 55px; color:#f9f9f9;font-family: EricssonCapital; " href="#"><p>My Profile</p></a>
        </div>
      </div>
      <div style="background-color:#0099CC; height:300px; margin-bottom:-180px">
      </div>
      <!-- Begin page content -->
      <div class="container" style="width:1100px">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-9">
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
            <table style="font-family: Helvetica; font-size:12px; margin-left:8px;color:#999">
              
              <tr>
                <td style="width:100px">Username
                </td>
                <td style="width:600px">: <?php echo $user ?> 
                </td>
              <tr>
              <tr>
                <td>Phone 1
                </td>
                <td>: <?php echo $userlengkap[0]['phone']; ?> 
                </td>
              <tr>
              <tr>
                <td>Phone 2
                </td>
                <td>: <?php echo $userlengkap[0]['phone2']; ?> 
                </td>
              <tr>
              <tr>
                <td>Email
                </td>
                <td>: <?php echo $userlengkap[0]['email']; ?> 
                </td>
              <tr>
              <tr>
                <td>Address
                </td>
                <td>: -
                </td>
              <tr>
            </table>  
            <br/>  
              </div>
            </div>

            <div class="col-md-3">
                <div class="panel-body" style="float:right">
                  <button style="padding:0px; width:200px; border:1px solid #ddd" data-toggle='modal' data-target='#myModal2'><img src="<?php echo base_url(); ?>assets/img/cover/<?php if($pict!=''){ echo $pict;} else {echo 'unknown';} ?>.jpg" style="width:200px"></button><br>
                   
                
              </div>
            </div>
          </div><hr/>
          <div style="text-align:center;">
                <!--<button class='btn btn-default btn-sm detailzoom' data-toggle='modal' data-target='#myModal3'>Account Information</button>-->
                <button class='btn btn-default btn-sm detailzoom' data-toggle='modal' data-target='#myModal2'>Change Picture</button>
                <button class='btn btn-default btn-sm detailzoom' data-toggle='modal' data-target='#myModal'>Change Password</button> <a href="menu" class="btn btn-default btn-sm">Back to iBoard</a>
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
		  <div class="col-md-8"><input type="text" class="form-control" id="name" name="name"></div>
		</div><br>
		<div class="row">
		  <div class="col-md-3"><h7>Phone 1</h7></div>
		  <div class="col-md-4"><input type="text" class="form-control" id="phone1" name="phone1"></div>
		</div><br>
		<div class="row">
		  <div class="col-md-3"><h7>Phone 2</h7></div>
		  <div class="col-md-4"><input type="text" class="form-control" id="phone2" name="phone2"></div>
		</div><br>
		<div class="row">
		  <div class="col-md-3"><h7>Email</h7></div>
		  <div class="col-md-6"><input type="text" class="form-control" id="email" name="email"></div>
		</div><br>
		<div class="row">
		  <div class="col-md-3"><h7>Address</h7></div>
		  <div class="col-md-8"><input type="text" class="form-control" id="address" name="address"></div>
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
		
    <div id="footer">
      <div class="container">
        <p class="text-muted credit">Created by EID Supply 2014  &copy; Ericsson Indonesia | Best View with Chrome.</p>
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
                            
                            
                            