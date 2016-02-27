<script type="text/javascript">
		 // speed in milliseconds
		 var scrollSpeed = 30;

		 // set the default position
		 var current = 0;

		 // set the direction
		 var direction = 'h';

		 function bgscroll() {

			 // 1 pixel row at a time
			 current -= 1;

			 // move the background with backgrond-position css properties
			 $('body').css("backgroundPosition", (direction == 'h') ? current + "px 0" : "0 " + current + "px");

		 }

		 //Calls the scrolling function repeatedly
		 setInterval("bgscroll()", scrollSpeed);
	</script>
<style>
	body{
        background:black url('assets/img/login/background_eidwhd.gif') repeat-x 0 0;
        text-transform: uppercase;
		
	}
        img.displayed {
        display: block;
        margin-left: auto;
        margin-right: auto }
        button.btn.btn-primary {
        font-size: 12px;
        }

    
    @font-face {
    font-family: EricssonCapital;
    src: url(../../assets/font/EricssonCapitalTT.ttf);
    }   
        h1
{
    //text-shadow: 0 1px 0 rgba(255, 255, 255, .7), 0px 2px 0 rgba(0, 0, 0, .5);
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

.wellekunbar {
    color:white;
    padding: 20px;
    background: #111;
    /*background: transparent url(assets/img/login/bg_menu.png) repeat top left;*/

}

.ekunbar_footer {
position: fixed;
bottom: 0px;
left: 0px;
width: 100%;
font-size: 13px;
background: #000;
opacity: 0.9;
height: 20px;
padding-bottom: 5px;
}
 
h1:after
{ 
    background-image: -webkit-gradient(linear, left top, right top, from(#777), to(#000));
    background-image: -webkit-linear-gradient(left, #777, #000);
    background-image: -moz-linear-gradient(left, #777, #000);
    background-image: -ms-linear-gradient(left, #777, #000);
    background-image: -o-linear-gradient(left, #777, #000);
    background-image: linear-gradient(left, #777, #000);      
    right: 0;
}
 
h1:before
{
    background-image: -webkit-gradient(linear, right top, left top, from(#777), to(#000));
    background-image: -webkit-linear-gradient(right, #777, #000);
    background-image: -moz-linear-gradient(right, #777, #000);
    background-image: -ms-linear-gradient(right, #777, #000);
    background-image: -o-linear-gradient(right, #777, #000);
    background-image: linear-gradient(right, #777, #000);
    left: 0;
}
</style>
<div style="width: 320px; margin-left: auto; margin-right: auto; margin-top:15%">
   <? if (!empty($error)): ?>
      <div class="alert alert-error">
         <b>Error!</b> <?= $error ?>
      </div>
   <? elseif (!empty($info)): ?>
      <div class="alert alert-info">
         <b>Info.</b> <?= $info ?>
      </div>
   <? endif; ?>
   <form class="wellekunbar" method="POST" action="index.php/frontpage/login">
          <h1 style="font-family: EricssonCapital;">Log In</h1>
	  <div class="form-group">
	    <!--<label for="exampleInputEmail1">Username</label>-->
	    <input type="text" class="form-control" id="user" name="user" placeholder="Username">
	  </div>
	  <div class="form-group">
	    <!--<label for="exampleInputPassword1">Password</label>-->
	    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
	  </div>
	  <button type="submit" class="btn btn-primary" style="float:right; width:100px">LOGIN</button><br/><br/>
   </form><br/>
   <!--<img class="displayed" src="assets/img/elogo.png">-->
<!--
    <div class="ekunbar_footer">
      <a style="color:white;" ><marquee><i>Outing Time : Thursday, 28 August 2014 Until Saturday, 30 August 2014.</i></marquee></a>
    </div>-->
   <div style="font-size: 10px; position: fixed; bottom: 0; margin-bottom:0px; left: 50%; margin-left: -200px; color:#fff; width: 400px; height: 30px;">
       <p align="center">EID Supply - Ericsson © 2014</p>
   </div>
</div>
                            
                            