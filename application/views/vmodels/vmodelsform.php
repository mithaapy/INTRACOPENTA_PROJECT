<?php $dataprivileges = $this->privileges->main($this->session->userdata['users_idrole']); ?>
<?php $data = $data_models[0]; ?>
<br/>
<form enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() . 'index.php/conmodels/' . $function; ?>" method="POST" >
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>ID Model</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="id" name="id" placeholder="ID Model" value="<?php echo $data->models_id ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Code</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="code" name="code" placeholder="Code" value="<?php echo $data->models_code ?>" required="true">
        </div>
    </div><div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Model Name</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="Model Name" value="<?php echo $data->models_name ?>" required="true">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Category</label></div>
        <div class="col-sm-10">
            <select class="form-control" id="idcategory" name="idcategory" required="true">
                <option value="<?php echo $data->models_idcategory ?>" selected><?php echo $data->categories_name.' - '.$data->categories_brand ?></option>
                <?php foreach ($data_categories as $row):?>
                <option value="<?php echo $row->categories_id; ?>"><?php echo $row->categories_name.' - '.$row->categories_brand ; ?></option>
                <?php endforeach;?>
            </select>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Description</label></div>
        <div class="col-sm-10">
            <textarea id="description" name="description" rows="5" class="form-control" placeholder="Description" required="true"><?php echo $data->models_description ?></textarea>
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