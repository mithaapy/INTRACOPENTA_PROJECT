<?php $dataprivileges = $this->privileges->main($this->session->userdata['users_idrole']); ?>
<?php $data = $data_quotations[0]; ?>
<br/>
<style type="text/css">
    .quotation_note  {
        width:104%;
    }
    .table-bordered tr td a i  {
        text-align:center;
        font-size:16px;
    }
    .action-edit-delete a i  {
        background-color:#fff;
        padding:8px;
        border: 1px solid #ddd;
        width:50px;
        border-radius:8px;
        text-align:center;
    }
    .table-bordered > thead > tr > th, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > tbody > tr > td, .table-bordered > tfoot > tr > td  {
        text-align: center;
    }
    
</style>
<form enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url() . 'index.php/conquotations/' . $function; ?>" method="POST" >
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>ID Prospect</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="id" name="id" placeholder="ID Prospect" value="<?php echo $data->prospects_id; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>ID Lead / Lead Detail</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="idlead" name="idlead" placeholder="ID Lead" value="<?php echo $data->leads_id; ?>" readonly>
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="idleaddetail" name="idleaddetail" placeholder="ID Lead Detail" value="<?php echo $data->leaddetails_id; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>ID Suspect / Suspect Detail</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="idsuspect" name="idsuspect" placeholder="ID Suspect" value="<?php echo $data->prospects_idsuspect; ?>" readonly>
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="idsuspectdetail" name="idsuspectdetail" placeholder="ID Suspect Detail" value="<?php echo $data->prospects_idsuspectdetail; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Project Name</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="projectno" name="projectno" placeholder="Project Name" value="<?php echo $data->leads_projectname; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Quotation No</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="quotationno" name="quotationno" placeholder="Quotation Number" value="<?php echo $data->prospects_quotationno; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Created Date / By</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="createddate" name="createddate" placeholder="Created Date" value="<?php echo $data->prospects_createddate; ?>" readonly>
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="iduser2" name="iduser2" placeholder="Created By" value="<?php echo $data->users2_nik . ' - ' . $data->users2_firstname . ' ' . $data->users2_lastname; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Description</label></div>
        <div class="col-sm-10">
            <textarea id="description" name="description" rows="5" class="form-control" placeholder="Description" disabled><?php echo $data->leads_projectdescription ?></textarea>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Start Date / Expired Date</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="startdate" name="startdate" placeholder="Start Date" value="<?php echo $data->prospects_startdate ?>" readonly>
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="expireddate" name="expireddate" placeholder="Expired Date" value="<?php echo $data->prospects_expireddate ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Currency</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="currency" name="currency" placeholder="Currency" value="<?php echo $data->prospects_currency; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Stage / Status</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="idstage" name="idstage" placeholder="Stage" value="<?php echo $data->stages_code . ' - ' . $data->stages_name; ?>"readonly>
        </div>
        <div class="col-sm-5"> 
            <input type="text" class="form-control" id="idstatus" name="idstatus" placeholder="Status" value="<?php echo $data->statuses_code . ' - ' . $data->statuses_name; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Approved Date / By</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="approveddate" name="approveddate" placeholder="Approved Date" value="<?php echo $data->prospects_approveddate; ?>" readonly>
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="approvedby" name="approvedby" placeholder="Approved By" value="<?php echo $data->users3_nik . ' - ' . $data->users3_firstname . ' ' . $data->users3_lastname; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>ID Product / Name</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="idproduct" name="idproduct" placeholder="ID Product" value="<?php echo $data->prospects_idproduct; ?>" readonly>
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="productname" name="productname" placeholder="Product Name" value="<?php echo $data->products_name; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Quantity / UOM</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity" value="<?php echo $data->prospects_quantity; ?>" readonly>
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="uom" name="uom" placeholder="UOM" value="<?php echo $data->products_uom; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Unit Value</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="unitvalue" name="unitvalue" placeholder="Unit Value" value="<?php echo $data->prospects_unitvalue; ?>"readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Transaction Model</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="transactionmodel" name="transactionmodel" placeholder="Transaction Model" value="<?php echo $data->prospects_transactionmodel; ?>" readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Decision / Expected Delivery Date</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="decisiondate" name="decisiondate" placeholder="Decision Date" value="<?php echo $data->prospects_decisiondate; ?>"readonly>
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="expecteddeliverydate" name="expecteddeliverydate" placeholder="Expected Delivery Date" value="<?php echo $data->prospects_expecteddeliverydate; ?>"readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Customer Type</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="customertype" name="customertype" placeholder="Customer Type" value="<?php echo $data->prospects_customertype; ?>"readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Level 2</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="level2" name="level2" placeholder="Level 2" value="<?php echo $data->prospects_level2; ?>"readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Webpid</label></div>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="webpid" name="webpid" placeholder="Webpid" value="<?php echo $data->prospects_webpid; ?>"readonly>
        </div>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label>Segment / Odds</label></div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="idsegment" name="idsegment" placeholder="Segment" value="<?php echo $data->segments_segment; ?>" readonly>
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="odds" name="odds" placeholder="Odds" value="<?php echo $data->suspectdetails_odds; ?>" readonly>
        </div>
    </div>

    <hr/>
    <br/>
    <h3 class='ekunfontslide'>Quotation Notes</h3>
    <script>
        $(document).ready(function(){
            $("#addquotbutton").click(function(){
                var selectedQ=$("#idquotationnotes option:selected").text();
                 var selectedQVal=$("#idquotationnotes").val();
                var html='<tr id="rowquotationnotes" >'+
                        '<td style="text-align: left; vertical-align: middle;">'+
                        '<input type="hidden" name="quotaions[]" value="'+selectedQVal+'">'
                        +selectedQ+
            '</td>' +
            '<td style="text-align: left; vertical-align: middle;"></td>'+
            
            '<td class="action-edit-delete">'+
//                            '<a href="#" title=""><i class="fa fa-edit"></i></a>'+
                            '<a href="#" title=""><i class="fa fa-trash"></i></a>'+
                        '</td>'+
            '</tr>'
            ;
                $("#qtbody").append(html);
                
            });
        });
        </script>
    <div class="col-md-12" style="padding-left:0; margin-bottom:15px; overflow:hidden;">
        <div class="col-md-9" style="padding-left:0; padding-right:0;">  
       <select class="form-control" id="idquotationnotes" name="idquotationnotes2">
                                
                                <?php foreach ($data_quotationtext as $row): ?>
                                    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
								<?php endforeach; ?>
                            </select>
           </div>
        <div class="col-sm-3" style="padding-right:0;">
           <button  type="button" id="addquotbutton" name="addquotationnotes" class="btn btn-default quotation_note"><i class="fa fa-list"></i> Add Quotation Notes</button>
         </div>
        </div>
    <div class='table-responsive'>
        
        <table class='table table-bordered table-striped table-condensed datatablesdetails'>
          
            <thead>
                <tr>
                    <th style="text-align: center; vertical-align: middle;">Quotation Notes</th>
                    <th style="text-align: center; vertical-align: middle;">Quotation Description</th>
                    <th style="text-align: center; vertical-align: middle;  width: 120px;"></a>Action</th>
                </tr>
                
            </thead>
            <tbody id="qtbody">
               <!-- Data added dynamically by selected quotations -->
		<?php if(isset($qutnotes)):
                      foreach ($qutnotes as $qutnote):
                     $this->db->select('*');
            $this->db->from('tdat_quotationtext');
            $this->db->where('id',$qutnote['quotation_id']);
            $query1=  $this->db->get();
            $quts=  $query1->result_array();
            foreach ($quts as $qut):
               //echo $qut['name'];
                ?>
               <tr id="rowquotationnotes" class="<?php echo $qutnote['id'] ?>">
                        <td style="text-align: left; vertical-align: middle;">
                        <input type="hidden" name="quotaions[]" value="<?php echo $qut['id']; ?>">
                        <?php echo $qut['name']; ?>
                      </td>
                      <td style="text-align: center; vertical-align: middle;">
                          <?php if($qutnote['quotation_desc']): ?>
                          <input type="text" name="quotaiondesc[]" style="width:500px;" value="<?php echo $qutnote['quotation_desc']; ?>">
                          <?php else: ?>
                          <input type="text" name="quotaiondesc[]" style="width:500px;" value="<?php echo $qut['description']; ?>">
                          <?php endif; ?>
                          
                        
                      </td>
            
            <td class="action-edit-delete">
