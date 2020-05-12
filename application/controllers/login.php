<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
		 function __construct()
	 {
	   parent::__construct();
	   $this->load->model("user_model");
	// if($this->session->userdata('logged_in') !== TRUE){
	// redirect(base_url('login'));
	// 	}
}
	function index()
	{
	$this->load->library("Session");
	if($this->session->userdata('logged_in') !== TRUE)
	{
    $this->load->view('login');
    }else
    {
    	redirect('Dashboard');
    }
		// $this->load->view('login');
	}

	function verify()
	{
		$this->load->library("Session");
		$user_email    = $this->input->post('email',TRUE);
	    $password = md5($this->input->post('password',TRUE));
	    $this->load->model('user_model');
	    $validate = $this->user_model->validate($user_email,$password);
	    if($validate->num_rows() > 0){
	        $data  = $validate->row_array();
	        $email = $data['email'];
	        $password = $data['password'];
	        $su = $data['su'];
	        $uid   = $data['uid'];
	        $first_name  = $data['first_name'];
	        $gid  = $data['gid'];
	        $collage_id  = $data['collage_id'];
	        $last_name  = $data['last_name'];
	        $sesdata = array(
	            'email'     => $email,
	            'password'     => $password,
	            'su'     => $su,
	            'uid'     => $uid,
	            'gid'     => $gid,
	            'collage_id'     => $collage_id ,
	            'first_name'     => $first_name,
	            'last_name'     => $last_name,
	            'logged_in' => TRUE
	        );
	        $ab=$this->session->set_userdata($sesdata);
	        // var_dump($ab);die();
	        redirect(base_url('Dashboard'));
	        }else
	        {
		        echo $this->session->set_flashdata('msg','Username or Password is Wrong');
		        redirect(base_url('Login'));
	}
	}

	function logout()
	{
		$this->session->sess_destroy();
        redirect('login');
	}

}
