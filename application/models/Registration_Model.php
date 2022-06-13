<?php
Class Registration_Model extends CI_Model{

public function insertdata($fname,$mnumber,$emaild,$gender,$adress,$tc){
$data=array(
			'fullName'=>$fname,
			'mobileNumber'=>$mnumber,
			'emailId'=>$emaild,
			'gender'=>$gender,
			'address'=>$adress,
			'termsCondition'=>$tc
		);
$sql_query=$this->db->insert('tblusers',$data);
if($sql_query){
$this->session->set_flashdata('success', 'Registration successful');
redirect('registration');
}
else{
$this->session->set_flashdata('error', 'Somthing went worng. Error!!');
redirect('registration');
}}

}
