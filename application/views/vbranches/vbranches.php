<?php $dataprivileges = $this->privileges->main($this->session->userdata['users_idrole']); ?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="label-default alert-notif"><?php echo $this->session->flashdata('err_msg'); ?></div>
                <div class='table-responsive' id='divgridview'>
                    <button class='btn btn-primary' onclick="action_form('insert', '')"><i class='fa fa-pencil'></i> Add</button>&nbsp;&nbsp;
                    <button class='btn btn-default' onclick="action_form('import', '')"><i class='fa fa-file'></i> Import From Excel File</button>&nbsp;&nbsp;
                    <a class='btn btn-default' href='<?php echo base_url() ?>assets/files/export/default/template_branches.xls'><i class='fa fa-download'></i> Download Template</a>
                    <hr/>
                    <table class='table table-bordered table-striped table-condensed datatables'>
                        <thead>
                            <tr>
                                <th style="text-align: center; vertical-align: middle; width: 40px;">No</th>
                                <th style="text-align: center; vertical-align: middle;">Branches Name</th>
                                <th style="text-align: center; vertical-align: middle;">Address</th>
                                <th style="text-align: center; vertical-align: middle;">City / Country</th>
                                <th style="text-align: center; vertical-align: middle;">Phone / Fax / Email</th>
                                <th style="text-align: center; vertical-align: middle;">Company</th>
                                <th style="text-align: center; vertical-align: middle; width: 90px"></a>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($branches as $row): ?>
                                <tr>
                                    <td style="text-align: center; vertical-align: middle;"><?php echo $no = $no + 1 ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->branches_name ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->branches_address ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->cities_code.' - '.$row->cities_name .' / '. $row->countries_code.' - '.$row->countries_name ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->branches_phone .' / '. $row->branches_fax .' / '. $row->branches_email ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->companies_code.' - '.$row->companies_name ?></td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        <a class='btn btn-default btn-sm' href='javascript:;' onclick="action_form('edit', '<?php echo $row->branches_id ?>')" title="Edit"><i class='fa fa-edit'></i></a>
                                        <a class='btn btn-warning btn-sm' href='<?php echo base_url() ?>index.php/conbranches/delete/<?php echo $row->branches_id ?>' title="Delete" onclick="return confirm('Are you sure want to delete this data?')"><i class='fa fa-trash-o'></i></a>
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
            url: '<?php echo base_url() ?>index.php/conbranches/get_form',
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