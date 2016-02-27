<?php if (!defined('BASEPATH')) die();
class Ekunbarwidget extends Main_Controller {

   public function index()
   {
      $name= $this->session->userdata('name');
      if($name!="")
        {
              setcookie("logged","True",time()+5400,"/",".eidwhd.com");
              redirect('ekunbarwidget/menu');
        }
      else 
        {
              $this->load->view('include/header');
              //$this->load->view('templates/login');
              $this->load->view('templates/loginekunvideo');
              $this->load->view('include/footer');
         }
   }


   
   public function editwidgetekunbar($userfor){
    $name= $this->session->userdata('name');
    $from= $this->session->userdata('from');
    $user= $this->session->userdata('userid');

      $data['name'] = $name;
      $data['from'] = $from;
      $this->load->model('unit_model');
      $data['popupshow'] = $this->unit_model->getpopupshow($user);
      $data['userlengkap'] = $this->unit_model->getUserDetail($user);
      $data['notif'] = $this->unit_model->getNotification();
      $data['countnotif'] = $this->unit_model->getCountNotification();
      //$data['idist'] = $this->unit_model->getidist();
      $data['mom'] = $this->unit_model->getmom($name);
      $data['list'] = $this->unit_model->getAksesWidget($user);
      $data['pict'] = $this->session->userdata('pict');
      $data['admin'] = $this->session->userdata('admin');

   	$data['username'] = $userfor;
        $admin= $this->session->userdata('admin');
           	if($name!=""){
   	        	$this->load->model('unit_model');
   		        if($user!="0" && !empty($_GET)){
	        		$widget = $_GET['widget'];
        			$this->unit_model->inputAksesWidget($userfor,$widget);
        			echo "<script>alert('Update Access Done!');</script>";
           		}
	        	$data['list'] = $this->unit_model->getAksesWidget($userfor);
	        	$data['user'] = $this->unit_model->getUser();
                        $data['from'] = $this->unit_model->getGroup();
	        	$data['aplikasi'] = $this->unit_model->getWidget();
                        $this->load->view('ekunbarwidget/widgetekunbar', $data);
           		//$this->load->view('admin', $data);
           	}else{
   	        	redirect(base_url());
   	        }
   }

   public function deleteshowpopuplogin()
   {
       $this->load->model('unit_model');
       $user= $this->session->userdata('userid');
       $hasil = $this->unit_model->deleteshowpopup($user);
       redirect(base_url());
   }

   
   public function enableshowpopuplogin(){
   	$user= $this->session->userdata('userid');
   	if($user!=""){
   		$this->load->model('unit_model');
   		$this->unit_model->enableshowpopuplogin($user);
   		echo "<script>var r=confirm('Thankyou, You have been enable Widget Popup Message!');
			if (r==true)
			  {
			  window.location.href = 'editwidgetekunbar/".$user."';
			  }
			else
			  {
			  window.location.href = 'editwidgetekunbar/".$user."';
			  }</script>";
   	}else{
   		redirect(base_url());
   	}
   }

   public function iboardekunbar()
   {
    $name= $this->session->userdata('name');
    $from= $this->session->userdata('from'); 
    $user= $this->session->userdata('userid');
   	 $emailnya= $this->session->userdata('email');  
  	  if(isset($emailnya)){
  	      $email= $emailnya;
  	  }
  	  else {
  	      $email = '-';
  	  }
    
    if($name!=""){
      $data['name'] = $name;
      $data['from'] = $from;
      $data['user'] = $user;
      $this->load->model('unit_model');

      $data['popupshow'] = $this->unit_model->getpopupshow($user);
      $data['userlengkap'] = $this->unit_model->getUserDetail($user);
      $data['notif'] = $this->unit_model->getNotification();
      $data['countnotif'] = $this->unit_model->getCountNotification();
      $data['listGroupUser'] = $this->unit_model->getAksesGroupEachUser($user);
      $data['mom'] = $this->unit_model->getmom($name);
      $data['list'] = $this->unit_model->getAkses($user);
      $data['widget'] = $this->unit_model->getAksesWidget($user);
      $data['pict'] = $this->session->userdata('pict');
      $data['admin'] = $this->session->userdata('admin');
      setcookie("user",$user,time()+5400,"/",".eidwhd.com");
      setcookie("namenya",$name,time()+5400,"/",".eidwhd.com");
      setcookie("fromnya",$from,time()+5400,"/",".eidwhd.com");

                setcookie("email",$email,time()+5400,"/",".eidwhd.com");

      //$this->load->view('menu', $data);
      $this->load->view('ekunbarwidget/iboard', $data);
      ini_set('session.cookie_domain','.eidhwhd.com');
    }else{
        redirect('ekunbarwidget/iboardekunbar');
    }
   }   

