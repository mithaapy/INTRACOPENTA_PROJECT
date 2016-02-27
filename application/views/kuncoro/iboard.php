        
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
                <li class="active">
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
                Dashboard 
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb ekunfontslide">
                <li><a href="#"><i class="fa fa-thumb-tack"></i> INTA</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>


<?php if ($popupshow[0]['ekunbarsaiditdeleted'] == 0) { ?>
            <div id="myModal" class="modal modal-backdrop fade in" style="display: block;">
            </div>

            <div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: block;">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" onclick = "$('.modal').slideUp(600)"  class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                            <p><b><i class="glyphicon glyphicon-info-sign"></i></b> <span style="padding-left:10px">Widget On Dashboard</span><br/></p>
                            <div style="margin-left: 50px;" ><img style="width:88%" src="<?php echo base_url() ?>assets/img/widgetnew.jpg"/></div><br/>
                            <p>We promised you the more and more cool feature, so here is it, <i>Widget on dashboard</i>. <br/>With this new release feature, your favorite report's management is turned into your dashboard. <a href="<?php echo base_url(); ?>index.php/frontpage/maintenance"><span style='color:#1bb8e0'><i>More Info...</i></span></a> </p>


                            <button type="button" onclick = "$('.modal').slideUp(600)" class="#" data-dismiss="modal" style="float:right;background: none;border: 0;">Skip</button>
                            <a href="<?php echo base_url() ?>index.php/ekunbarwidget/deleteshowpopuplogin" class="#" style="float:right;padding:0px 20px">Don't show this pop-up again</a>
                            <br/>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <?php } else {
                
            } ?>


        <!-- Main content -->
        <section class="content">                 

<?php
foreach ($widget AS $key) {
    echo "<div id='" . $key['widget'] . "'></div>";
}
?>                             
            <!--<?php if ($from == "EKUNBARNOTES") {
    echo "<div id='whprodsnap'></div>";
} ?>    
<?php if ($from == "EKUNBARNOTES") {
    echo "<div id='kpi'></div>";
} ?>-->
            <div id="suspectlist"></div>
            <div id="price"></div>
        </section><!-- /.content -->
    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->


<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.js"></script>

<script type="text/javascript">
                            $(document).ready(function () {
                                var price = {dsp: $("#dsp").val(), origin: $("#origin").val(), to: $("#to").val(), province: $("#province").val(), mot: $("#mot").val(), typecharge: $("#typecharge").val()};
                                $.ajax({
                                    type: "POST",
                                    url: "<?php echo base_url(); ?>index.php/ekunbarwidget/news",
                                    data: price,
                                    success: function (msg) {
                                        $('.imagenya').fadeOut('slow');
                                        $('#price').html(msg);
                                    }
                                });
                            });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        var whprodsnap = {dsp: $("#dsp").val(), origin: $("#origin").val(), to: $("#to").val(), province: $("#province").val(), mot: $("#mot").val(), typecharge: $("#typecharge").val()};
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>index.php/ekunbarwidget/leadslist",
            data: whprodsnap,
            success: function (msg) {
                $('.imagenya').fadeOut('slow');
                $('#whprodsnap').html(msg);
            }
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        var suspectlist = {dsp: $("#dsp").val(), origin: $("#origin").val(), to: $("#to").val(), province: $("#province").val(), mot: $("#mot").val(), typecharge: $("#typecharge").val()};
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>index.php/ekunbarwidget/suspectlist",
            data: suspectlist,
            success: function (msg) {
                $('.imagenya').fadeOut('slow');
                $('#suspectlist').html(msg);
            }
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        var kpi = {dsp: $("#dsp").val(), origin: $("#origin").val(), to: $("#to").val(), province: $("#province").val(), mot: $("#mot").val(), typecharge: $("#typecharge").val()};
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>index.php/ekunbarwidget/document",
            data: kpi,
            success: function (msg) {
                $('.imagenya').fadeOut('slow');
                $('#kpi').html(msg);
            }
        });
    });
</script>

