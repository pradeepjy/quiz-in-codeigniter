<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library("Session");
		if($this->session->userdata('logged_in') !== TRUE){
			redirect(base_url('login'));
		}
	}

	function index()
	{
		$this->load->model('quizmodel');
		$data['catagory'] = $this->quizmodel->getcatagory();
		$this->load->view('test_list',$data);
	}

	 function start_quiz()
	 {
	 	$cat=$this->input->post('cat');
	 	$this->load->model('quizmodel');
	 	$data['qus'] = $this->quizmodel->getqus($cat);
	 	$this->load->view('starttest', $data);
	 }


	public function result()
	{
		 $data=$_POST;
		 $ans=implode("",$data);
		 $data=$_POST;
		 $ans=implode("",$data);
		 $this->load->model('quizmodel');
		 // $user_id=$this->session->userdata('uid');
		 // $collage_id=$this->session->userdata('collage_id');
		 $data['result']=$this->quizmodel->matchanswer($data);
		 $this->load->view('result_show',$data);

	}

}