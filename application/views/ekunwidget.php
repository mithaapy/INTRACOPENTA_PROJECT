<section class="col-lg-12 connectedSortable"> 
            <div class="tab-content">
              <div class="tab-pane active" id="access">
            <?php 
                if(!empty($info)){
                    echo "<h5>".$info."</h5>";
                }
            ?>
            <form role="form" action="../tempWidgetEkunbar">
              <div class="form-group">
                        <input type="hidden" value="<?php echo $username ?>">
              </div>
            </form>
            <form role="form">
                    <?php
                    $set = 3;
                    foreach($widget AS $key){
                        $cek = 0;
                        foreach($listwidget AS $key2){
                            if($key2['widget']==$key['id_widget']){
                                $cek = 1;
                            }
                            
                        }
                        
                        if($set===3){
                            echo "<div class='row'>";
                            $set = 0;
                        }
                        
                        
                        if($cek === 1){
                            echo "<div class='form-group col-md-6'><label class=\"form-control\" class=\"checkbox-inline\">";
                            echo "<input type=\"checkbox\" id='".$key['id_widget']."' name='widget[]' value='".$key['id_widget']."' checked> ".$key['name_widget'];
                            echo "</label></div>";
                        }else{
                            echo "<div class='form-group col-md-6'><label class=\"form-control\" class=\"checkbox-inline\">";
                            echo "<input type=\"checkbox\" id='".$key['id_widget']."' name='widget[]' value='".$key['id_widget']."'> ".$key['name_widget'];
                            echo "</label></div>";
                        }
                        
                        if($set===2){
                            echo "</div>";
                            $set = 3;
                        }else{
                            $set++;
                        }
                    }
                    
                    if($set!=3){
                        echo "</div>";
                    }
                ?>
                       <input type="hidden" value="<?php echo $username ?>">
              <div class="row">
                <div class="form-group col-md-1"><button type="submit" class="btn btn-default">Submit</button></div>
                <div class="form-group col-md-2"><a href="<?php echo base_url(); ?>index.php/frontpage/menu"  class="btn btn-warning">Back to Menu</a></div>
              </div>
            </form>
          </div>

                   </section></div>