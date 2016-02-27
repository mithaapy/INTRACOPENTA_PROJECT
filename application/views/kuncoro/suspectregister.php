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
                                <li><a href='<?php echo base_url();?>index.php/frontpage/pslead'><i class='fa fa-angle-double-right'></i>Lead</a></li>
                                <li class="active"><a href='<?php echo base_url();?>index.php/frontpage/pssuspect'><i class='fa fa-angle-double-right'></i>Suspect</a></li>
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
                        Suspect Registration 
                    </h1>
                    <ol class="breadcrumb ekunfontslide">
                        <li><a href="#"><i class="fa fa-thumb-tack"></i> INTA</a></li>
                        <li class="active">Suspect Registration </li>
                    </ol>
                </section>


                <section class="content">      

            <form id="form" class="form-horizontal" name="form" action="../updateSuspect/<?php echo $suspectid;?>" method="POST" enctype="multipart/form-data">
                  
           <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Suspect Registration Form</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-horizontal">
                    <div class="form-group">
                        <label for="select-lead-id" class="col-sm-2 control-label">Leads ID / Detail</label>
                        <div class="col-sm-2">
                            <input style="text-align:right" value="<?php if(!empty($suspectReg)) echo $suspectReg[0]['LEADSID']; ?>" type="text" class="form-control" placeholder="#ID"  id="select-lead-id" name="select-lead-id" readonly>
                        </div>
                        <div class="col-sm-3">
                            <input style="text-align:right" value="<?php if(!empty($suspectReg)) echo $suspectReg[0]['LEADSDETAILID']; ?>" type="text" class="form-control" placeholder="#ID"  readonly>
                            <input style="text-align:right" value="<?php if(!empty($suspectReg)) echo $suspectReg[0]['CREATENAME']; ?>" type="hidden" class="form-control" placeholder="#ID"   id="select-sales-id" name="select-sales-id" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-company" class="col-sm-2 control-label">Company</label>
                        <div class="col-sm-5">
                            <label style="display: none;" id="label-company-id"></label>
                            <input value="<?php if(!empty($suspectReg)) echo $suspectReg[0]['COMPANY_NAME']; ?>" type="text" class="form-control" placeholder="Company Name" readonly>
                            <input value="<?php if(!empty($suspectReg)) echo $suspectReg[0]['COMPANY']; ?>" type="hidden" class="form-control" id="input-company" name="input-company" placeholder="Company Name" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-branch" class="col-sm-2 control-label">Branch</label>
                        <div class="col-sm-5">
                            <label style="display: none;" id="label-branch-id"></label>
                            <input value="<?php if(!empty($suspectReg)){echo $suspectReg[0]['BRANCH_NAME'];}else{echo $branchname[0]['BRANCH_NAME'];} ?>" type="text" class="form-control" placeholder="Branch Name" readonly>
                            <input value="<?php if(!empty($suspectReg)){echo $suspectReg[0]['BRANCH'];}else{echo $branchid;} ?>" type="hidden" class="form-control" id="input-branch" name="input-branch" placeholder="Branch Name" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-description" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-7">
                            <textarea class="form-control" rows="12" id="input-description" name="input-description" readonly><?php if(!empty($suspectReg)) echo $suspectReg[0]['DESCRIPTION']; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-stage" class="col-sm-2 control-label">Stage</label>
                        <div class="col-sm-5">
                            <input type="hidden" class="form-control" id="input-stage-id" name="input-stage-id" placeholder="Stage Name" value="<?php if(!empty($suspectReg[0]['STAGEID'])) echo $suspectReg[0]['STAGEID']; ?>" readonly>
                            <input type="text" class="form-control" id="input-stage-name" name="input-stage-name" placeholder="Stage Name" value="<?php if(!empty($suspectReg[0]['STAGENAME'])) echo $suspectReg[0]['STAGENAME']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select-customer" class="col-sm-2 control-label">Customer Planned</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="input-customer-planned" name="input-customer-planned" placeholder="Customer Planned" value="<?php if(!empty($suspectReg[0]['CUSTOMERPLANNED'])) echo $suspectReg[0]['CUSTOMERPLANNED']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select-customer" class="col-sm-2 control-label">Customer Actual</label>
                        <div class="col-sm-5">
                            <select class="form-control" id="select-customer-actual" name="select-customer-actual">
                                <option></option>
                                <?php
                                foreach ($customer as $key) {
                                    if (!empty($suspectReg)) {
                                        if ($suspectReg[0]['CUSTOMERID']==$key['CUSTOMERID']) {
                                            echo "<option selected='selected' value=".$key['CUSTOMERID'].">".$key['CUSTOMERNAME']."</option>";
                                        }else{
                                            echo "<option value=".$key['CUSTOMERID'].">".$key['CUSTOMERNAME']."</option>";
                                        }
                                    }else{
                                        echo "<option value=".$key['CUSTOMERID'].">".$key['CUSTOMERNAME']."</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="select-assign-type" class="col-sm-2 control-label">Assign Type</label>
                        <div class="col-sm-4">
                            <select class="form-control" id="select-assign-type" name="select-assign-type" disabled>
                                <?php
                                    $assigntype = array('Picked','Verified');
                                    foreach ($assigntype as $key) {
                                      if (!empty($suspectReg)) {
                                        if ($suspectReg[0]['STATUS']==$key) {
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
                        <label for="input-name" class="col-sm-2 control-label">Create Name</label>
                        <div class="col-sm-5">
                            <input type="hidden" class="form-control" id="input-name" name="input-name" placeholder="Name" value="<?php if(!empty($suspectReg[0]['CREATENAME'])){echo $suspectReg[0]['CREATENAME'];}else{echo $user;}?>" readonly>
                            <input type="text" class="form-control" placeholder="Name" value="<?php if(!empty($suspectReg[0]['FIRSTNAME'])){echo $suspectReg[0]['FIRSTNAME'];}else{echo $name;}?>" readonly>
                            <input type="hidden" class="form-control" id="input-branch" name="input-branch" placeholder="Branch" value="<?php if(!empty($suspectReg[0]['BRANCH_ID'])){echo $suspectReg[0]['BRANCH_ID'];}else{echo $branchid;}?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-name" class="col-sm-2 control-label">Create On</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="input-date" name="input-date" placeholder="Date" value="<?php if(!empty($suspectReg[0]['CREATEDATE'])){echo $suspectReg[0]['CREATEDATE'];}else{echo date('Y-m-d');}?>" readonly>
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
                            <button type="submit" id="button-save" name="button-save" class="btn btn-primary pull-right" style="width:100%"><i class="glyphicon glyphicon-floppy-disk"></i> Save</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            
                        </div>
                    </div>
                </div>
                </div><!-- /.box-body -->
            </div>
        </div>
                </form>

                <div class="row">
                        <div class="col-xs-12">
                            

                            <div class="box">
                            <div class="box-header with-border">
                                    <div class="row" style="padding: 10px;">
                                        <div class="col-md-2">
                                            <!--<a href="../pslead" class="btn btn-default" style="width:100%"><i class="fa fa-arrow-circle-left"></i> Back</a><br/><br/>-->
                                            <h3 class="box-title">Detail Suspect</h3>
                                        </div>
                                        <div class="col-md-8">
                                        </div>
                                        <div class="col-md-2">
                                            <a href="../suspectdetailregister/<?php echo $suspectid;?>/0" class="btn btn-primary pull-right" style="width:100%"  <?php if(!empty($suspectReg[0]['CREATENAME'])){if($name!=$suspectReg[0]['CREATENAME']){echo "";}}?>><i class="fa fa-plus"></i> Add Suspect Detail</a><br/><br/>
                                        </div>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Suspect Detail ID</th>
                                                <th>Segment ID</th>
                                                <th>Product ID</th>
                                                <th>Transaction Model</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>                                            
                                            <?php 
                                                foreach($suspectDetail AS $key){
                                                echo "<tr>
                                                    <td>".$key['SUSPECT_DETAIL_ID']."</td>
                                                    <td>".$key['SEGMENT_ID']."</td>
                                                    <td>".$key['PRODUCTID']."</td>
                                                    <td>".$key['TRANSACTION_MODEL']."</td>
                                                    <td>".str_replace("_", " ", $key['STATUS'])."</td>
                                                    <td class='' style=''>
                                                        <a class='btn btn-sm btn-primary' style='width:98%' href='../suspectdetailregister/".$key['SUSPECTID']."/".$key['SUSPECT_DETAIL_ID']."'>
                                                            <i class='fa fa-eye'></i>&nbsp;<span class='desktop'>View</span>
                                                        </a>&nbsp;&nbsp;</td>
                                            </tr>";
                                            } 
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Suspect Detail ID</th>
                                                <th>Segment ID</th>
                                                <th>Product ID</th>
                                                <th>Transaction Model</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
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
                window.location.href = '../pssuspect';
            }
        </script>
