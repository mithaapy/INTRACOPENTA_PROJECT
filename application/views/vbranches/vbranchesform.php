<?php $dataprivileges = $this->privileges->main($this->session->userdata['users_idrole']); ?>
<?php $data = $data_branches[0]; ?>
<br/>
<form enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() . 'index.php/conbranches/' . $function; ?>" method="POST" >
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>ID Branch</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="id" name="id" placeholder="ID Branch" value="<?php echo $data->branches_id ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Code</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="code" name="code" placeholder="Code" value="<?php echo $data->branches_code ?>" required="true">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Branch Name</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="Branch Name" value="<?php echo $data->branches_name ?>" required="true">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Address</label></div>
        <div class="col-sm-10">
            <textarea id="address" name="address" rows="5" class="form-control" placeholder="Address" required="true"><?php echo $data->branches_address ?></textarea>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Country / City</label></div>
        <div class="col-sm-5">
            <select class="form-control" id="idcountry" name="idcountry" required="true">
                <option value="<?php echo $data->branches_idcountry ?>" selected><?php echo $data->countries_code.' - '.$data->countries_name ?></option>
                <?php foreach ($data_countries as $row):?>
                <option value="<?php echo $row->id; ?>"><?php echo $row->code.' - '.$row->name; ?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="col-sm-5">
            <select class="form-control" id="idcity" name="idcity" required="true">
                <option value="<?php echo $data->branches_idcity ?>" selected><?php echo $data->cities_code.' - '.$data->cities_name ?></option>
                <?php foreach ($data_cities as $row):?>
                <option value="<?php echo $row->cities_id; ?>"><?php echo $row->cities_code.' - '.$row->cities_name; ?></option>
                <?php endforeach;?>
            </select>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Phone / Fax</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="<?php echo $data->branches_phone ?>" required="true">
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="fax" name="fax" placeholder="Fax" value="<?php echo $data->branches_fax ?>" required="true">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Email</label></div>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $data->branches_email ?>" required="true">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Company</label></div>
        <div class="col-sm-10">
            <select class="form-control" id="idcompany" name="idcompany" required="true">
                <option value="<?php echo $data->branches_idcompany ?>" selected><?php echo $data->companies_code .' - '. $data->companies_name ?></option>
                <?php foreach ($data_companies as $row):?>
                <option value="<?php echo $row->id; ?>"><?php echo $row->code.' - '.$row->name; ?></option>
                <?php endforeach;?>
            </select>
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