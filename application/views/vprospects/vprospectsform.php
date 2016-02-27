<?php $dataprivileges = $this->privileges->main($this->session->userdata['users_idrole']); ?>
<?php $data = $data_prospects[0]; ?>
<br/>
<form enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() . 'index.php/conprospects/' . $function; ?>" method="POST" >
  
    <hr/>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>ID Prospect</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="id" name="id" placeholder="ID Prospect" value="<?php echo $data->prospects_id; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>ID Lead / Lead Detail</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="idlead" name="idlead" placeholder="ID Lead" value="<?php echo $data->leads_id; ?>" readonly>
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="idleaddetail" name="idleaddetail" placeholder="ID Lead Detail" value="<?php echo $data->leaddetails_id; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>ID Suspect / Suspect Detail</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="idsuspect" name="idsuspect" placeholder="ID Suspect" value="<?php echo $data->prospects_idsuspect; ?>" readonly>
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="idsuspectdetail" name="idsuspectdetail" placeholder="ID Suspect Detail" value="<?php echo $data->prospects_idsuspectdetail; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Project Name</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="projectno" name="projectno" placeholder="Project Name" value="<?php echo $data->leads_projectname; ?>" readonly>
        </div>
    </div>

    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Quotation No</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="quotationno" name="quotationno" placeholder="Quotation Number" value="<?php echo $data->prospects_quotationno; ?>">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Created Date / By</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control start" id="createddate" name="createddate" placeholder="Created Date" value="<?php echo $data->prospects_createddate; ?>" readonly>
        </div>
        <div class="col-sm-5">
            <input type="hidden" class="form-control" id="iduser" name="iduser" value="<?php echo $data->prospects_iduser; ?>">
            <input type="text" class="form-control" id="iduser2" name="iduser2" placeholder="Created By" value="<?php echo $data->users2_nik . ' - ' . $data->users2_firstname . ' ' . $data->users2_lastname; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Description</label></div>
        <div class="col-sm-10">
            <textarea id="description" name="description" rows="5" class="form-control" placeholder="Description"disabled ><?php echo $data->leads_projectdescription ?></textarea>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Start Date / Expired Date</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="startdate" name="startdate" placeholder="Please click to choose start date" value="<?php echo $data->prospects_startdate ?>">
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="expireddate" name="expireddate" placeholder="Please click to choose expired date" value="<?php echo $data->prospects_expireddate ?>">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Currency</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="currency" name="currency" placeholder="Currency" value="<?php echo $data->prospects_currency; ?>">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Stage / Status</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="idstage" name="idstage" placeholder="Stage" value="<?php echo $data->stages_code . ' - ' . $data->stages_name; ?>"readonly>
        </div>
        <div class="col-sm-5">
            <select class="form-control" id="idstatus" name="idstatus" required="true">
                <option value="<?php echo $data->prospects_idstatus ?>" selected><?php echo $data->statuses_code . ' - ' . $data->statuses_name ?></option>
                <option value="15">NRE - Negotiation/Review</option>
                <option value="16">PPQ - Proposal/Price Quote</option>
                <option value="17">VPR - Value Proposition</option>
                <option value="18">NAP - Need Analysis</option>
            </select>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Approved Date start/ By</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="approveddate" name="approveddate" placeholder="Approved Date" value="<?php echo $data->prospects_approveddate; ?>" readonly>
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="approvedby" name="approvedby" placeholder="Approved By" value="<?php echo $data->users3_nik . ' - ' . $data->users3_firstname . ' ' . $data->users3_lastname; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>ID Product / Name</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="idproduct" name="idproduct" placeholder="ID Product" value="<?php echo $data->prospects_idproduct; ?>" readonly>
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="productname" name="productname" placeholder="Product Name" value="<?php echo $data->products_name; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Quantity / UOM</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity" value="<?php echo $data->prospects_quantity; ?>" readonly>
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="uom" name="uom" placeholder="UOM" value="<?php echo $data->products_uom; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Unit Value</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="unitvalue" name="unitvalue" placeholder="Unit Value" value="<?php echo $data->prospects_unitvalue; ?>" required="true">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Transaction Model</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="transactionmodel" name="transactionmodel" placeholder="Transaction Model" value="<?php echo $data->prospects_transactionmodel; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Decision / Expected Delivery Date</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="decisiondate" name="decisiondate" placeholder="Please click to choose decision date" value="<?php echo $data->prospects_decisiondate; ?>" required="true">
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="expecteddeliverydate" name="expecteddeliverydate" placeholder="Please click to choose expected delivery date" value="<?php echo $data->prospects_expecteddeliverydate; ?>" required="true">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Customer Type</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="customertype" name="customertype" placeholder="Customer Type" value="<?php echo $data->prospects_customertype; ?>" required="true">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Level 2</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="level2" name="level2" placeholder="Level 2" value="<?php echo $data->prospects_level2; ?>" required="true">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Webpid</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="webpid" name="webpid" placeholder="Webpid" value="<?php echo $data->prospects_webpid; ?>" required="true">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Segment / Odds</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="idsegment" name="idsegment" placeholder="Segment" value="<?php echo $data->segments_segment; ?>" readonly>
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="odds" name="odds" placeholder="Odds" value="<?php echo $data->suspectdetails_odds; ?>%" readonly>
        </div>
    </div>
	 
    <hr/><br/>
	
	<h3 class='ekunfontslide'>
        Order On Hand &nbsp;&nbsp;
    </h3>
    <br/>
	<div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Customer PO No</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="customerpono" name="customerpono" placeholder="Customer PO No" value="<?php echo $data->prospectalls_customerpono ?>">
        </div>
    </div>
	<div class="form-group col-sm-12">
        <div class="col-sm-2"><label>PO Date</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="podate" name="podate" placeholder="PO Date" value="<?php echo $data->prospectalls_podate ?>">
        </div>
    </div>
	<hr/>
	
	<h3 class='ekunfontslide'>
        Loss &nbsp;&nbsp;
    </h3>
    <br/>
	<div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Loss Notes</label></div>
        <div class="col-sm-10">
            <textarea id="lossnotes" name="lossnotes" rows="5" class="form-control" placeholder="Loss Notes" ><?php echo $data->competitions_lossnotes ?></textarea>
        </div>
    </div>
	
    <div class="col-md-6"></div>
    <div class="col-md-2">
        <button style="width:100%" type="button" id="cancel" name="cancel" class="btn btn-default" onclick="back()"><i class="fa fa-arrow-circle-left"></i> Cancel</button>
    </div>
    <div class="col-md-2">
        <button style="width:100%; <?php echo $styleresetpa ?>;" type="reset" id="reset" name="reset" class="btn btn-default"><i class="fa fa-refresh"></i> Clear</button>
    </div>
    <div class="col-md-2">
        <button style="width:100%; <?php echo $stylesubmitpa ?>;" type="submit" id="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-check"></i> Submit</button>
    </div>
