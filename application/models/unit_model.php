<?php

/*
 * Database Query
 * @author KUNCORO WICAKSONO ADI BAROTO
 */

class Unit_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function count_failed_tests($tests) {
        $count = 0;

        foreach ($tests as $test) {
            if ($test['Result'] == 'Failed')
                $count++;
        }
        return $count;
    }

    public function login($user, $pass) {
        $sql = "SELECT USERNAME, FIRSTNAME, COMPANYID, COMPANY_NAME, BRANCH, BRANCH_NAME, KODENEGARA, PICT, ADMIN, ekunbar_theme FROM user_master a LEFT JOIN branch b ON a.BRANCH = b.BRANCH_ID LEFT JOIN company c ON a.COMPANYID = c.COMPANY WHERE USERNAME='$user' AND PASSWORD='$pass'";
        $query = $this->db->query($sql); //echo $sql;

        if ($query->num_rows == 1) {
            $row = $query->row();
            $data = array(
                'userid' => $row->USERNAME,
                'name' => $row->FIRSTNAME,
                'from' => $row->BRANCH_NAME,
                'companyid' => $row->COMPANYID,
                'companyname' => $row->COMPANY_NAME,
                'branchid' => $row->BRANCH,
                'pict' => $row->PICT,
                'kode_negara' => $row->KODENEGARA,
                //'email'=> $row->email,
                'admin' => $row->ADMIN,
                'validated' => true
            );
            $this->session->set_userdata($data);
            return true;
        }

        return false;
    }

    public function log_aktifitas($user) {
        $sql = "SELECT count(USERNAME) AS hitung FROM user_master WHERE USERNAME='$user'";
        $query = $this->db->query($sql);
        $row = $query->row();
        $hitung = $row->hitung;
        $when = date('Y-m-d H:i:s');
        $action = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

        if ($hitung == 1) {
            $data = array(
                'user' => $user,
                'when' => $when,
                'action' => $action
            );
            $this->db->insert('tbl_statistics', $data);
            return "success";
        } else {
            return "failed";
        }
    }

    public function getidist() {
        if (date("W") == 1) {
            $hariini = 52;
        } else {
            $hariini = (date("W") - 1);
        }
        $tahunini = date("Y");
        $sql = "SELECT                 
                COUNT(CASE WHEN DSP='DSC' THEN 1 ELSE NULL END) AS MRDSC,
                COUNT(CASE WHEN DSP='DGF' THEN 1 ELSE NULL END) AS MRDGF,
                COUNT(CASE WHEN DSP='SCH' THEN 1 ELSE NULL END) AS MRSCH,
                COUNT(CASE WHEN DSP='TNT' THEN 1 ELSE NULL END) AS MRTNT,
                COUNT(CASE WHEN DSP='DGF' AND PERFORMANCE='FAIL' AND EID_LATE='' THEN 1 ELSE NULL END) AS MRDGFFAIL,
                COUNT(CASE WHEN DSP='DSC' AND PERFORMANCE='FAIL' AND EID_LATE='' THEN 1 ELSE NULL END) AS MRDSCFAIL,
                COUNT(CASE WHEN DSP='SCH' AND PERFORMANCE='FAIL' AND EID_LATE='' THEN 1 ELSE NULL END) AS MRSCHFAIL,
                COUNT(CASE WHEN DSP='TNT' AND PERFORMANCE='FAIL' AND EID_LATE='' THEN 1 ELSE NULL END) AS MRTNTFAIL,
                YEAR(ATA) as YEARNYA, 
                WEEK(ATA,1) as WEEKNYA
                FROM tbl_performance where WEEK(ATA,1) = $hariini and YEAR(ATA) = $tahunini
                ";
        $query = $this->db_idist->query($sql);
        return $query->result_array();
    }

    public function getidistsh() {
        if (date("W") == 1) {
            $hariini = 52;
        } else {
            $hariini = (date("W") - 1);
        }
        $tahunini = date("Y");
        $sql = "SELECT                 
                COUNT(CASE WHEN DSP='DHL' THEN 1 ELSE NULL END) AS MRDSC,
                COUNT(CASE WHEN DSP='DGF' THEN 1 ELSE NULL END) AS MRDGF,
                COUNT(CASE WHEN DSP='SCH' THEN 1 ELSE NULL END) AS MRSCH,
                COUNT(CASE WHEN DSP='TNT' THEN 1 ELSE NULL END) AS MRTNT,
                COUNT(CASE WHEN DSP='DGF' AND FAILURE='LATE' THEN 1 ELSE NULL END) AS MRDGFFAIL,
                COUNT(CASE WHEN DSP='DSC' AND FAILURE='LATE' THEN 1 ELSE NULL END) AS MRDSCFAIL,
                COUNT(CASE WHEN DSP='SCH' AND FAILURE='LATE' THEN 1 ELSE NULL END) AS MRSCHFAIL,
                COUNT(CASE WHEN DSP='TNT' AND FAILURE='LATE' THEN 1 ELSE NULL END) AS MRTNTFAIL,
                YEAR(ATA) as YEARNYA, 
                WEEK(ATA,1) as WEEKNYA
                FROM tbl_performance_sh where WEEK(ATA,1) = $hariini and YEAR(ATA) = $tahunini
                ";
        $query = $this->db_idist->query($sql);
        return $query->result_array();
    }

    public function getefastlist($userid) {
        $sql = "SELECT * FROM `tbl_complaint` WHERE user='kuncoro'";
        $query = $this->db_efast->query($sql);
        return $query->result_array();
    }

    public function getefastdetail($idcomp) {
        $sql = "SELECT * FROM `tbl_complaint` WHERE comp_refference='$idcomp'";
        $query = $this->db_efast->query($sql);
        return $query->result_array();
    }

    public function getmom($user) {
        $sql = "SELECT id_complaint,date_complaint,title,site,category,task,`update`,`update` as textnya ,person_responsibility,person_report,due_date,update_date,status,dsp, DATEDIFF(CURDATE(),`due_date`) AS DifferenceInDays FROM tbl_complaint WHERE ((status = 'On Progress' OR status ='Open') AND `due_date` != '1970-01-01') AND person_responsibility = '$user'
                ORDER BY DifferenceInDays DESC
                LIMIT 0,5";
        $query = $this->db->query($sql); //echo $sql;
        return $query->result_array();
    }

    public function updatePassword($new, $old, $user) {
        $sql = "SELECT count(user) AS hitung FROM user_master WHERE pass='$old' AND user='$user'";
        $query = $this->db->query($sql);
        $row = $query->row();
        $hitung = $row->hitung;

        if ($hitung == 1) {
            $data = array(
                'pass' => $new
            );
            $this->db->where('user', $user);
            $this->db->update('user_master', $data);
            return "success";
        } else {
            return "failed";
        }
    }

    public function updateAccount($post, $user) {
        $sql = "SELECT count(signum) AS hitung FROM tbl_contact WHERE signum='$user'";
        $query = $this->db->query($sql);
        $row = $query->row();
        $hitung = $row->hitung;

        if ($hitung == 1) {
            $data = array(
                'name' => $post['name'],
                'phone' => $post['phone1'],
                'phone2' => $post['phone2'],
                'email' => $post['email'],
                'position' => $post['position']
            );
            $this->db->where('signum', $user);
            $this->db->update('tbl_contact', $data);
            return "success";
        } else {
            return "failed";
        }
    }

    public function resetPassword($new, $user) {
        $sql = "SELECT count(user) AS hitung FROM user_master WHERE user='$user'";
        $query = $this->db->query($sql);
        $row = $query->row();
        $hitung = $row->hitung;
        if ($hitung == 1) {
            $data = array(
                'pass' => $new
            );
            $this->db->where('user', $user);
            $this->db->update('user_master', $data);
            return "success";
        } else {
            return "failed";
        }
    }

    public function resetpicture($user) {
        $sql = "SELECT count(user) AS hitung FROM user_master WHERE user='$user'";
        $query = $this->db->query($sql);
        $row = $query->row();
        $kosong = "";
        $hitung = $row->hitung;

        if ($hitung == 1) {
            $data = array(
                'pict' => $kosong
            );
            $this->db->where('user', $user);
            $this->db->update('user_master', $data);
            return "success";
        } else {
            return "failed";
        }
    }

    public function changepicture($userfile, $old, $user) {
        $sql = "SELECT count(user) AS hitung FROM user_master WHERE pass='$old' AND user='$user'";
        $query = $this->db->query($sql);
        $row = $query->row();
        $hitung = $row->hitung;

        if ($hitung == 1) {
            $data = array(
                'pict' => $userfile
            );
            $this->db->where('user', $user);
            $this->db->update('user_master', $data);
            return "success";
        } else {
            return "failed";
        }
    }

    function my_escapeshellarg($input) {
        $input = str_replace('\'', '\\\'', $input);

        return '\'' . $input . '\'';
    }

    public function addUser($post) {
        $sql = "SELECT count(user) AS hitung FROM user_master WHERE user='$post[username]'";
        $query = $this->db->query($sql);
        $row = $query->row();
        $hitung = $row->hitung;
        $this->load->helper('security');

        $passhash = do_hash($post['password']);
        if ($hitung == 0) {
            $data = array(
                'user' => $post['username'],
                'pass' => $passhash,
                'name' => $post['name'],
                'from' => $post['from'],
                'admin' => $post['admin']
            );
            $this->db->insert('user_master', $data);
            return "success";
        } else {
            return "failed";
        }
    }

    public function deleteUser($user) {
        $sql = "DELETE FROM user_master WHERE user='$user'";
        $query = $this->db->query($sql);

        $sql = "DELETE FROM tbl_akses WHERE nama='$user'";
        $query = $this->db->query($sql);
        return true;
    }

    public function setAdmin($user) {
        $sql = "UPDATE user_master SET admin=0";
        $query = $this->db->query($sql);

        foreach ($user as $key) {
            $data = array(
                'admin' => 1
            );
            $this->db->where('id', $key);
            $this->db->update('user_master ', $data);
        }
        return true;
    }

    public function getUser() {
        //$sql = "SELECT * FROM user_master WHERE `from` = 'LSP/DSC/E' ORDER BY name ASC";
        $sql = "SELECT * FROM user_master ORDER BY name ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getNotification() {
        $sql = "SELECT * FROM tbl_dashboard_notification ORDER BY id_notif DESC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getCountNotification() {
        $sql = "SELECT count(id_notif) AS jumlah FROM tbl_dashboard_notification where status='Active'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getGroup() {
        $sql = "SELECT id,user,name,`from`,admin,pict FROM user_master group by `from` ORDER BY `from` ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getGroupFrom($from) {
        $sql = "SELECT id,user,name,`from`,admin,pict FROM user_master where `from` = '$from' ORDER BY `user` ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getUserDetail($user) {
        $sql = "SELECT * FROM user_master LEFT JOIN branch on user_master.BRANCH = branch.BRANCH_ID WHERE USERNAME = '$user' ORDER BY USERNAME ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getAllUserDetail() {
        $sql = "SELECT *, user_master.firstname AS NAMENYA  FROM user_master LEFT JOIN tbl_contact on user_master.username = tbl_contact.signum WHERE pict != '' ORDER BY username ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getAplikasi() {
        $sql = "SELECT * FROM tbl_aplikasi ORDER BY name_app ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getWidget() {
        $sql = "SELECT * FROM tbl_widget ORDER BY name_widget ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function inputAkses($user, $aplikasi) {
        $this->db->where('nama', $user);
        $this->db->delete('tbl_akses');

        foreach ($aplikasi as $key) {
            $data = array(
                'nama' => $user,
                'aplikasi' => $key
            );
            $this->db->insert('tbl_akses', $data);
        }

        return true;
    }

    public function inputAksesWidget($user, $widget) {
        $this->db->where('nama', $user);
        $this->db->delete('tbl_akseswidget');

        foreach ($widget as $key) {
            $data = array(
                'nama' => $user,
                'widget' => $key
            );
            $this->db->insert('tbl_akseswidget', $data);
        }

        return true;
    }

    public function getAkses($user) {
        $sql = "SELECT * FROM tbl_akses INNER JOIN tbl_aplikasi ON (tbl_akses.aplikasi=tbl_aplikasi.id_app) WHERE nama='$user' ORDER BY name_app ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getAksesGroupEachUser($user) {
        $sql = "SELECT * FROM tbl_akses INNER JOIN tbl_aplikasi ON (tbl_akses.aplikasi=tbl_aplikasi.id_app) WHERE nama='$user' GROUP BY `group` ORDER BY name_app ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getAksesWidget($user) {
        $sql = "SELECT * FROM tbl_akseswidget a INNER JOIN tbl_widget b ON (a.widget=b.id_widget) WHERE nama='$user' ORDER BY name_widget ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getAksesGroup($from) {
        $sql = "SELECT * FROM ( SELECT * FROM tbl_akses LEFT JOIN tbl_aplikasi ON (tbl_akses.aplikasi=tbl_aplikasi.id_app) ORDER BY name_app ASC ) AS IGNORED LEFT JOIN user_master ON (IGNORED.nama=user_master.user) WHERE `from`='$from' ORDER BY name_app ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function dekrip($user) {
        $sql = "SELECT pass FROM user_master WHERE user='$user'";
        $query = $this->db->query($sql);
        $row = $query->row('pass');
        $this->load->helper('security');
        echo do_hash('warehouse');
        echo "<br>";
        echo $row;
    }

    public function getAllContactCard() {
        $sql = "SELECT a.*, b.user AS usernyaitu, b.pict AS picture FROM `tbl_contact` a INNER JOIN `user_master` b ON a.signum = b.user WHERE status = 'Active' ORDER BY a.name";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function loginlog() {
        $sql = "SELECT user, count(*) as totallogin, b.name as namenyaitu, (SELECT count(*) as totalsemualogin FROM `tbl_statistics`) as totalsemualogin FROM `tbl_statistics` a LEFT JOIN `tbl_contact` b ON a.user = b.signum GROUP BY user ORDER BY totallogin desc";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getyourloginact($user) {
        $sql = "SELECT user, count(*) as totallogin, b.name as namenyaitu, (SELECT count(*) as totalsemualogin FROM `tbl_statistics`) as totalsemualogin FROM `tbl_statistics` a LEFT JOIN `tbl_contact` b ON a.user = b.signum WHERE a.user='$user' GROUP BY user ORDER BY totallogin desc";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getyourloginlast($user) {
        $sql = "SELECT * FROM `tbl_statistics` WHERE user='$user' 
ORDER BY `tbl_statistics`.`when` DESC LIMIT 1,1";
        $query = $this->db->query($sql); //echo $sql;
        return $query->result_array();
    }

    public function getpopupshow($user) {
        $sql = "SELECT count(1) as `ekunbarsaiditdeleted` FROM `tbl_popupafterlogin` WHERE username='$user'";
        $query = $this->db->query($sql); //echo $sql;
        return $query->result_array();
    }

    public function deleteshowpopup($user) {
        $grouppopup = "popupwidget";
        $data = array(
            'username' => $user,
            'grouppopup' => $grouppopup
        );
        $this->db->insert('tbl_popupafterlogin', $data);
        return true;
    }

    public function enableshowpopuplogin($user) {
        $this->db->delete('tbl_popupafterlogin', array('username' => $user));
        return true;
    }

    /* for intacom */

    public function getOpenBiding($user) {
        //$sql = "SELECT a.ASSIGNTYPE, b.* FROM lead a RIGHT JOIN lead_detail b ON a.LEADSID = b.LEADSID WHERE a.ASSIGNTYPE = 'OPEN' ORDER BY LEADSID ASC";  	  
        //$sql = "SELECT a.*, d.LEAD_DETAIL_ID, b.STAGENAME, c.SOURCENAME, d.LEAD_STATUS FROM lead a LEFT JOIN stage_master b ON a.STAGEID=b.STAGEID LEFT JOIN source_master c ON a.SOURCEID=c.SOURCEID LEFT JOIN lead_detail d ON a.LEADSID=d.LEADSID WHERE d.LEAD_STATUS = 'Open' GROUP BY d.LEADS_DETAIL_ID ORDER BY d.LEADS_DETAIL_ID DESC";
        //$sql = "SELECT a.*, b.BRANCH_NAME, c.SALESNAME, d.CUSTOMERNAME, e.COMPANY_NAME FROM lead_detail a LEFT JOIN branch b ON a.BRANCH = b.BRANCH_ID LEFT JOIN sales_master c ON a.SALESID=c.SALESID LEFT JOIN customer d ON a.CUSTOMERID = d.CUSTOMERID LEFT JOIN company e ON a.COMPANY=e.COMPANY WHERE a.LEAD_STATUS = 'Open' AND e.COMPANY_NAME = '$company' GROUP BY a.LEAD_DETAIL_ID ORDER BY a.LEAD_DETAIL_ID ASC";
        $sql = "SELECT a.*,f.REFID,
f.SOURCEID,
f.STAGEID,
f.COMPANY_ID,
f.BRANCH_ID,
f.PROJECT_NAME,
f.PROJECT_DESCRIPTION,
f.PROJECT_STATUS,
f.CONST_MONTH,
f.CONST_YEAR,
f.CONST_END_MONTH,
f.CONST_END_YEAR,
f.PROJECT_PROVINCE,
f.TOWN,
f.PROJECT_ADDRESS,
f.PROJECT_CATEGORY,
f.PROJECT_STAGE,
f.ARCHITECDESIGNER,
f.PROJECT_PUBLISH_DATE,
f.DEVPROP_MANAGER,
f.ENGINER_CONSULTANT,
f.MAIN_CONTRACTOR,
f.SUB_CONTRACTOR,
f.PROJECT_VALUE,
f.ADDRESSABLE_VALUE,
f.PICKUPDATE,
f.QUALITY,
f.ASSIGNTYPE, g.SOURCENAME,
 b.BRANCH_NAME, c.SALESNAME, d.CUSTOMERNAME, e.COMPANY_NAME FROM lead_detail a LEFT JOIN branch b ON a.BRANCH = b.BRANCH_ID LEFT JOIN sales_master c ON a.SALESID=c.SALESID LEFT JOIN customer d ON a.CUSTOMERID = d.CUSTOMERID LEFT JOIN company e ON a.COMPANY=e.COMPANY LEFT JOIN lead f ON a.LEADSID=f.LEADSID LEFT JOIN source_master g ON g.SOURCEID=f.SOURCEID  WHERE a.LEAD_STATUS = 'Open' AND e.COMPANY_NAME = '$user' GROUP BY a.LEAD_DETAIL_ID ORDER BY a.LEAD_DETAIL_ID ASC";
        $query = $this->db->query($sql); //echo $sql;
        return $query->result_array();
    }

    public function getLeadsDetailPickedforUser($user) {
        $sql = "SELECT a.*,f.REFID,
f.SOURCEID,
f.STAGEID,
f.COMPANY_ID,
f.BRANCH_ID,
f.PROJECT_NAME,
f.PROJECT_DESCRIPTION,
f.PROJECT_STATUS,
f.CONST_MONTH,
f.CONST_YEAR,
f.CONST_END_MONTH,
f.CONST_END_YEAR,
f.PROJECT_PROVINCE,
f.TOWN,
f.PROJECT_ADDRESS,
f.PROJECT_CATEGORY,
f.PROJECT_STAGE,
f.ARCHITECDESIGNER,
f.PROJECT_PUBLISH_DATE,
f.DEVPROP_MANAGER,
f.ENGINER_CONSULTANT,
f.MAIN_CONTRACTOR,
f.SUB_CONTRACTOR,
f.PROJECT_VALUE,
f.ADDRESSABLE_VALUE,
f.PICKUPDATE,
f.QUALITY,
f.ASSIGNTYPE, g.SOURCENAME,
 b.BRANCH_NAME, c.SALESNAME, d.CUSTOMERNAME, e.COMPANY_NAME FROM lead_detail a LEFT JOIN branch b ON a.BRANCH = b.BRANCH_ID LEFT JOIN sales_master c ON a.SALESID=c.SALESID LEFT JOIN customer d ON a.CUSTOMERID = d.CUSTOMERID LEFT JOIN company e ON a.COMPANY=e.COMPANY LEFT JOIN lead f ON a.LEADSID=f.LEADSID LEFT JOIN source_master g ON g.SOURCEID=f.SOURCEID  WHERE a.LEAD_STATUS = 'Picked' AND a.SALESID = '$user' GROUP BY a.LEAD_DETAIL_ID ORDER BY a.LEAD_DETAIL_ID ASC";
        $query = $this->db->query($sql); //echo $sql;
        return $query->result_array();
    }

    public function getUserInformation() {
        $sql = "SELECT * FROM user_master a LEFT JOIN branch b ON a.BRANCH = b.BRANCH_ID ORDER BY FIRSTNAME ASC";
        $query = $this->db->query($sql); //echo $sql;
        return $query->result_array();
    }

    public function getCompany() {
        $sql = "SELECT * FROM company ORDER BY COMPANY ASC";
        $query = $this->db->query($sql); //echo $sql;
        return $query->result_array();
    }

    public function getCustomer() {
        $sql = "SELECT * FROM customer ORDER BY CUSTOMERNAME ASC";
        $query = $this->db->query($sql); //echo $sql;
        return $query->result_array();
    }

    public function getMonth() {
        $sql = "SELECT * FROM month_master ORDER BY MONTHID ASC";
        $query = $this->db->query($sql); //echo $sql;
        return $query->result_array();
    }

    public function getBranch($id) {
        $sql = "SELECT * FROM branch WHERE BRANCH_ID = '$id' ORDER BY BRANCH_ID ASC";
        $query = $this->db->query($sql); //echo $sql;
        return $query->result_array();
    }

    public function getStageMaster() {
        $sql = "SELECT * FROM stage_master ORDER BY STAGEID ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getSegmentMaster() {
        $sql = "SELECT * FROM segment ORDER BY SEGMENTID ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getSalesMaster() {
        $sql = "SELECT * FROM sales_master WHERE ACTIVE = 1 ORDER BY SALESID ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getSourceList() {
        $sql = "SELECT * FROM source_master ORDER BY SOURCEID ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getStageList() {
        $sql = "SELECT * FROM stage_master ORDER BY STAGEID ASC";
        $query = $this->db->query($sql); //echo $sql;
        return $query->result_array();
    }

    public function getCountOpenBiding($company) {
        $sql = "SELECT COUNT(1) as jumlah FROM lead a RIGHT JOIN lead_detail b ON a.LEADSID = b.LEADSID LEFT JOIN company c ON b.COMPANY=c.COMPANY WHERE a.ASSIGNTYPE = 'OPEN' AND c.COMPANY_NAME = '$company'";
        $query = $this->db->query($sql); //echo $sql;
        return $query->result_array();
    }

    public function getLead($id) {
        $sql = "SELECT * FROM (SELECT a.*, b.STAGENAME, c.SOURCENAME, d.LEAD_STATUS FROM lead a LEFT JOIN stage_master b ON a.STAGEID=b.STAGEID LEFT JOIN source_master c ON a.SOURCEID=c.SOURCEID LEFT JOIN lead_detail d ON a.LEADSID=d.LEADSID WHERE CREATENAME = '$id' ORDER BY d.LEAD_STATUS,LEADSID DESC) AS EKUNBARGROUPING GROUP BY LEADSID";
        //$sql = "SELECT * FROM lead WHERE BRANCH_ID = '$id' ORDER BY LEADSID ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getLeadforUser($user) {
        $sql = "SELECT * FROM lead WHERE CREATENAME = '$user' ORDER BY LEADSID ASC";
        $query = $this->db->query($sql); //echo $sql;
        return $query->result_array();
    }

    public function getLeadRegistration($id) {
        $sql = "SELECT a.*,b.FIRSTNAME,c.STAGENAME FROM lead a LEFT JOIN user_master b ON a.CREATENAME=b.USERNAME LEFT JOIN stage_master c ON a.STAGEID=c.STAGEID WHERE LEADSID = '$id' ORDER BY LEADSID ASC";
        $query = $this->db->query($sql); //echo $sql;
        return $query->result_array();
    }

    public function updateLead($leadid, $user, $post) {

        $today = date('Y-m-d');
        $todayhours = 5 + date('H');
        $todayminutes = date('i:s');
        $todaynya = $today . " " . $todayhours . ":" . $todayminutes;
        /*
          //input stage
          if($post['select-assign-type']=='Picked'){
          $STAGEID = '3';
          }
          else if($leadid==0){
          $STAGEID = '2';
          }
          else if($post['select-assign-type']=='Open'){
          $STAGEID = '2';
          }

          //input pickup date
          if($post['select-assign-type']=='Picked'){
          $PICKUPDATE = $today;
          }
          else{
          $PICKUPDATE = '';
          } */

        $data = array(
            'SOURCEID' => $post['select-source-id'],
            'CREATENAME' => $post['input-name'],
            'CREATEDATE' => $post['input-date'],
            'STAGEID' => '2',
            'PROJECT_NAME' => $post['input-project-name'],
            'PROJECT_DESCRIPTION' => $post['input-project-description'],
            'PROJECT_STATUS' => $post['input-project-status'],
            'CONST_MONTH' => $post['select-const-month'],
            'CONST_YEAR' => $post['select-const-year'],
            'CONST_END_MONTH' => $post['select-const-end-month'],
            'CONST_END_YEAR' => $post['select-const-end-year'],
            'PROJECT_PROVINCE' => $post['select-province'],
            'TOWN' => $post['select-town'],
            'PROJECT_ADDRESS' => $post['input-address'],
            'PROJECT_CATEGORY' => $post['input-project-category'],
            'PROJECT_STAGE' => $post['input-project-stage'],
            'ARCHITECDESIGNER' => $post['input-architect-designer'],
            'PROJECT_PUBLISH_DATE' => $post['input-publish-date'],
            'DEVPROP_MANAGER' => $post['input-dev-manager'],
            'ENGINER_CONSULTANT' => $post['input-engineer-consultant'],
            'MAIN_CONTRACTOR' => $post['input-main-contractor'],
            'SUB_CONTRACTOR' => $post['input-sub-contractor'],
            'PROJECT_VALUE' => $post['input-project-value'],
            'ADDRESSABLE_VALUE' => $post['input-addressable-value'],
            //'PICKUPDATE' => $PICKUPDATE,
            //'QUALITY' => $post['select-quality'],
            //'ASSIGNTYPE' => $post['select-assign-type'],
            'BRANCH_ID' => $post['input-branch'],
            'COMPANY_ID' => $post['input-company-id']
        );
        if ($leadid == 0) {
            $this->db->insert('lead', $data);

            $datahistory = array(
                'LEADSID' => $leadid,
                'MODIFYNAME' => $user,
                'MODIFYDATE' => $todaynya,
                'HISTORY_TYPE' => "INSERT"
            );
        } else {
            $this->db->where('LEADSID', $leadid);
            $this->db->update('lead', $data);

            $datahistory = array(
                'LEADSID' => $leadid,
                'MODIFYNAME' => $user,
                'MODIFYDATE' => $todaynya,
                'HISTORY_TYPE' => "UPDATE"
            );
        }
        $this->db->insert('lead_history', $datahistory);
        return "success";
    }

    public function deleteLead($leadid) {
        $this->db->delete('lead', array('LEADSID' => $leadid));

        $datahistory = array(
            'LEADSID' => $leadid,
            'MODIFYNAME' => $user,
            'MODIFYDATE' => $todaynya,
            'HISTORY_TYPE' => "DELETE"
        );

        $this->db->insert('lead_history', $datahistory);
        return "success";
    }

    public function getLeadDetail($id) {
        $sql = "SELECT a.LEADSID AS LEADSIDA, b.*, c.COMPANY_NAME FROM lead a RIGHT JOIN lead_detail b ON a.LEADSID = b.LEADSID LEFT JOIN company c ON b.COMPANY=c.COMPANY  WHERE a.LEADSID = '$id' ORDER BY a.LEADSID ASC";

        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function updateLeadDetail($leaddetailid, $post, $name) {
        $today = date("Y-m-d");
        $data = array(
            'LEAD_DETAIL_ID' => $post['input-lead-detail-id'],
            'COMPANY' => $post['input-company'],
            'LEADSID' => $post['input-lead-id'],
            'SALESID' => $name,
            'CUSTOMERPLANNED' => $post['input-customer'],
            'PICKUP_DATE' => $post['input-pickup-date'],
            'BRANCH' => $post['input-branch'],
            'QUALITY' => $post['select-quality'],
            'LEAD_STATUS' => $post['select-lead-status']
        );
        if ($leaddetailid == 0) {
            $this->db->insert('lead_detail', $data);
            return "successadd";
        } else {
            if ($post['select-quality'] == 'Qualified') {
                $dataforlead = array(
                    'LEAD_DETAIL_ID' => $post['input-lead-detail-id'],
                    'COMPANY' => $post['input-company'],
                    'LEADSID' => $post['input-lead-id'],
                    'SALESID' => $name,
                    'CUSTOMERPLANNED' => $post['input-customer'],
                    'PICKUP_DATE' => $post['input-pickup-date'],
                    'BRANCH' => $post['input-branch'],
                    'QUALITY' => $post['select-quality'],
                    'LEAD_STATUS' => "Verified"
                );
                $dataforsuspect = array(
                    'LEADSDETAILID' => $post['input-lead-detail-id'],
                    'COMPANY' => $post['input-company'],
                    'LEADSID' => $post['input-lead-id'],
                    'SALESID' => $name,
                    'STAGEID' => "3",
                    'CUSTOMERPLANNED' => $post['input-customer'],
                    'DESCRIPTION' => $post['input-description'],
                    'BRANCH' => $post['input-branch'],
                    'CREATENAME' => $name,
                    'CREATEDATE' => $today,
                    'STATUS' => "Verified"
                );

                $this->db->where('LEAD_DETAIL_ID', $leaddetailid);
                $this->db->update('lead_detail', $dataforlead);
                $this->db->insert('suspect', $dataforsuspect);
                return "successaddsuspect";
            }
            if ($post['select-lead-status'] == 'Picked') {
                $dataforleadpicked = array(
                    'LEAD_DETAIL_ID' => $post['input-lead-detail-id'],
                    'COMPANY' => $post['input-company'],
                    'LEADSID' => $post['input-lead-id'],
                    'SALESID' => $name,
                    'CUSTOMERPLANNED' => $post['input-customer'],
                    'PICKUP_DATE' => $today,
                    'BRANCH' => $post['input-branch'],
                    'QUALITY' => $post['select-quality'],
                    'LEAD_STATUS' => $post['select-lead-status']
                );

                $this->db->where('LEAD_DETAIL_ID', $leaddetailid);
                $this->db->update('lead_detail', $dataforleadpicked);
                return "successedit";
            } else {
                $this->db->where('LEAD_DETAIL_ID', $leaddetailid);
                $this->db->update('lead_detail', $data);
                return "successedit";
            }
        }
    }

    public function getupdateLeadDetail() {
        $sql = "SELECT MAX(LEADSID) AS LEADSID FROM lead";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getLeadDetailRegistration($id) {
        $sql = "SELECT * FROM lead_detail WHERE LEAD_DETAIL_ID = '$id'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getLeadDetailRegistrationNotes($header) {
        $sql = "SELECT a.*,f.REFID,
f.SOURCEID,
f.STAGEID,
f.COMPANY_ID,
f.BRANCH_ID,
f.PROJECT_NAME,
f.PROJECT_DESCRIPTION,
f.PROJECT_STATUS,
f.CONST_MONTH,
f.CONST_YEAR,
f.CONST_END_MONTH,
f.CONST_END_YEAR,
f.PROJECT_PROVINCE,
f.TOWN,
f.PROJECT_ADDRESS,
f.PROJECT_CATEGORY,
f.PROJECT_STAGE,
f.ARCHITECDESIGNER,
f.PROJECT_PUBLISH_DATE,
f.DEVPROP_MANAGER,
f.ENGINER_CONSULTANT,
f.MAIN_CONTRACTOR,
f.SUB_CONTRACTOR,
f.PROJECT_VALUE,
f.ADDRESSABLE_VALUE,
f.PICKUPDATE,
f.QUALITY,
f.ASSIGNTYPE, g.SOURCENAME,
 b.BRANCH_NAME, c.SALESNAME, d.CUSTOMERNAME, e.COMPANY_NAME FROM lead f LEFT JOIN lead_detail a ON a.LEADSID=f.LEADSID LEFT JOIN branch b ON a.BRANCH = b.BRANCH_ID LEFT JOIN sales_master c ON a.SALESID=c.SALESID LEFT JOIN customer d ON a.CUSTOMERID = d.CUSTOMERID LEFT JOIN company e ON a.COMPANY=e.COMPANY  LEFT JOIN source_master g ON g.SOURCEID=f.SOURCEID  WHERE a.LEADSID = $header GROUP BY a.LEADSID ORDER BY a.LEAD_DETAIL_ID ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getSuspect($id) {
        $sql = "SELECT a.*, b.BRANCH_NAME, c.SALESNAME, d.CUSTOMERNAME, e.COMPANY_NAME, f.STAGENAME FROM suspect a LEFT JOIN branch b ON a.BRANCH = b.BRANCH_ID LEFT JOIN sales_master c ON a.SALESID=c.SALESID LEFT JOIN customer d ON a.CUSTOMERID = d.CUSTOMERID LEFT JOIN company e ON a.COMPANY=e.COMPANY LEFT JOIN stage_master f ON a.STAGEID = f.STAGEID WHERE a.CREATENAME = '$id' AND STATUS != 'Create Quotation' GROUP BY SUSPECTID ORDER BY SUSPECTID ASC";
        $query = $this->db->query($sql); //echo $sql;
        return $query->result_array();
    }

    public function getSuspectDetail($id) {
        $sql = "SELECT a.SUSPECTID AS SUSPECTIDA, b.* FROM suspect a RIGHT JOIN suspect_detail b ON a.SUSPECTID = b.SUSPECTID WHERE a.SUSPECTID = '$id' ORDER BY a.SUSPECTID ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getProduct() {
        $sql = "SELECT * FROM product_structure";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getAccessories() {
        $sql = "SELECT * FROM accessories_structure";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getAccessoriesChoosed($prospectid) {
        $sql = "SELECT * FROM accessories_choosed WHERE PROSPECTID = '$prospectid'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getTotalChoosed($prospectid) {
        $sql = "SELECT  a.*, (UNITVALUE*IFNULL(a.QUANTITY,0))+SUM(PRICE) AS TOTALPRICE FROM prospect a LEFT JOIN accessories_choosed b ON a.PROSPECTID=b.PROSPECTID WHERE a.PROSPECTID = '$prospectid'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getProspectDetail($id) {
        $sql = "SELECT a.PROSPECTID AS PROSPECTIDA, a.CREATENAME, d.CUSTOMERNAME as CUSTOMERNAME, b.PRODUCTID, b.QUANTITY, b.UOM, b.TRANSACTION_MODEL, CONCAT(e.PRODUCTNAME, ' (', b.QUANTITY, ' ', b.UOM, ') ', e.BRAND , ' ( ', b.TRANSACTION_MODEL , ') ') AS DETAILPRODUCTNYA, d.ADDRESS1 as ADDRESS1, d.CITY as CITY, CONCAT_WS('-', a.SUSPECTID, a.SUSPECT_DETAIL_ID) AS SUSPECTIDA, CONCAT_WS('-', c.LEADSID, c.LEADSDETAILID) AS LEADSIDA FROM prospect a LEFT JOIN suspect c ON a.SUSPECTID = c.SUSPECTID LEFT JOIN suspect_detail b ON a.SUSPECT_DETAIL_ID = b.SUSPECT_DETAIL_ID LEFT JOIN product_structure e ON b.PRODUCTID = e.PRODUCTID LEFT JOIN customer d ON a.CUSTOMERID = d.CUSTOMERID WHERE a.PROSPECTID = '$id' ORDER BY a.PROSPECTID ASC";
        $query = $this->db->query($sql); //echo $sql;
        return $query->result_array();
    }

    public function updateSuspect($suspectid, $user, $post) {
        $today = date('Y-m-d');
        $todayhours = 5 + date('H');
        $todayminutes = date('i:s');
        $todaynya = $today . " " . $todayhours . ":" . $todayminutes;

        //input stage
        $STAGEID = '3';

        $data = array(
            'LEADSID' => $post['select-lead-id'],
            'COMPANY' => $post['input-company'],
            'CREATEDATE' => $post['input-date'],
            'CUSTOMERPLANNED' => $post['input-customer-planned'],
            'CREATENAME' => $post['input-name'],
            'BRANCH' => $post['input-branch'],
            'SALESID' => $post['select-sales-id'],
            'CUSTOMERID' => $post['select-customer-actual'],
            'DESCRIPTION' => $post['input-description'],
            'STAGEID' => $STAGEID
        );
        if ($suspectid == 0) {
            $this->db->insert('suspect', $data);

            $datahistory = array(
                'SUSPECTID' => $suspectid,
                'MODIFYNAME' => $user,
                'MODIFYDATE' => $todaynya,
                'HISTORY_TYPE' => "INSERT"
            );
        } else {
            $test = $this->db->where('SUSPECTID', $suspectid);
            $this->db->update('suspect', $data);

            $datahistory = array(
                'SUSPECTID' => $suspectid,
                'MODIFYNAME' => $user,
                'MODIFYDATE' => $todaynya,
                'HISTORY_TYPE' => "UPDATE"
            );
        }

        $this->db->insert('suspect_history', $datahistory);
        return "success";
    }

    public function deleteSuspect($suspectid) {
        $this->db->delete('suspect', array('SUSPECTID' => $suspectid));
        return "success";
    }

    public function updateSuspectDetail($detailid, $post) {
        $data = array(
            'SEGMENT_ID' => $post['input-segment-id'],
            'PRODUCTID' => $post['select-product-id'],
            'SUSPECTID' => $post['input-suspect-id'],
            'QUANTITY' => $post['input-quantity'],
            'UOM' => $post['input-uom'],
            'ODDS' => $post['input-odds'],
            'TRANSACTION_MODEL' => $post['select-transaction-model'],
            'STATUS' => $post['select-lead-status']
        );
        if ($detailid == 0) {
            $this->db->insert('suspect_detail', $data);
        } else {
            $this->db->where('SUSPECT_DETAIL_ID', $detailid);
            $this->db->update('suspect_detail', $data);
        }


        if ($post['select-lead-status'] == 'Create_Quotation') {
            $STAGEID = '5';
            $STATUSNYA = 'Prospect';
            $dataprospect = array(
                'SUSPECTID' => $post['input-suspect-id'],
                'SUSPECT_DETAIL_ID' => $detailid,
                'COMPANY' => $post['input-company'],
                'CREATEDATE' => $post['input-date'],
                'CREATENAME' => $post['input-name'],
                'BRANCH' => $post['input-branch'],
                'SALESID' => $post['select-sales-id'],
                'STAGEID' => $STAGEID,
                'CUSTOMERID' => $post['select-customer'],
                'DESCRIPTION' => $post['input-description'],
                'STATUS' => $STATUSNYA,
                'PRODUCTID' => $post['select-product-id'],
                'QUANTITY' => $post['input-quantity'],
                'UOM' => $post['input-uom'],
                'TRANSACTION_MODEL' => $post['select-transaction-model']
            );
            $this->db->insert('prospect', $dataprospect);
            return "successaddprospect";
        } else {
            return "success";
        }
    }

    public function getLastProspectRegistration() {
        $sql = "SELECT max(PROSPECTID) as idlast FROM prospect";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        //$row = mysql_fetch_object($result);
        return $hasil;
    }

    public function getSuspectDetailRegistration($id) {
        $sql = "SELECT * FROM suspect_detail WHERE SUSPECT_DETAIL_ID = '$id'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getCountSuspect($user) {
        $sql = "SELECT count(1) AS jumlah FROM suspect WHERE CREATENAME = '$user' ORDER BY LEADSID ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getSuspectforUser($user) {
        //$sql = "SELECT * FROM suspect WHERE CREATENAME = '$user' ORDER BY SUSPECTID ASC";
        $sql = "SELECT a.* , b.BRANCH_NAME,c.STAGENAME, d.SALESNAME, e.CUSTOMERNAME, f.COMPANY_NAME FROM suspect a LEFT JOIN branch b ON a.BRANCH = b.BRANCH_ID LEFT JOIN stage_master c ON a.STAGEID=c.STAGEID LEFT JOIN sales_master d ON a.SALESID=d.SALESID LEFT JOIN customer e ON a.CUSTOMERID = e.CUSTOMERID LEFT JOIN company f ON a.COMPANY=f.COMPANY WHERE a.CREATENAME = '$user' ORDER BY a.SUSPECTID ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getSuspectRegistration($id) {
        //$sql = "SELECT a.*,b.FIRSTNAME,c.STAGENAME FROM lead a LEFT JOIN user_master b ON a.CREATENAME=b.USERNAME LEFT JOIN stage_master c ON a.STAGEID=c.STAGEID WHERE LEADSID = '$id' ORDER BY LEADSID ASC";
        //$sql = "SELECT a.*, b.BRANCH_NAME, c.SALESNAME, d.CUSTOMERNAME, e.COMPANY_NAME FROM lead_detail a LEFT JOIN branch b ON a.BRANCH = b.BRANCH_ID LEFT JOIN sales_master c ON a.SALESID=c.SALESID LEFT JOIN customer d ON a.CUSTOMERID = d.CUSTOMERID LEFT JOIN company e ON a.COMPANY=e.COMPANY WHERE a.LEAD_STATUS = 'Open' GROUP BY a.LEAD_DETAIL_ID ORDER BY a.LEAD_DETAIL_ID ASC";
        $sql = "SELECT a.* , b.BRANCH_NAME,c.STAGENAME, d.SALESNAME, e.CUSTOMERNAME, f.COMPANY_NAME  FROM suspect a LEFT JOIN branch b ON a.BRANCH = b.BRANCH_ID LEFT JOIN stage_master c ON a.STAGEID=c.STAGEID LEFT JOIN sales_master d ON a.SALESID=d.SALESID LEFT JOIN customer e ON a.CUSTOMERID = e.CUSTOMERID LEFT JOIN company f ON a.COMPANY=f.COMPANY WHERE SUSPECTID = '$id' ORDER BY SUSPECTID ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getProspect($id) {
        $sql = "SELECT * FROM prospect WHERE CREATENAME = '$id' ORDER BY PROSPECTID ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function updateProspect($prospectid, $post) {
        $data = array(
            'SUSPECTID' => $post['select-suspect-id'],
            'QUOTATIONNO' => $post['input-quotation'],
            'STARTDATE' => $post['input-start-date'],
            'EXPIREDATE' => $post['input-expire-date'],
            'SALESID' => $post['input-sales-id'],
            'STATUS' => $post['input-status']
        );
        if ($prospectid == 0) {
            $this->db->insert('prospect', $data);
        } else {
            $this->db->where('PROSPECTID', $prospectid);
            $this->db->update('prospect', $data);
        }
        return "success";
    }

    public function updateQuotation($prospectid, $post) {
        $data = array(
            'QUANTITY' => $post['quantity'],
            'UNITVALUE' => $post['unitvalue'],
            'PRICEUNITNOTES' => $post['priceunitnote'],
            'DELIVERYNOTES' => $post['deliverynote'],
            'PAYMENTNOTES' => $post['paymentnote'],
            'WARRANTYNOTES' => $post['warrantynote'],
            'VALIDITYNOTES' => $post['validitynote'],
        );
        if ($prospectid == 0) {
            $this->db->insert('prospect', $data);
        } else {
            $this->db->where('PROSPECTID', $prospectid);
            $this->db->update('prospect', $data);
        }
        return "success";
    }

    public function getProspectRegistration($id) {
        $sql = "SELECT * FROM prospect WHERE PROSPECTID = '$id' ORDER BY PROSPECTID ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getProspectRegistrationNotes($id) {
        $sql = "SELECT aaa.*,a.*,f.REFID, f.SOURCEID, f.STAGEID, f.COMPANY_ID, f.BRANCH_ID, f.PROJECT_NAME, f.PROJECT_DESCRIPTION, f.PROJECT_STATUS, f.CONST_MONTH, f.CONST_YEAR, f.CONST_END_MONTH, f.CONST_END_YEAR, f.PROJECT_PROVINCE, f.TOWN, f.PROJECT_ADDRESS, f.PROJECT_CATEGORY, f.PROJECT_STAGE, f.ARCHITECDESIGNER, f.PROJECT_PUBLISH_DATE, f.DEVPROP_MANAGER, f.ENGINER_CONSULTANT, f.MAIN_CONTRACTOR, f.SUB_CONTRACTOR, f.PROJECT_VALUE, f.ADDRESSABLE_VALUE, f.PICKUPDATE, f.QUALITY, f.ASSIGNTYPE, g.SOURCENAME, b.BRANCH_NAME, c.SALESNAME, d.CUSTOMERNAME, e.COMPANY_NAME
                  FROM prospect aaa LEFT JOIN suspect bbb ON aaa.SUSPECTID=bbb.SUSPECTID LEFT JOIN lead f ON bbb.LEADSID=f.LEADSID LEFT JOIN lead_detail a ON a.LEADSID=f.LEADSID LEFT JOIN branch b ON a.BRANCH = b.BRANCH_ID LEFT JOIN sales_master c ON a.SALESID=c.SALESID LEFT JOIN customer d ON a.CUSTOMERID = d.CUSTOMERID LEFT JOIN company e ON a.COMPANY=e.COMPANY LEFT JOIN source_master g ON g.SOURCEID=f.SOURCEID  WHERE PROSPECTID = '$id' GROUP BY PROSPECTID  ORDER BY PROSPECTID  ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getProspectRegistrationDetail($id) {
        $sql = "SELECT 
				k.ACCESORIESID, 
				k.SPECIFICATION as ASSSPEC,
				k.PRICE AS ASSUNITVALUE, 
				k.UOM as ASSUOM,				
				1 AS ASSQUANTITY, 
				aaa.PROSPECTID as PROSPECTIDA, 
				aaa.CREATENAME as CREATENAME,
				aaa.QUANTITY, 
				aaa.UOM,
				aaa.UNITVALUE, 
				aaa.PRICEUNITNOTES, 
				aaa.PAYMENTNOTES, 
				aaa.DELIVERYNOTES,
				aaa.WARRANTYNOTES, 
				aaa.VALIDITYNOTES,
				aaa.QUOTATIONNO,
				aaa.CREATEDATE,
				j.PRODUCTNAME, 
				j.SPECIFICATION,  
				h.ADDRESS1, 
				h.CUSTOMERNAME, 
				i.CONTACTNAME, 
				i.PHONE as CONTACTPERSONPHONE, 
				f.REFID, 
				f.SOURCEID, 
				f.STAGEID, 
				f.COMPANY_ID, 
				f.BRANCH_ID, 
				f.PROJECT_NAME, 
				f.PROJECT_DESCRIPTION, 
				f.PROJECT_STATUS, 
				f.CONST_MONTH, 
				f.CONST_YEAR, 
				f.CONST_END_MONTH, 
				f.CONST_END_YEAR, 
				f.PROJECT_PROVINCE, 
				f.TOWN, 
				f.PROJECT_ADDRESS, 
				f.PROJECT_CATEGORY, 
				f.PROJECT_STAGE, 
				f.ARCHITECDESIGNER, 
				f.PROJECT_PUBLISH_DATE, 
				f.DEVPROP_MANAGER, 
				f.ENGINER_CONSULTANT, 
				f.MAIN_CONTRACTOR, 
				f.SUB_CONTRACTOR, 
				f.PROJECT_VALUE, 
				f.ADDRESSABLE_VALUE, 
				f.PICKUPDATE, 
				f.QUALITY, 
				f.ASSIGNTYPE, 
				g.SOURCENAME, 
				b.BRANCH_NAME,
				b.BRANCH_ID,
				c.SALESNAME,
				c.MOBILE,
				c.EMAIL,
				e.COMPANY,
				e.COMPANY_NAME
                  FROM prospect aaa 
				  RIGHT JOIN accessories_choosed k ON aaa.PROSPECTID=k.PROSPECTID 
				  LEFT JOIN suspect bbb ON aaa.SUSPECTID=bbb.SUSPECTID 
				  LEFT JOIN lead f ON bbb.LEADSID=f.LEADSID 
				  LEFT JOIN lead_detail a ON a.LEADSID=f.LEADSID 
				  LEFT JOIN branch b ON a.BRANCH = b.BRANCH_ID 
				  LEFT JOIN sales_master c ON aaa.SALESID=c.SALESID
				  LEFT JOIN company e ON a.COMPANY=e.COMPANY 
				  LEFT JOIN source_master g ON g.SOURCEID=f.SOURCEID 
				  LEFT JOIN customer h ON aaa.CUSTOMERID=h.CUSTOMERID 
				  LEFT JOIN customer_contact_person i ON h.CONTACTID=i.CONTACTID 
				  LEFT JOIN product_structure j ON aaa.PRODUCTID=j.PRODUCTID 
				  WHERE aaa.PROSPECTID = '$id' ORDER BY aaa.PROSPECTID  ASC";
        $query = $this->db->query($sql); //echo $sql;
        return $query->result_array();
    }

    public function insertAccesoriesChoosed($data, $prospectid) {

        $sql = "SELECT count(1) as hitung FROM accessories_choosed WHERE PROSPECTID='$prospectid'";
        $query = $this->db->query($sql);
        $cek = $query->row('hitung');

        if ($cek != 0) {
            $this->db->where('PROSPECTID', $prospectid);
            $this->db->delete('accessories_choosed');
        }

        $cdata = count($data['ACCESORIESID']);
        //echo "CDATA : ".$cdata;
        //get count values
        $rValue = ($cdata ? $cdata - 1 : 0);
        for ($i = 0; $i < $cdata; $i++) {
            if ($data['ACCESORIESID'][$i] != '') {
                $pieces[$i] = explode("-kuncoro-", $data['ACCESORIESID'][$i]);
                $ACCESORIESID[$i] = $pieces[$i][0];
                $ACCESORIESNAME[$i] = $pieces[$i][1];
                $ACCESORIESPRICE[$i] = $pieces[$i][2];
                $cValue = "('" . $ACCESORIESID[$i] . "','" . $ACCESORIESNAME[$i] . "','" . $ACCESORIESPRICE[$i] . "','" . $ACCESORIESNAME[$i] . "','" . $prospectid . "')";
                $sql = "INSERT INTO accessories_choosed (`ACCESORIESID`, `ACCESORIESNAME`, `PRICE`, `SPECIFICATION`, `PROSPECTID`) VALUES $cValue";
                $this->db->query($sql);  //echo $sql;
            }
        }
        return true;
    }

}
