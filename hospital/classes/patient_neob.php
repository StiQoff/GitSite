<?php
class patient_neob extends table{
	public $patient_id = 0;
	public $lastname = '';
	public $firstname = '';
	public $patronomic = '';
	public $age = 0;
	public function validate(){
	if(!empty($this->lastname)&&
		!empty($this->firstname)&&
		!empty($this->patronomic)&&
		!empty($this->age)){
		return true;
		}
		return false;
	}
}
?>