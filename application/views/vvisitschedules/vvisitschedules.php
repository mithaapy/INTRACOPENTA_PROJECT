<?php $dataprivileges = $this->privileges->main($this->session->userdata['users_idrole']); ?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="label-default alert-notif"><?php echo $this->session->flashdata('err_msg'); ?></div>
                <div class='table-responsive' id='divgridview'>
                    <button class='btn btn-primary' onclick="action_form('insert', '')"><i class='fa fa-pencil'></i> Add</button>
                    <hr/>
                    <table class='table table-bordered table-striped table-condensed datatables'>
                        <thead>
                            <tr>
                                <th style="text-align: center; vertical-align: middle; width: 40px;">No</th>
                                <th style="text-align: center; vertical-align: middle;">Salesman</th>
                                <th style="text-align: center; vertical-align: middle;">Customer</th>
                                <th style="text-align: center; vertical-align: middle;">Stage</th>
                                <th style="text-align: center; vertical-align: middle;">Purpose</th>
                                <th style="text-align: center; vertical-align: middle;">Datetime Start</th>
                                <th style="text-align: center; vertical-align: middle;">Datetime End</th>
                                <th style="text-align: center; vertical-align: middle; width: 120px;"></a>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($visitschedules as $row): ?>
                                <tr>
                                    <td style="text-align: center; vertical-align: middle;"><?php echo $no = $no + 1 ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->users_nik.' - '.$row->users_firstname .' '. $row->users_lastname ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->customers_name ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->stages_code.' - '.$row->stages_name ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->visitpurposes_name ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->visitschedules_datetimestart?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->visitschedules_datetimeend ?></td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        <a class='btn btn-default btn-sm' href='javascript:;' onclick="action_form('edit', '<?php echo $row->visitschedules_id ?>')" title="Edit"><i class='fa fa-edit'></i></a>
                                        <a class='btn btn-warning btn-sm' href='<?php echo base_url() ?>index.php/convisitschedules/delete/<?php echo $row->visitschedules_id ?>' title="Delete" onclick="return confirm('Are you sure want to delete this data?')"><i class='fa fa-trash-o'></i></a>
                                    </td>
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
            url: '<?php echo base_url() ?>index.php/convisitschedules/get_form',
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
