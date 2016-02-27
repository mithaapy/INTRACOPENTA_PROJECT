<?php $dataprivileges = $this->privileges->main($this->session->userdata['users_idrole']); ?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="label-default alert-notif"><?php echo $this->session->flashdata('err_msg'); ?></div>
                <div class='table-responsive' id='divgridview'>
                    <hr/>
                    <table class='table table-bordered table-striped table-condensed datatables'>
                        <thead>
                            <tr>
                                <th style="text-align: center; vertical-align: middle; width: 20px;">Prospect ID</th>
                                <th style="text-align: center; vertical-align: middle;">Company</th>
                                <th style="text-align: center; vertical-align: middle;">Branch</th>
                                <th style="text-align: center; vertical-align: middle;">Salesman</th>
                                <th style="text-align: center; vertical-align: middle;">Stage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($prospects as $row): ?>
                                <tr>
                                    <td style="text-align: center; vertical-align: middle;"><?php echo $row->prospects_id  ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->companies_code.' - '.$row->companies_name ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->branches_code.' - '.$row->branches_name ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->users2_nik.' - '.$row->users2_firstname . ' ' . $row->users2_lastname ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->stages_code.' - '.$row->stages_name?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div id='divform' style='display:none;'></div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function action_form(type, id) {
        $('.alert-notif').slideUp();
        $.ajax({
            url: '<?php echo base_url() ?>index.php/conloss',
            type: 'POST',
            data: {tipe: type, id: id},
            dataType: 'html',
            beforeSend: function () {
                $('#divgridview').slideUp();
                $('#divform').html('<h3 class="text-center text-info"><i class="fa fa-cog fa-spin fa-3x"></i></h3><p class="text-center text-muted">Please Wait ...</p>').fadeIn();
            },
            success: function (data) {
                $('#divform').hide().html(data).fadeIn('slow');
            }
        });
    }

    function back() {
        $('.alert-notif').slideUp();
        $('#divform').slideUp('slow');
        $('#divgridview').slideDown('slow');
        $('#divform').empty();
    }
</script>