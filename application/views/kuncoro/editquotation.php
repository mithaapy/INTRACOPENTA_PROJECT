<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>        
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
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-arrow-circle-o-right"></i>
                        <span>Progress Status</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href='<?php echo base_url(); ?>index.php/frontpage/pslead'><i class='fa fa-angle-double-right'></i>Lead</a></li>
                        <li><a href='<?php echo base_url(); ?>index.php/frontpage/pssuspect'><i class='fa fa-angle-double-right'></i>Suspect</a></li>
                        <li><a href='<?php echo base_url(); ?>index.php/frontpage/psprospect'><i class='fa fa-angle-double-right'></i>Prospect</a></li>
                    </ul>
                </li>
                <li class="active">
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
                Quotation Editor
            </h1>
            <ol class="breadcrumb ekunfontslide">
                <li><a href="#"><i class="fa fa-thumb-tack"></i> INTA</a></li>
                <li class="active">Quotation Editor </li>
            </ol>
        </section>


        <section class="content">      

            <form id="form" class="form-horizontal" name="form" action="../updateQuotation/<?php echo $mainid; ?>" method="POST" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header with-border">


                                <div class="box-header with-border">
                                    <h3 class="box-title">Product Choosed</h3>
                                </div><!-- /.box-header -->

                                <div class="form-group">
                                    <label for="select-product" class="col-sm-2 control-label">Product</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="select-product-id" name="select-product-id" disabled>
                                            <?php
                                            foreach ($productlist as $key) {
                                                if (!empty($prospectReg)) {
                                                    if ($prospectReg[0]['PRODUCTID'] == $key['PRODUCTID']) {
                                                        echo "<option selected='selected' value=" . $key['PRODUCTID'] . ">" . $key['PRODUCTID'] . " - " . $key['PRODUCTNAME'] . "</option>";
                                                    } else {
                                                        echo "<option value=" . $key['PRODUCTID'] . ">" . $key['PRODUCTID'] . " - " . $key['PRODUCTNAME'] . "</option>";
                                                    }
                                                } else {
                                                    echo "<option value=" . $key['PRODUCTID'] . ">" . $key['PRODUCTID'] . " - " . $key['PRODUCTNAME'] . "</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="select-suspect-id" class="col-sm-2 control-label">Quantity</label>
                                    <div class="col-sm-2">
                                        <input style="text-align:left" id="quantity" name="quantity" value="<?php if (!empty($prospectReg[0]['QUANTITY'])) {
                                                echo $prospectReg[0]['QUANTITY'];
                                            } else {
                                                echo 0;
                                            } ?>" type="text" class="form-control" placeholder="#QTY">
                                    </div>
                                    <div class="col-sm-2">
                                        <input style="text-align:left" value="<?php if (!empty($prospectReg[0]['UOM'])) {
                                                echo $prospectReg[0]['UOM'];
                                            } ?>" type="text" class="form-control" placeholder="#UOM" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="select-suspect-id" class="col-sm-2 control-label">Unit Value</label>
                                    <div class="col-sm-4">
                                        <input style="text-align:right" id="unitvalue" name="unitvalue" value="<?php if (!empty($prospectReg[0]['UNITVALUE'])) {
                                                echo $prospectReg[0]['UNITVALUE'];
                                            } ?>" type="text" class="form-control" placeholder="#UNITVALUE">
                                    </div>
                                </div>

                                <hr/>


                                <h3 class="box-title">Accessories</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <div id="ekunbarAcc">
                                    <?php
                                    foreach ($accessorieschoosed as $key => $value) {
                                        echo "<div id='row' class='row'>
                                                <div class='col-xs-4 col-md-2' style='text-align:right'><b>Accessories</b></div>
                                                    <div class='col-xs-8 col-md-7'>
                                                        <select class='form-control' id='accessoriesid[]' name='accessoriesid[]'>
                                                        <option></option>";

                                        foreach ($accessorieslist as $row) {
                                            if ($row['ACCESORIESID'] == $value['ACCESORIESID']) {
                                                echo "<option selected='selected' value=" . $value['ACCESORIESID'] . "-kuncoro-" . $value['ACCESORIESNAME'] . "-kuncoro-" . $row['PRICE'] . ">" . $value['ACCESORIESID'] . " - " . $value['ACCESORIESNAME'] . "</option>";
                                            } else {
                                                echo "<option value=" . $row['ACCESORIESID'] . "-kuncoro-" . $row['ACCESORIESNAME'] . "-kuncoro-" . $row['PRICE'] . ">" . $row['ACCESORIESID'] . " - " . $row['ACCESORIESNAME'] . "</option>";
                                            }
                                        }

                                        echo "</select></div>
                                            <div class='col-xs-2 col-md-1'>
                                            <a href='#' id='remEkun'><li class='glyphicon glyphicon-remove'></li></a></div>
                                        </div>";
                                    }
                                    ?>
                                    <div id="row" class="row">
                                        <div class="col-xs-4 col-md-2" style='text-align:right'><b>Accessories</b></div>
                                        <div class="col-md-7">
                                            <select class="form-control" id="accessoriesid[]" name="accessoriesid[]">
                                                <option></option>
