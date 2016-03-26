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
                                <th style="text-align: center; vertical-align: middle; width: 40px;">No</th>
                                <th style="text-align: center; vertical-align: middle;">Lead ID / Lead Detail ID</th>
                                <th style="text-align: center; vertical-align: middle;">Suspect ID / Suspect Detail ID</th>
                                <th style="text-align: center; vertical-align: middle;">Prospect ID</th>
                                <th style="text-align: center; vertical-align: middle;">Project Name</th>
                                <th style="text-align: center; vertical-align: middle;">Quotation No</th>
                                <th style="text-align: center; vertical-align: middle;">Company</th>
                                <th style="text-align: center; vertical-align: middle;">Branch</th>
                                <th style="text-align: center; vertical-align: middle;">Customer</th>
                                <th style="text-align: center; vertical-align: middle;">Salesman</th>
                                <th style="text-align: center; vertical-align: middle; width: 120px;"></a>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($quotations as $row): ?>
                                <tr>
                                    <td style="text-align: center; vertical-align: middle;"><?php echo $no = $no + 1 ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->suspects_idlead . ' / ' . $row->suspects_idleaddetail ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->prospects_idsuspect . ' / ' . $row->prospects_idsuspectdetail ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->quotations_idprospect ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->leads_projectname ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->prospects_quotationno ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->companies_code . ' - ' . $row->companies_name ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->branches_code . ' - ' . $row->branches_name ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->customers_name ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->users_nik . ' - ' . $row->users_firstname . ' ' . $row->users_lastname ?></td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        <a class='btn btn-warning btn-sm' href='<?php echo base_url() ?>index.php/conquotations/exportpdf/<?php echo $row->prospects_id ?>' title="Download"><i class='fa fa-print'></i></a>
                                        <a class='btn btn-default btn-sm' href='javascript:;' onclick="edit_form('edit', '<?php echo $row->quotations_id ?>')" title="Edit"><i class='fa fa-edit'></i></a>
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
    function edit_form(type, id) {
        $('.alert-notif').slideUp();
        $.ajax({
            url: '<?php echo base_url() ?>index.php/conquotations/get_form',
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