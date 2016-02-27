<?php $dataprivileges = $this->privileges->main($this->session->userdata['users_idrole']); ?>
<?php $data = $data_customers[0]; ?>
<br/>
<form enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() . 'index.php/concustomers/' . $function; ?>" method="POST">
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>ID Customer</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="id" name="id" placeholder="ID Customer" value="<?php echo $data->customers_id; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Customer Name</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="Customer Company Name" value="<?php echo $data->customers_name ?>" required="true">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Industry / Segment</label></div>
        <div class="col-sm-5">
            <select class="form-control" id="idindustry" name="idindustry" required="true">
                <option value="<?php echo $data->customers_idindustry ?>" selected><?php echo $data->industries_code . ' - ' . $data->industries_name ?></option>
                <?php foreach ($data_industries as $row): ?>
                    <option value="<?php echo $row->id; ?>"><?php echo $row->code . ' - ' . $row->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-sm-5">
            <select class="form-control" id="idsegment" name="idsegment" required="true">
                <option value="<?php echo $data->customers_idsegment ?>" selected><?php echo $data->segments_segment . ' - ' . $data->segments_subsegment; ?></option>
                <?php foreach ($data_segments as $row): ?>
                    <option value="<?php echo $row->id; ?>"><?php echo $row->segment . ' - ' . $row->subsegment; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Group / Type</label></div>
        <div class="col-sm-5">
            <select class="form-control" id="idcustomergroup" name="idcustomergroup" required="true">
                <option value="<?php echo $data->customers_idcustomergroup ?>" selected><?php echo $data->customergroups_name ?></option>
                <?php foreach ($data_customergroups as $row): ?>
                    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-sm-5">
            <select class="form-control" id="idcustomertype" name="idcustomertype" required="true">
                <option value="<?php echo $data->customers_idcustomertype ?>" selected><?php echo $data->customertypes_level1 . ' - ' . $data->customertypes_level2 . ' - ' . $data->customertypes_level3 ?></option>
                <?php foreach ($data_customertypes as $row): ?>
                    <option value="<?php echo $row->id; ?>"><?php echo $row->level1 . ' - ' . $row->level2 . ' - ' . $row->level3; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Customer WID</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="CUST_WID" name="CUST_WID" placeholder="Customer WID" value="<?php echo $data->customers_custwid ?>" required="true">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Address</label></div>
        <div class="col-sm-10">
            <textarea id="address" name="address" rows="3" class="form-control" placeholder="Address" required="true"><?php echo $data->customers_address ?></textarea>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Country/ City/ Post Code</label></div>
        <div class="col-sm-4">
            <select class="form-control" id="idcountry" name="idcountry" required="true">
                <option value="<?php echo $data->customers_idcountry ?>" selected><?php echo $data->countries_code . ' - ' . $data->countries_name ?></option>
                <?php foreach ($data_countries as $row): ?>
                    <option value="<?php echo $row->id; ?>"><?php echo $row->code . ' - ' . $row->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-sm-4">
            <select class="form-control" id="idcity" name="idcity" required="true">
                <option value="<?php echo $data->customers_idcity ?>" selected><?php echo $data->cities_code . ' - ' . $data->cities_name ?></option>
                <?php foreach ($data_cities as $row): ?>
                    <option value="<?php echo $row->cities_id; ?>"><?php echo $row->cities_code . ' - ' . $row->cities_name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-sm-2">
            <input type="text" class="form-control" id="postalcode" name="postalcode" placeholder="Postal Code" value="<?php echo $data->customers_postalcode ?>" >
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Phone/ Fax/ Email</label></div>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="<?php echo $data->customers_phone ?>" required="true">
        </div>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="fax" name="fax" placeholder="Fax" value="<?php echo $data->customers_fax ?>" required="true">
        </div>
        <div class="col-sm-4">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $data->customers_email ?>" required="true">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Location Site</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="locationsite" name="locationsite" placeholder="Location Site" value="<?php echo $data->customers_locationsite ?>" >
        </div>
    </div>
    <hr/>
    <br/>
    <?php
    $valcp = 1;
    $valcp2 = 1;
    if ($function == "edit"):
        $valcp = count($data_customercp); $valcp2 = count($data_salescustomers);
    endif;
    ?>
    <input type="hidden" id="countrows" name="countrows" value="<?php echo $valcp ?>">
    <input type="hidden" id="countrows2" name="countrows2" value="<?php echo $valcp2 ?>">
    <?php if ($function == 'detail'): $styleaddcp = 'display:none;'; $styleaddsc = 'display:none;'; endif; ?>
    <h3 class='ekunfontslide'>
        Contact Person &nbsp;&nbsp;
        <button style="<?php echo $styleaddcp ?>" type="button" id="addcp" name="addcp" class="btn btn-default"><i class="fa fa-phone"></i> Add Contact Person</button>
    </h3><hr/>
    <?php
    for ($i = 1; $i <= 10; $i++):
        if ($function == 'insert'):
            if ($i == 1):
                $style = '';
            else :
                $style = 'display:none;';
            endif;
        elseif ($function == 'edit'):
            if (count($data_customercp) >= $i):
                $style = '';
            else :
                $style = 'display:none;';
            endif;
        elseif ($function == 'detail'):
            $styleresetcp = 'display:none;';
            $stylesubmitcp = 'display:none;';
            if (count($data_customercp) >= $i):
                $style = '';
            else :
                $style = 'display:none;';
            endif;
        endif;
        ?>
        <div id="cp<?php echo $i ?>" style="<?php echo $style ?>">
            <div class="form-group col-sm-12">
                <div class="col-sm-2"><label>ID Contact Person</label></div>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="idcp<?php echo $i ?>" name="idcp<?php echo $i ?>" placeholder="ID Contact Person" value="<?php echo $data_customercp[$i - 1]->customercp_id; ?>" readonly>
                </div>
            </div>
            <div class="form-group col-sm-12">
                <div class="col-sm-2"><label>Full Name</label></div>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="firstname<?php echo $i ?>" name="firstname<?php echo $i ?>" placeholder="Firstname" value="<?php echo $data_customercp[$i - 1]->customercp_firstname ?>" >
                </div>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="lastname<?php echo $i ?>" name="lastname<?php echo $i ?>" placeholder="Lastname" value="<?php echo $data_customercp[$i - 1]->customercp_lastname ?>" >
                </div>
            </div>
            <div class="form-group col-sm-12">
                <div class="col-sm-2"><label>Gender / Birth Date</label></div>
                <div class="col-sm-5">
                    <select class="form-control" id="gender<?php echo $i ?>" name="gender<?php echo $i ?>"  >
                        <option value="<?php echo $data_customercp[$i - 1]->customercp_gender ?>" selected><?php echo $data_customercp[$i - 1]->customercp_gender ?></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="col-sm-5">
                    <input type="text" class="form-control dpicker" id="birthdate<?php echo $i ?>" name="birthdate<?php echo $i ?>" placeholder="Please click to choosed the date" value="<?php echo $data_customercp[$i - 1]->customercp_birthdate ?>"  readonly>
                </div>
            </div>
            <div class="form-group col-sm-12">
                <div class="col-sm-2"><label>Contacts</label></div>
                <div class="col-sm-1">
                    <input type="text" class="form-control" id="ext<?php echo $i ?>" name="ext<?php echo $i ?>" placeholder="Ext" value="<?php echo $data_customercp[$i - 1]->customercp_ext ?>" >
                </div>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="phone<?php echo $i ?>" name="phone<?php echo $i ?>" placeholder="Phone" value="<?php echo $data_customercp[$i - 1]->customercp_phone ?>" >
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="mobile<?php echo $i ?>" name="mobile<?php echo $i ?>" placeholder="Mobile" value="<?php echo $data_customercp[$i - 1]->customercp_mobile ?>"  >
                </div>
                <div class="col-sm-4">
                    <input type="email" class="form-control" id="email<?php echo $i ?>" name="email<?php echo $i ?>" placeholder="Email" value="<?php echo $data_customercp[$i - 1]->customercp_email ?>"  >
                </div>
            </div>
            <div class="form-group col-sm-12">
                <div class="col-sm-2"><label>Position / Hobbies</label></div>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="position<?php echo $i ?>" name="position<?php echo $i ?>" placeholder="Position" value="<?php echo $data_customercp[$i - 1]->customercp_position ?>" >
                </div>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="hobby<?php echo $i ?>" name="hobby<?php echo $i ?>" placeholder="Hobbies" value="<?php echo $data_customercp[$i - 1]->customercp_hobby ?>" >
                </div>
            </div>
            <div class="form-group col-sm-12">
                <div class="col-sm-2"><label>Action</label></div>
                <div class="col-sm-10">
                    <select class="form-control" id="actioncp<?php echo $i ?>" name="actioncp<?php echo $i ?>"  >
                        <option value="" selected></option>
                        <?php if (!empty($data_customercp[$i - 1]->customercp_id)): ?>
                            <option value="delete">Delete This Contact Person</option>
                        <?php endif; ?>
                    </select>
                </div>
            </div>
            <hr/>
        </div>
        <?php endfor; ?>
    <br/>
    <h3 class='ekunfontslide'>
        Salesman &nbsp;&nbsp;
        <button style="<?php echo $styleaddsc ?>" type="button" id="addsc" name="addsc" class="btn btn-default"><i class="fa fa-male"></i> Add Salesman</button>
    </h3><hr/>
    <?php
    for ($i = 1; $i <= 10; $i++):
        if ($function == 'insert'):
            if ($i == 1):
                $stylesc = '';
            else :
                $stylesc = 'display:none;';
            endif;
        elseif ($function == 'edit'):
            if (count($data_salescustomers) >= $i):
                $stylesc = '';
            else :
                $stylesc = 'display:none;';
            endif;
        elseif ($function == 'detail'):
            if (count($data_salescustomers) >= $i):
                $stylesc = '';
            else :
                $stylesc = 'display:none;';
            endif;
        endif;
        ?>
        <div id="sc<?php echo $i ?>" style="<?php echo $stylesc ?>">
            <input type="hidden" class="form-control" id="idsc<?php echo $i ?>" name="idsc<?php echo $i ?>" value="<?php echo $data_salescustomers[$i - 1]->salescustomers_id ?>" readonly>
            <div class="form-group col-sm-12">
                <div class="col-sm-2"><label>Salesman</label></div>
                <div class="col-sm-10">
                    <select class="form-control" id="idusersc<?php echo $i ?>" name="idusersc<?php echo $i ?>">
                        <option value="<?php echo $data_salescustomers[$i - 1]->salescustomers_iduser ?>" selected><?php if ($data_salescustomers[$i - 1]->salescustomers_iduser != '') : echo $data_salescustomers[$i - 1]->users_nik . ' - ' . $data_salescustomers[$i - 1]->users_firstname . ' ' . $data_salescustomers[$i - 1]->users_lastname . ' - Company : ' . $data_salescustomers[$i - 1]->companies_code . '/' . $data_salescustomers[$i - 1]->companies_name . ' - Branch : ' . $data_salescustomers[$i - 1]->branches_code . '/' . $data_salescustomers[$i - 1]->branches_name; endif; ?></option>
                        <?php foreach ($data_users as $row): ?>
                            <option value="<?php echo $row->users_id; ?>"><?php echo $row->users_nik . ' - ' . $row->users_firstname . ' ' . $row->users_lastname . ' - Company : ' . $row->companies_code . '/' . $row->companies_name . ' - Branch : ' . $row->branches_code . '/' . $row->branches_name ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group col-sm-12">
                <div class="col-sm-2"><label>Assign Date / Active</label></div>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="assigndate<?php echo $i ?>" name="assigndate<?php echo $i ?>" placeholder="Assign Date" value="<?php echo $data_salescustomers[$i - 1]->salescustomers_assigndate ?>" readonly>
                </div>
                <div class="col-sm-5">
                    <select class="form-control" id="active<?php echo $i ?>" name="active<?php echo $i ?>"  >
                        <option value="<?php echo $data_salescustomers[$i - 1]->salescustomers_active ?>" selected><?php echo $data_salescustomers[$i - 1]->salescustomers_active ?></option>
                        <option value="Active">Active</option>
                        <option value="Non Active">Non Active</option>
                    </select>
                </div>
            </div>
            <div class="form-group col-sm-12">
                <div class="col-sm-2"><label>Action</label></div>
                <div class="col-sm-10">
                    <select class="form-control" id="actionsc<?php echo $i ?>" name="actionsc<?php echo $i ?>"  >
                        <option value="" selected></option>
                        <?php if (!empty($data_salescustomers[$i - 1]->salescustomers_id)): ?>
                            <option value="delete">Delete This Salesman</option>
                        <?php endif; ?>
                    </select>
                </div>
            </div>
            <hr/>
        </div>
    <?php endfor; ?>
    <br/>
    <div class="col-md-6"></div>
    <div class="col-md-2">
        <button style="width:100%" type="button" id="cancel" name="cancel" class="btn btn-default" onclick="back()"><i class="fa fa-arrow-circle-left"></i> Cancel</button>
    </div>
    <div class="col-md-2">
        <button style="width:100%; <?php echo $styleresetcp ?>" type="reset" id="reset" name="reset" class="btn btn-default"><i class="fa fa-refresh"></i> Clear</button>
    </div>
    <div class="col-md-2">
        <button style="width:100%; <?php echo $stylesubmitcp ?>" type="submit" id="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-check"></i> Submit</button>
    </div>
