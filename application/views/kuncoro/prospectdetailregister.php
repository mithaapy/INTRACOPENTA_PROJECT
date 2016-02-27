        
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
                                <li><a href='<?php echo base_url();?>index.php/frontpage/pslead'><i class='fa fa-angle-double-right'></i>Lead</a></li>
                                <li><a href='<?php echo base_url();?>index.php/frontpage/pssuspect'><i class='fa fa-angle-double-right'></i>Suspect</a></li>
                                <li class="active"><a href='<?php echo base_url();?>index.php/frontpage/psprospect'><i class='fa fa-angle-double-right'></i>Prospect</a></li>
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
                        Prospect Detail Registration 
                    </h1>
                    <ol class="breadcrumb ekunfontslide">
                        <li><a href="#"><i class="fa fa-thumb-tack"></i> INTA</a></li>
                        <li>Prospect</li>
                        <li>Prospect Detail </li>
                        <li class="active">Prospect Detail Registration </li>
                    </ol>
                </section>


                <section class="content">      

            <form id="form" class="form-horizontal" name="form" action="../../updateLeadDetail/<?php echo $leaddetailid;?>" method="POST" enctype="multipart/form-data">
                  
                   <div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Detail Registration Form</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                                <div class="form-group">
                                    <label for="input-name" class="col-sm-2 control-label">Lead Detail ID</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="input-lead-detail-id" name="input-lead-detail-id" placeholder="######" value="<?php if(!empty($leadReg)) echo $leadReg[0]['LEAD_DETAIL_ID']; ?>" readonly>
                                    <span style="font-size:11px;color:red">
                                        <?php if(empty($leadReg[0]['LEAD_DETAIL_ID'])) echo "*Your ID Will Set after you Save the Data"; ?>
                                    </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-name" class="col-sm-2 control-label">Lead ID</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="input-lead-id" name="input-lead-id" placeholder="Leads ID" value="<?php if(!empty($leadReg[0]['LEADSID'])){echo $leadReg[0]['LEADSID'];}else{echo $mainid;} ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-name" class="col-sm-2 control-label">Company</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="input-company" name="input-company" placeholder="Company" value="<?php if(!empty($leadReg)) echo $leadReg[0]['COMPANY']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-name" class="col-sm-2 control-label">Customer ID</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="input-customer-id" name="input-customer-id" placeholder="Customer ID" value="<?php if(!empty($leadReg)) echo $leadReg[0]['CUSTOMERID']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-name" class="col-sm-2 control-label">Sales ID</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="input-sales-id" name="input-sales-id" placeholder="Sales ID" value="<?php if(!empty($leadReg)) echo $leadReg[0]['SALESID']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-name" class="col-sm-2 control-label">Pickup Date</label>
                                    <div class="col-sm-5">
                                        <input type="date" class="form-control" id="input-pickup-date" name="input-pickup-date" placeholder="Pickup Date" value="<?php if(!empty($leadReg)) echo $leadReg[0]['PICKUP_DATE']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-name" class="col-sm-2 control-label">Branch</label>
                                    <div class="col-sm-5">
                                        <input type="date" class="form-control" id="input-branch" name="input-branch" placeholder="Branch" value="<?php if(!empty($leadReg)) echo $leadReg[0]['BRANCH']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="select-quality" class="col-sm-2 control-label">Quality</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" id="select-quality" name="select-quality">                                            
                                            <?php
                                                $quality = array('Quality','Qualified','Not Yet Verified','Not Qualified');
                                                foreach ($quality as $key) {
                                                  if (!empty($leadReg)) {
                                                    if ($leadReg[0]['QUALITY']==$key) {
                                                      echo "<option selected='selected' value=".$key.">".$key."</option>";
                                                    }else{
                                                      echo "<option value=".$key.">".$key."</option>";
                                                    }
                                                  }else{
                                                    echo "<option value=".$key.">".$key."</option>";
                                                  }
                                                }
                                             ?>
                                         </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="select-assign-type" class="col-sm-2 control-label">Status</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" id="select-lead-status" name="select-lead-status">
                                            <?php
                                                $assigntype = array('Open','Picked','Verified');
                                                foreach ($assigntype as $key) {
                                                  if (!empty($leadReg)) {
                                                    if ($leadReg[0]['LEAD_STATUS']==$key) {
                                                      echo "<option selected='selected' value=".$key.">".$key."</option>";
                                                    }else{
                                                      echo "<option value=".$key.">".$key."</option>";
                                                    }
                                                  }else{
                                                    echo "<option value=".$key.">".$key."</option>";
                                                  }
                                                }
                                             ?>
                                         </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <button onclick="goBack()" type="button" id="button-back" class="btn btn-default pull-right" style="width:100%"><i class="fa fa-arrow-circle-left"></i>&nbsp;Back</button>
                        </div>
                        <div class="col-md-8">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" id="button-save" name="button-save" class="btn btn-primary pull-right" style="width:100%"><i class="glyphicon glyphicon-floppy-disk"></i>&nbsp;Save</button>
                        </div>
                    </div>
                </div>
                </div><!-- /.box-body -->
            </div>
        </div>
                </form>
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
                window.location.href = '../../prospectdetail/'+<?php echo $mainid;?>;
            }
        </script>