<!--                <a href="<?php //echo base_url('index.php/conquotationtext') ?>" title=""><i class="fa fa-edit"></i></a>-->
                            <a href="javascript:void(0)" onclick="action_form('delete', '<?php echo $qutnote['id'] ?>')"  ><i class="fa fa-trash"></i></a>
                        </td>
            </tr>
               <?php 
               endforeach;
              endforeach;
               endif;
               ?>
            </tbody>
        </table>
        <script type="text/javascript">
    function action_form(type, id) {
        
        $.ajax({
            url: '<?php echo base_url() ?>index.php/conquotations/qdelete',
            type: 'POST',
            data: {tipe: type, id: id},
            dataType: 'html',
            
            success: function (data) {
               alert("Deleted Successfully");
                $('.'+id).remove();
            }
        });
    }

</script>
    </div>
    <hr/><br/>
    <h3 class='ekunfontslide'> Accessories </h3>
    <script>
        $(document).ready(function(){
            $("#addaccessoriesbtn").click(function(){
                var selectedA=$("#idaccessories option:selected").text();
                var selectedAVal=$("#idaccessories").val();
                var html='<tr id="rowaccessories" >'+
                        '<td style="text-align: left; vertical-align: middle;">'+
                        '<input type="hidden" name="accessories[]" value="'+selectedAVal+'">'
                        +selectedA+
            '</td>' +
          '<td style="text-align: left; vertical-align: middle;"><input type="text" name="accquantity[]" required></td>'+
          '<td style="text-align: left; vertical-align: middle;">'+
    '<input type="checkbox" name="is_display_pdf[]" value="Y" checked="checked">Yes'+
    '<input type="checkbox" name="is_display_pdf[]" value="N" >No'+
    '</td>'+
            '<td class="action-edit-delete">'+
                            '<a href="#" title=""><i class="fa fa-edit"></i></a>'+
                            '<a href="#" title=""><i class="fa fa-trash"></i></a>'+
                        '</td>'+
            '</tr>'
            ;
                $("#atbody").append(html);
                
            });
        });
        </script>
    <div class="col-md-12" style="padding-left:0; margin-bottom:15px; overflow:hidden;">  
     <div class="col-md-9" style="padding-left:0; padding-right:0;">   
      <select class="form-control" id="idaccessories" name="idaccessories">
                                
                                <?php foreach ($data_accessories as $row): ?>
                                    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
    <?php endforeach; ?>
                            </select>
   </div>
    <div class="col-sm-3" style="padding-right:0;"> 
    <button  type="button" id="addaccessoriesbtn" name="addaccessories" class="btn btn-default quotation_note"><i class="fa fa-list"></i> Add Accessories</button>
   </div>
  </div>      
    <div class='table-responsive'>
       
        <table class='table table-bordered table-striped table-condensed datatablesdetails'>
           
            <thead>
                <tr>
                    <th style="text-align: center; vertical-align: middle;">Accessories</th>
                    <th style="text-align: center; vertical-align: middle;">Quantity</th>
                    <th style="text-align: center; vertical-align: middle;">Display the price</th>
                    <th style="text-align: center; vertical-align: middle;  width: 120px;"></a>Action</th>
                </tr>
            </thead>
            <tbody id="atbody">
               <!-- Accessories added dynamically -->
               <?php if(isset($accessories)):
                      foreach ($accessories as $accessory):
                     $this->db->select('*');
            $this->db->from('tdat_accessories');
            $this->db->where('id',$accessory['idaccessories']);
            $query2=  $this->db->get();
            $access=  $query2->result_array();
            foreach ($access as $acces):
               //echo $qut['name'];
                ?>
               <tr id="rowaccessories" class="<?php echo $accessory['id'] ?>">
                        <td style="text-align: left; vertical-align: middle;">
                        <input type="hidden" name="accessories[]" value="<?php echo $acces['id']; ?>">
                        <?php echo $acces['name']; ?>
            </td>
            <td style="text-align: left; vertical-align: middle;"><input type="text" name="accquantity[]" value="<?php echo $accessory['accquantity'] ?>" required></td>
            <?php if($accessory['is_display_pdf']=="Y"): ?>
            <td style="text-align: left; vertical-align: middle;">
                <input type="checkbox" name="is_display_pdf[]" checked="checked" value="Y">Yes
                <input type="checkbox" name="is_display_pdf[]" value="N">No
            </td>
            <?php else: ?>
            <td style="text-align: left; vertical-align: middle;">
                <input type="checkbox" name="is_display_pdf[]"  value="Y">Yes
                <input type="checkbox" name="is_display_pdf[]" checked="checked" value="N">No
            </td>
          <?php endif; ?>
            <td class="action-edit-delete">
                <a href="<?php echo base_url('index.php/conaccessories') ?>" title=""><i class="fa fa-edit"></i></a>
                            <a href="javascript:void(0)" onclick="action_del('delete', '<?php echo $accessory['id'] ?>')"  ><i class="fa fa-trash"></i></a>
                        </td>
            </tr>
               <?php 
               endforeach;
              endforeach;
               endif;
               ?>
            <script type="text/javascript">
    function action_del(type, id) {
        
        $.ajax({
            url: '<?php echo base_url() ?>index.php/conquotations/adelete',
            type: 'POST',
            data: {tipe: type, id: id},
            dataType: 'html',
            
            success: function (data) {
               alert("Deleted Successfully");
                $('.'+id).remove();
            }
        });
    }

