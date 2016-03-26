<?php $dataprivileges = $this->privileges->main($this->session->userdata['users_idrole']); ?>
<?php $email = $this->session->userdata['users_email'];
$f_name = $this->session->userdata['users_firstname'];

$l_name = $this->session->userdata['users_lastname'];
$mobile = $this->session->userdata['users_mobile'];
?>
<?php $data = $data_leads[0]; ?>
<br/>
<form enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() . 'index.php/conleads/' . $function; ?>" method="POST" >
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>ID Lead</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="id" name="id" placeholder="ID Lead" value="<?php echo $data->leads_id; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Source / Proj.No</label></div>
        <div class="col-sm-5">
            <select class="form-control" id="idsource" name="idsource" >
                <option value="<?php echo $data->leads_idsource ?>" selected><?php echo $data->sources_code . ' - ' . $data->sources_name ?></option>
                <?php foreach ($data_sources as $row): ?>
                    <option value="<?php echo $row->id; ?>"><?php echo $row->code . ' - ' . $row->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="projectno" name="projectno" placeholder="Project Number" value="<?php echo $data->leads_projectno; ?>" <?php if(!empty($data->leads_projectno)) : echo 'readonly'; endif; ?>>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Proj.Name/Proj.Category</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="projectname" name="projectname" placeholder="Project Name" value="<?php echo $data->leads_projectname; ?>">
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="projectcategory" name="projectcategory" placeholder="Project Category" value="<?php echo $data->leads_projectcategory; ?>">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Proj.Description</label></div>
        <div class="col-sm-10">
            <textarea id="projectdescription" name="projectdescription" rows="5" class="form-control" placeholder="Project Description" ><?php echo $data->leads_projectdescription ?></textarea>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Const.Start / End Date</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="constdate" name="constdate" placeholder="Construction Start Date" value="<?php echo $data->leads_constdate; ?>">
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="constenddate" name="constenddate" placeholder="Construction End Date" value="<?php echo $data->leads_constenddate; ?>">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Proj.Address</label></div>
        <div class="col-sm-10">
            <textarea id="projectaddress" name="projectaddress" rows="5" class="form-control" placeholder="Project Address" ><?php echo $data->leads_projectaddress ?></textarea>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Proj.Province/Town</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="projectprovince" name="projectprovince" placeholder="Project Province" value="<?php echo $data->leads_projectprovince; ?>">
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="projecttown" name="projecttown" placeholder="Project Town" value="<?php echo $data->leads_projecttown; ?>">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Proj.Stage/Proj.Status</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="projectstage" name="projectstage" placeholder="Project Stage" value="<?php echo $data->leads_projectstage; ?>">
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="projectstatus" name="projectstatus" placeholder="Project Status" value="<?php echo $data->leads_projectstatus; ?>">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Architech/Designer</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="architechdesigner" name="architechdesigner" placeholder="Architech / Designer" value="<?php echo $data->leads_architechdesigner; ?>">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Dev. Prop. Manager</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="devpropmanager" name="devpropmanager" placeholder="Dev. Prop. Manager" value="<?php echo $data->leads_devpropmanager; ?>">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Engineer Consultant</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="engineerconsultant" name="engineerconsultant" placeholder="Engineer Consultant" value="<?php echo $data->leads_engineerconsultant; ?>">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Main Contractor</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="maincontractor" name="maincontractor" placeholder="Main Contractor" value="<?php echo $data->leads_maincontractor; ?>">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Sub Contractor</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="subcontractor" name="subcontractor" placeholder="Sub Contractor" value="<?php echo $data->leads_subcontractor; ?>">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Proj. Publish Date/Stage</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="projectpublishdate" name="projectpublishdate" placeholder="Project Publish Date" value="<?php echo $data->leads_projectpublishdate ?>">
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="idstage" name="idstage" placeholder="Stage" value="<?php echo $data->stages_code.' - '.$data->stages_name ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Proj./Addressable Value</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="projectvalue" name="projectvalue" placeholder="Project Value" value="<?php echo $data->leads_projectvalue; ?>">
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="addressablevalue" name="addressablevalue" placeholder="Addressable Value" value="<?php echo $data->leads_addressablevalue; ?>">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Quality / Assign Type</label></div>
        <div class="col-sm-5">
            <select class="form-control" id="quality" name="quality" >
                <option value="<?php echo $data->leads_quality ?>" selected><?php echo $data->leads_quality; ?></option>
                <option value="Qualified">Qualified</option>
                <option value="Not Qualified">Not Qualified</option>
            </select>
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="assigntype" name="assigntype" placeholder="Assign Type" value="<?php echo $data->leads_assigntype; ?>">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Created Date / By</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="createddate" name="createddate" placeholder="Created Date" value="<?php echo $data->leads_createddate; ?>" readonly>
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="createdby" name="createdby" placeholder="Created By" value="<?php echo $data->users_nik . ' - ' . $data->users_firstname . ' ' . $data->users_lastname; ?>" readonly>
        </div>
    </div>
    <hr/>
    <br/>
    <?php if ($function == 'detail'): $styleaddld = 'display:none;'; endif; ?>
    <h3 class='ekunfontslide'>
        Lead Details &nbsp;&nbsp;
        <button style="<?php echo $styleaddld ?>" type="button" id="addleaddetail" name="addleaddetail" class="btn btn-default"><i class="fa fa-list"></i> Add Details</button>
    </h3>
    <br/>
    <?php
    $valrows = 1;
    if ($function == "edit"):
        $valrows = count($data_leaddetails);
    endif;
    ?>
    <div class='table-responsive'>
        <input type="hidden" id="countrows" name="countrows" value="<?php echo $valrows ?>">
        <table class='table table-bordered table-striped table-condensed datatablesdetails'>
            <?php if ($function == 'insert' || $function == 'detail'): $styleactionld = 'display:none;'; endif; ?>
            <thead>
                <tr>
                    <th style="text-align: center; vertical-align: middle;">Company</th>
                    <th style="text-align: center; vertical-align: middle;">Branch</th>
                    <th style="text-align: center; vertical-align: middle;">Customer</th>
                    <th style="text-align: center; vertical-align: middle;">Pickup Date</th>
                    <th style="text-align: center; vertical-align: middle;">Pickup By</th>
                    <th style="text-align: center; vertical-align: middle;">Quality</th>
                    <th style="text-align: center; vertical-align: middle;">Status</th>
                    <th style="text-align: center; vertical-align: middle; <?php echo $styleactionld ?>;"></a>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 1; $i <= 10; $i++):
                    if ($function == 'insert'):
                        if ($i == 1):
                            $stylerows = '';
                        else :
                            $stylerows = 'display:none;';
                        endif;
                    elseif ($function == 'edit'):
                        if (count($data_leaddetails) >= $i):
                            $stylerows = '';
                        else :
                            $stylerows = 'display:none;';
                        endif;
                    elseif ($function == 'detail'):
                        $styleresetld = 'display:none;';
                        $stylesubmitld = 'display:none;';
                        if (count($data_leaddetails) >= $i):
                            $stylerows = '';
                        else :
                            $stylerows = 'display:none;';
                        endif;
                    endif;
                    ?>
                    <tr id="rowleaddetail<?php echo $i ?>" style="<?php echo $stylerows ?>">
                        <td style="text-align: left; vertical-align: middle;">
                            <input type="hidden" id="id<?php echo $i ?>" name="id<?php echo $i ?>" value="<?php echo $data_leaddetails[$i - 1]->leaddetails_id ?>">
                            <select class="form-control" id="idcompany<?php echo $i ?>" name="idcompany<?php echo $i ?>">
                                <option value="<?php echo $data_leaddetails[$i - 1]->leaddetails_idcompany ?>" selected><?php echo $data_leaddetails[$i - 1]->companies_code . ' - ' . $data_leaddetails[$i - 1]->companies_name ?></option>
                                <?php foreach ($data_companies as $row): ?>
                                    <option value="<?php echo $row->id; ?>"><?php echo $row->code . ' - ' . $row->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                        <td style="text-align: left; vertical-align: middle;">
                            <select class="form-control" id="idbranch<?php echo $i ?>" name="idbranch<?php echo $i ?>">
                                <option value="<?php echo $data_leaddetails[$i - 1]->leaddetails_idbranch ?>" selected><?php echo $data_leaddetails[$i - 1]->branches_code . ' - ' . $data_leaddetails[$i - 1]->branches_name ?></option>
                                <?php foreach ($data_branches as $row): ?>
                                    <option value="<?php echo $row->branches_id; ?>"><?php echo $row->branches_code . ' - ' . $row->branches_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                        <td style="text-align: left; vertical-align: middle;">
                            <input type="text" class="form-control" id="idcustomer<?php echo $i ?>" name="idcustomer<?php echo $i ?>" placeholder="Customer" value="<?php echo $data_leaddetails[$i - 1]->customers_name ?>">
                            <input type="hidden" id="idcustomer2<?php echo $i ?>" name="idcustomer2<?php echo $i ?>" value="<?php echo $data_leaddetails[$i - 1]->leaddetails_idcustomer ?>">
                            <!--<select class="form-control" id="idcustomer<?php //echo $i ?>" name="idcustomer<?php //echo $i ?>" >
                                <option value="<?php //echo $data_leaddetails[$i - 1]->leaddetails_idcustomer ?>" selected><?php //echo $data_leaddetails[$i - 1]->customers_name ?></option>
                                <?php //foreach ($data_customers as $row): ?>
                                    <option value="<?php //echo $row->customers_id; ?>"><?php //echo $row->customers_name; ?></option>
                                <?php //endforeach; ?>
                            </select>-->
                        </td>
                        <td style="text-align: left; vertical-align: middle;">
                            <input type="text" class="form-control" id="pickupdate<?php echo $i ?>" name="pickupdate<?php echo $i ?>" placeholder="Pickup Date" value="<?php echo $data_leaddetails[$i - 1]->leaddetails_pickupdate ?>" readonly>
                        </td>
                        <td style="text-align: left; vertical-align: middle;">
                            <input type="text" class="form-control" id="pickupby<?php echo $i ?>" name="pickupby<?php echo $i ?>" placeholder="Pickup By" value="<?php echo $data_leaddetails[$i - 1]->users_firstname . ' ' . $data_leaddetails[$i - 1]->users_lastname ?>" readonly>
                            <input type="hidden" id="pickupby2<?php echo $i ?>" name="pickupby2<?php echo $i ?>" value="<?php echo $data_leaddetails[$i - 1]->users_id ?>">
                        </td>
                        <td style="text-align: left; vertical-align: middle;">
                            <input type="text" class="form-control" id="quality<?php echo $i ?>" name="quality<?php echo $i ?>" placeholder="Quality" value="<?php echo $data_leaddetails[$i - 1]->leaddetails_quality ?>" >
                        </td>
                        <td style="text-align: left; vertical-align: middle;">
                            <input type="text" class="form-control" id="idstatus<?php echo $i ?>" name="idstatus<?php echo $i ?>" placeholder="Pickup By" value="<?php echo $data_leaddetails[$i - 1]->statuses_code . ' - ' . $data_leaddetails[$i - 1]->statuses_name ?>" readonly>
                            <input type="hidden" id="idstatus2<?php echo $i ?>" name="idstatus2<?php echo $i ?>" value="<?php echo $data_leaddetails[$i - 1]->leaddetails_idstatus ?>">
                        </td>
                        <td style="text-align: left; vertical-align: middle; <?php echo $styleactionld ?>;">
                            <select class="form-control" id="action<?php echo $i ?>" name="action<?php echo $i ?>">
                                <?php if ($data_leaddetails[$i - 1]->leaddetails_idstatus == '1'): ?>
                                    <option value="" selected></option>
                                    <option value="2">BID - Bid/Pick-up</option>
                                    <option value="delete">Delete</option>
                                <?php elseif ($data_leaddetails[$i - 1]->leaddetails_idstatus == '2'): ?>
                                    <option value="" selected></option>
                                    <option value="3">VER - Verified</option>
                                    <option value="4">DIS - Disqualified</option>
                                <?php elseif ($data_leaddetails[$i - 1]->leaddetails_idstatus == '3'): ?>
                                    <option value="" selected></option>
                                <?php elseif ($data_leaddetails[$i - 1]->leaddetails_idstatus == '4'): ?>
                                    <option value="" selected></option>
                                    <option value="1">OPE - Open</option>
                                <?php elseif ($data_leaddetails[$i - 1]->leaddetails_idstatus == '5'): ?>
                                    <option value="" selected></option>
                                <?php elseif ($data_leaddetails[$i - 1]->leaddetails_idstatus == ''): ?>
                                    <option value="" selected></option>
                                <?php endif; ?>
                            </select>
                        </td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
    <hr/><br/>
    <div class="col-md-6"></div>
    <div class="col-md-2">
        <button style="width:100%" type="button" id="cancel" name="cancel" class="btn btn-default" onclick="back()"><i class="fa fa-arrow-circle-left"></i> Cancel</button>
    </div>
