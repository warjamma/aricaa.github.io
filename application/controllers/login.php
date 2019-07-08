<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	// public function index()
	// {
		
	// 	//$this->load->view('edit_account');

		

	// }
	// public function getdata()
	// {
	// 	$data['title']='CodeIgniter Simple Login Form With Session';
	// 	$ketqua=$this->login_model->loadaccount();
	// 	var_dump($ketqua);
	// 	// die();
	// 	$this->session->set_userdata($ketqua);
	// 	//$this->session->unset_userdata('suachua');
	// 	$ketqua=['mangdl'=>$ketqua,'title'=>$data];
	// 	$this->load->view('edit_account', $ketqua, FALSE);
	// }
	 function login()  
      {  
           //http://localhost/tutorial/codeigniter/main/login  
           $data['title'] = 'CodeIgniter Simple Login Form With Sessions';  
           $this->load->view("login_view", $data);  
      } 
	public function login_validation()
	{
		$this->load->library('form_validation');  
           $this->form_validation->set_rules('username', 'Username', 'required');  
           $this->form_validation->set_rules('password', 'Password', 'required');  
           if($this->form_validation->run())  
           {  
                //true  
                $username = $this->input->post('username');  
                $password = $this->input->post('password');  
                //model function  
                //$this->load->model('main_model');  
                if($this->login_model->can_login($username, $password))  
                {  
                     $session_data = array(  
                          'username'     =>     $username  
                     );  
                     $this->session->set_userdata($session_data);  
                     redirect(base_url() . 'login/enter');  
                }  
                else  
                {  
                     $this->session->set_flashdata('error', 'Invalid Username and Password');  
                     redirect(base_url() . 'login/login');  
                }  
           }  
           else  
           {  
                //false  
                $this->login();  
           }  
	}
	public function enter()
	{
		if($this->session->userdata('username') != '')  
           {  
                echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>';  
                echo '<label><a href="'.base_url

().'login/logout">Logout</a></label>';  
           }  
           else  
           {  
                redirect(base_url() . 'login/login');  
           }  
	}
	public function logout()
	{
		$this->session->unset_userdata('username');  
        redirect(base_url() . 'login/login');  
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */