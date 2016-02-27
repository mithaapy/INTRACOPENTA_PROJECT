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
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/frontpage/QuotationCreation">
                                <i class="fa fa-arrow-circle-o-right"></i> <span>Quotation Creation</span>
                            </a>
                        </li>
                        <li class="active">
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
                        Discount Approval
                    </h1>
                    <ol class="breadcrumb ekunfontslide">
                        <li><a href="#"><i class="fa fa-thumb-tack"></i> INTA</a></li>
                        <li class="active">Quotation Editor </li>
                    </ol>
                </section>


                <section class="content">      

            <form id="form" class="form-horizontal" name="form" action="../updateQuotation/<?php echo $mainid;?>" method="POST" enctype="multipart/form-data">
                  
                   <div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">


            <div class="box-header with-border">
                <h3 class="box-title">Value Total</h3>
                </div><!-- /.box-header -->

                <div class="form-group">
                    <label for="select-product" class="col-sm-2 control-label">Prospect ID</label>
                    <div class="col-sm-2">
                        <input style="text-align:left" id="prospect_id" name="prospect_id" value="<?php if(!empty($prospectReg[0]['PROSPECTID'])){echo $prospectReg[0]['PROSPECTID'];}else{echo 0;}?>" type="text" class="form-control" placeholder="#PROSPECTID" readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label for="select-suspect-id" class="col-sm-2 control-label">Total Price</label>
                    <div class="col-sm-3">
                                <input style="text-align:right" id="totalprice" name="totalprice" value="<?php if(!empty($totalchoosed[0]['TOTALPRICE'])){echo $totalchoosed[0]['TOTALPRICE'];}else{echo 0;}?>" type="text" class="form-control" placeholder="#TOTAL PRICE" readonly>
                    </div>                </div>
                <div class="form-group">
                    <label for="select-suspect-id" class="col-sm-2 control-label">Total After Discount</label>
                    <div class="col-sm-3">
                                <input style="text-align:right" id="totalafterdiscount" name="totalafterdiscount" value="<?php if(!empty($totalchoosed[0]['TOTALPRICE'])){echo $totalchoosed[0]['TOTALPRICE'];}else{echo 0;}?>" type="text" class="totalafterdiscount form-control" placeholder="#TOTAL PRICE"></div>
                     <div class="col-sm-1">
                                Discount</div>
                     <div class="col-sm-2">
                        <div class="input-group">
                             <input style="text-align:right" id="discountgiven" name="discountgiven" value="0" type="text" class="form-control" placeholder="#TOTAL PRICE" readonly>
                        <span class="input-group-addon">%</span>
                        </div>
                     </div>



                </div>
                </div>


            <hr/>



                    <div class="row" style="padding: 20px;">
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
                window.location.href = '../DiscountApproval';
            }
        </script>

        <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.1.js"></script>        
        <script type="text/javascript">
           $(document).ready(function() {
                //this calculates values automatically 
                calculateSum();

                $(".totalafterdiscount").on("keydown keyup", function() {
                    calculateSum();
                });
            });

            function calculateSum() {
                var dividen = <?php if(!empty($totalchoosed[0]['TOTALPRICE'])){echo $totalchoosed[0]['TOTALPRICE'];}else{echo 0;}?>;
                var percentage = 100;
                var sum = 0;
                //iterate through each textboxes and add the values
                $(".totalafterdiscount").each(function() {
                    //add only if the value is number
                    if (!isNaN(this.value) && this.value.length != 0) {
                        sum += percentage-((parseFloat(this.value)/dividen)*percentage);
                        $(this).css("background-color", "#FEFEFE");
                    }
                    else if (this.value.length != 0){
                        $(this).css("background-color", "red");
                    }
                });
             
            	$("input#discountgiven").val(sum.toFixed(2));
            }

        </script>