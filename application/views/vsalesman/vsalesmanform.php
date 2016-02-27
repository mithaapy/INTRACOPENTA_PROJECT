<?php $dataprivileges = $this->privileges->main($this->session->userdata['users_idrole']); ?>
<?php $data = $data_users[0]; ?>
<br/>
<form enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() . 'index.php/conusers/' . $function; ?>" method="POST">
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>ID Salesman</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="id" name="id" placeholder="ID Salesman" value="<?php echo $data->users_id; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>NIK</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" value="<?php echo $data->users_nik ?>" required="true">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Full Name</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Firstname" value="<?php echo $data->users_firstname ?>" required="true">
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Lastname" value="<?php echo $data->users_lastname ?>" required="true">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Gender / Birth Date</label></div>
        <div class="col-sm-5">
            <select class="form-control" id="gender" name="gender" required="true">
                <option value="<?php echo $data->users_gender ?>" selected><?php echo $data->users_gender ?></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="birthdate" name="birthdate" placeholder="Please click to choosed the date" value="<?php echo $data->users_birthdate ?>" required="true" readonly="">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Contacts</label></div>
        <div class="col-sm-2">
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="<?php echo $data->users_phone ?>" required="true">
        </div>
        <div class="col-sm-2">
            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" value="<?php echo $data->users_mobile ?>" required="true">
        </div>
        <div class="col-sm-2">
            <input type="text" class="form-control" id="pinbbm" name="pinbbm" placeholder="Pin BBM" value="<?php echo $data->users_pinbbm ?>" required="true">
        </div>
        <div class="col-sm-4">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $data->users_email ?>" required="true">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Company / Branch</label></div>
        <div class="col-sm-5">
            <select class="form-control" id="idcompany" name="idcompany" required="true">
                <option value="<?php echo $data->users_idcompany ?>" selected><?php echo $data->companies_code.' - '.$data->companies_name ?></option>
                <?php foreach ($data_companies as $row): ?>
                    <option value="<?php echo $row->id; ?>"><?php echo $row->code . ' - ' . $row->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-sm-5">
            <select class="form-control" id="idbranch" name="idbranch" required="true">
                <option value="<?php echo $data->users_idbranch ?>" selected><?php echo $data->branches_code.' - '.$data->branches_name ?></option>
                <?php foreach ($data_branches as $row): ?>
                    <option value="<?php echo $row->branches_id; ?>"><?php echo $row->branches_code . ' - ' . $row->branches_name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Role</label></div>
        <div class="col-sm-10">
		<input type="text" class="form-control" id="idrole2" name="idrole2" value="Salesman" readonly>
		<input type="hidden" id="idrole<?php echo $i ?>" name="idrole<?php echo $i ?>" value="2 ?>">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Country / City</label></div>
        <div class="col-sm-5">
            <select class="form-control" id="idcountry" name="idcountry" required="true">
                <option value="<?php echo $data->users_idcountry ?>" selected><?php echo $data->countries_code.' - '.$data->countries_name ?></option>
                <?php foreach ($data_countries as $row): ?>
                    <option value="<?php echo $row->id; ?>"><?php echo $row->code . ' - ' . $row->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-sm-5">
            <select class="form-control" id="idcity" name="idcity" required="true">
                <option value="<?php echo $data->users_idcity ?>" selected><?php echo $data->cities_code.' - '.$data->cities_name ?></option>
                <?php foreach ($data_cities as $row): ?>
                    <option value="<?php echo $row->cities_id; ?>"><?php echo $row->cities_code . ' - ' . $row->cities_name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Active</label></div>
        <div class="col-sm-10">
            <select class="form-control" id="active" name="active" required="true">
                <option value="<?php echo $data->users_active ?>" selected><?php echo $data->users_active ?></option>
                <option value="Active">Active</option>
                <option value="Nonactive">Nonactive</option>
            </select>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Username</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo $data->users_username ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Password</label></div>
        <div class="col-sm-5">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo $data->users_password ?>" required="true">
        </div>
        <div class="col-sm-5">
            <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm Password" value="<?php echo $data->users_password ?>" required="true" onkeyup="checkPass(); return false;">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>&nbsp;</label></div>
        <div class="col-sm-4">
            <img alt="User Photo" class="img-responsive box" src="<?php echo base_url() . $data->users_picture; ?>"/>
        </div>
        <div class="col-sm-6"><label>&nbsp;</label></div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-12">
            <input type="hidden" class="form-control-custom" id="pictureurl"  name="pictureurl" value="<?php echo $data->users_picture; ?>">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Photo</label></div>
        <div class="col-sm-10">
            <input type="file" class="form-control-custom" id="picture"  name="picture">
            <label>Max Size 2MB</label>
        </div>
    </div>
    <hr/>
    <div class="col-md-6"></div>
    <div class="col-md-2">
        <button style="width:100%" type="button" id="cancel" name="cancel" class="btn btn-default" onclick="back()"><i class="fa fa-arrow-circle-left"></i> Cancel</button>
    </div>
    <?php if ($function != 'detail'): ?>
        <div class="col-md-2">
            <button style="width:100%" type="reset" id="reset" name="reset" class="btn btn-default"><i class="fa fa-refresh"></i> Clear</button>
        </div>
        <div class="col-md-2">
            <button style="width:100%" type="submit" id="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-check"></i> Submit</button>
        </div>
    <?php endif; ?>
</form>
<script type="text/javascript">
    // When the document is ready
    $(document).ready(function () {
        $('#birthdate').datepicker({
            startView: 2,
            format: "yyyy-mm-dd",
            todayBtn: "linked",
            autoclose: true,
            todayHighlight: true
        });
    });
    function checkPass()
    {
        var pass1 = document.getElementById('password');
        var pass2 = document.getElementById('password2');
        var goodColor = "#cbf290";
        var badColor = "#f29090";
        if (pass1.value === pass2.value) {
            pass2.style.backgroundColor = goodColor;
        } else {
            pass2.style.backgroundColor = badColor;
        }
    }

</script>