<?php $dataprivileges = $this->privileges->main($this->session->userdata['users_idrole']); ?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="label-default alert-notif"><?php echo $this->session->flashdata('err_msg'); ?></div>
                <div class='table-responsive' id='divgridview'>
                    <button class='btn btn-default' onclick="action_form('histories', '')"><i class='fa fa-history'></i> Histories</button>
                    <hr/>
                    <table class='table table-bordered table-striped table-condensed datatables'>
                        <thead>
                            <tr>
                                <th style="text-align: center; vertical-align: middle; width: 40px;">Suspect ID</th>
                                <th style="text-align: center; vertical-align: middle;">Lead ID / Lead Detail ID</th>
                                <th style="text-align: center; vertical-align: middle;">Project Name</th>
                                <th style="text-align: center; vertical-align: middle;">Company</th>
                                <th style="text-align: center; vertical-align: middle;">Branch</th>
                                <th style="text-align: center; vertical-align: middle;">Salesman</th>
                                <th style="text-align: center; vertical-align: middle;">Customer</th>
                                <th style="text-align: center; vertical-align: middle;">Stage</th>
                                <th style="text-align: center; vertical-align: middle; width: 120px;"></a>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($suspects as $row): ?>
                                <tr>
                                    <td style="text-align: center; vertical-align: middle;"><?php echo $row->suspects_id ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->suspects_idlead .' / '. $row->suspects_idleaddetail ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->leads_projectname ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->companies_code.' - '.$row->companies_name ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->branches_code.' - '.$row->branches_name ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->users2_nik.' - '.$row->users2_firstname . ' ' . $row->users_lastname ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->customers_name?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->stages_code.' - '.$row->stages_name ?></td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        <a class='btn btn-primary btn-sm' href='javascript:;' onclick="action_form('detail', '<?php echo $row->suspects_id ?>')" title="Detail"><i class='fa fa-search'></i></a>
                                        <a class='btn btn-default btn-sm' href='javascript:;' onclick="action_form('edit', '<?php echo $row->suspects_id ?>')" title="Edit"><i class='fa fa-edit'></i></a>
                                        <?php if ($row->suspects_idstage <= '2'): ?>
                                        <a class='btn btn-warning btn-sm' href='<?php echo base_url() ?>index.php/consuspects/delete/<?php echo $row->suspects_id ?>' title="Delete" onclick="return confirm('Are you sure want to delete this data?')"><i class='fa fa-trash-o'></i></a>
                                        <?php endif; ?>
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
            url: '<?php echo base_url() ?>index.php/consuspects/get_form',
            type: 'POST',
            data: {tipe: type, id: id},
            dataType: 'html',
            beforeSend: function () {
                $('#divgridview').slideUp();
                $('#divform').html('<h3 class="text-center text-info"><i class="fa fa-cog fa-spin fa-3x"></i></h3><p class="text-center text-muted">Please Wait ...</p>').fadeIn();
            },
            success: function (data) {
                $('#divform').hide().html(data).fadeIn('slow');
                $('.datatablesdetails').DataTable();
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