</form>
<script type="text/javascript">
    // When the document is ready
    $(document).ready(function () {
        $('.dpicker').datepicker({
            startView: 2,
            format: "yyyy-mm-dd",
            todayBtn: "linked",
            autoclose: true,
            todayHighlight: true
        });

        $('#addcp').bind('click', function () {
            var countrows = $('#countrows').val();
            var firstname = $('#cp' + countrows + ' #firstname' + countrows).val();
            var lastname = $('#cp' + countrows + ' #lastname' + countrows).val();
            var mobile = $('#cp' + countrows + ' #mobile' + countrows).val();
            var email = $('#cp' + countrows + ' #email' + countrows).val();
            if (firstname === "" || lastname === "" || mobile === "" || email === "") {
                alert("Firstname, Lastname, Mobile and Email can not be empty");
            } else {
                if (countrows < 10) {
                    var nilai = parseInt(countrows) + 1;
                    $('#countrows').val(nilai);
                    $('#cp' + nilai).slideDown();
                } else {
                    alert("Max Contact Person is 10 records");
                }
            }
        });
        
        $('#addsc').bind('click', function () {
            var countrows2 = $('#countrows2').val();
            var iduser = $('#sc' + countrows2 + ' #iduser' + countrows2).val();
            var active = $('#sc' + countrows2 + ' #active' + countrows2).val();
            if (iduser === "" || active === "") {
                alert("Salesman and Active can not be empty");
            } else {
                if (countrows2 < 10) {
                    var nilai = parseInt(countrows2) + 1;
                    $('#countrows2').val(nilai);
                    $('#sc' + nilai).slideDown();
                } else {
                    alert("Max Salesman is 10 records");
                }
            }
        });
    });
</script>