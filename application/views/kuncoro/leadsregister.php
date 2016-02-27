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
                    <img src="<?php echo base_url(); ?>assets/img/cover/<?php if ($pict != '') {
    echo $pict;
} else {
    echo 'unknown';
} ?>.jpg" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>Hello, <?php $name;
$namaawal = explode(" ", $name);
echo $namaawal[0]; ?></p>


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
                        <li class="active"><a href='<?php echo base_url(); ?>index.php/frontpage/pslead'><i class='fa fa-angle-double-right'></i>Lead</a></li>
                        <li><a href='<?php echo base_url(); ?>index.php/frontpage/pssuspect'><i class='fa fa-angle-double-right'></i>Suspect</a></li>
                        <li><a href='<?php echo base_url(); ?>index.php/frontpage/psprospect'><i class='fa fa-angle-double-right'></i>Prospect</a></li>
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
<?php if ($admin == 1) { ?>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-arrow-circle-o-right"></i>
                            <span>Setting</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href='<?php echo base_url(); ?>index.php/frontpage/source'><i class='fa fa-angle-double-right'></i>Source</a></li>
                            <li><a href='<?php echo base_url(); ?>index.php/frontpage/company'><i class='fa fa-angle-double-right'></i>Company</a></li>
                            <li><a href='<?php echo base_url(); ?>index.php/frontpage/user'><i class='fa fa-angle-double-right'></i>User</a></li>
                        </ul>
                    </li>
<?php } else {
    
} ?>
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
                Leads Registration 
            </h1>
            <ol class="breadcrumb ekunfontslide">
                <li><a href="#"><i class="fa fa-thumb-tack"></i> INTA</a></li>
                <li class="active">Leads Registration </li>
            </ol>
        </section>


        <section class="content">      

            <form id="form" class="form-horizontal" name="form" action="../updateLead/<?php echo $leadid; ?>" method="POST" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">Registration Form</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" id="input-company-id" name="input-company-id" placeholder="Company ID" value="<?php if (!empty($leadReg[0]['COMPANY_ID'])) {
    echo $leadReg[0]['COMPANY_ID'];
} else {
    echo $companyid;
} ?>">
                                        <div class="form-group">
                                            <label style="display: none" id="label-lead-id">14</label>
                                            <label for="select-source-id" class="col-sm-2 control-label">Source ID</label>
                                            <div class="col-sm-5">
                                                <select class="form-control" id="select-source-id" name="select-source-id">
                                                    <?php
                                                    //$source = array('Source ID','Paid Info','Referral / Word of mouth','Internet Web Site / Search Engine','Job Site / Work Site','Highway Advertisment','Exhibition / Trade Show','Product Seminar','Newspapaer / magazine');
                                                    foreach ($sourcelist as $key) {
                                                        if (!empty($leadReg)) {
                                                            if ($leadReg[0]['SOURCEID'] == $key['SOURCEID']) {
                                                                echo "<option selected='selected' value=" . $key['SOURCEID'] . ">" . $key['SOURCENAME'] . "</option>";
                                                            } else {
                                                                echo "<option value=" . $key['SOURCEID'] . ">" . $key['SOURCENAME'] . "</option>";
                                                            }
                                                        } else {
                                                            echo "<option value=" . $key['SOURCEID'] . ">" . $key['SOURCENAME'] . "</option>";
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-stage" class="col-sm-2 control-label">Ref ID #if Any</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="input-ref-id" name="input-ref-id" placeholder="#Ref ID" value="<?php if (!empty($leadReg[0]['REFID'])) {
                                                        echo $leadReg[0]['REFID'];
                                                    } else {
                                                        echo $leadReg[0]['LEADSID'];
                                                    } ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-stage" class="col-sm-2 control-label">Stage</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="input-stage-id" name="input-stage-id" placeholder="Project Name" value="<?php if (!empty($leadReg[0]['STAGENAME'])) echo $leadReg[0]['STAGENAME']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-project-name" class="col-sm-2 control-label">Project Name</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="input-project-name" name="input-project-name" placeholder="Project Name" value="<?php if (!empty($leadReg)) echo $leadReg[0]['PROJECT_NAME']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-project-description" class="col-sm-2 control-label">Project Description</label>
                                            <div class="col-sm-9">
                                                <textarea id="input-project-description" name="input-project-description" rows="12" class="form-control" placeholder="Project Description"><?php if (!empty($leadReg)) echo $leadReg[0]['PROJECT_DESCRIPTION']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-project-status" class="col-sm-2 control-label">Project Status</label>
                                            <div class="col-sm-4">
                                                <input type="text" value="<?php if (!empty($leadReg)) echo $leadReg[0]['PROJECT_STATUS']; ?>" class="form-control" id="input-project-status" name="input-project-status" placeholder="Status">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="select-source-id" class="col-sm-2 control-label">Const. Start Date</label>
                                            <div class="col-sm-2">
                                                <select class="form-control" id="select-const-month" name="select-const-month">
<?php
//$source = array('Source ID','Paid Info','Referral / Word of mouth','Internet Web Site / Search Engine','Job Site / Work Site','Highway Advertisment','Exhibition / Trade Show','Product Seminar','Newspapaer / magazine');
foreach ($monthlist as $key) {
    if (!empty($leadReg)) {
        if ($leadReg[0]['CONST_MONTH'] == $key['MONTHID']) {
            echo "<option selected='selected' value=" . $key['MONTHID'] . ">" . $key['MONTHNAME'] . "</option>";
        } else {
            echo "<option value=" . $key['MONTHID'] . ">" . $key['MONTHNAME'] . "</option>";
        }
    } else {
        echo "<option value=" . $key['MONTHID'] . ">" . $key['MONTHNAME'] . "</option>";
    }
}
?>
                                                </select>
                                            </div>
                                            <div class="col-sm-2">
                                                <select class="form-control" id="select-const-year" name="select-const-year">
                                                    <?php
                                                    $yeartoday = date("Y");
                                                    $yearnext = date("Y") + 1;
                                                    for ($i = $yeartoday; $i <= $yearnext; $i++) {
                                                        if (!empty($leadReg[0]['CONST_YEAR'])) {
                                                            if ($leadReg[0]['CONST_YEAR'] == $i) {
                                                                echo "<option selected='selected' value=" . $leadReg[0]['CONST_YEAR'] . ">" . $leadReg[0]['CONST_YEAR'] . "</option>";
                                                            } else {
                                                                echo "<option value=" . $i . ">" . $i . "</option>";
                                                            }
                                                        } else {
                                                            echo "<option value=" . $i . ">" . $i . "</option>";
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="select-source-id" class="col-sm-2 control-label">Const. End Date</label>
                                            <div class="col-sm-2">
                                                <select class="form-control" id="select-const-end-month" name="select-const-end-month">
<?php
//$source = array('Source ID','Paid Info','Referral / Word of mouth','Internet Web Site / Search Engine','Job Site / Work Site','Highway Advertisment','Exhibition / Trade Show','Product Seminar','Newspapaer / magazine');
foreach ($monthlist as $key) {
    if (!empty($leadReg)) {
        if ($leadReg[0]['CONST_END_MONTH'] == $key['MONTHID']) {
            echo "<option selected='selected' value=" . $key['MONTHID'] . ">" . $key['MONTHNAME'] . "</option>";
        } else {
            echo "<option value=" . $key['MONTHID'] . ">" . $key['MONTHNAME'] . "</option>";
        }
    } else {
        echo "<option value=" . $key['MONTHID'] . ">" . $key['MONTHNAME'] . "</option>";
    }
}
?>
                                                </select>
                                            </div>
                                            <div class="col-sm-2">
                                                <select class="form-control" id="select-const-end-year" name="select-const-end-year">
<?php
$yeartoday = date("Y");
$yearnext = date("Y") + 4;
for ($i = $yeartoday; $i <= $yearnext; $i++) {
    if ($leadReg[0]['CONST_END_YEAR'] == $i) {
        echo "<option selected='selected' value=" . $leadReg[0]['CONST_END_YEAR'] . ">" . $leadReg[0]['CONST_END_YEAR'] . "</option>";
    } else {
        echo "<option value=" . $i . ">" . $i . "</option>";
    }
}
?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-province" class="col-sm-2 control-label">Province</label>
                                            <div class="col-sm-5">
                                                <select class="form-control" id="select-province" name="select-province">
                                                    <option>DKI Jakarta</option>
                                                    <option>Jawa Barat</option>
                                                    <option>Jawa Tengah</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-town" class="col-sm-2 control-label">Town</label>
                                            <div class="col-sm-5">
                                                <select class="form-control" id="select-town" name="select-town">
                                                    <option>Kota 1</option>
                                                    <option>Kota 2</option>
                                                    <option>Kota 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-address" class="col-sm-2 control-label">Address</label>
                                            <div class="col-sm-5">
                                                <textarea id="input-address" name="input-address" rows="4" class="form-control" placeholder="Project Description"><?php if (!empty($leadReg)) echo $leadReg[0]['PROJECT_ADDRESS']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-address" class="col-sm-2 control-label">Project Category</label>
                                            <div class="col-sm-5">
                                                <textarea id="input-project-category" name="input-project-category" rows="4" class="form-control" placeholder="Project Category"><?php if (!empty($leadReg)) echo $leadReg[0]['PROJECT_CATEGORY']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-project-stage" class="col-sm-2 control-label">Project Stage</label>
                                            <div class="col-sm-5">
                                                <input type="text" value="<?php if (!empty($leadReg)) echo $leadReg[0]['PROJECT_STAGE']; ?>" class="form-control" id="input-project-stage" name="input-project-stage" placeholder="Project Stage">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-architect-designer" class="col-sm-2 control-label">Architect/Designer</label>
                                            <div class="col-sm-5">
                                                <input type="text" value="<?php if (!empty($leadReg)) echo $leadReg[0]['ARCHITECDESIGNER']; ?>" class="form-control" id="input-architect-designer" name="input-architect-designer" placeholder="Architect / Designer">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-publish-date" class="col-sm-2 control-label">Project Publish</label>
                                            <div class="col-sm-5">
                                                <input type="input" value="<?php if (!empty($leadReg[0]['PROJECT_PUBLISH_DATE'])) {
    $publishdateonrecord = $leadReg[0]['PROJECT_PUBLISH_DATE'];
    echo $publishdateonrecord;
} else {
    echo date("mm/dd/yyyy");
} ?>" class="form-control" id="input-publish-date" name="input-publish-date" placeholder="Project Publish Date" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-dev-manager" class="col-sm-2 control-label">Dev / Prop Manager</label>
                                            <div class="col-sm-5">
                                                <input type="text" value="<?php if (!empty($leadReg)) echo $leadReg[0]['DEVPROP_MANAGER']; ?>" class="form-control" id="input-dev-manager" name="input-dev-manager" placeholder="Project Developer / Prop. Manager">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-engineer-consultant" class="col-sm-2 control-label">Engineer Consultant</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" value="<?php if (!empty($leadReg)) echo $leadReg[0]['ENGINER_CONSULTANT']; ?>" id="input-engineer-consultant" name="input-engineer-consultant" placeholder="Engineer Consultant">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-main-contractor" class="col-sm-2 control-label">Main Contractor</label>
                                            <div class="col-sm-5">
                                                <input type="text" value="<?php if (!empty($leadReg)) echo $leadReg[0]['MAIN_CONTRACTOR']; ?>" class="form-control" id="input-main-contractor" name="input-main-contractor" placeholder="Main Contractor">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-sub-contractor" class="col-sm-2 control-label">Sub Contractor</label>
                                            <div class="col-sm-5">
                                                <input type="text" value="<?php if (!empty($leadReg)) echo $leadReg[0]['SUB_CONTRACTOR']; ?>"class="form-control" id="input-sub-contractor" name="input-sub-contractor" placeholder="Sub Contractor">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-project-value" class="col-sm-2 control-label">Project Value</label>
                                            <div class="col-sm-2">
                                                <input type="text" value="<?php if (!empty($leadReg)) echo $leadReg[0]['PROJECT_VALUE']; ?>" class="form-control" id="input-project-value" name="input-project-value" placeholder="Project Value">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-addressable-value" class="col-sm-2 control-label">Addressable Value</label>
                                            <div class="col-sm-2">
                                                <input type="text" value="<?php if (!empty($leadReg)) echo $leadReg[0]['ADDRESSABLE_VALUE']; ?>" class="form-control" id="input-addressable-value" name="input-addressable-value" placeholder="Addressable Value">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-pickup-date" class="col-sm-2 control-label">Pickup Date</label>
                                            <div class="col-sm-3">
                                                <input type="date" value="<?php if (!empty($leadReg[0]['PICKUPDATE'])) {
                                            echo $leadReg[0]['PICKUPDATE'];
                                        } ?>" class="form-control" id="input-pickup-date" name="input-pickup-date" placeholder="Project Pickup Date" readonly>
                                            </div>
                                        </div>
                                        <!--<div class="form-group">
                                            <label for="select-quality" class="col-sm-2 control-label">Quality</label>
                                            <div class="col-sm-4">
                                                <select class="form-control" id="select-quality" name="select-quality">                                            
                                        <?php
                                        $quality = array('Quality', 'Qualified', 'Not Yet Verified', 'Not Qualified');
                                        foreach ($quality as $key) {
                                            if (!empty($leadReg)) {
                                                if ($leadReg[0]['QUALITY'] == $key) {
                                                    echo "<option selected='selected' value=" . $key . ">" . $key . "</option>";
                                                } else {
                                                    echo "<option value=" . $key . ">" . $key . "</option>";
                                                }
                                            } else {
                                                echo "<option value=" . $key . ">" . $key . "</option>";
                                            }
                                        }
                                        ?>
                                                 </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="select-assign-type" class="col-sm-2 control-label">Assign Type</label>
                                            <div class="col-sm-4">
                                                <select class="form-control" id="select-assign-type" name="select-assign-type">
<?php
$assigntype = array('Open', 'Picked');
foreach ($assigntype as $key) {
    if (!empty($leadReg)) {
        if ($leadReg[0]['ASSIGNTYPE'] == $key) {
            echo "<option selected='selected' value=" . $key . ">" . $key . "</option>";
        } else {
            echo "<option value=" . $key . ">" . $key . "</option>";
        }
    } else {
        echo "<option value=" . $key . ">" . $key . "</option>";
    }
}
?>
                                                 </select>
                                            </div>
                                        </div>-->
                                        <div class="form-group">
                                            <label for="input-name" class="col-sm-2 control-label"></label>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-name" class="col-sm-2 control-label">Create Name</label>
                                            <div class="col-sm-5">
                                                <input type="hidden" class="form-control" id="input-name" name="input-name" placeholder="Name" value="<?php if (!empty($leadReg[0]['CREATENAME'])) {
    echo $leadReg[0]['CREATENAME'];
} else {
    echo $user;
} ?>" readonly>
                                                <input type="text" class="form-control" placeholder="Name" value="<?php if (!empty($leadReg[0]['FIRSTNAME'])) {
    echo $leadReg[0]['FIRSTNAME'];
} else {
    echo $name;
} ?>" readonly>
                                                <input type="hidden" class="form-control" id="input-branch" name="input-branch" placeholder="Branch" value="<?php if (!empty($leadReg[0]['BRANCH_ID'])) {
    echo $leadReg[0]['BRANCH_ID'];
} else {
    echo $branchid;
} ?>" readonly>
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="input-date" name="input-date" placeholder="Date" value="<?php if (!empty($leadReg[0]['CREATEDATE'])) {
    echo $leadReg[0]['CREATEDATE'];
} else {
    echo date('Y-m-d');
} ?>" readonly>
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
<?php if ($leadReg[0]['ASSIGNTYPE'] == 'Open' OR $leadid == 0) { ?>
                                            <button type="submit" id="button-save" name="button-save" class="btn btn-primary pull-right" style="width:100%" <?php //if(!empty($leadReg[0]['CREATENAME'])){if($name!=$leadReg[0]['CREATENAME']){echo "disabled";}} ?> ><i class="glyphicon glyphicon-floppy-disk"></i> Save</button>
<?php } ?>
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
                                    <h3 class="box-title">Detail Leads</h3>
                                </div>
                                <div class="col-md-8">
                                </div>
                                <div class="col-md-2">
                                    <a href="../leadsdetailregister/<?php echo $leadid; ?>/0" class="btn btn-primary pull-right" style="width:100%;"><i class="fa fa-plus"></i> Add Detail</a><br/><br/>
                                </div>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-body table-responsive">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Leads Detail ID</th>
                                        <th>Company</th>
                                        <th>Quality</th>
                                        <th>Lead Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>                                            
<?php
foreach ($leadDetail AS $key) {
    echo "<tr>
                                                    <td align='right'>" . $key['LEAD_DETAIL_ID'] . "</td>
                                                    <td>" . $key['COMPANY_NAME'] . "</td>
                                                    <td>" . $key['QUALITY'] . "</td>
                                                    <td>" . $key['LEAD_STATUS'] . "</td>";
    if ($key['LEAD_STATUS'] != 'Verified') {
        echo "<td class='' style='max-width:100px'>
                                                        <a class='btn btn-sm btn-primary' style='width:95%;' href='../leadsdetailregister/" . $key['LEADSID'] . "/" . $key['LEAD_DETAIL_ID'] . "'>
                                                            <i class='fa fa-eye'></i>&nbsp;<span class='desktop'>View</span>
                                                        </a>&nbsp;&nbsp;
                                                        </td>";
    } else {
        echo "<td class='' style='max-width:100px'>
                                                        </td>";
    }
    echo "</tr>";
}
?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Leads Detail ID</th>
                                        <th>Company</th>
                                        <th>Quality</th>
                                        <th>Lead Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div>

        </section><!-- /.content -->
    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->


<script type="text/javascript">
    $(function () {
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
