<?php $dataprivileges = $this->privileges->main($this->session->userdata['users_idrole']); ?>
<?php $data = $data_accessories[0]; ?>
<br/>
<form enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() . 'index.php/conaccessories/' . $function; ?>" method="POST" >
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>ID Accessories</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="id" name="id" placeholder="ID Accessories" value="<?php echo $data->id; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Accessories Name</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="Accessories Name" value="<?php echo $data->name ?>" required="true">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Price / Currency</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="price" name="price" placeholder="Price" value="<?php echo $data->price ?>" required="true">
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="currency" name="currency" placeholder="Currency" value="<?php echo $data->currency ?>" required="true">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Active</label></div>
        <div class="col-sm-10">
            <select class="form-control" id="active" name="active" required="true">
                <option value="<?php echo $data->active ?>" selected><?php echo $data->active ?></option>
                <option value="Active">Active</option>
                <option value="Nonactive">Nonactive</option>
            </select>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Description</label></div>
        <div class="col-sm-10">
            <textarea id="description" name="description" rows="3" class="form-control" placeholder="Description"><?php echo $data->description ?></textarea>
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