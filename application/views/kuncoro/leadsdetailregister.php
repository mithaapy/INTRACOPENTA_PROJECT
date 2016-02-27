        
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
                        Lead Detail Registration 
                    </h1>
                    <ol class="breadcrumb ekunfontslide">
                        <li><a href="#"><i class="fa fa-thumb-tack"></i> INTA</a></li>
                        <li>Lead</li>
                        <li>Lead Detail </li>
                        <li class="active">Lead Detail Registration </li>
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
                                        <input type="hidden" class="form-control" id="input-description" name="input-description" placeholder="Leads ID" value="<?php if(!empty($leadRegNotes)) echo $leadRegNotes[0]['PROJECT_DESCRIPTION']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-name" class="col-sm-2 control-label">Company</label>
                                    <div class="col-sm-5">
                                        <select class="form-control" id="input-company" name="input-company">
                                            <option></option>
                                        <?php
                                        foreach ($companylist as $key) {
                                            if (!empty($leadReg)) {
                                                if ($leadReg[0]['COMPANY']==$key['COMPANY']) {
                                                    echo "<option selected='selected' value=".$key['COMPANY'].">".$key['COMPANY_NAME']."</option>";
                                                }else{
                                                    echo "<option value=".$key['COMPANY'].">".$key['COMPANY_NAME']."</option>";
                                                }
                                            }else{
                                                echo "<option value=".$key['COMPANY'].">".$key['COMPANY_NAME']."</option>";
                                            }
                                        }
                                        ?>
                                        </select>
                                        <!--<input type="text" class="form-control" id="input-company" name="input-company" placeholder="Company" value="<?php if(!empty($leadReg)) echo $leadReg[0]['COMPANY']; ?>">-->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-name" class="col-sm-2 control-label">Customer</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="input-customer" name="input-customer" placeholder="Customer" value="<?php if(!empty($leadReg)) echo $leadReg[0]['CUSTOMERPLANNED']; ?>">
                                        <!--<select class="form-control" id="input-customer-id" name="input-customer-id" >
                                            <option></option>
                                        <?php
                                        foreach ($customerlist as $key) {
                                            if (!empty($leadReg)) {
                                                if ($leadReg[0]['CUSTOMERID']==$key['CUSTOMERID']) {
                                                    echo "<option selected='selected' value=".$key['CUSTOMERID'].">".$key['CUSTOMERNAME']."</option>";
                                                }else{
                                                    echo "<option value=".$key['CUSTOMERID'].">".$key['CUSTOMERNAME']."</option>";
                                                }
                                            }else{
                                                echo "<option value=".$key['CUSTOMERID'].">".$key['CUSTOMERNAME']."</option>";
                                            }
                                        }
                                        ?>
                                        </select>-->
                                        <!--<input type="text" class="form-control" id="input-customer-id" name="input-customer-id" placeholder="Customer ID" value="<?php if(!empty($leadReg)) echo $leadReg[0]['CUSTOMERID']; ?>">-->
                                    </div>
                                </div>
                                <!--<div class="form-group">
                                    <label for="input-name" class="col-sm-2 control-label">Sales ID</label>
                                    <div class="col-sm-5">
                                        <select class="form-control" id="input-sales-id" name="input-sales-id">
                                            <option></option>
                                        <?php
                                        foreach ($saleslist as $key) {
                                            if (!empty($leadReg)) {
                                                if ($leadReg[0]['SALESID']==$key['SALESID']) {
                                                    echo "<option selected='selected' value=".$key['SALESID'].">".$key['SALESNAME']."</option>";
                                                }else{
                                                    echo "<option value=".$key['SALESID'].">".$key['SALESNAME']."</option>";
                                                }
                                            }else{
                                                echo "<option value=".$key['SALESID'].">".$key['SALESNAME']."</option>";
                                            }
                                        }
                                        ?>
                                        </select></div>
                                </div>-->
                                <div class="form-group">
                                    <label for="input-name" class="col-sm-2 control-label">Pickup Date</label>
                                    <div class="col-sm-5">
                                        <input type="date" class="form-control" id="input-pickup-date" name="input-pickup-date" placeholder="Pickup Date" value="<?php if(!empty($leadReg)) echo $leadReg[0]['PICKUP_DATE']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-name" class="col-sm-2 control-label">Branch</label>
                                    <div class="col-sm-5">
                                        <input type="hidden" class="form-control" id="input-branch" name="input-branch" placeholder="Branch" value="<?php if(!empty($leadReg[0]['BRANCH'])){echo $leadReg[0]['BRANCH'];}else{echo $branchdetail[0]['BRANCH_ID'];} ?>">
                                        <input type="text" class="form-control" placeholder="Branch" value="<?php if(!empty($leadReg[0]['BRANCH'])){echo $leadReg[0]['BRANCH'];}else{echo $branchdetail[0]['BRANCH_NAME'];} ?>" readonly>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="select-quality" class="col-sm-2 control-label">Quality</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" id="select-quality" name="select-quality">                                            
                                            <?php
                                                $quality = array('Not Yet Verified','Not Qualified','Qualified');
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
                                    <label for="select-assign-type" class="col-sm-2 control-label">STATUS</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" id="select-lead-status" name="select-lead-status">
                                            <?php
                                                $assigntype = array('Open','Picked');
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
                </div><br/><hr/>
                <div class="form-group">
                                    <label style="display: none" id="label-lead-id">14</label>
                                    <label for="select-source-id" class="col-sm-2 control-label">Source ID</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" placeholder="#Ref ID" value="<?php if(!empty($leadRegNotes[0]['SOURCENAME'])){ echo $leadRegNotes[0]['SOURCENAME']; }else{echo $leadRegNotes[0]['SOURCENAME']; }?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-stage" class="col-sm-2 control-label">Ref ID #if Any</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" placeholder="#Ref ID" value="<?php if(!empty($leadRegNotes[0]['REFID'])){ echo $leadRegNotes[0]['REFID']; }else{echo $leadRegNotes[0]['LEADSID']; }?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-stage" class="col-sm-2 control-label">Stage</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" placeholder="Project Name" value="<?php if(!empty($leadRegNotes[0]['STAGENAME'])) echo $leadRegNotes[0]['STAGENAME']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-project-name" class="col-sm-2 control-label">Project Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Project Name" value="<?php if(!empty($leadRegNotes)) echo $leadRegNotes[0]['PROJECT_NAME']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-project-description" class="col-sm-2 control-label">Project Description</label>
                                    <div class="col-sm-9">
                                        <textarea rows="4" class="form-control" placeholder="Project Description" disabled><?php if(!empty($leadRegNotes)) echo $leadRegNotes[0]['PROJECT_DESCRIPTION']; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-project-status" class="col-sm-2 control-label">Project Status</label>
                                    <div class="col-sm-4">
                                        <input type="text" value="<?php if(!empty($leadRegNotes)) echo $leadRegNotes[0]['PROJECT_STATUS']; ?>" class="form-control" id="input-project-status" name="input-project-status" placeholder="Status" disabled>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="select-source-id" class="col-sm-2 control-label">Const. Start Date</label>
                                    <div class="col-sm-2">
                                        <select class="form-control" disabled>
                                            <?php
                                                //$source = array('Source ID','Paid Info','Referral / Word of mouth','Internet Web Site / Search Engine','Job Site / Work Site','Highway Advertisment','Exhibition / Trade Show','Product Seminar','Newspapaer / magazine');
                                                foreach ($monthlist as $key) {
                                                  if (!empty($leadRegNotes)) {
                                                    if ($leadRegNotes[0]['CONST_MONTH']==$key['MONTHID']) {
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
                                                  if(!empty($leadRegNotes[0]['CONST_YEAR'])){
                                                    if ($leadRegNotes[0]['CONST_YEAR']==$i) {
                                                        echo "<option selected='selected' value=".$leadRegNotes[0]['CONST_YEAR'].">".$leadRegNotes[0]['CONST_YEAR']."</option>";
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
                                                  if (!empty($leadRegNotes)) {
                                                    if ($leadRegNotes[0]['CONST_END_MONTH']==$key['MONTHID']) {
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
                                                    if ($leadRegNotes[0]['CONST_END_YEAR']==$i) {
                                                        echo "<option selected='selected' value=".$leadRegNotes[0]['CONST_END_YEAR'].">".$leadRegNotes[0]['CONST_END_YEAR']."</option>";
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
                                        <input type="text" class="form-control" placeholder="Province" value="<?php if(!empty($leadRegNotes[0]['PROJECT_PROVINCE'])) echo $leadRegNotes[0]['PROJECT_PROVINCE']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-town" class="col-sm-2 control-label">Town</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" placeholder="TOWN" value="<?php if(!empty($leadRegNotes[0]['TOWN'])) echo $leadRegNotes[0]['TOWN']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-address" class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-5">
                                        <textarea rows="4" class="form-control" placeholder="Project Description" disabled><?php if(!empty($leadRegNotes)) echo $leadRegNotes[0]['PROJECT_ADDRESS']; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-address" class="col-sm-2 control-label">Project Category</label>
                                    <div class="col-sm-5">
                                        <textarea rows="4" class="form-control" placeholder="Project Category" disabled><?php if(!empty($leadRegNotes)) echo $leadRegNotes[0]['PROJECT_CATEGORY']; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-project-stage" class="col-sm-2 control-label">Project Stage</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" value="<?php if(!empty($leadRegNotes)) echo $leadRegNotes[0]['PROJECT_STAGE']; ?>" placeholder="Project Stage" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-architect-designer" class="col-sm-2 control-label">Architect/Designer</label>
                                    <div class="col-sm-5">
                                        <input type="text" value="<?php if(!empty($leadRegNotes)) echo $leadRegNotes[0]['ARCHITECDESIGNER']; ?>" class="form-control"  disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-publish-date" class="col-sm-2 control-label">Project Publish</label>
                                    <div class="col-sm-5">
                                        <input type="input" value="<?php if(!empty($leadRegNotes[0]['PROJECT_PUBLISH_DATE'])){$publishdateonrecord = $leadRegNotes[0]['PROJECT_PUBLISH_DATE']; echo $publishdateonrecord;}else{echo date("mm/dd/yyyy");} ?>" class="form-control" placeholder="Project Publish Date" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-dev-manager" class="col-sm-2 control-label">Dev / Prop Manager</label>
                                    <div class="col-sm-5">
                                        <input type="text" value="<?php if(!empty($leadRegNotes)) echo $leadRegNotes[0]['DEVPROP_MANAGER']; ?>" class="form-control"  placeholder="Project Developer / Prop. Manager" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-engineer-consultant" class="col-sm-2 control-label">Engineer Consultant</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" value="<?php if(!empty($leadRegNotes)) echo $leadRegNotes[0]['ENGINER_CONSULTANT']; ?>" placeholder="Engineer Consultant" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-main-contractor" class="col-sm-2 control-label">Main Contractor</label>
                                    <div class="col-sm-5">
                                        <input type="text" value="<?php if(!empty($leadRegNotes)) echo $leadRegNotes[0]['MAIN_CONTRACTOR']; ?>" class="form-control" placeholder="Main Contractor" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-sub-contractor" class="col-sm-2 control-label">Sub Contractor</label>
                                    <div class="col-sm-5">
                                        <input type="text" value="<?php if(!empty($leadRegNotes)) echo $leadRegNotes[0]['SUB_CONTRACTOR']; ?>"class="form-control"  placeholder="Sub Contractor" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-project-value" class="col-sm-2 control-label">Project Value</label>
                                    <div class="col-sm-2">
                                        <input type="text" value="<?php if(!empty($leadRegNotes)) echo $leadRegNotes[0]['PROJECT_VALUE']; ?>" class="form-control" placeholder="Project Value" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-addressable-value" class="col-sm-2 control-label">Addressable Value</label>
                                    <div class="col-sm-2">
                                        <input type="text" value="<?php if(!empty($leadRegNotes)) echo $leadRegNotes[0]['ADDRESSABLE_VALUE']; ?>" class="form-control"  placeholder="Addressable Value" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-pickup-date" class="col-sm-2 control-label">Pickup Date</label>
                                    <div class="col-sm-3">
                                        <input type="date" value="<?php if(!empty($leadRegNotes[0]['PICKUPDATE'])){echo $leadRegNotes[0]['PICKUPDATE'];} ?>" class="form-control" placeholder="Project Pickup Date" disabled>
                                    </div>
                                </div><br/>
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
                window.location.href = '../../leadsdetail/'+<?php echo $mainid;?>;
            }
        </script>