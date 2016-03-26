<?php $dataprivileges = $this->privileges->main($this->session->userdata['users_idrole']); ?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="label-default alert-notif"><?php echo $this->session->flashdata('err_msg'); ?></div>
                <div class='table-responsive' id='divgridview'>
                    <hr/>
                    <div id='divexport' class="form-group col-md-12" style='display:none; border-color: #cccccc; border-width: thin; border-style: solid'>
                        <br/>
                        <div class="col-sm-1">
                            <button class='btn btn-circle pull-right' onclick="closeexport()"><i class='fa fa-close'></i></button>
                        </div>
                        <br/> <br/> <br/>    
                    </div>
					<table class='table table-bordered table-striped table-condensed datatables' >
                        <thead>
                            <tr>
                                <th style="text-align: center; vertical-align: middle; width: 40px;">No</th>
                                <th style="text-align: center; vertical-align: middle;">Project No</th>
                                <th style="text-align: center; vertical-align: middle;">Source</th>
                                <th style="text-align: center; vertical-align: middle;">Project Name</th>
                                <th style="text-align: center; vertical-align: middle;">Const Start/End Date</th>
                                <th style="text-align: center; vertical-align: middle;">Province/Town</th>
                                <th style="text-align: center; vertical-align: middle;">Project Stage/Status</th>
                                <th style="text-align: center; vertical-align: middle;">Project Publish Date</th>
                                <th style="text-align: center; vertical-align: middle;">Stage</th>
                                <th style="text-align: center; vertical-align: middle; width: 120px;"></a>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($leaddetails as $row): ?>
                                <tr>
                                    <td style="text-align: center; vertical-align: middle;"><?php echo $no = $no + 1 ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->leads_projectno ?></td>
<!--                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->sources_code . ' - ' . $row->sources_name ?></td>-->
                                     <?php 
                                    $this->db->select('code,name');
                                    $this->db->from('tdat_sources');
                                    $this->db->where('id',$row->leads_idsource);
                                    $qs=$this->db->get();
                                    $sourceres=$qs->result();
                                   // print_r($sourceres); die;
                                    ?>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $sourceres[0]->code . ' - ' . $sourceres[0]->name ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->leads_projectname ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->leads_constdate . ' / ' . $row->leads_constenddate ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->leads_projectprovince . ' / ' . $row->leads_projecttown ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->leads_projectstage . ' / ' . $row->leads_projectstatus ?></td>
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->leads_projectpublishdate ?></td>
<!--                                    <td style="text-align: left; vertical-align: middle;"><?php echo $row->stages_code . ' - ' . $row->stages_name ?></td>-->
                                    <?php 
                                    $this->db->select('code,name');
                                    $this->db->from('tdat_stages');
                                    $this->db->where('id',$row->leads_idstage);
                                    $qs1=$this->db->get();
                                    $sourceres1=$qs1->result();
                                   // print_r($sourceres); die;
                                    ?>
                                    
                                    <td style="text-align: left; vertical-align: middle;"><?php echo $sourceres1[0]->code . ' - ' . $sourceres1[0]->name ?></td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        <a class='btn btn-primary btn-sm' href='javascript:;' onclick="action_form('detail', '<?php echo $row->leads_id ?>')" title="Detail"><i class='fa fa-search'></i></a>
                                        <a class='btn btn-default btn-sm' href='javascript:;' onclick="action_form('edit', '<?php echo $row->leads_id ?>')" title="Edit"><i class='fa fa-edit'></i></a>
                                        <?php if ($row->leads_idstage <= '1'): ?>
                                            <a class='btn btn-warning btn-sm' href='<?php echo base_url() ?>index.php/conleads/delete/<?php echo $row->leads_id ?>' title="Delete" onclick="return confirm('Are you sure want to delete this data?')"><i class='fa fa-trash-o'></i></a>
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
        closeexport();
        $('.alert-notif').slideUp();
        $.ajax({
            url: '<?php echo base_url() ?>index.php/conleads/get_form',
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
        closeexport();
        $('.alert-notif').slideUp();
        $('#divform').slideUp('slow');
        $('#divgridview').slideDown('slow');
        $('#divform').empty();
    }

    function openexport() {
        $('.alert-notif').slideUp();
        $('#divexport').slideDown('slow');
    }

    function closeexport() {
        $('.alert-notif').slideUp();
        $('#divexport').slideUp('slow');
    }

    $(document).ready(function () {
        $('.from').datepicker({
            viewMode: 'years',
            format: "yyyy-mm-dd",
            todayBtn: "linked",
            autoclose: true,
            todayHighlight: true
        }).on('changeDate', function (e) {
            $(".to").datepicker({autoclose: true}).datepicker('setStartDate', e.date).focus();
        });
        $('.to').datepicker({
            viewMode: 'years',
            format: "yyyy-mm-dd",
            todayBtn: "linked",
            autoclose: true,
            todayHighlight: true
        });
    });
</script>