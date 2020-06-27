<?php
class patient extends table{
	public $patient_id = 0;
	public $gender = 0;
	public $height = 0;
	public $weight = 0;
	public $hair_color = 0;
	public $primeti = '';
	public function validate(){
	if(!empty($this->gender)&&
		!empty($this->height)&&
		!empty($this->weight)&&
		!empty($this->hair_color)&&
		!empty($this->primeti)){
		return true;
		}
		return false;
	}
}