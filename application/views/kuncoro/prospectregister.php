        
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
                        Prospect Registration 
                    </h1>
                    <ol class="breadcrumb ekunfontslide">
                        <li><a href="#"><i class="fa fa-thumb-tack"></i> INTA</a></li>
                        <li class="active">Suspect Registration </li>
                    </ol>
                </section>


                <section class="content">      

            <form id="form" class="form-horizontal" name="form" action="../updateProspect/<?php echo $mainid;?>" method="POST" enctype="multipart/form-data">
                  
                   <div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Registration Form</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="form-horizontal">
            <div class="form-group">
                <label for="select-suspect-id" class="col-sm-2 control-label">Suspect ID / Detail</label>
                <div class="col-sm-2">
                            <input style="text-align:right" value="<?php if(!empty($prospectReg)) echo $prospectReg[0]['SUSPECTID']; ?>" type="text" class="form-control" placeholder="#ID"  id="select-suspect-id" name="select-suspect-id" readonly></div>
                <div class="col-sm-3">
                            <input style="text-align:right" value="<?php if(!empty($prospectReg)) echo $prospectReg[0]['SUSPECT_DETAIL_ID']; ?>" type="text" class="form-control" placeholder="#ID" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="input-branch" class="col-sm-2 control-label">Quotation No</label>
                <div class="col-sm-5">
                    <label style="display: none;" id="label-branch-id"></label>
                    <input value="<?php if(!empty($prospectReg)) echo $prospectReg[0]['PROSPECTID']; ?>" type="text" class="form-control" id="input-quotation" name="input-quotation" placeholder="QUATATION NO" readonly>
                </div>
            </div>


