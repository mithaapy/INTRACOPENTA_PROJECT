<?php $dataprivileges = $this->privileges->main($this->session->userdata['users_idrole']); ?>
<?php $data = $data_suspects[0]; ?>
<br/>
<form enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() . 'index.php/consuspects/' . $function; ?>" method="POST" >
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>ID Suspect</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="id" name="id" value="<?php echo $data->suspects_id; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Lead/Lead Detail</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="idlead" name="idlead" value="<?php echo $data->suspects_idlead; ?>" readonly>
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="idleaddetail" name="idleaddetail" value="<?php echo $data->suspects_idleaddetail; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Company / Branch</label></div>
        <div class="col-sm-5">
            <input type="hidden" class="form-control" id="idcompany" name="idcompany" value="<?php echo $data->suspects_idcompany; ?>">
            <input type="text" class="form-control" id="idcompany2" name="idcompany2" value="<?php echo $data->companies_code . ' - ' . $data->companies_name; ?>" readonly>
        </div>
        <div class="col-sm-5">
            <input type="hidden" class="form-control" id="idbranch" name="idbranch" value="<?php echo $data->suspects_idbranch; ?>">
            <input type="text" class="form-control" id="idbranch2" name="idbranch2" value="<?php echo $data->branches_code . ' - ' . $data->branches_name; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Salesman</label></div>
        <div class="col-sm-10">
            <input type="hidden" class="form-control" id="iduser" name="iduser" value="<?php echo $data->suspects_iduser; ?>">
            <input type="text" class="form-control" id="iduser2" name="iduser2" value="<?php echo $data->users2_nik . ' - ' . $data->users2_firstname . ' ' . $data->users2_lastname; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Description</label></div>
        <div class="col-sm-10">
            <textarea id="description" name="description" rows="5" class="form-control" placeholder="Description" disabled ><?php echo $data->leads_projectdescription; ?></textarea>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Stage</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="idstage" name="idstage" value="<?php echo $data->stages_code . ' - ' . $data->stages_name; ?>" readonly>
            <input type="hidden" class="form-control" id="idstagehide" name="idstagehide" value="<?php echo $data->suspects_idstage; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Customer Planned</label></div>
        <div class="col-sm-10">
            <textarea id="customerplanned" name="customerplanned" class="form-control" placeholder="Customer Planned" ><?php echo $data->suspects_customerplanned; ?></textarea>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Customer</label></div>
        <div class="col-sm-10">
            <input type="hidden" class="form-control" id="idcustomer" name="idcustomer" value="<?php echo $data->suspects_idcustomer; ?>">
            <input type="text" class="form-control" id="idcustomer2" name="idcustomer2" value="<?php echo $data->customers_name; ?>" readonly>
        </div>
    </div>
    <hr/>
    <br/>
    <?php if ($function == 'detail'): $styleaddsd = 'display:none;';
    endif; ?>
    <h3 class='ekunfontslide'>
        Suspect Details &nbsp;&nbsp;
        <button style="<?php echo $styleaddsd ?>" type="button" id="addsuspectdetail" name="addsuspectdetail" class="btn btn-default"><i class="fa fa-list"></i> Add Details</button>
    </h3>
    <br/>
    <?php
    $valrows = 1;
    if ($function == "edit"):
        $valrows = count($data_suspectdetails);
    endif;
    ?>
    <div class='table-responsive'>
        <input type="hidden" id="countrows" name="countrows" value="<?php echo $valrows ?>">
        <table class='table table-bordered table-striped table-condensed datatablesdetails'>
            <?php if ($function == 'detail'): $styleactionsd = 'display:none;'; endif; ?>
            <thead>
                <tr>
                    <th style="text-align: center; vertical-align: middle;">Product</th>
                    <th style="text-align: center; vertical-align: middle;">Quantity</th>
                    <th style="text-align: center; vertical-align: middle;">UOM</th>
                    <th style="text-align: center; vertical-align: middle;">Transaction Model</th>
                    <th style="text-align: center; vertical-align: middle;">Odds</th>
                    <th style="text-align: center; vertical-align: middle;">Status</th>
                    <th style="text-align: center; vertical-align: middle;">Segment</th>
                    <th style="text-align: center; vertical-align: middle; <?php echo $styleactionsd ?>;"></a>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 1; $i <= 10; $i++):
                    if ($function == 'edit'):
                        if (count($data_suspectdetails) >= $i):
                            $stylerows = '';
                        else :
                            $stylerows = 'display:none;';
                        endif;
                    elseif ($function == 'detail'):
                        $styleresetsd = 'display:none;';
                        $stylesubmitsd = 'display:none;';
                        if (count($data_suspectdetails) >= $i):
                            $stylerows = '';
                        else :
                            $stylerows = 'display:none;';
                        endif;
                    endif;
                    ?>
                    <tr id="rowsuspectdetail<?php echo $i ?>" style="<?php echo $stylerows ?>">
                        <td style="text-align: left; vertical-align: middle;">
                            <input type="hidden" id="id<?php echo $i ?>" name="id<?php echo $i ?>" value="<?php echo $data_suspectdetails[$i - 1]->suspectdetails_id ?>">
                            <select class="form-control" id="idproduct<?php echo $i ?>" name="idproduct<?php echo $i ?>">
                                <option value="<?php echo $data_suspectdetails[$i - 1]->suspectdetails_idproduct ?>" selected><?php echo $data_suspectdetails[$i - 1]->products_name ?></option>
                                <?php foreach ($data_products as $row): ?>
                                    <option value="<?php echo $row->products_id; ?>"><?php echo $row->products_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                        <td style="text-align: left; vertical-align: middle;">
                            <input type="text" class="form-control" id="quantity<?php echo $i ?>" name="quantity<?php echo $i ?>" placeholder="Quantity" value="<?php echo $data_suspectdetails[$i - 1]->suspectdetails_quantity ?>" >
                        </td>
                        <td style="text-align: left; vertical-align: middle;">
                            <input type="text" class="form-control" id="uom<?php echo $i ?>" name="uom<?php echo $i ?>" placeholder="UOM" value="<?php echo $data_suspectdetails[$i - 1]->products_uom ?>" readonly>
                        </td>
                        <td style="text-align: left; vertical-align: middle;">
                            <select class="form-control" id="transactionmodel<?php echo $i ?>" name="transactionmodel<?php echo $i ?>">
                                <option value="<?php echo $data_suspectdetails[$i - 1]->suspectdetails_transactionmodel ?>" selected><?php echo $data_suspectdetails[$i - 1]->suspectdetails_transactionmodel ?></option>
                                <option value="New">New</option>
                                <option value="Used">Used</option>
                                <option value="Rental">Rental</option>
                                <option value="Training">Training</option>
                            </select>
                        </td>
                        <td style="text-align: left; vertical-align: middle;">
                            <input type="text" class="form-control" id="odds<?php echo $i ?>" name="odds<?php echo $i ?>" placeholder="Odds" value="<?php echo $data_suspectdetails[$i - 1]->suspectdetails_odds ?>%" readonly>
                        </td>
                        <td style="text-align: left; vertical-align: middle;">
                            <input type="text" class="form-control" id="idstatus<?php echo $i ?>" name="idstatus<?php echo $i ?>" value="<?php echo $data_suspectdetails[$i - 1]->statuses_code . ' - ' . $data_suspectdetails[$i - 1]->statuses_name; ?>" readonly>
                            <input type="hidden" class="form-control" id="idstatus2<?php echo $i ?>" name="idstatus2<?php echo $i ?>" value="<?php echo $data_suspectdetails[$i - 1]->suspectdetails_idstatus; ?>">
                            <input type="hidden" class="form-control" id="stagesd<?php echo $i ?>" name="stagesd<?php echo $i ?>" value="<?php echo $data_suspectdetails[$i - 1]->suspectdetails_stage; ?>">
                        </td>		
                        <td style="text-align: left; vertical-align: middle;">
                            <select class="form-control" id="idsegment<?php echo $i ?>" name="idsegment<?php echo $i ?>">
                                <option value="<?php echo $data_suspectdetails[$i - 1]->suspectdetails_idsegment ?>" selected><?php echo $data_suspectdetails[$i - 1]->segments_segment ?></option>
                                <?php foreach ($data_segments as $row): ?>
                                    <option value="<?php echo $row->id; ?>"><?php echo $row->segment; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                        <td style="text-align: left; vertical-align: middle; <?php echo $styleactionsd ?>;">
                            <select class="form-control" id="action<?php echo $i ?>" name="action<?php echo $i ?>">
                                <option value="" selected></option>
                                <?php if ($data_suspectdetails[$i - 1]->suspectdetails_id != ''): ?>
                                    <option value="6">ATC - Attempted to Contact</option>
                                    <option value="7">CIF - Contact In Future</option>
                                    <option value="8">CON - Contacted</option>
                                    <option value="9">NCO - Not Contacted</option>
                                    <option value="10">PQU - Pre Qualified</option>
                                    <option value="11">NST - Not Started</option>
                                    <option value="12">DEF - Deffered</option>
                                    <option value="13">WOS - Waiting on Someone Else</option>
                                    <option value="14">NAS - Need Analysis</option>
                                    <?php if ($data_suspectdetails[$i - 1]->suspectdetails_stage != 'prospect'): ?>
                                        <option value="createquotation">Create Quotation</option>
                                        <option value="delete">Delete</option>
                                    <?php endif; ?>
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
    <div class="col-md-2">
        <button style="width:100%; <?php echo $styleresetsd ?>;" type="reset" id="reset" name="reset" class="btn btn-default"><i class="fa fa-refresh"></i> Clear</button>
    </div>
    <div class="col-md-2">
        <button style="width:100%; <?php echo $stylesubmitsd ?>;" type="submit" id="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-check"></i> Submit</button>
    </div>
</form>
<script type="text/javascript">
    // When the document is ready
    $(document).ready(function () {

        $('#addsuspectdetail').bind('click', function () {
            var countrows = $('#countrows').val();
            var idproduct = $('#rowsuspectdetail' + countrows + ' #idproduct' + countrows).val();
            var idsegment = $('#rowsuspectdetail' + countrows + ' #idsegment' + countrows).val();
            if (idproduct === "" || idsegment === "") {
                alert("Product and Segment can not be empty");
            } else {
                if (countrows < 10) {
                    var nilai = parseInt(countrows) + 1;
                    $('#countrows').val(nilai);
                    $('#rowsuspectdetail' + nilai).slideDown();
                } else {
                    alert("Max Suspect Details is 10 records");
                }
            }
        });
    });
</script>