                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-12 connectedSortable"> 
                            <!-- Box (with bar chart) -->
                            <div class="box box-danger" id="loading-example">
                                <div class="box-header">
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <button class="btn btn-danger btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-danger btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                    </div><!-- /. tools -->
                                    <i class="fa fa-pencil"></i>

                                    <h3 class="box-title">MoM</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <ul class="todo-list">
                                        <?php 
                                        $listdate_complaint = "";
                                        $listupdate = "";
                                        $listtitle = "";
                                        $ekunbar_mom = "";
                                        $idcomplaint = "";
                                        foreach ($mom as $key) {
                                            $listdate_complaint .= $key['date_complaint'];
                                            $listupdate .= $key['update'];
                                            $listtitle .= $key['title'];
                                            $idcomplaint .= $key['id_complaint'];
                                            if($key['dsp']=='EID'){
                                               $dspdilih='dash';
                                            }else{$dspdilih=$key['dsp'];}

                                        $ekunbar_mom .= "                                 
                                        <li>
                                            <span class='handle'>
                                                <i class='fa fa-ellipsis-v'></i>
                                                <i class='fa fa-ellipsis-v'></i>
                                            </span>  
                                            <span class='text' style='vertical-align:middle;width:77%;font-weight:normal'><b>".$key['title']."</b></i><br/>".$string = $key['update']."</span>
                                            <small class='label label-info'><i class='fa fa-clock-o'></i> ".$key['date_complaint']."</small>
                                            <small class='label label-danger'><i class='fa fa-clock-o'></i> ".$key['DifferenceInDays']." Days</small>  <div class='tools'>
                                            
                                            <a href='http://warehouse.eidwhd.com/index.php/dash/newmom".$dspdilih."/".$key['id_complaint']."/".$key['dsp']."'><span style='cursor:pointer' class='fa fa-edit'></span></a> 
                                            
                                            </div>                                          
                                        </li>
                                        ";
                                        }
                                        if($listupdate!=''){
                                            echo $ekunbar_mom;  
                                        }
                                        else{
                                            echo "<li>
                                            <span class='handle'>
                                                <i class='fa fa-ellipsis-v'></i>
                                                <i class='fa fa-ellipsis-v'></i>
                                            </span>                                   
                                            <span class='text' style='vertical-align:middle'>Empty<br/></span></li>";
                                        }                                       
                                        ?>                                        
                                    </ul>
                                </div><!-- /.box-body -->
                            </div><!-- /.box --> 
                         
                        </section><!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        
                    </div><!-- /.row (main row) -->
