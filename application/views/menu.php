<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/default.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/component.css" />
		<title>EIDWHD Menu</title>
		
	        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	        <script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/1.3.1/lodash.min.js"></script>
	        <script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
	        <script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
	        
		<script src="<?php echo base_url() ?>js/modernizr.custom.js"></script>
		<link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/xmen.jpg" />
		<script type="text/javascript">
		$(function () {
		    $('#contact').popover({placement:'top',content:'Contact'});
		    $('#contact').popover('show');
		    
		    $('#asset').popover({placement:'top',content:'Assets Data'});
		    $('#asset').popover('show');
		    
		    $('#employee').popover({placement:'top',content:'Employee Data'});
		    $('#employee').popover('show');
		    
		    $('#bast').popover({placement:'top',content:'iBAST CEVA'});
		    $('#bast').popover('show');
		    
		    $('#kpi').popover({placement:'top',content:'KPI WH'});
		    $('#kpi').popover('show');
		    
		    $('#productivity').popover({placement:'top',content:'Productivity'});
		    $('#productivity').popover('show');
		    
		    $('#snapshot').popover({placement:'top',content:'Snapshot'});
		    $('#snapshot').popover('show');
		    
		    $('#transport').popover({placement:'top',content:'Transport Price'});
		    $('#transport').popover('show');
		    
		    $('#whlist').popover({placement:'top',content:'WH List'});
		    $('#whlist').popover('show');
		    
		    $('#whprice').popover({placement:'top',content:'WH Price'});
		    $('#whprice').popover('show');
		    
		    $('#dspshare').popover({placement:'top',content:'DSP Share'});
		    $('#dspshare').popover('show');
		    
		    $('#dspkpi').popover({placement:'top',content:'DSP KPI'});
		    $('#dspkpi').popover('show');
		    
		    $('#procat').popover({placement:'top',content:'Product Catalogue'});
		    $('#procat').popover('show');
		    
		    $('#porkes').popover({placement:'top',content:'Forecast'});
		    $('#porkes').popover('show');
		    
		    $('#ocupai').popover({placement:'top',content:'Occupancy'});
		    $('#ocupai').popover('show');
		});
		</script>
		<style>
		.popover {
		  position: absolute;
		  top: 0;
		  left: 0;
		  z-index: 1010;
		  display: none;
		  max-width: 276px;
		  padding: 1px;
		  text-align: left;
		  white-space: normal;
		  background-color: #ffffff;
		  border: 1px solid #cccccc;
		  border: 1px solid rgba(0, 0, 0, 0.2);
		  border-radius: 6px;
		  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
		          box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
		  background-clip: padding-box;
		}
		
		.popover.top {
		  margin-top: -10px;
		}
		
		.popover.bottom {
		  margin-top: 10px;
		}
		
		.popover-title {
		  display: none;
		}
		
		.popover-content {
		  padding: 5px 10px;
		}
		
		.popover .arrow,
		.popover .arrow:after {
		  position: absolute;
		  display: block;
		  width: 0;
		  height: 0;
		  border-color: transparent;
		  border-style: solid;
		}
		
		.popover .arrow {
		  border-width: 11px;
		}
		
		.popover .arrow:after {
		  border-width: 10px;
		  content: "";
		}
		
		.popover.top .arrow {
		  bottom: -11px;
		  left: 50%;
		  margin-left: -11px;
		  border-top-color: #999999;
		  border-top-color: rgba(0, 0, 0, 0.25);
		  border-bottom-width: 0;
		}
		
		.popover.top .arrow:after {
		  bottom: 1px;
		  margin-left: -10px;
		  border-top-color: #ffffff;
		  border-bottom-width: 0;
		  content: " ";
		}
		
		.popover.bottom .arrow {
		  top: -11px;
		  left: 50%;
		  margin-left: -11px;
		  border-bottom-color: #999999;
		  border-bottom-color: rgba(0, 0, 0, 0.25);
		  border-top-width: 0;
		}
		
		.popover.bottom .arrow:after {
		  top: 1px;
		  margin-left: -10px;
		  border-bottom-color: #ffffff;
		  border-top-width: 0;
		  content: " ";
		}
		</style>
	</head>
	<body>
		<div class="container">
			<section id="set-1">
				<div class="hi-icon-wrap hi-icon-effect-1 hi-icon-effect-1a">
					<div style="margin-top:-50px">
						<h1 style="color:#fff">Warehouse</h1>
					</div>
					<div style="margin-top:50px">
					<a href="http://inventory.eidwhd.com/tms_chart_detail.php" id="productivity" title="Productivity" class="hi-icon hi-icon-cog">Productivity</a>
					<a href="http://inventory.eidwhd.com/tms_chart_ceva.php" id="snapshot" title="Productivity Snapshot" class="hi-icon hi-icon-clock">Productivity Snapshot</a>
					<a href="http://warehouse.eidwhd.com/" title="WH List" id="whlist" class="hi-icon hi-icon-list">WH List</a>
					<a href="http://bast.eidwhd.com/" title="i-BAST CEVA" id="bast" class="hi-icon hi-icon-support">iBAST</a>
					
					</div>
				</div>
				<div class="hi-icon-wrap hi-icon-effect-1 hi-icon-effect-1a">
					<div style="margin-top:-50px">
						<a href="http://inventory.eidwhd.com/tms_chart_detail2.php" title="KPI" id="kpi" class="hi-icon hi-icon-locked">KPI</a>
					<a href="http://bast.eidwhd.com/index.php/main/price" id="whprice" title="WH Price" class="hi-icon hi-icon-list">WH Price</a>
					<a href="http://iocup.eidwhd.com/" id="ocupai" title="Occupancy" class="hi-icon hi-icon-list">Occupancy</a>
					</div>
				</div>
				<div class="hi-icon-wrap hi-icon-effect-1 hi-icon-effect-1a">
					<div style="margin-top:-50px">
						<h1 style="color:#fff">Distribution</h1>
					</div>
					<div style="margin-top:50px">
					<a href="http://pricelist.eidwhd.com/" id="transport" title="Transport Price" class="hi-icon hi-icon-videos">Transport Price</a>
					<a href="http://idist.eidwhd.com/" title="DSP Share" id="dspshare" class="hi-icon hi-icon-cog">DSP Share</a>
					<a href="http://idist.eidwhd.com/index.php/main/performance" title="DSP KPI" id="dspkpi" class="hi-icon hi-icon-clock">DSP KPI</a>
					</div>
				</div>
				<div class="hi-icon-wrap hi-icon-effect-1 hi-icon-effect-1a">
				 	<div style="margin-top:-50px">
						<h1 style="color:#fff">iDAMAN</h1>
					</div>
					<div style="margin-top:50px">
					<a href="http://warehouse.eidwhd.com/index.php/dash/contact" title="Contact List" id="contact" rel="popover" class="hi-icon hi-icon-star">Contact List</a>
					<a href="http://warehouse.eidwhd.com/index.php/dash/employee" title="Data Asset" id="asset" class="hi-icon hi-icon-screen">Data Asset</a>
					<a href="http://warehouse.eidwhd.com/index.php/dash/personel" title="Employee" id="employee" class="hi-icon hi-icon-earth">Employee</a>
					
					<a href="http://proled.eidwhd.com/" title="Product Catalogue" id="procat" class="hi-icon hi-icon-clock">Product Catalogue</a>
					<a href="http://icast.eidwhd.com/" title="Forecast" id="porkes" class="hi-icon hi-icon-clock">Forecast</a>
					</div>
				</div>
				
				<div class="hi-icon-wrap hi-icon-effect-1 hi-icon-effect-1a" style="margin-top:-50px">
					<?php if($rule=="main"){ ?><a href="admin" style="color:#fff">Admin</a> - <?php } ?><a href="logout" style="color:#fff">Logout</a>
				</div>
				
			</section>
		</div><!-- /container -->
	</body>
</html>