</form>
<script type="text/javascript">
    // When the document is ready
    $(document).ready(function () {
		$('#decisiondate').datepicker({
			startDate: '0days',
            format: "yyyy-mm-dd",
            todayBtn: "linked",
            autoclose: true,
            todayHighlight: true
        }).on('changeDate', function (e) {
            $("#expecteddeliverydate").datepicker({autoclose: true}).datepicker('setStartDate', e.date).focus();
        });
        $('#expecteddeliverydate').datepicker({
            format: "yyyy-mm-dd",
            todayBtn: "linked",
            autoclose: true,
            todayHighlight: true
        });
        $('#startdate').datepicker({
            startDate: '0days',
            format: "yyyy-mm-dd",
            todayBtn: "linked",
            autoclose: true,
            todayHighlight: true
        }).on('changeDate', function (e) {
            $("#expireddate").datepicker({autoclose: true}).datepicker('setStartDate', e.date).focus();
        });
        $('#expireddate').datepicker({
            format: "yyyy-mm-dd",
            todayBtn: "linked",
            autoclose: true,
            todayHighlight: true
        });
		 $('#podate').datepicker({
            startDate: '0days',
            format: "yyyy-mm-dd",
            todayBtn: "linked",
            autoclose: true,
            todayHighlight: true
        });
});
</script>