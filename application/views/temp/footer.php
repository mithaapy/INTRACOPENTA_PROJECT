<script src="<?php echo base_url(); ?>assets/js/bootstrap.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/AdminLTE/app.js" type="text/javascript"></script>
<?php
switch ($page) {
    case 'Dashboard':
        ?>

        <?php
        break;
    case 'form_datatables':
        ?>
        <script src="<?php echo base_url(); ?>assets/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/app/form_datatables.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js" type="text/javascript"></script>
        <!--<script src="<?php echo base_url(); ?>assets/js/bootstrap-datetimepicker.js" type="text/javascript"></script>-->
        <script src="<?php echo base_url(); ?>assets/tinymce/jscripts/tiny_mce/tiny_mce.js" type="text/javascript"></script>
        <?php
        break;
}
?>