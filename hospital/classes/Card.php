<?php
class Card extends Table{
	public $card_id = 0;
	public $patient = 0;
	public $patient_neob = 0;
	public $diagnose = '';
	public $postup = 0;
	public $data_postup = '';
	public $hospital_ward = 0;
	public $data_vip = '';
	public $prichina_vip = 0;
	public function validate()
	{
        if (!empty($this->patient)&&
        	!empty($this->patient_neob)&&
        	!empty($this->diagnose)&&
        	!empty($this->postup)&&
        	!empty($this->data_postup)&&
        	!empty($this->hospital_ward)&&
        	!empty($this->data_vip)&&
        	!empty($this->prichina_vip))
        	{ 
        	return true;
        }
        return false;
    }
}