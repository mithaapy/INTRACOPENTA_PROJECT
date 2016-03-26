<?php
$dataprivileges = $this->privileges->main($this->session->userdata['users_idrole']);
$userType=$this->session->userdata('users_idrole');
?>
<aside class="left-side sidebar-offcanvas">
    <section class="sidebar">
        <div class="user-panel2" style="border-style: solid; border-color: #333333">
            <img src="<?php echo base_url().$this->session->userdata['companies_logo']; ?>" style="width:100%;" class="desktop" alt="Company Logo" />
        </div>
        <br/>
        <ul class="sidebar-menu">
            <li id="menu1" name="menu1" style="<?php echo $dataprivileges['TempSidebarMenu1']; ?>" class="<?php echo $menu1 ?>"><a href="<?php echo base_url(); ?>index.php/conmain/"><i class="fa fa-arrow-circle-o-right"></i> <span>Dashboard</span></a></li>
            <li id="menu2" name="menu2" style="<?php echo $dataprivileges['TempSidebarMenu2']; ?>" class="<?php echo $menu2 ?>"><a href="<?php echo base_url(); ?>index.php/conleads/openbidding"><i class="fa fa-arrow-circle-o-right"></i> <span>Open Bidding</span></a></li>
            <li id="menu3" name="menu3" style="<?php echo $dataprivileges['TempSidebarMenu3']; ?>" class="treeview <?php echo $menu3 ?>"><a href="#"><i class="fa fa-arrow-circle-o-right"></i><span>Progress Stages</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li id="submenu31" name="submenu31" style="<?php echo $dataprivileges['TempSidebarSubmenu31']; ?>" class='<?php echo $submenu31 ?>'><a href='<?php echo base_url(); ?>index.php/conleads/'><i class='fa fa-angle-double-right'></i>Lead</a></li>
                    <li id="submenu31" name="submenu30" style="<?php echo $dataprivileges['TempSidebarSubmenu30']; ?>" class='<?php echo $submenu30 ?>'><a href='<?php echo base_url(); ?>index.php/conleads/disqualifiedleads/'><i class='fa fa-angle-double-right'></i>Disqualified Lead</a></li>
                    <li id="submenu32" name="submenu32" style="<?php echo $dataprivileges['TempSidebarSubmenu32']; ?>" class='<?php echo $submenu32 ?>'><a href='<?php echo base_url(); ?>index.php/consuspects/'><i class='fa fa-angle-double-right'></i>Suspect</a></li>
                    <li id="submenu33" name="submenu33" style="<?php echo $dataprivileges['TempSidebarSubmenu33']; ?>" class='<?php echo $submenu33 ?>'><a href='<?php echo base_url(); ?>index.php/conprospects/'><i class='fa fa-angle-double-right'></i>Prospect</a></li>
					<li id="submenu34" name="submenu34" style="<?php echo $dataprivileges['TempSidebarSubmenu34']; ?>" class='<?php echo $submenu34 ?>'><a href='<?php echo base_url(); ?>index.php/conorderonhand/'><i class='fa fa-angle-double-right'></i>Order On Hand</a></li>
					<li id="submenu35" name="submenu35" style="<?php echo $dataprivileges['TempSidebarSubmenu35']; ?>" class='<?php echo $submenu35 ?>'><a href='<?php echo base_url(); ?>index.php/converylikely/'><i class='fa fa-angle-double-right'></i>Very Likely</a></li>
					<li id="submenu36" name="submenu36" style="<?php echo $dataprivileges['TempSidebarSubmenu36']; ?>" class='<?php echo $submenu36 ?>'><a href='<?php echo base_url(); ?>index.php/conorderconfirmed/'><i class='fa fa-angle-double-right'></i>Order Confirmed</a></li>
					<li id="submenu37" name="submenu37" style="<?php echo $dataprivileges['TempSidebarSubmenu37']; ?>" class='<?php echo $submenu37 ?>'><a href='<?php echo base_url(); ?>index.php/condelivery/'><i class='fa fa-angle-double-right'></i>Delivery</a></li>
					<li id="submenu38" name="submenu38" style="<?php echo $dataprivileges['TempSidebarSubmenu38']; ?>" class='<?php echo $submenu38 ?>'><a href='<?php echo base_url(); ?>index.php/conloss/'><i class='fa fa-angle-double-right'></i>Loss</a></li>
					<li id="submenu39" name="submenu39" style="<?php echo $dataprivileges['TempSidebarSubmenu39']; ?>" class='<?php echo $submenu39 ?>'><a href='<?php echo base_url(); ?>index.php/concompetitions/'><i class='fa fa-angle-double-right'></i>Competitions</a></li>
				</ul>
            </li>
            <li id="menu4" name="menu4" style="<?php echo $dataprivileges['TempSidebarMenu4']; ?>" class="<?php echo $menu4 ?>"><a href="<?php echo base_url(); ?>index.php/conquotations/"><i class="fa fa-arrow-circle-o-right"></i> <span>Quotation Creation</span></a></li>
            <li id="menu5" name="menu5" style="<?php echo $dataprivileges['TempSidebarMenu5']; ?>" class="<?php echo $menu5 ?>"><a href="<?php echo base_url(); ?>index.php/condiscounts/"><i class="fa fa-arrow-circle-o-right"></i> <span>Discount Approval</span></a></li>
            <li id="menu6" name="menu6" style="<?php echo $dataprivileges['TempSidebarMenu6']; ?>" class="treeview <?php echo $menu6 ?>"><a href="<?php echo base_url(); ?>index.php/conproducts/"><i class="fa fa-arrow-circle-o-right"></i><span>Products</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li id="submenu61" name="submenu61" style="<?php echo $dataprivileges['TempSidebarSubmenu61']; ?>" class='<?php echo $submenu61 ?>'><a href='<?php echo base_url(); ?>index.php/conaccessories/'><i class='fa fa-angle-double-right'></i>Accessories</a></li>
                    <li id="submenu62" name="submenu62" style="<?php echo $dataprivileges['TempSidebarSubmenu62']; ?>" class='<?php echo $submenu62 ?>'><a href='<?php echo base_url(); ?>index.php/concategories/'><i class='fa fa-angle-double-right'></i>Categories</a></li>
                    <li id="submenu63" name="submenu63" style="<?php echo $dataprivileges['TempSidebarSubmenu63']; ?>" class='<?php echo $submenu63 ?>'><a href='<?php echo base_url(); ?>index.php/conmodels/'><i class='fa fa-angle-double-right'></i>Models</a></li>
                    <li id="submenu64" name="submenu64" style="<?php echo $dataprivileges['TempSidebarSubmenu64']; ?>" class='<?php echo $submenu64 ?>'><a href='<?php echo base_url(); ?>index.php/conproductprices'><i class='fa fa-angle-double-right'></i>Product Prices</a></li>
                    <li id="submenu65" name="submenu65" style="<?php echo $dataprivileges['TempSidebarSubmenu65']; ?>" class='<?php echo $submenu65 ?>'><a href='<?php echo base_url(); ?>index.php/conproducts/'><i class='fa fa-angle-double-right'></i>Products</a></li>
                    <li id="submenu66" name="submenu66" style="<?php echo $dataprivileges['TempSidebarSubmenu66']; ?>" class='<?php echo $submenu66 ?>'><a href='<?php echo base_url(); ?>index.php/conproductpromotions'><i class='fa fa-angle-double-right'></i>Promotions</a></li>
                </ul>
            </li>
            <li id="menu7" name="menu7" style="<?php echo $dataprivileges['TempSidebarMenu7']; ?>" class="treeview <?php echo $menu7 ?>"><a href="#"><i class="fa fa-arrow-circle-o-right"></i><span>Customers</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li id="submenu71" name="submenu71" style="<?php echo $dataprivileges['TempSidebarSubmenu71']; ?>" class='<?php echo $submenu71 ?>'><a href='<?php echo base_url(); ?>index.php/concustomers/'><i class='fa fa-angle-double-right'></i>Customers</a></li>
                    <li id="submenu72" name="submenu72" style="<?php echo $dataprivileges['TempSidebarSubmenu72']; ?>" class='<?php echo $submenu72 ?>'><a href='<?php echo base_url(); ?>index.php/concustomergroups'><i class='fa fa-angle-double-right'></i>Groups</a></li>
                    <li id="submenu73" name="submenu73" style="<?php echo $dataprivileges['TempSidebarSubmenu73']; ?>" class='<?php echo $submenu73 ?>'><a href='<?php echo base_url(); ?>index.php/concustomertypes'><i class='fa fa-angle-double-right'></i>Types</a></li>
                </ul>
            </li>
            <li id="menu8" name="menu8" style="<?php echo $dataprivileges['TempSidebarMenu8']; ?>" class="treeview <?php echo $menu8 ?>"><a href="#"><i class="fa fa-arrow-circle-o-right"></i><span>Sales</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li id="submenu81" name="submenu81" style="<?php echo $dataprivileges['TempSidebarSubmenu81']; ?>" class='<?php echo $submenu81 ?>'><a href='<?php echo base_url(); ?>index.php/conusers/salesman'><i class='fa fa-angle-double-right'></i>Salesman</a></li>
                    <li id="submenu82" name="submenu82" style="<?php echo $dataprivileges['TempSidebarSubmenu82']; ?>" class='<?php echo $submenu82 ?>'><a href='<?php echo base_url(); ?>index.php/consalesactivities/'><i class='fa fa-angle-double-right'></i>Activities</a></li>
                    <li id="submenu83" name="submenu83" style="<?php echo $dataprivileges['TempSidebarSubmenu83']; ?>" class='<?php echo $submenu83 ?>'><a href='<?php echo base_url(); ?>index.php/consalestargets/'><i class='fa fa-angle-double-right'></i>Targets</a></li>
                    <li id="submenu84" name="submenu84" style="<?php echo $dataprivileges['TempSidebarSubmenu84']; ?>" class='<?php echo $submenu84 ?>'><a href='<?php echo base_url(); ?>index.php/conincentives/'><i class='fa fa-angle-double-right'></i>Incentives</a></li>
                    <li id="submenu85" name="submenu85" style="<?php echo $dataprivileges['TempSidebarSubmenu85']; ?>" class='<?php echo $submenu85 ?>'><a href='<?php echo base_url(); ?>index.php/convisitschedules/'><i class='fa fa-angle-double-right'></i>Visit Schedules</a></li>
                    <li id="submenu86" name="submenu86" style="<?php echo $dataprivileges['TempSidebarSubmenu86']; ?>" class='<?php echo $submenu86 ?>'><a href='<?php echo base_url(); ?>index.php/convisitpurposes/'><i class='fa fa-angle-double-right'></i>Visit Purposes</a></li>
                </ul>
            </li>
            <li id="menu9" name="menu9" style="<?php echo $dataprivileges['TempSidebarMenu9']; ?>" class="treeview <?php echo $menu9 ?>"><a href="#"><i class="fa fa-arrow-circle-o-right"></i><span>Masters</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li id="submenu91" name="submenu91" style="<?php echo $dataprivileges['TempSidebarSubmenu91']; ?>" class='<?php echo $submenu91 ?>'><a href='<?php echo base_url(); ?>index.php/conbranches/'><i class='fa fa-angle-double-right'></i>Branches</a></li>
                    <li id="submenu92" name="submenu92" style="<?php echo $dataprivileges['TempSidebarSubmenu92']; ?>" class='<?php echo $submenu92 ?>'><a href='<?php echo base_url(); ?>index.php/concompanies/'><i class='fa fa-angle-double-right'></i>Companies</a></li>
                    <li id="submenu93" name="submenu93" style="<?php echo $dataprivileges['TempSidebarSubmenu93']; ?>" class='<?php echo $submenu93 ?>'><a href='<?php echo base_url(); ?>index.php/concompetitors/'><i class='fa fa-angle-double-right'></i>Competitors</a></li>
                    <li id="submenu94" name="submenu94" style="<?php echo $dataprivileges['TempSidebarSubmenu94']; ?>" class='<?php echo $submenu94 ?>'><a href='<?php echo base_url(); ?>index.php/concities/'><i class='fa fa-angle-double-right'></i>Cities</a></li>
                    <li id="submenu95" name="submenu95" style="<?php echo $dataprivileges['TempSidebarSubmenu95']; ?>" class='<?php echo $submenu95 ?>'><a href='<?php echo base_url(); ?>index.php/concountries/'><i class='fa fa-angle-double-right'></i>Countries</a></li>
                    <li id="submenu96" name="submenu96" style="<?php echo $dataprivileges['TempSidebarSubmenu96']; ?>" class='<?php echo $submenu96 ?>'><a href='<?php echo base_url(); ?>index.php/conindustries/'><i class='fa fa-angle-double-right'></i>Industries</a></li>
                    <li id="submenu97" name="submenu97" style="<?php echo $dataprivileges['TempSidebarSubmenu97']; ?>" class='<?php echo $submenu97 ?>'><a href='<?php echo base_url(); ?>index.php/conquotationtext'><i class='fa fa-angle-double-right'></i>Quotation Text</a></li>
                    <li id="submenu98" name="submenu98" style="<?php echo $dataprivileges['TempSidebarSubmenu98']; ?>" class='<?php echo $submenu98 ?>'><a href='<?php echo base_url(); ?>index.php/conroles/'><i class='fa fa-angle-double-right'></i>Roles</a></li>
                    <li id="submenu99" name="submenu99" style="<?php echo $dataprivileges['TempSidebarSubmenu99']; ?>" class='<?php echo $submenu99 ?>'><a href='<?php echo base_url(); ?>index.php/consegments/'><i class='fa fa-angle-double-right'></i>Segments</a></li>
                    <li id="submenu910" name="submenu910" style="<?php echo $dataprivileges['TempSidebarSubmenu910']; ?>" class='<?php echo $submenu910 ?>'><a href='<?php echo base_url(); ?>index.php/consources/'><i class='fa fa-angle-double-right'></i>Sources</a></li>
                    <li id="submenu911" name="submenu911" style="<?php echo $dataprivileges['TempSidebarSubmenu911']; ?>" class='<?php echo $submenu911 ?>'><a href='<?php echo base_url(); ?>index.php/constages/'><i class='fa fa-angle-double-right'></i>Stages</a></li>
                    <li id="submenu912" name="submenu912" style="<?php echo $dataprivileges['TempSidebarSubmenu912']; ?>" class='<?php echo $submenu912 ?>'><a href='<?php echo base_url(); ?>index.php/constatuses/'><i class='fa fa-angle-double-right'></i>Statuses</a></li>
                    <li id="submenu913" name="submenu913" style="<?php echo $dataprivileges['TempSidebarSubmenu913']; ?>" class='<?php echo $submenu913 ?>'><a href='<?php echo base_url(); ?>index.php/conusers/'><i class='fa fa-angle-double-right'></i>Users</a></li>
                </ul>
            </li>
        </ul>
        <br/><br/><br/>
    </section>
</aside>