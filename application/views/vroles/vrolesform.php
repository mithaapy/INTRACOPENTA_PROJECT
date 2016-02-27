<?php $dataprivileges = $this->privileges->main($this->session->userdata['users_idrole']); ?>
<?php $data = $data_roles[0]; ?>
<br/>
<form enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() . 'index.php/conroles/' . $function; ?>" method="POST" >
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>ID Role</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="id" name="id" placeholder="ID Role" value="<?php echo $data->id ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Role Name</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="Role Name" value="<?php echo $data->name ?>" required="true">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Description</label></div>
        <div class="col-sm-10">
            <textarea id="description" name="description" rows="5" class="form-control" placeholder="Description" required="true"><?php echo $data->description ?></textarea>
        </div>
    </div>
	 <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Max Discount (%)</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="maxdiscount" name="maxdiscount" placeholder="Max Discount" value="<?php echo $data->maxdiscount ?>" required="true">
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