<!--    <div class="col-md-2">
        <button style="width:100%" type="button" id="pick" name="pick" class="btn btn-default"><i class="fa fa-arrow-circle-left"></i> Pick</button>
    </div>-->
    <div class="col-md-2">
        <button style="width:100%; <?php echo $styleresetld ?>;" type="reset" id="reset" name="reset" class="btn btn-default"><i class="fa fa-refresh"></i> Clear</button>
    </div>
<input type="hidden" name="createdby" value="<?php echo $data->leads_createdby; ?>">
<input type="hidden" name="email" value="<?php echo $email; ?>">
<input type="hidden" name="mobile" value="<?php echo $mobile; ?>">
<input type="hidden" name="name" value="<?php echo $f_name.' '.$lname ?>">
    <div class="col-md-2">
        <button style="width:100%; <?php echo $stylesubmitld ?>;" type="submit" id="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-check"></i> Submit</button>
    </div>
</form>

<script type="text/javascript">
    // When the document is ready
    $(document).ready(function () { 
        
//        $("#pick").click(function () {
//            var form_data = {
//                createdby: <?php //echo $data->leads_createdby; ?>,
//                email:'<?php //echo $email; ?>',
//                name: '<?php //echo $f_name.' '.$lname ?>'
//            };
//            $.ajax({
//                url: "<?php //echo base_url('index.php/conleads/pick'); ?>",
//                type: 'POST',
//                data: form_data,                        
//                success: function (data) {
//                    alert(data);
//                }
//            });
//        });
        
        $('#projectpublishdate').datepicker({
            format: "yyyy-mm-dd",
            todayBtn: "linked",
            autoclose: true,
            todayHighlight: true
        });
        $('.start').datepicker({
            viewMode: 'years',
            format: "yyyy-mm-dd",
            todayBtn: "linked",
            autoclose: true,
            todayHighlight: true
        }).on('changeDate', function (e) {
            $(".end").datepicker({autoclose: true}).datepicker('setStartDate', e.date).focus();
        });
        $('.end').datepicker({
            viewMode: 'years',
            format: "yyyy-mm-dd",
            todayBtn: "linked",
            autoclose: true,
            todayHighlight: true
        });
        $('#addleaddetail').bind('click', function () {
            var countrows = $('#countrows').val();
            var idcompany = $('#rowleaddetail' + countrows + ' #idcompany' + countrows).val();
            var idbranch = $('#rowleaddetail' + countrows + ' #idbranch' + countrows).val();
            var idcustomer = $('#rowleaddetail' + countrows + ' #idcustomer' + countrows).val();
            if (idcompany === "" || idbranch === "" || idcustomer === "") {
                alert("Company, Branch, and Customer can not be empty");
            } else {
                if (countrows < 10) {
                    var nilai = parseInt(countrows) + 1;
                    $('#countrows').val(nilai);
                    $('#rowleaddetail' + nilai).slideDown();
                } else {
                    alert("Max Leads Details is 10 records");
                }
            }
        });
    });
</script>