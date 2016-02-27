                <br/>

                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Suspect List</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example3" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Suspect ID</th>
                                                <th>Company</th>
                                                <th>Branch</th>
                                                <th>Leads ID</th>
                                                <th>Sales ID</th>
                                                <th>Stage ID</th>
                                                <th>Customer ID</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                foreach($suspect AS $key){
                                                echo "<tr>
                                                    <td align='right'>".$key['SUSPECTID']."</td>
                                                    <td>".$key['COMPANY_NAME']."</td>
                                                    <td>".$key['BRANCH_NAME']."</td>
                                                    <td align='right'>".$key['LEADSID']."</td>
                                                    <td>".$key['SALESNAME']."</td>
                                                    <td>".$key['STAGENAME']."</td>
                                                    <td>".$key['CUSTOMERNAME']."</td>
                                                    <td>".$key['STATUS']."</td>
                                                    <td class='' style=''>
                                                        <a class='btn btn-sm btn-primary' style='width:46%' href='suspectregister/".$key['SUSPECTID']."'>
                                                            <i class='fa fa-eye'></i>&nbsp;<span class='desktop'>View</span>
                                                        </a>&nbsp;&nbsp;
                                                        <a class='btn btn-sm btn-default' style='width:46%' href='suspectdetail/".$key['SUSPECTID']."'>
                                                            <i class='glyphicon glyphicon-th-list'></i>&nbsp;<span class='desktop'>Detail</span>
                                                        </a>&nbsp;&nbsp;</td>
                                            </tr>";
                                            } 
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Suspect ID</th>
                                                <th>Company</th>
                                                <th>Branch</th>
                                                <th>Leads ID</th>
                                                <th>Sales ID</th>
                                                <th>Stage ID</th>
                                                <th>Customer ID</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                            
        <script type="text/javascript">
            $(function() {
                $('#example3').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>