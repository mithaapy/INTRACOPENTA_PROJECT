<?php $dataprivileges = $this->privileges->main($this->session->userdata['users_idrole']); ?>
<?php $data = $data_quotations[0]; ?>
<br/>
<form enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() . 'index.php/conquotations/' . $function; ?>" method="POST" >
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
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Total Price</label></div>
        <div class="col-sm-5">
            <input style="text-align:right" class="form-control" id="totalprice" name="totalprice" placeholder="Total Price" value="<?php echo $data->prospects_currency; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Discount (%)</label></div>
        <div class="col-sm-5">
            <input style="text-align:right" class="form-control" id="discount" name="discount" placeholder="Discount" value="<?php echo $data->prospects_currency; ?>" >
        </div>
    </div>
	<div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Total Price After Discount</label></div>
        <div class="col-sm-5">
            <input style="text-align:right" class="form-control" id="totalpriceafterdiscount" name="totalpriceafterdiscount" placeholder="Total Price After Discount" value="<?php echo $data->prospects_currency; ?>" readonly>
        </div>
    </div>
       <hr/>
    <br/>

    <div class="col-md-6"></div>
    <div class="col-md-2">
        <button style="width:100%" type="button" id="cancel" name="cancel" class="btn btn-default" onclick="back()"><i class="fa fa-arrow-circle-left"></i> Cancel</button>
    </div>
    <div class="col-md-2">
        <button style="width:100%; <?php echo $styleresetld ?>;" type="reset" id="reset" name="reset" class="btn btn-default"><i class="fa fa-icon-question-sign"></i> Ask Manager</button>
    </div>
    <div class="col-md-2">
        <button style="width:100%; <?php echo $stylesubmitld ?>;" type="submit" id="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-check"></i> Submit</button>
    </div>
</form>