                    <!-- Small boxes (Stat box) -->
                    <div class="col-lg-4 col-xs-12 ekunbardisplayslide">
                            <!-- small box -->
                            <div class="small-box bg-blue" >
                                <div class="inner">
                                    <span align="right" class="ekunbargerak" style="float:right; margin-top:-5px; font-size:12px;">Total : <?php echo $idist[0]['MRDSC']; ?> MR</span><br/>
                                    <div style='margin-top: -10px;'>
                                      <?php 
                                        $listTtl = "";
                                        $listFail = "";
                                        $listPct = 0;
                                        foreach ($idist as $key) {
                                            $listTtl .= $key['MRDSC'];
                                            $listFail .= $key['MRDSCFAIL'];
                                        }
                                        if($listFail!=0){                           
                                           $ltemp = 100-number_format(($listFail/$listTtl),2)*100;
                                           echo "<h3 class='ekunbarpercentage'>".$ltemp."%</h3>" ;
                                        }
                                        else
                                        {
                                            echo "<h3 class='ekunbarpercentage'>100%</h3>" ;
                                        }
                                        ?>
                                    </div>
                                    <p style='margin-bottom:-5px'>
                                        DSC
                                    </p>
                                    <span class="ekunbargerak" style="font-size:12px;">Week <?php echo $idist[0]['WEEKNYA']; ?></span>
                                </div>
                                <div class="icon">
                                    <i class="glyphicon glyphicon-stats"></i>
                                </div>
                                <a href="<?php echo 'http://idist.eidwhd.com/index.php/main/detailweekdatash?due_date='.date('Y').'-W'.$idist[0]['WEEKNYA'].'&dsp=DHL&kpi=ericsson' ?>" class="small-box-footer">
                                    <span class="moreinfo">More info</span> <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-4 col-xs-12 ekunbardisplayslide">
                            <!-- small box -->
                            <div class="small-box bg-yellow" style="background-color: #FFCC00 !important;">
                                <div class="inner">
                                    <span align="right" class="ekunbargerak" style="float:right; margin-top:-5px; font-size:12px;">Total : <?php echo $idist[0]['MRDGF']; ?> MR</span><br/>
                                    <div style='margin-top: -10px;'>
                                        <?php 
                                        $listTtl = "";
                                        $listFail = "";
                                        $listPct = 0;
                                        foreach ($idist as $key) {
                                            $listTtl .= $key['MRDGF'];
                                            $listFail .= $key['MRDGFFAIL'];
                                        }
                                        if($listFail!=0){                           
                                           $ltemp = 100-number_format(($listFail/$listTtl),2)*100;
                                           echo "<h3 class='ekunbarpercentage'>".$ltemp."%</h3>" ;
                                        }
                                        else
                                        {
                                            echo "<h3 class='ekunbarpercentage'>100%</h3>" ;
                                        }
                                        ?>
                                    </div>
                                    <p style='margin-bottom:-5px'>
                                        DGF
                                    </p>
                                    <span class="ekunbargerak" style="font-size:12px;">Week <?php echo $idist[0]['WEEKNYA']; ?></span>
                                </div>
                                <div class="icon">
                                    <i class="glyphicon glyphicon-stats"></i>
                                </div>
                                <a href="<?php echo 'http://idist.eidwhd.com/index.php/main/detailweekdatash?due_date='.date('Y').'-W'.$idist[0]['WEEKNYA'].'&dsp=DGF&kpi=ericsson' ?>" class="small-box-footer">
                                    <span class="moreinfo">More info</span> <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->

                        <div class="col-lg-4 col-xs-12 ekunbardisplayslide">
                            <!-- small box -->
                            <div class="small-box bg-yellow" style="background-color: #FFF !important;color:#333 !important;">
                                <div class="inner">
                                    <p style='font-size:14px' class="box-title">Last Login<br/><?php echo $lastlog[0]['when']; ?></p>
                                    <?php $youandeidwhd = $yourlogin[0]['totallogin']/$yourlogin[0]['totalsemualogin']; $persentaselogin = $youandeidwhd*100; ?> <h3 align='right' style='margin-top:-50px'><?php echo number_format($persentaselogin,0)."%";?> </h3><br style='margin-top:-5px'/>
                                     <?php echo "<div class='progress sm progress-striped active' style='margin-top: -5px;'>
                                                    <div class='progress-bar progress-bar-success' style='width: ".number_format($persentaselogin,0)."%'></div>";?>

                                </div></div>
                                <div class="icon">
                                    <i class="glyphicon glyphicon-signal"></i>
                                </div>
                                <a href='loginlog' class="small-box-footer" style="color:#444 !important">
                                    <span class="moreinfo">More info</span> <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->

                    <!-- top row -->
                    <div class="row">
                        <div class="col-xs-12 connectedSortable">
                            
                        </div><!-- /.col -->
                    </div>
                    <!-- /.row -->