</script>
            </tbody>
        </table>
    </div>
    <hr/><br/>
<!--  Promotion div Start -->

<h3 class='ekunfontslide'> Promotions </h3>
    <script>
        $(document).ready(function(){
            $("#addpromotionsbtn").click(function(){
                var selectedP=$("#idpromotions option:selected").text();
                var selectedPVal=$("#idpromotions").val();
                var html='<tr id="rowaccessories" >'+
                        '<td style="text-align: left; vertical-align: middle;">'+
                        '<input type="hidden" name="promotions[]" value="'+selectedPVal+'">'
                        +selectedP+
            '</td>' +
          
            '<td class="action-edit-delete">'+
                            '<a href="#" title=""><i class="fa fa-edit"></i></a>'+
                            '<a href="#" title=""><i class="fa fa-trash"></i></a>'+
                        '</td>'+
            '</tr>'
            ;
                $("#ptbody").append(html);
                
            });
        });
        </script>
    <div class="col-md-12" style="padding-left:0; margin-bottom:15px; overflow:hidden;">  
     <div class="col-md-9" style="padding-left:0; padding-right:0;">   
      <select class="form-control" id="idpromotions" name="idpromotions">
                                
                                <?php foreach ($data_promotions as $row): ?>
                                    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
    <?php endforeach; ?>
                            </select>
   </div>
    <div class="col-sm-3" style="padding-right:0;"> 
    <button  type="button" id="addpromotionsbtn" name="addpromotions" class="btn btn-default quotation_note"><i class="fa fa-list"></i> Add Promotions</button>
   </div>
  </div>      
    <div class='table-responsive'>
       
        <table class='table table-bordered table-striped table-condensed datatablesdetails'>
           
            <thead>
                <tr>
                    <th style="text-align: center; vertical-align: middle;">Promotions</th>
                    <th style="text-align: center; vertical-align: middle;  width: 120px;"></a>Action</th>
                </tr>
            </thead>
            <tbody id="ptbody">
                <!-- Accessories added dynamically -->
               <?php if(isset($promotions)):
                      foreach ($promotions as $promotion):
                     $this->db->select('*');
            $this->db->from('tdat_productpromotions');
            $this->db->where('id',$promotion['idpromotion']);
            $querypt=  $this->db->get();
            $promos=  $querypt->result_array();
            foreach ($promos as $promo):
               //echo $qut['name'];
                ?>
               <tr id="rowaccessories" class="<?php echo $promotion['id'] ?>">
                        <td style="text-align: left; vertical-align: middle;">
                        <input type="hidden" name="promotions[]" value="<?php echo $promo['id']; ?>">
                        <?php echo $promo['name']; ?>
            </td>
            
            <td class="action-edit-delete">
                <a href="<?php echo base_url('index.php/conproductpromotions') ?>" title=""><i class="fa fa-edit"></i></a>
                            <a href="javascript:void(0)" onclick="promo_del('delete', '<?php echo $promotion['id'] ?>')"  ><i class="fa fa-trash"></i></a>
                        </td>
            </tr>
               <?php 
               endforeach;
              endforeach;
               endif;
               ?>
           <script type="text/javascript">
    function promo_del(type, id) {
        
        $.ajax({
            url: '<?php echo base_url() ?>index.php/conquotations/pdelete',
            type: 'POST',
            data: {tipe: type, id: id},
            dataType: 'html',
            
            success: function (data) {
               alert("Deleted Successfully");
                $('.'+id).remove();
            }
        });
    }

</script>    
            
            </tbody>
        </table>
    </div>
    <hr/><br/>
<!-- Promotion End Here -->

    <div class="col-md-6"></div>
    <div class="col-md-2">
        <button style="width:100%" type="button" id="cancel" name="cancel" class="btn btn-default" onclick="back()"><i class="fa fa-arrow-circle-left"></i> Cancel</button>
    </div>
    <div class="col-md-2">
        <button style="width:100%; <?php echo $styleresetld ?>;" type="reset" id="reset" name="reset" class="btn btn-default"><i class="fa fa-refresh"></i> Clear</button>
    </div>
    <div class="col-md-2">
        <button style="width:100%; <?php echo $stylesubmitld ?>;" type="submit" id="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-check"></i> Save</button>
    </div>
</form>