<br/><hr/>
                <div class="form-group">
                                    <label style="display: none" id="label-lead-id">14</label>
                                    <label for="select-source-id" class="col-sm-2 control-label">Source ID</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" placeholder="#Ref ID" value="<?php if(!empty($prospectRegNotes[0]['SOURCENAME'])){ echo $prospectRegNotes[0]['SOURCENAME']; }else{echo $prospectRegNotes[0]['SOURCENAME']; }?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-stage" class="col-sm-2 control-label">Ref ID #if Any</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" placeholder="#Ref ID" value="<?php if(!empty($prospectRegNotes[0]['REFID'])){ echo $prospectRegNotes[0]['REFID']; }else{echo $prospectRegNotes[0]['LEADSID']; }?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-stage" class="col-sm-2 control-label">Stage</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" placeholder="Project Name" value="<?php if(!empty($prospectRegNotes[0]['STAGENAME'])) echo $prospectRegNotes[0]['STAGENAME']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-project-name" class="col-sm-2 control-label">Project Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Project Name" value="<?php if(!empty($prospectRegNotes)) echo $prospectRegNotes[0]['PROJECT_NAME']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-project-description" class="col-sm-2 control-label">Project Description</label>
                                    <div class="col-sm-9">
                                        <textarea rows="4" class="form-control" placeholder="Project Description" disabled><?php if(!empty($prospectRegNotes)) echo $prospectRegNotes[0]['PROJECT_DESCRIPTION']; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-project-status" class="col-sm-2 control-label">Project Status</label>
                                    <div class="col-sm-4">
                                        <input type="text" value="<?php if(!empty($prospectRegNotes)) echo $prospectRegNotes[0]['PROJECT_STATUS']; ?>" class="form-control" id="input-project-status" name="input-project-status" placeholder="Status" disabled>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="select-source-id" class="col-sm-2 control-label">Const. Start Date</label>
                                    <div class="col-sm-2">
                                        <select class="form-control" disabled>
                                            <?php
                                                //$source = array('Source ID','Paid Info','Referral / Word of mouth','Internet Web Site / Search Engine','Job Site / Work Site','Highway Advertisment','Exhibition / Trade Show','Product Seminar','Newspapaer / magazine');
                                                foreach ($monthlist as $key) {
                                                  if (!empty($prospectRegNotes)) {
                                                    if ($prospectRegNotes[0]['CONST_MONTH']==$key['MONTHID']) {
                                                      echo "<option selected='selected' value=".$key['MONTHID'].">".$key['MONTHNAME']."</option>";
                                                    }else{
                                                      echo "<option value=".$key['MONTHID'].">".$key['MONTHNAME']."</option>";
                                                    }
                                                  }else{
                                                    echo "<option value=".$key['MONTHID'].">".$key['MONTHNAME']."</option>";
                                                  }
                                                }
                                             ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <select class="form-control" disabled>
                                            <?php
                                                $yeartoday = date("Y");
                                                $yearnext = date("Y")+1;
                                                for ($i = $yeartoday; $i <= $yearnext; $i++) {
                                                  if(!empty($prospectRegNotes[0]['CONST_YEAR'])){
                                                    if ($prospectRegNotes[0]['CONST_YEAR']==$i) {
                                                        echo "<option selected='selected' value=".$prospectRegNotes[0]['CONST_YEAR'].">".$prospectRegNotes[0]['CONST_YEAR']."</option>";
                                                    }else{
                                                        echo "<option value=".$i.">".$i."</option>";
                                                    }
                                                  }
                                                  else{
                                                    echo "<option value=".$i.">".$i."</option>";
                                                  }
                                                }

                                             ?>
                                        </select>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="select-source-id" class="col-sm-2 control-label">Const. End Date</label>
                                    <div class="col-sm-2">
                                        <select class="form-control" disabled>
                                            <?php
                                                //$source = array('Source ID','Paid Info','Referral / Word of mouth','Internet Web Site / Search Engine','Job Site / Work Site','Highway Advertisment','Exhibition / Trade Show','Product Seminar','Newspapaer / magazine');
                                                foreach ($monthlist as $key) {
                                                  if (!empty($prospectRegNotes)) {
                                                    if ($prospectRegNotes[0]['CONST_END_MONTH']==$key['MONTHID']) {
                                                      echo "<option selected='selected' value=".$key['MONTHID'].">".$key['MONTHNAME']."</option>";
                                                    }else{
                                                      echo "<option value=".$key['MONTHID'].">".$key['MONTHNAME']."</option>";
                                                    }
                                                  }else{
                                                    echo "<option value=".$key['MONTHID'].">".$key['MONTHNAME']."</option>";
                                                  }
                                                }
                                             ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <select class="form-control" disabled>
                                            <?php
                                                $yeartoday = date("Y");
                                                $yearnext = date("Y")+4;
                                                for ($i = $yeartoday; $i <= $yearnext; $i++) {
                                                    if ($prospectRegNotes[0]['CONST_END_YEAR']==$i) {
                                                        echo "<option selected='selected' value=".$prospectRegNotes[0]['CONST_END_YEAR'].">".$prospectRegNotes[0]['CONST_END_YEAR']."</option>";
                                                    }else{
                                                        echo "<option value=".$i.">".$i."</option>";
                                                    }
                                                }

                                             ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-province" class="col-sm-2 control-label">Province</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" placeholder="Province" value="<?php if(!empty($prospectRegNotes[0]['PROJECT_PROVINCE'])) echo $prospectRegNotes[0]['PROJECT_PROVINCE']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-town" class="col-sm-2 control-label">Town</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" placeholder="TOWN" value="<?php if(!empty($prospectRegNotes[0]['TOWN'])) echo $prospectRegNotes[0]['TOWN']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-address" class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-5">
                                        <textarea rows="4" class="form-control" placeholder="Address" disabled><?php if(!empty($prospectRegNotes)) echo $prospectRegNotes[0]['PROJECT_ADDRESS']; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-address" class="col-sm-2 control-label">Project Category</label>
                                    <div class="col-sm-5">
                                        <textarea rows="4" class="form-control" placeholder="Project Category" disabled><?php if(!empty($prospectRegNotes)) echo $prospectRegNotes[0]['PROJECT_CATEGORY']; ?></textarea>
                                    </div>
                                </div><!--
                                <div class="form-group">
                                    <label for="input-project-stage" class="col-sm-2 control-label">Project Stage</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" value="<?php if(!empty($prospectRegNotes)) echo $prospectRegNotes[0]['PROJECT_STAGE']; ?>" placeholder="Project Stage" disabled>
                                    </div>
                                </div>-->
                                <div class="form-group">
                                    <label for="input-architect-designer" class="col-sm-2 control-label">Architect/Designer</label>
                                    <div class="col-sm-5">
                                        <input type="text" value="<?php if(!empty($prospectRegNotes)) echo $prospectRegNotes[0]['ARCHITECDESIGNER']; ?>" class="form-control"  disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-publish-date" class="col-sm-2 control-label">Project Publish</label>
                                    <div class="col-sm-5">
                                        <input type="input" value="<?php if(!empty($prospectRegNotes[0]['PROJECT_PUBLISH_DATE'])){$publishdateonrecord = $prospectRegNotes[0]['PROJECT_PUBLISH_DATE']; echo $publishdateonrecord;}else{echo date("mm/dd/yyyy");} ?>" class="form-control" placeholder="Project Publish Date" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-dev-manager" class="col-sm-2 control-label">Dev / Prop Manager</label>
                                    <div class="col-sm-5">
                                        <input type="text" value="<?php if(!empty($prospectRegNotes)) echo $prospectRegNotes[0]['DEVPROP_MANAGER']; ?>" class="form-control"  placeholder="Project Developer / Prop. Manager" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-engineer-consultant" class="col-sm-2 control-label">Engineer Consultant</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" value="<?php if(!empty($prospectRegNotes)) echo $prospectRegNotes[0]['ENGINER_CONSULTANT']; ?>" placeholder="Engineer Consultant" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-main-contractor" class="col-sm-2 control-label">Main Contractor</label>
                                    <div class="col-sm-5">
                                        <input type="text" value="<?php if(!empty($prospectRegNotes)) echo $prospectRegNotes[0]['MAIN_CONTRACTOR']; ?>" class="form-control" placeholder="Main Contractor" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-sub-contractor" class="col-sm-2 control-label">Sub Contractor</label>
                                    <div class="col-sm-5">
                                        <input type="text" value="<?php if(!empty($prospectRegNotes)) echo $prospectRegNotes[0]['SUB_CONTRACTOR']; ?>"class="form-control"  placeholder="Sub Contractor" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-project-value" class="col-sm-2 control-label">Project Value</label>
                                    <div class="col-sm-2">
                                        <input type="text" value="<?php if(!empty($prospectRegNotes)) echo $prospectRegNotes[0]['PROJECT_VALUE']; ?>" class="form-control" placeholder="Project Value" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-addressable-value" class="col-sm-2 control-label">Addressable Value</label>
                                    <div class="col-sm-2">
                                        <input type="text" value="<?php if(!empty($prospectRegNotes)) echo $prospectRegNotes[0]['ADDRESSABLE_VALUE']; ?>" class="form-control"  placeholder="Addressable Value" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-pickup-date" class="col-sm-2 control-label">Pickup Date</label>
                                    <div class="col-sm-3">
                                        <input type="date" value="<?php if(!empty($prospectRegNotes[0]['PICKUPDATE'])){echo $prospectRegNotes[0]['PICKUPDATE'];} ?>" class="form-control" placeholder="Project Pickup Date" disabled>
                                    </div>
                                </div>

            <hr/><br/>


            <div class="form-group">
                <label for="input-company" class="col-sm-2 control-label">Company</label>
                <div class="col-sm-5">
                    <label style="display: none;" id="label-company-id"></label>
                    <input value="<?php if(!empty($prospectReg)) echo $prospectRegNotes[0]['COMPANY']; ?>" type="text" class="form-control" id="input-company" name="input-company" placeholder="Company Name" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="input-branch" class="col-sm-2 control-label">Sales ID</label>
                <div class="col-sm-5">
                    <label style="display: none;" id="label-branch-id"></label>
                    <input value="<?php if(!empty($prospectReg)) echo $prospectReg[0]['SALESID']; ?>" type="text" class="form-control" id="input-sales-id" name="input-sales-id" placeholder="Branch Name" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="select-customer" class="col-sm-2 control-label">Customer</label>
                <div class="col-sm-5">
                    <input value="<?php if(!empty($prospectRegNotes)) echo $prospectRegNotes[0]['CUSTOMERNAME']; ?>" type="text" class="form-control" id="select-customer" name="select-customer" placeholder="Branch Name" readonly>
                </div>
            </div><!--
            <div class="form-group">
                <label for="input-description" class="col-sm-2 control-label">Description</label>
                <div class="col-sm-7">
                    <textarea class="form-control" rows="4" id="input-description" name="input-description" readonly><?php if(!empty($prospectReg)) echo $prospectReg[0]['DESCRIPTION']; ?></textarea>
                </div>
            </div>-->
            <div class="form-group">
                <label for="select-stage-id" class="col-sm-2 control-label">Start Date</label>
                <div class="col-sm-5">
                    <input value="<?php if(!empty($prospectReg)) echo $prospectReg[0]['STARTDATE']; ?>" type="date" class="form-control" id="input-start-date" name="input-start-date" placeholder="Start Date">
                </div>
            </div>
            <div class="form-group">
                <label for="select-stage-id" class="col-sm-2 control-label">Expire Date</label>
                <div class="col-sm-5">
                    <input value="<?php if(!empty($prospectReg)) echo $prospectReg[0]['EXPIREDATE']; ?>" type="date" class="form-control" id="input-expire-date" name="input-expire-date" placeholder="Expire Date">
                </div>
            </div>
            <div class="form-group">
                <label for="input-status" class="col-sm-2 control-label">Status</label>
                <div class="col-sm-5">
                            <select class="form-control" id="input-status" name="input-status">
                                <?php
                                    $assigntype = array('Prospect ','Order On Hand','Very Likely','Confirm','Loss');
                                    foreach ($assigntype as $key) {
                                      if (!empty($prospectReg)) {
                                        if ($prospectReg[0]['STATUS']==strstr($key, ' ', true)) {
                                          echo "<option selected='selected' value=".strstr($key, ' ', true).">".$key."</option>";
                                        }else{
                                          echo "<option value=".strstr($key, ' ', true).">".$key."</option>";
                                        }
                                      }else{
                                        echo "<option value=".strstr($key, ' ', true).">".$key."</option>";
                                      }
                                    }
                                 ?>
                             </select>
                </div>
            </div>
            <div class="form-group">
                <label for="input-description" class="col-sm-2 control-label">Loss Notes</label>
                <div class="col-sm-7">
                    <textarea class="form-control" rows="4" id="input-loss-notes" name="input-loss-notes" readonly><?php if(!empty($prospectReg)) echo ""; ?></textarea>
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
                window.location.href = '../psprospect';
            }
        </script>