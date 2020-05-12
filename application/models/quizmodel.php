<?php
Class Quizmodel extends CI_Model
{
	public function getQuestions()
	{
		$this->db->select("quizID, question, choice1, choice2, choice3, answer");
		$this->db->from("Quiz");
		
		$query = $this->db->get();
		
		return $query->result();
		
		$num_data_returned = $query->num_rows;
		
		if ($num_data_returned < 1) {
		  echo "There is no data in the database";
		  exit();	
		}
	}

	function getcatagory()
	{
		$this->db->select("*");
		$query=$this->db->get("category");
		return $query->result_array();
	}
	function getqus($cat)
	{
		$this->db->where('cat_id',$cat);
		$query=$this->db->get("questions");
		return $query->result_array();
	}

	function matchanswer($data)
	{
		$this->db->select('id,ans');
		$this->db->where('cat_id','1');
		$query=$this->db->get("questions");
		$qust=$query->result_array();
		 $right=0;
		 $wrong=0;
		 $no_answer=0;
		 foreach ($qust as $qust) 	
		{			
			if($qust['ans']==$_POST[$qust['id']])
			{
				 $right++;
			}
			elseif($_POST[$qust['id']]=="no_attempt")
			{
				 $no_answer++;
			}
			else
			{
				$wrong++;
			}
		}
		$this->insert_result($right,$wrong,$no_answer);
		$array=array();
		$array['right']=$right;
		$array['wrong']=$wrong;
		$array['no_answer']=$no_answer;
		return $array;
	}

	function insert_result($right,$wrong,$no_answer)
	{
		$user_id=$this->session->userdata('uid');
		$collage_id=$this->session->userdata('collage_id');
		$total_qus=$right+$wrong+$no_answer;
	    $attempt_qus=$right+$no_answer;
	    $per=($right*100)/($total_qus);
		// echo $per."%";
		$data=array(
			'user_id'=>$user_id,
			'total_number_question'=>$total_qus,
			'attempted_questions'=>$attempt_qus,
			'right_result'=>$right,
			'wrong_result'=>$wrong,
			'no_result'=>$no_answer,
			'your_result'=>$per."%",
			'college_id'=>$collage_id
		);
		$this->db->insert('results',$data);
	}
	
}