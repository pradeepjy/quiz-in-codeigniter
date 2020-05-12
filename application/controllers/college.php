<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class College extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE){
			redirect(base_url('login'));
		}
	}

	 function index()
	 {
	 	$this->load->view('add_college');
	 }

	 function add_collage()
	 {
	 	$data=array(
	 		'email'=>$this->input->post('email'),
	 		'password'=>md5($this->input->post('password')),
	 		'collage_name'=>$this->input->post('collage_name'),
	 		'collage_id'=>$this->input->post('collage_id'),
	 		'contact_no'=>$this->input->post('contact_no'),
	 		'subscription_expired'=>$this->input->post('subscription_expired'),
	 		'su'=>$this->input->post('su')
	 	);
	 	$this->db->insert('savsoft_users',$data);
	 }

	 function college_list()
	 {
	 	$this->load->model('college_model');
	 	$data['college']=$this->college_model->get_collage();
	 	$this->load->view('college_list',$data);
	 }
	 function addstudent()
	{
		$this->load->view('add_student');
	}
	function student_list()
	{
		$this->load->view('student_list');
	}
	function add_student()
	{
	 	$data=array(
		'email'=>$this->input->post('email'),
		'password'=>md5($this->input->post('password')),
		'first_name'=>$this->input->post('first_name'),
		'last_name'=>$this->input->post('last_name'),
		'contact_no'=>$this->input->post('contact_no'),
		'subscription_expired'=>$this->input->post('subscription_expired'),
		'su'=>$this->input->post('su')
	);
	$this->db->insert('savsoft_users',$data);
	}

	function add_question()
	{
			$this->load->model('quizmodel');
			$data['subject']=$this->quizmodel->getcatagory();
			$this->load->view('add_question',$data);
	}

	function addquestion()
	{
	$data=array(
		'cat_id'=>$this->input->post('cat_id'),
		'ans1'=>$this->input->post('ans1'),
		'ans2'=>$this->input->post('ans2'),
		'ans3'=>$this->input->post('ans3'),
		'ans4'=>$this->input->post('ans4'),
		'ans'=>$this->input->post('ans'),
		'question'=>$this->input->post('question')
	);
	$this->db->insert('questions',$data);
	}

	function question_list()
	{
	$this->load->model('quizmodel');
	$data['subject']=$this->quizmodel->getcatagory();
	$this->load->view('question_list',$data);
	}

	function get_question_list($cat_id)
	{
	$this->load->model('college_model');
	$data=$this->college_model->get_question_list($cat_id);	
	echo json_encode($data);
	// $this->response($data);
	}

	function user_result()
	{
	$uid =$this->session->userdata('uid');
	$collage_id =$this->session->userdata('collage_id');
	$this->load->model('college_model');
	$data['result']=$this->college_model->user_result($collage_id,$uid);
	$this->load->view('user_result',$data);
	}

	function all_user_result()
	{
	$collage_id =$this->session->userdata('collage_id');
	$this->load->model('college_model');
	$data['result']=$this->college_model->all_user_result($collage_id);
	$this->load->view('all_user_result',$data);
	}

	function add_result()
	{
		$total_number_question=$this->input->post('total_number_question');
		// var_dump($total_number_question);die();
	}
	}