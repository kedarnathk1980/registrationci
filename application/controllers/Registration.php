<?php
Class Registration extends CI_Controller{
	
public function index(){

$this->load->library('form_validation');	
$this->form_validation->set_rules('fullname','Full Name','required');
$this->form_validation->set_rules('mobnumber','Mobile Number','required|numeric|exact_length[10]');
$this->form_validation->set_rules('emailid','Email id','required|valid_email');
$this->form_validation->set_rules('address','Address','required');
if($this->form_validation->run()){
$fname=$this->input->post('fullname');
$mnumber=$this->input->post('mobnumber');
$emaild=$this->input->post('emailid');
$gender=$this->input->post('gender');
$adress=$this->input->post('address');
$tc=$this->input->post('TermsCondition');
$this->load->model('Registration_Model');
$this->Registration_Model->insertdata($fname,$mnumber,$emaild,$gender,$adress,$tc);	
}
else{
$this->load->view("registration");
}
}

}