<?php
foreach ($accessorieslist as $row) {
    echo "<option value=" . $row['ACCESORIESID'] . "-kuncoro-" . str_replace(" ", "&nbsp;", $row['ACCESORIESNAME']) . "-kuncoro-" . $row['PRICE'] . ">" . $row['ACCESORIESID'] . " - " . $row['ACCESORIESNAME'] . "</option>";
}
?>
                                            </select></div>
                                        <div class="col-xs-2 col-md-1">
                                            <button id="addEkun" style='border: 1px #d9d9d9 solid;width: 100%;padding: 5px;'><li class='glyphicon glyphicon-plus'></li> </button></div>
                                    </div>
                                </div>
                                <script type="text/javascript" src="<?= base_url("assets/js/jquery-1.4.3.js"); ?>"></script>
                                <script type="text/javascript">$(function() {
                                                    var scntDiv = $('#ekunbarAcc');
                                                    var i = $('#ekunbarAcc #row').size() + 1;                                                                 var ekunbarshowyoumagic = [ "<?php
foreach ($accessorieslist as $rowlist) {
    echo "<option value='" . $rowlist['ACCESORIESID'] . "-kuncoro-" . str_replace(" ", "&nbsp;", $rowlist['ACCESORIESNAME']) . "-kuncoro-" . $rowlist['PRICE'] . "'>" . $rowlist['ACCESORIESID'] . " - " . $rowlist['ACCESORIESNAME'] . "</option>";
}
?>"];
                                                    $('#addEkun').on('click', function() {
                                            $('<div id="row" class="row"><div class="col-xs-4 col-md-2" style="text-align:right"><b>Accessories</b></div><div class="col-xs-8 col-md-7"><select class="form-control" id="accessoriesid[]" name="accessoriesid[]"><option></option>' + e k unbarshowyoumagic +   '</select></div><div class="col-xs-1 col-md-1"><!--<a href="#" id="remEkun"><li class="glyphicon glyphicon-remove"></li></a>--></div>').appendTo(scntDiv);                  i++;
                                            return false;
                                    });
                                                
                                    $('#remEkun').on('click', function() { 
                                            if( i > 2 ) {
                                                    $(this).parents('#row').remove();
                                                    i--;
                                            }
                                            return false;
                                    });
                                });
                                </script>


                                <hr/>

                                <div class="box-header with-border">
                                    <h3 class="box-title">Notes</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="form-group">
                                    <label for="select-suspect-id" class="col-sm-2 control-label">1</label>
                                    <div class="col-sm-9">
                                        <input style="text-align:left" id="priceunitnote" name="priceunitnote" value="<?php if (!empty($prospectReg)) echo $prospectReg[0]['PRICEUNITNOTES']; ?>" type="text" class="form-control" placeholder="The price is offered is LDP Jakarta, Include 10% VAT">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="select-suspect-id" class="col-sm-2 control-label">2</label>
                                    <div class="col-sm-9">
                                        <input style="text-align:left" id="deliverynote" name="deliverynote" value="<?php if (!empty($prospectReg)) echo $prospectReg[0]['DELIVERYNOTES']; ?>" type="text" class="form-control" placeholder="Ready stock Jakarta (Subject to Prior Sales)">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="select-suspect-id" class="col-sm-2 control-label">3</label>
                                    <div class="col-sm-9">
                                        <input style="text-align:left" id="paymentnote" name="paymentnote" value="<?php if (!empty($prospectReg)) echo $prospectReg[0]['PAYMENTNOTES']; ?>" type="text" class="form-control" placeholder="20% downpayment & 80% Cash or thru Leasing">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="select-suspect-id" class="col-sm-2 control-label">4</label>
                                    <div class="col-sm-9">
                                        <input style="text-align:left" id="warrantynote" name="warrantynote" value="<?php if (!empty($prospectReg)) echo $prospectReg[0]['WARRANTYNOTES']; ?>" type="text" class="form-control" placeholder="12 months/2500 hour whichever comes first">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="select-suspect-id" class="col-sm-2 control-label">5</label>
                                    <div class="col-sm-9">
                                        <input style="text-align:left" id="validitynote" name="validitynote" value="<?php if (!empty($prospectReg)) echo $prospectReg[0]['VALIDITYNOTES']; ?>" type="text" class="form-control" placeholder="#15 days">
                                    </div>
                                </div>
                                <div class="form-group"><br/>
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

<script src="<?php echo base_url(); ?>assets/js/jquery.js" type="text/javascript"></script>

<script type="text/javascript">
                                        function goBack() {
                                        window.location.href = '../QuotationCreation';
                                        }
</script>