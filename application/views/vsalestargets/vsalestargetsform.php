<?php $dataprivileges = $this->privileges->main($this->session->userdata['users_idrole']); ?>
<?php $data = $data_salestargets[0]; ?>
<br/>
<form enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() . 'index.php/consalestargets/' . $function; ?>" method="POST" >
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>ID Sales Target</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="id" name="id" placeholder="ID Sales Target" value="<?php echo $data->salestargets_id; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Salesman</label></div>
        <div class="col-sm-10">
            <select class="form-control" id="iduser" name="iduser" >
                <option value="<?php echo $data->salestargets_iduser ?>" selected><?php echo $data->users_nik . ' - ' . $data->users_firstname . ' ' . $data->users_lastname ?></option>
                <?php foreach ($data_users as $row): ?>
                    <option value="<?php echo $row->users_id; ?>"><?php echo $row->users_nik . ' - ' . $row->users_firstname . ' ' . $row->users_lastname; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
	<h3 class='ekunfontslide'>
        Target &nbsp;&nbsp;  
    </h3>
	<br/>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Target Year</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="targetyear" name="targetyear" placeholder="Target Year" value="<?php echo $data->salestargets_targetyear ?>" required="true">
        </div>
    </div>
	 <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Year Plan Value/Qty</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="yearplanvalue" name="yearplanvalue" placeholder="Year Plan Value" value="<?php echo $data->salestargets_yearplanvalue; ?>">
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="yearplanqty" name="yearplanqty" placeholder="Year Plan Qty" value="<?php echo $data->salestargets_yearplanqty; ?>">
        </div>
    </div>
	<div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Month Plan Value/Qty</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="monthplanvalue" name="monthplanvalue" placeholder="Month Plan Value" value="<?php echo $data->salestargets_monthplanvalue; ?>">
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="monthplanqty" name="monthplanqty" placeholder="Month Plan Qty" value="<?php echo $data->salestargets_monthplanqty; ?>">
        </div>
    </div>
	
	<h3 class='ekunfontslide'>
        Actual &nbsp;&nbsp;  
    </h3>
	<br/>
	<div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Actual Year</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="actyear" name="actyear" placeholder="Actual Year" value="<?php echo $data->salestargets_actyear ?>" required="true">
        </div>
    </div>
	 <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Year Actual Value/Qty</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="yearactvalue" name="yearactvalue" placeholder="Year Actual Value" value="<?php echo $data->salestargets_yearactvalue; ?>">
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="yearactqty" name="yearactqty" placeholder="Year Actual Qty" value="<?php echo $data->salestargets_yearactqty; ?>">
        </div>
    </div>
	<div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Month Actual Value/Qty</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="monthactvalue" name="monthactvalue" placeholder="Year Actual Value" value="<?php echo $data->salestargets_monthactvalue; ?>">
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="monthactqty" name="monthactqty" placeholder="Month Actual Qty" value="<?php echo $data->salestargets_monthactqty; ?>">
        </div>
    </div>
    <hr/><div class="col-md-6"></div>
    <div class="col-md-2">
        <button style="width:100%" type="button" id="cancel" name="cancel" class="btn btn-default" onclick="back()"><i class="fa fa-arrow-circle-left"></i> Cancel</button>
    </div>
    <div class="col-md-2">
        <button style="width:100%" type="reset" id="reset" name="reset" class="btn btn-default"><i class="fa fa-refresh"></i> Clear</button>
    </div>
    <div class="col-md-2">
        <button style="width:100%" type="submit" id="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-check"></i> Submit</button>
    </div>
</form>