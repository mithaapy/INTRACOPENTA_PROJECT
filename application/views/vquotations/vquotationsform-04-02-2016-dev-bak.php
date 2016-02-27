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
    <h3 class='ekunfontslide'>Quotation Notes &nbsp;&nbsp;</h3>
     <?php
    $valrows = 1;
    if ($function == "edit"):
        $valrows = count($data_quotations);
    endif;
    ?>
    <div class="col-md-12" style="padding-left:0; margin-bottom:15px; overflow:hidden;">
        <div class="col-md-9" style="padding-left:0; padding-right:0;">  
       <select class="form-control" id="idquotationnotes2<?php echo $i ?>" name="idquotationnotes2<?php echo $i ?>">
                                <option value="<?php echo $data_quotations[$i - 1]->quotations_idquotationtext ?>" selected><?php echo $data_quotations[$i - 1]->quotationtext_name ?></option>
                                <?php foreach ($data_quotationtext as $row): ?>
                                    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
								<?php endforeach; ?>
                            </select>
           </div>
        <div class="col-sm-3" style="padding-right:0;">
           <button style="<?php echo $styleaddqn ?>" type="button" id="addquotationnotes" name="addquotationnotes" class="btn btn-default quotation_note"><i class="fa fa-list"></i> Add Quotation Notes</button>
         </div>
        </div>
    <div class='table-responsive'>
        <input type="hidden" id="countrows" name="countrows" value="<?php echo $valrows ?>">
        <table class='table table-bordered table-striped table-condensed datatablesdetails'>
            <?php if ($function == 'detail'): $styleactionpa = 'display:none;';
            endif;
            ?>
            <thead>
                <tr>
                    <th style="text-align: center; vertical-align: middle;">Quotation Notes</th>
		    <th style="text-align: center; vertical-align: middle;">Edit</th>
                    <th style="text-align: center; vertical-align: middle; <?php echo $stylesubmitqn ?>; width: 120px;"></a>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 1; $i <= 10; $i++):
                    if ($function == 'edit'):
                        if (count($data_quotations) >= $i):
                            $stylerows = '';
                        else :
                            $stylerows = 'display:none;';
                        endif;
                    elseif ($function == 'detail'):
                        $styleresetpa = 'display:none;';
                        $stylesubmitpa = 'display:none;';
                        if (count($data_quotations) >= $i):
                            $stylerows = '';
                        else :
                            $stylerows = 'display:none;';
                        endif;
                    endif;
                    ?>
                    <tr id="rowquotationnotes<?php echo $i ?>" style="<?php echo $stylerows ?>">
                        <td style="text-align: left; vertical-align: middle;">
                            <input type="hidden" id="idquotationnotes<?php echo $i ?>" name="idquotationnotes<?php echo $i ?>" value="<?php echo $data_quotations[$i - 1]->quotations_idquotationtext ?>">
                            
                        </td>
			<!--<td style="text-align: left; vertical-align: middle;">
                            <input type="hidden" id="id<?php echo $i ?>" name="id<?php echo $i ?>" value="<?php echo $data_quotations[$i - 1]->quotations_idquotationtext ?>">
                            <select class="form-control" id="idquotationnotes3<?php echo $i ?>" name="idquotationnotes3<?php echo $i ?>">
                                <option value="<?php echo $data_quotations[$i - 1]->quotations_idquotationtext ?>" selected><?php echo $data_quotations[$i - 1]->quotationtext_description ?></option>
                                <?php foreach ($data_quotationtext as $row): ?>
                                <option value="<?php echo $row->description; ?>"></option>
								<?php endforeach; ?>
                            </select>
                        </td>-->
					
                        <td>
                            <a href="#" title=""><i class="fa fa-edit"></i></a>
                        </td>
                        <!--<td style="text-align: left; vertical-align: middle;" <?php echo $styleactionqn ?>>
                            <select class="form-control" id="action<?php echo $i ?>" name="action<?php echo $i ?>">
                                <option value="" selected></option>
                                <option value="delete">Delete</option>
                            </select>
                        </td>-->
                         <td>
                            <a href="#" title=""><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
				<?php endfor; ?>
            </tbody>
        </table>
    </div>
    <hr/><br/>
    <h3 class='ekunfontslide'>
        Accessories &nbsp;&nbsp; </h3>
    <?php
    $valrows = 1;
    if ($function == "edit"):
        $valrows = count($data_prospectaccessories);
    endif;
    ?>
    <div class="col-md-12" style="padding-left:0; margin-bottom:15px; overflow:hidden;">  
     <div class="col-md-9" style="padding-left:0; padding-right:0;">   
      <select class="form-control" id="idaccessories" name="idaccessories">
                                <option value="<?php echo $data_prospectaccessories[$i - 1]->prospectaccessories_idaccessories ?>" selected><?php echo $data_prospectaccessories[$i - 1]->accessories_name ?></option>
                                <?php foreach ($data_accessories as $row): ?>
                                    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
    <?php endforeach; ?>
                            </select>
   </div>
    <div class="col-sm-3" style="padding-right:0;"> 
    <button style="<?php echo $styleaddpa ?>" type="button" id="addaccessories" name="addaccessories" class="btn btn-default quotation_note"><i class="fa fa-list"></i> Add Accessories</button>
   </div>
  </div>      
    <div class='table-responsive'>
        <input type="hidden" id="countrows" name="countrows" value="<?php echo $valrows ?>">
        <table class='table table-bordered table-striped table-condensed datatablesdetails'>
            <?php if ($function == 'detail'): $styleactionpa = 'display:none;';
            endif;
            ?>
            <thead>
                <tr>
                    <th style="text-align: center; vertical-align: middle;">Accessories</th>
                    <th style="text-align: center; vertical-align: middle; <?php echo $stylesubmitpa ?>; width: 120px;"></a>Action</th>
                </tr>
            </thead>
            <tbody>
               <tr id="rowaccessories" >
                        <td style="text-align: left; vertical-align: middle;">
                           
                            
                        </td>
                        <td class="action-edit-delete">
                            <a href="#" title=""><i class="fa fa-edit"></i></a>
                            <a href="#" title=""><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
            </tbody>
        </table>
    </div>
    <hr/><br/>


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