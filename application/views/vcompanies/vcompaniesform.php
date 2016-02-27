<?php $dataprivileges = $this->privileges->main($this->session->userdata['users_idrole']); ?>
<?php $data = $data_companies[0]; ?>
<br/>
<form enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() . 'index.php/concompanies/' . $function; ?>" method="POST" enctype="multipart/form-data">
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>ID Company</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="id" name="id" placeholder="ID Company" value="<?php echo $data->id; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Code</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="code" name="code" placeholder="Code" value="<?php echo $data->code ?>" required="true">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Company Name</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="Company Name" value="<?php echo $data->name ?>" required="true">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Description</label></div>
        <div class="col-sm-10">
            <textarea id="description" name="description" rows="3" class="form-control" placeholder="Description"><?php echo $data->description ?></textarea>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>&nbsp;</label></div>
        <div class="col-sm-4">
            <img alt="Company Logo" class="img-responsive box" src="<?php echo base_url().$data->logo; ?>"/>
        </div>
        <div class="col-sm-6"><label>&nbsp;</label></div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-12">
            <input type="hidden" class="form-control-custom" id="pictureurl"  name="pictureurl" value="<?php echo $data->logo; ?>">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Company Logo</label></div>
        <div class="col-sm-10">
            <input type="file" class="form-control-custom" id="uploadfile"  name="uploadfile">
            <label>Max Size 2MB</label>
        </div>
    </div>
    <hr/>
    <div class="col-md-6"></div>
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