<style>
	body{
		background:url('assets/img/body_noise.png') repeat 0 0;
		background-size:600px 600px;
	}
        img.displayed {
                display: block;
                margin-left: auto;
                margin-right: auto }
        button.btn.btn-primary {
                font-size: 12px;
        }
        h1
{
    text-shadow: 0 1px 0 rgba(255, 255, 255, .7), 0px 2px 0 rgba(0, 0, 0, .5);
    text-transform: uppercase;
    text-align: center;
    color: #666;
    margin: 0 0 15px 0;
    letter-spacing: 2px;
    font: normal 26px/1 Verdana, Helvetica;
    position: relative;
}
 
h1:after, h1:before
{
    background-color: #777;
    content: "";
    height: 1px;
    position: absolute;
    top: 15px;
    width: 80px;   
}
 
h1:after
{ 
    background-image: -webkit-gradient(linear, left top, right top, from(#777), to(#fff));
    background-image: -webkit-linear-gradient(left, #777, #fff);
    background-image: -moz-linear-gradient(left, #777, #fff);
    background-image: -ms-linear-gradient(left, #777, #fff);
    background-image: -o-linear-gradient(left, #777, #fff);
    background-image: linear-gradient(left, #777, #fff);      
    right: 0;
}
 
h1:before
{
    background-image: -webkit-gradient(linear, right top, left top, from(#777), to(#fff));
    background-image: -webkit-linear-gradient(right, #777, #fff);
    background-image: -moz-linear-gradient(right, #777, #fff);
    background-image: -ms-linear-gradient(right, #777, #fff);
    background-image: -o-linear-gradient(right, #777, #fff);
    background-image: linear-gradient(right, #777, #fff);
    left: 0;
}
</style>
<div style="width: 320px; margin-left: auto; margin-right: auto ; margin-top:10%">
   <br/><br/><br/><br/><br/>

     
      <div class="#" id="" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h5 class="modal-title" id="myModalLabel">Change Password</h5>
	      </div>
	      <div class="modal-body">
	        <form method="post" action="updatePassword">
	        <div class="row">
		  <div class="col-md-3"><h7>Old Password</h7></div>
		  <div class="col-md-6"><input type="password" class="form-control" id="old" name="old"></div>
		</div><br>
		<div class="row">
		  <div class="col-md-3"><h7>New Password</h7></div>
		  <div class="col-md-6"><input type="password" class="form-control" id="new" name="new"></div>
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
       
     
   <div align="center">Your username or password was inccorect !</div><br/>
   <div align="center">Please try again : <a href="http://eidwhd.com">Login Again</a></div><br/><br/><br/><br/>   <img class="displayed" src="http://www.eidwhd.com/assets/img/elogo.png">
   <div style="font-size: 10px; position: fixed; bottom: 0; left: 50%; margin-left: -200px; width: 400px; height: 30px;">
       <p align="center">EID Supply - Ericsson © 2013</p>
   </div>
</div>