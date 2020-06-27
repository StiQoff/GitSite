<?php
class Cardmap extends basemap{
	public function count()
	{
		$res = $this->db->query("SELECT COUNT(*) AS cnt FROM card");
		return $res->fetch(PDO::FETCH_OBJ)->cnt;
	}
	public function findAll()
{
$db = Database::getDB();
$res = $this->db->query("SELECT card.card_id AS card_id, patient.patient_id AS patient_id, patient_neob.patient_id AS patient_neob, card.diagnose AS diagnose, postup.postup_id AS postup, card.data_postup AS data_postup, hospital_ward.hospital_ward_id AS hospital_ward_id, card.data_vip AS data_vip , prichina_vip.prichina_id AS prichina_id
FROM patient 
LEFT JOIN card ON card.card_id=patient.patient_id
LEFT JOIN patient_neob ON card.patient = patient_neob.patient_id
LEFT JOIN postup ON card.postup = postup.postup_id
LEFT JOIN hospital_ward ON card.hospital_ward = hospital_ward.hospital_ward_id
LEFT JOIN prichina_vip ON card.prichina_vip = prichina_vip.prichina_id"
return $res->fetchAll(PDO::FETCH_OBJ);
}
}
?>