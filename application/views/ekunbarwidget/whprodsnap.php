<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-6 connectedSortable"> 
        <!-- Box (with bar chart) -->
        <div class="box box-primary" id="loading-example">
            <div class="box-header">
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button class="btn btn-primary btn-sm" data-widget='collapse' title='Collapse' id="butwidgprod"><i class="fa fa-minus"></i></button>
                </div><!-- /. tools -->
                <i class="glyphicon glyphicon-home"></i>

                <h3 class="box-title">WH Production</h3>
            </div><!-- /.box-header -->
            <div class="box-body no-padding" style="background:#f3f4f5" id="widgprod">
                <iframe src="http://inventory.eidwhd.com/productivityiboard.php" style="width: 100%; height: 200px;border:0;background:#f3f4f5"></iframe>
                <div style='text-align:right;padding:0 20px 10px 20px'> <a href='http://inventory.eidwhd.com/tms_detail.php'><small>More Info <i class="fa fa-arrow-circle-right"></i></small></a></div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->   

    </section><!-- /.Left col -->

    <!-- right col (We are only adding the ID to make the widgets sortable)-->
    <section class="col-lg-6 connectedSortable"> 
        <!-- Box (with bar chart) -->
        <div class="box box-primary" id="loading-example">
            <div class="box-header">
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button class="btn btn-primary btn-sm" data-widget='collapse' title='Collapse' id="butwidgsnap"><i class="fa fa-minus"></i></button>
                </div><!-- /. tools -->
                <i class="glyphicon glyphicon-home"></i>

                <h4 class="box-title">WH Snapshot</h4>
            </div><!-- /.box-header -->
            <div class="box-body no-padding" style="background:#f3f4f5" id="widgsnap">

                <iframe src="http://ventor.eidwhd.com/index.php/main/snapshotiboard" style="width: 100%; height: 200px;border:0;background:#f3f4f5;overflow:hidden;"></iframe>
                <div style='text-align:right;padding:0 20px 10px 20px'> <a href='http://ventor.eidwhd.com/index.php/main/snapshot'><small>More Info <i class="fa fa-arrow-circle-right"></i></small></a></div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->   

    </section><!-- /.Left col -->
    <!-- right col (We are only adding the ID to make the widgets sortable)-->


</div><!-- /.row (main row) -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
    $("#butwidgprod").click(function () {
        $("#widgprod").toggle('slow');
    });
</script>
<script>
    $("#butwidgsnap").click(function () {
        $("#widgsnap").toggle('slow');
    });
</script>

