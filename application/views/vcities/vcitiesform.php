<?php $dataprivileges = $this->privileges->main($this->session->userdata['users_idrole']); ?>
<?php $data = $data_cities[0]; ?>
<br/>
<form enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() . 'index.php/concities/' . $function; ?>" method="POST" >
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>ID City</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="id" name="id" placeholder="ID City" value="<?php echo $data->cities_id; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Code</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="code" name="code" placeholder="Code" value="<?php echo $data->cities_code ?>" required="true">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>City Name</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="City Name" value="<?php echo $data->cities_name ?>" required="true">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Country Name</label></div>
        <div class="col-sm-10">
            <select class="form-control" id="idcountry" name="idcountry" required="true">
                <option value="<?php echo $data->cities_idcountry ?>" selected><?php echo $data->countries_code.' - '.$data->countries_name ?></option>
                <?php foreach ($data_countries as $row):?>
                <option value="<?php echo $row->countries_id; ?>"><?php echo $row->countries_code.' - '.$row->countries_name; ?></option>
                <?php endforeach;?>
            </select>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Description</label></div>
        <div class="col-sm-10">
            <textarea id="description" name="description" rows="3" class="form-control" placeholder="Description"><?php echo $data->cities_description ?></textarea>
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