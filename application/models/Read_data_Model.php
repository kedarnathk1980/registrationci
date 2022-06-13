<?php
Class Read_data_Model extends CI_Model{
	
public function readdata(){
	$query=$this->db->select('id,fullName,mobileNumber,emailId,gender,address,termsCondition,postingDate')
		              ->get('tblusers');
		        return $query->result();      

}



}