<?php
include_once('model/register.php');
/**
 * 
 */
class RegisterController extends Register
{
	
	public function create($email,$password)
	{
	return $this->Insert($email,$password);	
	}
	public function get(){
		return $this->show();
	}
	public function getReg($email){
		return $this->Reg($email);
	}
}
?>