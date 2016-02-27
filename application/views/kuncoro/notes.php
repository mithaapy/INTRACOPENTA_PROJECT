<?php error_reporting(0); ?>        
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
                    <!-- search form -->
                    <!--<form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>-->
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
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
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-arrow-circle-o-right"></i>
                                <span>Progress Status</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active"><a href='<?php echo base_url();?>index.php/frontpage/pslead'><i class='fa fa-angle-double-right'></i>Lead</a></li>
                                <li><a href='<?php echo base_url();?>index.php/frontpage/pssuspect'><i class='fa fa-angle-double-right'></i>Suspect</a></li>
                                <li><a href='<?php echo base_url();?>index.php/frontpage/psprospect'><i class='fa fa-angle-double-right'></i>Prospect</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/frontpage/QuotationCreation">
                                <i class="fa fa-arrow-circle-o-right"></i> <span>Quotation Creation</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/frontpage/DiscountApproval">
                                <i class="fa fa-arrow-circle-o-right"></i> <span>Discount Approval</span>
                            </a>
                        </li>  
                        <?php if($admin==1){ ?>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-arrow-circle-o-right"></i>
                                <span>Setting</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href='<?php echo base_url();?>index.php/frontpage/source'><i class='fa fa-angle-double-right'></i>Source</a></li>
                                <li><a href='<?php echo base_url();?>index.php/frontpage/company'><i class='fa fa-angle-double-right'></i>Company</a></li>
                                <li><a href='<?php echo base_url();?>index.php/frontpage/user'><i class='fa fa-angle-double-right'></i>User</a></li>
                            </ul>
                        </li>
                        <?php }else{} ?>
                        <li>
                    </ul>       
                    <ul class="sidebar-menu just-mobile" style="bottom:0;position:absolute;background: #444;width:100%;padding:20px 4%"><li class="active" style="font-size:10px;color: #f6f6f6;width:100%">Ekunbar © EID Supply 2014 | Ericsson Indonesia <br/>Best View with Chrome</li></ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1 class='ekunfontslide'>
                        Notes
                    </h1>
                    <ol class="breadcrumb ekunfontslide">
                        <li><a href="#"><i class="fa fa-thumb-tack"></i> INTA</a></li>
                        <li class="active">Notes </li>
                    </ol>
                </section>


                <section class="content">      

            <form id="form" class="form-horizontal" name="form" action="../updateLead/<?php echo $leadid;?>" method="POST" enctype="multipart/form-data">
                  
                   <div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Registration Form</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="form-group">
                                <label for="input-stage" class="col-sm-2 control-label">Notes Subject</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="input-stage-id" name="input-stage-id" placeholder="Project Name" value="<?php if(!empty($leadReg[0]['STAGENAME'])) echo $leadReg[0]['STAGENAME']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-project-description" class="col-sm-2 control-label">Notes Detail</label>
                                    <div class="col-sm-9">
                                        <textarea id="input-project-description" name="input-project-description" rows="20" class="form-control" placeholder="Project Description"><?php if(!empty($leadReg)) echo $leadReg[0]['PROJECT_DESCRIPTION']; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-name" class="col-sm-2 control-label"></label>
                                </div>
                                <div class="form-group">
                                    <label for="input-name" class="col-sm-2 control-label">Create Name</label>
                                    <div class="col-sm-5">
                                        <input type="hidden" class="form-control" id="input-name" name="input-name" placeholder="Name" value="<?php if(!empty($leadReg[0]['CREATENAME'])){echo $leadReg[0]['CREATENAME'];}else{echo $user;}?>" readonly>
                                        <input type="text" class="form-control" placeholder="Name" value="<?php if(!empty($leadReg[0]['FIRSTNAME'])){echo $leadReg[0]['FIRSTNAME'];}else{echo $name;}?>" readonly>
                                        <input type="hidden" class="form-control" id="input-branch" name="input-branch" placeholder="Branch" value="<?php if(!empty($leadReg[0]['BRANCH_ID'])){echo $leadReg[0]['BRANCH_ID'];}else{echo $branchid;}?>" readonly>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="input-date" name="input-date" placeholder="Date" value="<?php if(!empty($leadReg[0]['CREATEDATE'])){echo $leadReg[0]['CREATEDATE'];}else{echo date('Y-m-d');}?>" readonly>
                                    </div>
                                </div>
                        </div>
                    </div>

                                </div>


                    <div class="row">
                        <div class="col-md-2">
                            <button onclick="goBack()" style="width:100%" type="button" id="button-back" class="btn btn-default pull-right"><i class="fa fa-arrow-circle-left"></i>&nbsp;Back</button>
                        </div>
                        <div class="col-md-8">
                        </div>
                        <div class="col-md-2">
                            <?php if($leadReg[0]['ASSIGNTYPE']=='Open' OR $leadid==0){ ?>
                            <button type="submit" id="button-save" name="button-save" class="btn btn-primary pull-right" style="width:100%" <?php //if(!empty($leadReg[0]['CREATENAME'])){if($name!=$leadReg[0]['CREATENAME']){echo "disabled";}}?> ><i class="glyphicon glyphicon-floppy-disk"></i> Save</button>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                </div><!-- /.box-body -->
            </div>
        </div>
                </form>






                  </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


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
        <script type="text/javascript">
            function goBack() {
                window.location.href = '../pslead';
            }
        </script>
