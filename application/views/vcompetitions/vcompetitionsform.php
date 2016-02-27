<?php $data = $data_competitions[0]; ?>
<br/>
<form enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() . 'index.php/concompetitions/' . $function; ?>" method="POST" >
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>ID Competition</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="id" name="id" placeholder="ID Competition" value="<?php echo $data->competitions_id; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>ID Prospect</label></div>
        <div class="col-sm-10">
            <select class="form-control" id="idprospect" name="idprospect" >
                <option value="<?php echo $data->competitions_idprospect ?>" selected><?php echo $data->prospects_id ?></option>
                <?php foreach ($data_prospects as $row): ?>
                    <option value="<?php echo $row->prospects_id; ?>"><?php echo $row->prospects_id; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
	
   <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Competee 1</label></div>
        <div class="col-sm-10">
            <select class="form-control" id="competee1" name="competee1" >
                <option value="<?php echo $data->competitions_competee1 ?>" selected><?php echo $data->competitors1_id ?></option>
                <?php foreach ($data_competitors as $row): ?>
                    <option value="<?php echo $row->id; ?>"><?php echo $row->name.' - '.$row->strength; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
	<div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Competee 2</label></div>
        <div class="col-sm-10">
            <select class="form-control" id="competee2" name="competee2" >
                <option value="<?php echo $data->competitions_competee2 ?>" selected><?php echo $data->competitors2_id ?></option>
                <?php foreach ($data_competitors as $row): ?>
                    <option value="<?php echo $row->id; ?>"><?php echo $row->name.' - '.$row->strength; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
	<div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Competee 3</label></div>
        <div class="col-sm-10">
            <select class="form-control" id="competee3" name="competee3" >
                <option value="<?php echo $data->competitions_competee3 ?>" selected><?php echo $data->competitors3_id ?></option>
                <?php foreach ($data_competitors as $row): ?>
                     <option value="<?php echo $row->id; ?>"><?php echo $row->name.' - '.$row->strength; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
	<div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Competee 4</label></div>
        <div class="col-sm-10">
            <select class="form-control" id="competee4" name="competee4" >
                <option value="<?php echo $data->competitions_competee4 ?>" selected><?php echo $data->competitors4_id ?></option>
                <?php foreach ($data_competitors as $row): ?>
                     <option value="<?php echo $row->id; ?>"><?php echo $row->name.' - '.$row->strength; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
	<div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Probability</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="probability" name="probability" placeholder="Probability" value="<?php echo $data->competitions_probability; ?>" >
        </div>
    </div>
	<div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Competee Win</label></div>
        <div class="col-sm-10">
           <select class="form-control" id="competeewin" name="competeewin" >
                <option value="<?php echo $data->competitions_competeewin ?>" selected><?php echo $data->competitorswin_id ?></option>
                <?php foreach ($data_competitors as $row): ?>
                     <option value="<?php echo $row->id; ?>"><?php echo $row->name.' - '.$row->strength; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
	<div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Loss Notes</label></div>
        <div class="col-sm-10">
            <textarea id="lossnotes" name="lossnotes" rows="5" class="form-control" placeholder="Loss Notes" ><?php echo $data->competitions_lossnotes ?></textarea>
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