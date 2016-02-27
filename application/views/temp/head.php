<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title><?php echo $this->session->userdata['companies_code'].'-Cross Selling | '. $header_title; ?></title>
<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/elogo.png" />

<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/css/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />

<style>
.editableBox {
    width: 300px;
    height: 30px;
}

.timeTextBox {
    width: 54px;
    margin-left: -78px;
    height: 25px;
    border: none;
}

.hidden {
	display:none;
}
</style>
<?php
switch ($page) {
    case 'Dashboard':
        ?>

        <?php
        break;
    case 'form_datatables':
        ?>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker.css" rel="stylesheet" type="text/css" />
        <!--<link href="<?php echo base_url(); ?>assets/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />-->
        <link href="<?php echo base_url(); ?>assets/js/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css"/>
        <?php
        break;
}
?>

<script src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>

