<?php
Class User_model extends CI_Model
{
 function validate($user_email,$password)
{
$this->db->where('email',$user_email);
$this->db->where('password',$password);
$result = $this->db->get('savsoft_users');
return $result;
}
}