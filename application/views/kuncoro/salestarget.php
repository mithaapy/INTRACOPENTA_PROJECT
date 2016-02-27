<div class="wrapper row-offcanvas row-offcanvas-left">
	<!-- Left side column. contains the logo and sidebar -->
	<aside class="left-side sidebar-offcanvas">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">
			<!-- Sidebar user panel -->
			<div class="user-panel2">
				<img src="<?php echo base_url(); ?>assets/img/logo.png" style="width:100%" class="desktop" alt="User Image" />
			</div>
			<div class="user-panel">
				<div class="pull-left image">
					<img src="<?php echo base_url(); ?>assets/img/cover/<?php if($pict!=''){ echo $pict;} else {echo 'unknown';} ?>.jpg" class="img-circle" alt="User Image" />
				</div>
				<div class="pull-left info">
					<p>Hello, <?php $name; $namaawal = explode(" ", $name); echo $namaawal[0]; ?></p>
					<a href="#"><i class="fa fa-circle text-success"></i> <?php echo $from ?></a>
				</div>
			</div>

			<ul class="sidebar-menu">
				<li style="border-top: none;">
					<a href="<?php echo base_url(); ?>">
						<i class="fa fa-arrow-circle-o-right"></i> <span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url(); ?>index.php/frontpage/openbiding">
						<i class="fa fa-arrow-circle-o-right"></i> <span>Open Biding</span>
					</a>
				</li>     
				<li class="treeview">
					<a href="#">
						<i class="fa fa-arrow-circle-o-right"></i>
						<span>Progress Status</span>
						<i class="fa fa-angle-left pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href='<?php echo base_url();?>index.php/frontpage/pslead'><i class='fa fa-angle-double-right'></i>Lead</a></li>
						<li><a href='<?php echo base_url();?>index.php/frontpage/pssuspect'><i class='fa fa-angle-double-right'></i>Suspect</a></li>
						<li><a href='<?php echo base_url();?>index.php/frontpage/psprospect'><i class='fa fa-angle-double-right'></i>Prospect</a></li>
					</ul>
				</li>
				<li class="treeview active">
					<a href="#">
						<i class="fa fa-arrow-circle-o-right"></i>
						<span>Sales</span>
						<i class="fa fa-angle-left-pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li class="active">
							<a href=""><i class="fa fa-angle-double-right"></i>Sales Target</a>
						</li>
						<li>
							<a href=""><i class="fa fa-angle-double-right"></i>Sales Activity</a>
						</li>
						<li>
							<a href=""><i class="fa fa-angle-double-right"></i>Visit Activity</a>
						</li>
						<li>
							<a href=""><i class="fa fa-angle-double-right"></i>Customer Info</a>
						</li>
						<li>
							<a href=""><i class="fa fa-angle-double-right"></i>Competition</a>
						</li>
					</ul>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-arrow-circle-o-right"></i>
						<span>Quotation</span>
						<i class="fa fa-angle-left-pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li>
							<a href=""><i class="fa fa-angle-double-right"></i>Incentive</a>
						</li>
						<li>
							<a href=""><i class="fa fa-angle-double-right"></i>Discount Submit</a>
						</li>
						<li>
							<a href=""><i class="fa fa-angle-double-right"></i>Discount Approval</a>
						</li>
						<li>
							<a href=""><i class="fa fa-angle-double-right"></i>Quotation Creation</a>
						</li>
					</ul>
				</li>
				<?php
				if ($admin == 1) { ?>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-arrow-circle-o-right"></i>
						<span>Settings</span>
						<i class="fa fa-angle-left-pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li>
							<a href="<?php echo base_url();?>index.php/frontpage/source"><i class="fa fa-angle-double-right"></i>Source</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/frontpage/company"><i class="fa fa-angle-double-right"></i>Company</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/frontpage/user"><i class="fa fa-angle-double-right"></i>User</a>
						</li>
					</ul>
					<?php
				}
				?>
			</ul>
		</section>	  	
	</aside>
	<aside class="right-side">
		<section class="content-header">
			<h1 class="ekunfontslide">
				Sales Target
			</h1>
			<ol class="breadcrumb ekuntfontslide">
				<li><a href="#"><i class="fa fa-thumb-tack"> Inta</i></a></li>
				<li class="active">Sales Target</li>
			</ol>
		</section>
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-header">
							
						</div>
						<div class="box-body table-responsive">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>

									</tr>
								</thead>
								<tbody></tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>
	</aside>
</div>

<script type="text/javascript">
	$(function() {
		$("#example1").dataTable({
			"bPaginate": true,
			"bAutoWidth": false
		});
		$('#example2').dataTable({
			"bPaginate": true,
			"bLengthChange": false,
			"bFilter": false,
			"bSort": true,
			"bInfo": true,
			"bAutoWidth": false
		});
	});
</script>