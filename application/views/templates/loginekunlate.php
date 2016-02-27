<!--<style>
	body{
        font-family:helvetica;
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

.ekun-login-formnya{
    background:url(http://eidwhd.com/assets/img/ekunlate.jpg);
}

input#user{background:#EFC7AD;color:#fff;width: 100%;padding: 6px 12px;font-size: 14px;line-height: 1.428571429;vertical-align: middle;border: 1px solid #EFC7AD;}
.inputannya {background:#EFC7AD;color:#fff;width: 100%;padding: 6px 12px;font-size: 14px;line-height: 1.428571429;vertical-align: middle;border: 1px solid #EFC7AD;}

input[type="text"], textarea {background-color : #E7945E;}

.wellekunbar {
    color:white;
    padding: 20px;
    //background: #111;
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

::-webkit-input-placeholder {
   color: #ccc;
}

:-moz-placeholder { /* Firefox 18- */
   color: #ccc;  
}

::-moz-placeholder {  /* Firefox 19+ */
   color: #ccc;  
}

:-ms-input-placeholder {  
   color: #ccc;  
}

/*ekunbar style*/
        .pull-center {
            display: table;
            margin-left: auto;
            margin-right: auto;
        }
        .button-ekunbar {
             font-family: 'Segoe UI', 'Open Sans', Arial, sans-serif;
             color: rgb(255, 255, 255);
             text-decoration: none;
             text-align: center;
             padding: 10px;
             margin: 15px 0px 0px 15px;
             font-size: 18px;
             text-transform: uppercase;
             border: 0px none;
             outline: 0px none;
         }
        .ekun-red {
             background: #ED5E2F; border:0; 
             color: #FFF;
         }
        .ekun-grey-dark{
             background: #BBB; border:0; 
             color: #FFF;
         }
        .greyfont-ekunbar{
             color: #888;
         }
        .ekun-green {
             background: #60a917 !important; border:0;
             color: #FFF;
         }
        .ekun-blue {
             background: #4390df !important; border:0;
             color: #FFF;
         }
        .ekun-black {
             background: #1d1d1d !important; border:0;
             color: #FFF;
         }
         .button-ekunbar:hover {
             background: #74A599;
         }
         .wseventy {
             width:70px;
         }
        .ekun-white-putih {
             background: #fff !important; border:0; 
             color: #333; margin:0 10px;
         }

         .button-ekunbar:active {
             background: #F6A953;
         }
         .ekun-radius {
             border-radius:0;border-color:none;
         }
         .greyfont-ekunbar-fontsmall{font-size:80%;color:#888}
         .just-mobile{display:none;}
         .container .jumbotron{border-radius:0}
         h1 {font-family: Raleway;}
      }

@media (min-width: @screen-sm-min) { margin-left:-200px; }

         .button-ekunbar:hover {
             background: #74A599;
         }

         .button-ekunbar:active {
             background: #F6A953;
         }
         .ekun-radius {
             border-radius:0;border-color:none;
         }
         .ekun-jumbotron-top-margin {
             padding-top:10%;
             padding-bottom:0;
             margin-bottom:0;
         }
         .ekun-jumbotron-bottom-margin {
             padding-bottom:100px;
             padding-top:0;
             margin-top:0;
         }
         .ekun-padding-one {
             padding:10px 25px;
         }
         .ekun-padding-two {
             padding:15px 50px;
         }
         .ekun-padding-three {
             padding:20px 75px;
         }
         .ekun-r {
             float:right;
         }
         .ekun-tgh-limapuluh{
         vertical-align: middle !important;
         height: 50px;}
         .ekun-l {
             float:left;
         }
         .logonya {
             float:left;position: absolute;margin-left:30px; margin-top:-5px;
         }
         .ekunbar-fell-important{
             background:#fff; padding: 10px 30px; overflow-y: scroll; height:500px;
         }
         #ekunbar-postme{ display: none; }
         #ekunbar-cancelme{ display: none; }
         .ekunbar-fell-important-p{
             font-size:13px;
         }
         .ekunbar-fell-important-table{
             
         }
         .btn-edited{
             background-color:#629dc4;color:#fff;border-radius:0;
         }
         .btn-edited:hover{
             background-color:#42779b;color:#fff;border-radius:0;
         }
         .ekunbar-fell-important-table tr td{
             font-size:13px; vertical-align:top;
         }
         .ekunbar-fell-important-p ol li{
             font-size:12px !important; display:inherit !important; 
         }
         .ekunbar-formula{}
         .ekunbar-padding-o{padding:0 !important}
         .ekunbar-fell-important-table-two th, .ekunbar-fell-important-table-two td {font-size:12px;text-align:center;padding:0 10px;width:6.5%}
         .ekunbar-fell-left{text-align:left !important}
         .smalltron{padding: 5px;margin-bottom: 30px;font-size: 21px;font-weight: 200;line-height: 2.1428571435;color: inherit;
background-color: #eee;}
         .form-control-custom {border: 0;border-bottom: 1px dotted;background: none;width: 100%;padding:2px;}
         .form-control-custom-second {border: 0;border: 1px #d9d9d9 solid;background: none;width: 100%;padding:5px;}
         .bottom-margin-ten {margin-bottom:10px;}
         .cant-change {border-color: #e51400;}
         .container .jumbotron{border-radius:0}
         h1 {font-family: Raleway;}
      }

.row {
   margin-right: 0px !important; 
   margin-left: 0px !important; 
}

.banner { position: relative; overflow: auto; padding-right:10px; }
    .banner li { list-style: none; }
        .banner ul li { float: left; }

</style>

<script src="//code.jquery.com/jquery-latest.min.js"></script>
<script src="//unslider.com/unslider.min.js"></script>
<script>$(function() {
    $('.banner').unslider({
	speed: 500,             
	delay: 8000});
});</script>

</head>

<body>

<div class="row" style="margin-right: 0px !important; margin-left: 0px !important;">
   <div class="col-md-1"></div>
   <div class="col-md-6">
<h3 style="font-family: EricssonCapital;color:#444">EIDWHD TOOLS | <span class="kecilin-span-sepuluh" style="font-size:12px;">EIDWHD.COM</span></h3><br/><p style="font-family: EricssonCapital;color:#444"/>THINK SMART, WORK SMART.</p></div>
</div>

<div class="row ekun-login-formnya" style="margin-right: 0px !important; margin-left: 0px !important;">

   <div class="col-md-1"></div>
   <div class="col-md-6"><br/><br/><div class="banner desktop">
    <ul><li><iframe width="560" height="315" src="//www.youtube.com/embed/videoseries?list=PLsn61Zheh8iilpHXYqsuJrYWS9rfo0mIK" frameborder="0" allowfullscreen></iframe></li>
        <li><h3 style="font-family: EricssonCapital;color:#fff">HAPPY NEW YEAR 2015<br/><br/><p style="font-family: arial;color:#fff;font-size:12px"/>Let new beginnings signify new chapter filled with pages of success and happiness,
written by the ink of hard work and intelligence, cause think smart work smart. </p> </li>
        <li><h3 style="font-family: EricssonCapital;color:#fff">EIDWHD.COM Review on 2014<br/><br/><p style="font-family: arial;color:#fff;font-size:12px"/>EIDWHD.COM is one of many tool owned by ERICSSON INDONESIA, especially used by EID Supply.<br/>There a lot of changed that made for a better purpose and easier for catch data and transform it into another attractive view, like chart. Some changes made to eidwhd.com are security, design, dashboard and application on eidwhd.com.</p> </li>
        <li><h3 style="font-family: EricssonCapital;color:#fff">Our Target for Next EIDWHD.COM<br/><br/><p style="font-family: arial;color:#fff;font-size:12px"/>Tomorrow marks the beginning of a new year and the opportunity to do new and exciting things for us. EIDWHD.COM needs to developed again with another idea to simplyfier us for using it.</p> </li>
    </ul>
</div></div>
   <div class="col-md-4">
   <form class="wellekunbar" method="POST" action="index.php/frontpage/login"><br/><br/>
	  <div class="form-group">
         <p style="font-family: EricssonCapital;color:#fff"/>WELCOME. PLEASE LOGIN.</p></div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Username</label>
	    <input type="text" class="inputannya" id="user" name="user" placeholder="Username">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" class="inputannya" id="password" name="password" placeholder="Password">
	  </div>
	  <button type="submit" class="btn btn-edited" style="float:right; width:100px">LOGIN</button>
   </form><br/><br/><br/></div>
   <div class="col-md-1"></div>

</div>
   

<div style="font-size: 10px; position: fixed; bottom: 0; margin-bottom:0px; left: 50%; margin-left: -200px; color:#555; width: 400px; height: 30px;">
       <p align="center">EID Supply - Ericsson © 2014</p>
   </div>
</div>-->