

<!--Login Authentication and Information -->


<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Login extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->database();
    }
    
	public function index(){
        $this->load->view('login_page');
        $this->load->view('footer');
    }

    function auth() {
        $email    = $this->input->post('email', TRUE);
        $password = $this->input->post('password', TRUE);
        $result   = $this->Login_model->check_user($email, $password);
        if(($result->num_rows())> 0){
            $data       = $result->row_array();
            $stud_id         = $data['stud_id'];
            $email      = $data['email'];
            $fullName  = $data['full_name'];
            $usertype   = $data['usertype'];
            $gender     = $data['gender'];
            $password  = $data['password'];
            $sesdata    =  array(
                'stud_id'        => $stud_id,
                'email'     => $email,
                'full_name'  => $fullName,
                'gender'    => $gender,
                'usertype'  => $usertype,
                'password'  => $password,
                'logged_in' => TRUE
            );
            $this->session->set_userdata("userdata", $sesdata);
            if($usertype === '1'){
                redirect('Admin');
            }elseif($usertype === '2'){
                redirect('User');
            }
        } else{
            echo "<script> alert('Access denied!');history.go(-1); </script>";
        }  
        $this->load->view('navi');
        $this->load->view('login_page');
        $this->load->view('footer');

    }
    public function Logout()
    {
        

        $this->session->sess_destroy();
        
        redirect('home');
    }
    public function myDataInfo(){
      
        $resdata['resdata'] = $this->session->userdata;
        #print_r($resdata['userdata']['email']);
        $this->load->view('user_head');
        $this->load->view('user_navi');
        $this->load->view('user_nview',$resdata);
        $this->load->view('user_footer');
      
    }

}