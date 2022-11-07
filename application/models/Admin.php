<?php 

class Admin extends CI_Model 
{

	function checkPassword($password,$email)
	{
		$query = $this->db->query("SELECT * FROM admins WHERE password='$password' AND email='$email' AND status='1'");
		if($query->num_rows()==1)
		{
			return $query->row();
		}
		else
		{
			return false;
		}

	}

}