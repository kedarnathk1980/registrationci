<?php

Class Read_data extends CI_Controller{
	
public function index(){

$this->load->model('Read_data_Model');
$results=$this->Read_data_Model->readdata();
$this->load->view('read_data',['result'=>$results]);

}

public function updaterecord()
 {

    $data = $this->input->post();    //first create a blank array
       
    for($i=0; $i<count($data['uid']);$i++) // as it is a foreach, we must do increment +1 until the last photo
    {
        $batch[]=array(    
            'id'=>$data['uid'][$i],
                    'fullname'=>$data['fname'][$i],
                     'mobileNumber'=>$data['mobile'][$i],
                     'emailId'=>$data['email'][$i]
        
        );
    }
    $result = $this->db->update_batch('tblusers', $batch, 'id');
    if($result){
            $this->session->set_flashdata('ordering-success', 'New Ordering Has Been Done With a Great Success');
        redirect($_SERVER['HTTP_REFERER']);
    }


}


}