<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="eidwhd">
        <meta name="keywords" content="eidwhd">
        <meta name="author" content="kuncoro">
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/elogo.png" />
        <title>INTA | Login</title>

        <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
        
    </head>
    <style>
        .se-pre-con {
            position: fixed;
            right: 0px;
            top: 0px;
            width: 50px;
            height: 50px;
            z-index: 9999;
            background: url(http://eidwhd.com/assets/img/loadingiboard.gif) center no-repeat #fff;
        }

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
        h1 {
            text-transform: uppercase;
            text-align: center;
            color: #666;
            margin: 0 0 15px 0;
            letter-spacing: 2px;
            font: normal 26px/1 Verdana, Helvetica;
            position: relative;
        }
        .ekunbarvideo2 {
            display:none;
        }
        h1:after, h1:before {
            background-color: #777;
            content: "";
            height: 1px;
            position: absolute;
            top: 15px;
            width: 80px;   
        }
        .ekun-login-formnya{
            background:#001e4e;
        }
        input#username{
            background:#ffcccc;color:#333;width: 100%;padding: 6px 12px;
            font-size: 14px;line-height: 1.428571429;vertical-align: middle;border: 1px solid #ffcccc;
        }
        .inputannya {
            background:#ffcccc;color:#333;width: 100%;padding: 6px 12px;font-size: 14px;
            line-height: 1.428571429;vertical-align: middle;border: 1px solid #ffcccc;
        }
        input[type="text"], textarea {background-color : #E7945E;}
        .wellekunbar {
            color:white;
            padding: 20px;
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
            color: #888;
        }
        :-moz-placeholder { /* Firefox 18- */
            color: #888;  
        }
        ::-moz-placeholder {  /* Firefox 19+ */
            color: #888;  
        }
        :-ms-input-placeholder {  
            color: #888;  
        }

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
        .smalltron{padding: 5px;margin-bottom: 30px;font-size: 21px;font-weight: 200;line-height: 2.1428571435;color: inherit; background-color: #eee;}
        .form-control-custom {border: 0;border-bottom: 1px dotted;background: none;width: 100%;padding:2px;}
        .form-control-custom-second {border: 0;border: 1px #d9d9d9 solid;background: none;width: 100%;padding:5px;}
        .bottom-margin-ten {margin-bottom:10px;}
        .cant-change {border-color: #e51400;}
        .container .jumbotron{border-radius:0}
        h1 {font-family: Raleway;}

        .row {
            margin-right: 0px !important; 
            margin-left: 0px !important; 
        }

        .banner { position: relative; overflow: auto; padding-right:10px; }
        .banner li { list-style: none; }
        .banner ul li { float: left; }

        .loader {
            //position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url('images/page-loader.gif') 50% 50% no-repeat rgb(249,249,249);
        }
    </style>
    <body>
        <div class="se-pre-con"></div>
        <div class="row" style="margin-right: 0px !important; margin-left: 0px !important;">
            <div class="col-md-1"></div>
            <div class="col-md-10 ekunbargerak" style="text-align:center">
                <div class="desktop"><br/><br/><br/></div>
                <h2 style="color:#444;font-family:sans-serif">INTA<span style="font-size:20px;color:#AAA"> Cross Selling</span></h2><br/>
            </div>
        </div>
        <div class="row ekun-login-formnya" style="margin-right: 0px !important; margin-left: 0px !important;">
            <div class="col-md-1"></div>
            <div class="col-md-3 desktop"></div>
            <div class="col-md-4">
                <form class="wellekunbar" method="POST" action="<?php echo base_url(); ?>index.php/conmain/login_process"><br/><br/>
                    <div class="label-default alert-notif"><?php echo $this->session->flashdata('err_msg'); ?></div>
                    <div class="form-group">
                        <p/>WELCOME. PLEASE LOGIN.</p>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1" style="color:#AAA"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" required>
                    </div>
                    <br/>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1" style="color:#AAA"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                    </div>
                    <br/>
                    <button type="submit" class="btn btn-edited" style="float:right; width:100px">SIGN IN</button>
                </form>
                <br/><br/><br/><br/>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class='ekunbarfooter' style="font-size: 10px; position: fixed; bottom: 0; margin-bottom:0px; left: 50%; margin-left: -200px; color:#555; width: 400px; height: 30px;">
            <p align="center"><strong>Copyright © 2015 <a href="http://www.intracopenta.com/">INTA</a>.</strong></p>
        </div>
    </body>
</html>