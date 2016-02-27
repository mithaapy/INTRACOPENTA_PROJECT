<?php if (!defined('BASEPATH')) die();
class Ekunbarprototype extends Main_Controller {


   public function myprofile($ekunbarseenpeople){

    $user = $ekunbarseenpeople;
 
        
    if($ekunbarseenpeople!=""){
      $data['name'] = $ekunbarseenpeople;

      $this->load->model('unit_model');
      $data['list'] = $this->unit_model->getAkses($user);
      $data['pict'] = $this->session->userdata('pict');
      $data['userlengkap'] = $this->unit_model->getUserDetail($user);
      $data['userSemualengkap'] = $this->unit_model->getAllUserDetail();
      $data['admin'] = $this->session->userdata('admin');
      //$this->load->view('menu', $data);
      $this->load->view('ekunbarprototype/profileme', $data);
    }
    else{
      redirect(base_url());
    }
   }


   public function iboard()
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
      $this->load->model('unit_model');
      $data['name'] = $name;
      $data['from'] = $from;
      $data['user'] = $user;
      $this->load->model('unit_model');
      $data['popupshow'] = $this->unit_model->getpopupshow($user);
      $data['userlengkap'] = $this->unit_model->getUserDetail($user);
      $data['notif'] = $this->unit_model->getNotification();
      $data['countnotif'] = $this->unit_model->getCountNotification();
      $data['idist'] = $this->unit_model->getidistsh();
      $data['yourlogin'] = $this->unit_model->getyourloginact($user);
      $data['mom'] = $this->unit_model->getmom($user);
      $data['widget'] = $this->unit_model->getAksesWidget($user);
      $data['lastlog'] = $this->unit_model->getyourloginlast($user);
      $data['listGroupUser'] = $this->unit_model->getAksesGroupEachUser($user);
      $data['list'] = $this->unit_model->getAkses($user);
      $data['pict'] = $this->session->userdata('pict');
      $data['admin'] = $this->session->userdata('admin');
      setcookie("user",$user,time()+5400,"/",".eidwhd.com");
      setcookie("namenya",$name,time()+5400,"/",".eidwhd.com");
      setcookie("fromnya",$from,time()+5400,"/",".eidwhd.com");

      setcookie("email",$email,time()+5400,"/",".eidwhd.com");
      $this->load->view('ekunbarprototype/iboardwelcome', $data);
      ini_set('session.cookie_domain','.eidhwhd.com');
    }else{
      redirect(base_url());
    }
   }

}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */