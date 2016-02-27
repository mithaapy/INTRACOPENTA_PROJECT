<header class="header">
    <a href="<?php echo base_url().'index.php/conmain/'; ?>" class="logo">
        <span class="fa fa-arrow-circle-right"><b>&nbsp;CROSS SELLING</b></span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="just-mobile logo-mobile" style="">
            <a href="<?php echo base_url(); ?>" class=""></a>
            <a href="<?php echo base_url(); ?>" class="">INTA</a>
        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu"><a href=''><i class='fa fa-key'></i> <?php echo $this->session->userdata['roles_name'];?></a></li>
                <li class="dropdown user user-menu"><a href=''><i class='fa fa-widget'></i> Widget</a></li>
                <li class="dropdown user user-menu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i><?php echo $this->session->userdata['users_firstname'].' '.$this->session->userdata['users_lastname']; ?> <i class="caret"></i></a>
                    <ul class="dropdown-menu">
                        <li class="user-header bg-light-blue">
                            <img src="<?php echo base_url().$this->session->userdata['users_picture']; ?>" style="width:100%;" class="desktop" alt="User Image" />
                            <p><?php echo $this->session->userdata['users_firstname'].' '.$this->session->userdata['users_lastname'].' - '.$this->session->userdata['users_username']; ?></p>
                            <small><?php echo $this->session->userdata['companies_code'].' - '.$this->session->userdata['companies_name']; ?></small>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="<?php echo base_url(); ?>index.php/conusers/profile" class="btn btn-default btn-flat"><i class="fa fa-cog"></i>  Profile</a>
                            </div>
                            <div class="pull-right">                                        
                                <a href="<?php echo base_url(); ?>index.php/conmain/logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>