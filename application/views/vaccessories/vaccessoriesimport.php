<?php $dataprivileges = $this->privileges->main($this->session->userdata['users_idrole']); ?>
<br/>
<form enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() . 'index.php/conaccessories/' . $function; ?>" method="POST" >
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Import File</label></div>
        <div class="col-sm-10">
            <input type="file" class="form-control-custom" id="importfile"  name="importfile">
        </div>
    </div>
    <hr/>
    <div class="col-md-8"></div>
    <div class="col-md-2">
        <button style="width:100%" type="button" id="cancel" name="cancel" class="btn btn-default" onclick="back()"><i class="fa fa-arrow-circle-left"></i> Cancel</button>
    </div>
    <div class="col-md-2">
        <button style="width:100%" type="submit" id="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-check"></i> Submit</button>
    </div>
</form>