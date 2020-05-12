<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}	
	public function dashbaord()
	{
		$this->load->view('dashbaord');
	}
	public function addstudent()
	{
		$this->load->view('add_student');
	}
	public function student_list()
	{
		$this->load->view('student_list');
	}

	function addcollage()
	{
		$this->load->view('add_college');
	}

	function collage_list()
	{
		$this->load->view('college_list');
	}

	
	
}
