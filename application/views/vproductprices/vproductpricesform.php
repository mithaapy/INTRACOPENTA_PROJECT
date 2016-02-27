<?php $dataprivileges = $this->privileges->main($this->session->userdata['users_idrole']); ?>
<?php $data = $data_productprices[0]; ?>
<br/>
<form enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() . 'index.php/conproductprices/' . $function; ?>" method="POST">
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>ID Product Prices</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="id" name="id" placeholder="ID Product Prices" value="<?php echo $data->productprices_id; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Product</label></div>
        <div class="col-sm-10">
            <select class="form-control" id="idproduct" name="idproduct" required="true">
                <option value="<?php echo $data->productprices_idproduct ?>" selected><?php echo $data->products_name ?></option>
                <?php foreach ($data_products as $row): ?>
                    <option value="<?php echo $row->products_id; ?>"><?php echo $row->products_name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>List / Net Price / Currency</label></div>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="listprice" name="listprice" placeholder="Listprice" value="<?php echo $data->productprices_listprice ?>" required="true">
        </div>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="netprice" name="netprice" placeholder="Netprice" value="<?php echo $data->productprices_netprice ?>" required="true">
        </div>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="currency" name="currency" placeholder="Currrency" value="<?php echo $data->productprices_currency ?>" required="true">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Country / City</label></div>
        <div class="col-sm-5">
            <select class="form-control" id="idcountry" name="idcountry" required="true">
                <option value="<?php echo $data->productprices_idcountry ?>" selected><?php echo $data->countries_code.' - '.$data->countries_name ?></option>
                <?php foreach ($data_countries as $row): ?>
                    <option value="<?php echo $row->id; ?>"><?php echo $row->code . ' - ' . $row->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-sm-5">
            <select class="form-control" id="idcity" name="idcity" required="true">
                <option value="<?php echo $data->productprices_idcity ?>" selected><?php echo $data->cities_code.' - '.$data->cities_name ?></option>
                <?php foreach ($data_cities as $row): ?>
                    <option value="<?php echo $row->cities_id; ?>"><?php echo $row->cities_code . ' - ' . $row->cities_name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Valid Date Start / End</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control start" id="validdatestart" name="validdatestart" placeholder="Please click to choose the start date" value="<?php echo $data->productprices_validdatestart ?>" required="true" readonly>
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control end" id="validdateend" name="validdateend" placeholder="Please click to choose the end date" value="<?php echo $data->productprices_validdateend ?>" required="true" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Active</label></div>
        <div class="col-sm-10">
            <select class="form-control" id="active" name="active" required="true">
                <option value="<?php echo $data->productprices_active ?>" selected><?php echo $data->productprices_active ?></option>
                <option value="Active">Active</option>
                <option value="Nonactive">Nonactive</option>
            </select>
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

    });

</script>