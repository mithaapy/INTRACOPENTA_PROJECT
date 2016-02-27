<?php $dataprivileges = $this->privileges->main($this->session->userdata['users_idrole']); 
$role= $this->session->userdata['users_idrole']; 
?>
<?php $data = $data_quotations[0]; ?>
<br/>
<form enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() . 'index.php/condiscounts/' . $function; ?>" method="POST" >
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>ID Prospect</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="id" name="id" placeholder="ID Prospect" value="<?php echo $data->prospects_id; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Project Name</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="projectno" name="projectno" placeholder="Project Name" value="<?php echo $data->leads_projectname; ?>" readonly>
        </div>
    </div>
	<div class="form-group col-sm-12">
        <div class="col-sm-2"><label>ID Product / Name</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="idproduct" name="idproduct" placeholder="ID Product" value="<?php echo $data->prospects_idproduct; ?>" readonly>
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="productname" name="productname" placeholder="Product Name" value="<?php echo $data->products_name; ?>" readonly>
        </div>
    </div>
    <?php
    $p_id=$data->quotations_idprospect;
     $this->db->select('*');
       $this->db->from('tdat_discounts');
       $this->db->where('prospect_id',$p_id);
       $disquery=  $this->db->get();
       $disRes=$disquery->result();
    ?>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Total Price</label></div>
        <div class="col-sm-5">
            <input style="text-align:right" class="form-control" id="totalprice" name="totalprice" placeholder="Total Price" value="<?php echo $disRes[0]->total_price; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Discount Price</label></div>
        <div class="col-sm-5">
            <?php if($disRes[0]->discount_price): ?>
            <input style="text-align:right" class="form-control" id="discountprice" name="discountprice" placeholder="Discount Price" required="required" value="<?php echo $disRes[0]->discount_price ?>" >
            <?php else: ?>
            <input style="text-align:right" class="form-control" id="discountprice" name="discountprice" placeholder="Discount Price" required="required" >
            <?php endif; ?>
            
        </div>
    </div>
<!--	<div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Total Price After Discount</label></div>
        <div class="col-sm-5">
            <input style="text-align:right" class="form-control" id="totalpriceafterdiscount" name="totalpriceafterdiscount" placeholder="Total Price After Discount" value="<?php //echo $data->prospects_currency; ?>" readonly>
        </div>
    </div>-->
       <hr/>
    <br/>

    <div class="col-md-6"></div>
    <div class="col-md-2">
        <button style="width:100%" type="button" id="cancel" name="cancel" class="btn btn-default" onclick="back()"><i class="fa fa-arrow-circle-left"></i> Cancel</button>
    </div>
    <div class="col-md-2">
        <button style="width:100%" type="button" id="check" name="cancel" class="btn btn-default" onclick=""><i class="fa fa-check-square"></i>Check</button>
    </div>
    <div class="col-md-2" style="display:none" id="resetdiv">
        <button style="width:100%; <?php echo $styleresetld ?>;" type="reset" id="reset" name="reset" class="btn btn-default"><i class="fa fa-icon-question-sign"></i> Ask Manager</button>
    </div>
    <div class="col-md-2" style="display:none" id="submitdiv">
        <button style="width:100%; <?php echo $stylesubmitld ?>;" type="submit" id="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-check"></i> Submit</button>
    </div>
</form>
<script>
    $(document).ready(function () {
       $("#check").click(function () {
                                var discountprice = $("#discountprice").val();

                                
                                if (discountprice == "") {
                                    alert("Can not be blank !!");
                                    $("#discountprice").val('');
                                    $('#discountprice').focus();

                                }else if(discountprice > <?php echo $disRes[0]->total_price; ?>){
                                    alert("Discount price can not exceed total price!!");
                                    $("#discountprice").val('');
                                    $('#discountprice').focus();
                                }
                                else {
                                    <?php 
                                    $this->db->select('maxdiscount');
                                    $this->db->from('tdat_roles');
                                    $this->db->where('id',$role);
                                    $maxq=$this->db->get();
                                    $maxres=$maxq->result();
                                    $maxDisPer=$maxres[0]->maxdiscount;
                                    ?>
                              var form_data = {
                                    discountprice: discountprice,
                                    totalprice: <?php echo $disRes[0]->total_price; ?>,
                                    maxdiscount:<?php echo $maxDisPer; ?>,
                                };
                                    $.ajax({
                                        url: "<?php echo base_url('index.php/condiscounts/check'); ?>",
                                        type: 'POST',
                                        data: form_data,
                                        
                                        success: function (data) {
                                            if(data==1){
                                                alert("Your Discount is Applicable");
                                                $("#submitdiv").show();
                                                $("#resetdiv").hide();
                                            }
                                            else{
                                                alert("Your Discount is Over Maximum Discount. Ask Manager !!!");
                                                $("#resetdiv").show();
                                                $("#submitdiv").hide();
                                            }
                                        }
                                    });
                                }
                            }); 
    });
</script>