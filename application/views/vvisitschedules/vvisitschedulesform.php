<?php $dataprivileges = $this->privileges->main($this->session->userdata['users_idrole']); ?>
<?php $data = $data_visitschedules[0]; ?>
<br/>
<form enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() . 'index.php/convisitschedules/' . $function; ?>" method="POST">
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>ID Visit Schedule</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="id" name="id" placeholder="ID Visit Schedules" value="<?php echo $data->visitschedules_id; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Salesman</label></div>
        <div class="col-sm-10">
            <select class="form-control" id="iduser" name="iduser" required="true">
                <option value="<?php echo $data->visitschedules_iduser ?>" selected><?php echo $data->users_nik.' - '.$data->users_firstname .' '. $data->users_lastname ?></option>
                <?php foreach ($data_users as $row): ?>
                    <option value="<?php echo $row->users_id; ?>"><?php echo $row->users_nik . ' - ' . $row->users_firstname.' '.$row->users_lastname; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Customer</label></div>
        <div class="col-sm-10">
            <select class="form-control" id="idcustomer" name="idcustomer" required="true">
                <option value="<?php echo $data->visitschedules_idcustomer ?>" selected><?php echo $data->customers_name ?></option>
                <?php foreach ($data_customers as $row): ?>
                    <option value="<?php echo $row->customers_id; ?>"><?php echo $row->customers_name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Visit Purpose</label></div>
        <div class="col-sm-10">
            <select class="form-control" id="idvisitpurpose" name="idvisitpurpose" required="true">
                <option value="<?php echo $data->visitschedules_idvisitpurpose ?>" selected><?php echo $data->visitpurposes_name.' - '.$data->visitpurposes_description?></option>
                <?php foreach ($data_visitpurposes as $row): ?>
                    <option value="<?php echo $row->id; ?>"><?php echo $row->name . ' - ' . $row->description; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Stage</label></div>
        <div class="col-sm-10">
            <select class="form-control" id="idstage" name="idstage" required="true">
                <option value="<?php echo $data->visitschedules_idstage ?>" selected><?php echo $data->stages_code.' - '.$data->stages_name ?></option>
                <?php foreach ($data_stages as $row): ?>
                    <option value="<?php echo $row->id; ?>"><?php echo $row->code . ' - ' . $row->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Datetime Start / End</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control start" id="datetimestart" name="datetimestart" placeholder="Please click to choose the start date" value="<?php echo $data->visitschedules_datetimestart ?>">
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control end" id="datetimeend" name="datetimeend" placeholder="Please click to choose the end date" value="<?php echo $data->visitschedules_datetimeend ?>">
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