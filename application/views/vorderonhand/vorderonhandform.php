<?php $dataprivileges = $this->privileges->main($this->session->userdata['users_idrole']); ?>
<?php $data = $data_prospectalls[0]; ?>
<br/>
<form enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() . 'index.php/conorderonhand/' . $function; ?>" method="POST" >
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>ID</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="id" name="id" placeholder="ID Order On Hand" value="<?php echo $data->prospectalls_id; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Prospect ID / Stage</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="idprospect" name="idprospect" placeholder="Prospect ID" value="<?php echo $data->prospectalls_idprospect ?>" required="true" readonly>
        </div>
		 <div class="col-sm-5">
            <input type="text" class="form-control" id="idstage" name="idstage" placeholder="Stage ID" value="<?php echo $data->stages_code . ' - ' . $data->stages_name ?>" required="true" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Salesman</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="iduser" name="iduser" placeholder="Salesman" value="<?php echo $data->users_nik.' - '.$data->users_firstname.' '.$data->users_lastname?>" required="true" readonly>
        </div>
    </div>
	 <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Customer PO No</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="customerpono" name="customerpono" placeholder="Customer PO No" value="<?php echo $data->prospectalls_customerpono ?>" required="true" readonly>
        </div>
    </div>
	<div class="form-group col-sm-12">
        <div class="col-sm-2"><label>PO Date</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="podate" name="podate" placeholder="PO Date" value="<?php echo $data->prospectalls_podate ?>" required="true" readonly>
        </div>
    </div>
	<hr/>
	<h3 class='ekunfontslide'>
        DP &nbsp;&nbsp;
    </h3>
    <br/>
	<div class="form-group col-sm-12">
        <div class="col-sm-2"><label>DP Date / Value</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="dpdate" name="dpdate" placeholder="Please click to choose DP Date" value="<?php echo $data->prospectalls_dpdate ?>">
        </div>
		<div class="col-sm-5">
            <input type="text" class="form-control" id="dpvalue" name="dpvalue" placeholder="DP Value" value="<?php echo $data->prospectalls_dpvalue ?>">
        </div>
    </div>
	 <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Bank Cash / Name</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="bankcash" name="bankcash" placeholder="Bank Cash" value="<?php echo $data->prospectalls_bankcash ?>"s>
        </div>
		<div class="col-sm-5">
            <input type="text" class="form-control" id="bankname" name="bankname" placeholder="Bank Name" value="<?php echo $data->prospectalls_bankname ?>">
        </div>
    </div>
	<hr/>
	<h3 class='ekunfontslide'>
        Lease &nbsp;&nbsp;
    </h3>
    <br/>
	<div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Lease Name / No</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="leasename" name="leasename" placeholder="Lease Name" value="<?php echo $data->prospectalls_leasename ?>">
        </div>
		<div class="col-sm-5">
            <input type="text" class="form-control" id="leasepono" name="leasepono" placeholder="Lease PO No" value="<?php echo $data->prospectalls_leasepono ?>">
        </div>
    </div>
	<div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Lease Value</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="leasevalue" name="leasevalue" placeholder="Lease Value" value="<?php echo $data->prospectalls_leasevalue ?>">
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
        $('#podate').datepicker({
            startDate: '0days',
            format: "yyyy-mm-dd",
            todayBtn: "linked",
            autoclose: true,
            todayHighlight: true
        });
		$('#dpdate').datepicker({
			startDate: '0days',
            format: "yyyy-mm-dd",
            todayBtn: "linked",
            autoclose: true,
            todayHighlight: true
        });
    });
</script>