   public function news()
   {
    $name= $this->session->userdata('name');
    $from= $this->session->userdata('from');
    $user= $this->session->userdata('userid');
   	 $emailnya= $this->session->userdata('email');  
  	  if(isset($emailnya)){
  	      $email= $emailnya;
  	  }
  	  else {
  	      $email = '-';
  	  }

      $data['name'] = $name;
      $data['from'] = $from;
      $this->load->model('unit_model');
      $data['mom'] = $this->unit_model->getmom($user);
      $data['pict'] = $this->session->userdata('pict');

      $this->load->view('ekunbarwidget/news', $data);
   }    

   public function document()
   {
    $name= $this->session->userdata('name');
    $from= $this->session->userdata('from');
    $user= $this->session->userdata('userid');
    $company= $this->session->userdata('companyname');
   	$emailnya= $this->session->userdata('email');  
  	  if(isset($emailnya)){
  	      $email= $emailnya;
  	  }
  	  else {
  	      $email = '-';
  	  }

      $data['name'] = $name;
      $data['from'] = $from;
      $this->load->model('unit_model');

      $data['openbiding'] = $this->unit_model->getCountOpenBiding($company);
      $data['suspect'] = $this->unit_model->getCountSuspect($user);
      /*$data['yourlogin'] = $this->unit_model->getyourloginact($user);
      $data['lastlog'] = $this->unit_model->getyourloginlast($user);
      $data['idist'] = $this->unit_model->getidistsh();*/
      $this->load->view('ekunbarwidget/document', $data);
   }  

   public function leadslist()
   {
    $name= $this->session->userdata('name');
    $from= $this->session->userdata('from');
    $user= $this->session->userdata('userid');
   	 $emailnya= $this->session->userdata('email');  
  	  if(isset($emailnya)){
  	      $email= $emailnya;
  	  }
  	  else {
  	      $email = '-';
  	  }
    
      $data['name'] = $name;
      $data['from'] = $from;
      $this->load->model('unit_model');
      $data['leadspicked'] = $this->unit_model->getLeadsDetailPickedforUser($name);
      /*$data['userlengkap'] = $this->unit_model->getUserDetail($user);
      $data['list'] = $this->unit_model->getAkses($user);
      $data['pict'] = $this->session->userdata('pict');
      $data['admin'] = $this->session->userdata('admin');*/
      $this->load->view('ekunbarwidget/leadslist', $data);
   } 


   public function suspectlist()
   {
    $name= $this->session->userdata('name');
    $from= $this->session->userdata('from');
    $user= $this->session->userdata('userid');
     $emailnya= $this->session->userdata('email');  
      if(isset($emailnya)){
          $email= $emailnya;
      }
      else {
          $email = '-';
      }
    
      $data['name'] = $name;
      $data['from'] = $from;
      $this->load->model('unit_model');
      $data['suspect'] = $this->unit_model->getSuspectforUser($user);
      /*$data['userlengkap'] = $this->unit_model->getUserDetail($user);
      $data['list'] = $this->unit_model->getAkses($user);
      $data['pict'] = $this->session->userdata('pict');
      $data['admin'] = $this->session->userdata('admin');*/
      $this->load->view('ekunbarwidget/suspectlist', $data);
   } 


}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */