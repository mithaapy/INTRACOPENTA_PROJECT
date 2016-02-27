<?php $dataprivileges = $this->privileges->main($this->session->userdata['users_idrole']); ?>
<?php $data = $data_categories[0]; ?>
<br/>
<form enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() . 'index.php/concategories/' . $function; ?>" method="POST" >
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>ID Category</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="id" name="id" placeholder="ID Category" value="<?php echo $data->categories_id ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Category Name</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="Category Name" value="<?php echo $data->categories_name ?>" required="true">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Brand</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="brand" name="brand" placeholder="Brand" value="<?php echo $data->categories_brand ?>" required="true">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Company</label></div>
        <div class="col-sm-10">
            <select class="form-control" id="idcompany" name="idcompany" required="true">
                <option value="<?php echo $data->categories_idcompany ?>" selected><?php echo $data->companies_code.' - '.$data->companies_name ?></option>
                <?php foreach ($data_companies as $row):?>
                <option value="<?php echo $row->id; ?>"><?php echo $row->code.' - '.$row->name; ?></option>
                <?php endforeach;?>
            </select>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Description</label></div>
        <div class="col-sm-10">
            <textarea id="description" name="description" rows="5" class="form-control" placeholder="Description" required="true"><?php echo $data->categories_description ?></textarea>
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