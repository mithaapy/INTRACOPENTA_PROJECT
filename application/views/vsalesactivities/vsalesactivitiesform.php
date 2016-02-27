<?php $dataprivileges = $this->privileges->main($this->session->userdata['users_idrole']); ?>
<?php $data = $data_salesactivities[0]; ?>
<br/>
<form enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() . 'index.php/consalesactivities/' . $function; ?>" method="POST" >
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>ID Sales Activity</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="id" name="id" placeholder="ID Sales Activity" value="<?php echo $data->salesactivities_id; ?>" readonly>
        </div>
    </div>	
	<div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Visit Schedule </label></div>
        <div class="col-sm-10">
            <select class="form-control" id="idvisitschedule" name="idvisitschedule" >
                <option value="<?php echo $data->salesactivities_idvisitschedule ?>" selected><?php echo $data->visitschedules_id?></option>
                <?php foreach ($data_visitschedules as $row): ?>
                    <option value="<?php echo $row->visitschedules_id; ?>"><?php echo $row->visitschedules_id; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
	<div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Lead ID</label></div>
        <div class="col-sm-10">
            <select class="form-control" id="idlead" name="idlead" >
                <option value="<?php echo $data->salestargets_idlead ?>" selected><?php echo $data->leads_id . ' - ' . $data->leads_projectname?></option>
                <?php foreach ($data_leads as $row): ?>
                    <option value="<?php echo $row->leads_id; ?>"><?php echo $row->leads_id . ' - ' . $row->leads_projectname; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
	<div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Suspect ID</label></div>
        <div class="col-sm-10">
            <select class="form-control" id="idsuspect" name="idsuspect" >
                <option value="<?php echo $data->salesactivities_idsuspect ?>" selected><?php echo $data->suspects_id?></option>
                <?php foreach ($data_suspects as $row): ?>
                    <option value="<?php echo $row->suspects_id; ?>"><?php echo $row->suspects_id; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
	<div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Prospect ID</label></div>
        <div class="col-sm-10">
            <select class="form-control" id="idprospect" name="idprospect" >
                <option value="<?php echo $data->salesactivities_idprospect ?>" selected><?php echo $data->prospects_id?></option>
                <?php foreach ($data_prospects as $row): ?>
                    <option value="<?php echo $row->prospects_id; ?>"><?php echo $row->prospects_id; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
	<div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Salesman</label></div>
        <div class="col-sm-10">
            <select class="form-control" id="iduser" name="iduser" >
                <option value="<?php echo $data->salestargets_iduser ?>" selected><?php echo $data->users_nik . ' - ' . $data->users_firstname . ' ' . $data->users_lastname ?></option>
                <?php foreach ($data_users as $row): ?>
                    <option value="<?php echo $row->users_id; ?>"><?php echo $row->users_nik . ' - ' . $row->users_firstname . ' ' . $row->users_lastname; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
	<div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Customer</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="idcustomer" name="idcustomer" placeholder="Customer" value="<?php echo $data->salesactivities_idcustomer ?>" required="true">
        </div>
    </div>
	<div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Date Time Start / End</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control start" id="datetimestart" name="datetimestart" placeholder="Please click to choose the start date" value="<?php echo $data->salesactivities_datetimestart; ?>">
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control end" id="datetimeend" name="datetimeend" placeholder="Please click to choose the end date" value="<?php echo $data->salesactivities_datetimeend; ?>">
        </div>
    </div>
	
	<div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Visit Purpose</label></div>
        <div class="col-sm-10">
            <select class="form-control" id="idvisitpurpose" name="idvisitpurpose" >
                <option value="<?php echo $data->salesactivities_idvisitpurpose ?>" selected><?php echo $data->visitpurposes_id . ' - ' .$data->visitpurposes_name?></option>
                <?php foreach ($data_visitpurposes as $row): ?>
                    <option value="<?php echo $row->visitpurposes_id; ?>"><?php echo $row->visitpurposes_id .' - '. $row->visitpurposes_name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
	<div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Visit Result</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="visitresult" name="visitresult" placeholder="Visit Result" value="<?php echo $data->salesactivities_visitresult ?>" required="true">
        </div>
    </div>
	<div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Next Action</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nextaction" name="nextaction" placeholder="Next Action" value="<?php echo $data->salesactivities_nextaction ?>" required="true">
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
<script type="text/javascript">
    // When the document is ready
    $(document).ready(function () {
        $('.start').datepicker({
            startDate: '0days',
            format: "yyyy-mm-dd",
            todayBtn: "linked",
            autoclose: true,
            todayHighlight: true
        }).on('changeDate', function (e) {
            $(".end").datepicker({autoclose: true}).datepicker('setStartDate', e.date).focus();
        });
        $('.end').datepicker({
            format: "yyyy-mm-dd",
            todayBtn: "linked",
            autoclose: true,
            todayHighlight: true
        });
    });
</script>