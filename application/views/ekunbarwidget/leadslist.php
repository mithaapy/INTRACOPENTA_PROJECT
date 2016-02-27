                <br/>

                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Picked Leads List</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>#DETAIL</th>
                                                <th>#LEADS</th>
                                                <th>#REFID</th>
                                                <th>SOURCE</th>
                                                <th>PROJECT NAME</th>
                                                <th>PROJECT PROVINCE</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php 
                                                foreach($leadspicked AS $key){
                                                echo "<tr>
                                                    <td>".$key['LEAD_DETAIL_ID']."</td>
                                                    <td>".$key['LEADSID']."</td>
                                                    <td>".$key['REFID']."</td>
                                                    <td>".$key['SOURCENAME']."</td>
                                                    <td>".$key['PROJECT_NAME']."</td>
                                                    <td>".$key['PROJECT_PROVINCE']."</td>
                                                    <td class='' style=''>
                                                        <a class='btn btn-sm btn-primary' style='' href='leadsdetailregister/".$key['LEADSID']."/".$key['LEAD_DETAIL_ID']."'>
                                                            <i class='fa fa-eye'></i>&nbsp;<span class='desktop'>View</span>
                                                        </a>&nbsp;&nbsp;</td>
                                            </tr>";
                                            } 
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#DETAIL</th>
                                                <th>#LEADS</th>
                                                <th>#REFID</th>
                                                <th>SOURCE</th>
                                                <th>PROJECT NAME</th>
                                                <th>PROJECT PROVINCE</th>
                                                <th>ACTION</th>
                                            </tr>

                                        </tfoot>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                            
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