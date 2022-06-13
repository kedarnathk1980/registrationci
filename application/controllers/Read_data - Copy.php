<?php

Class Read_data extends CI_Controller{
	
public function index(){

$this->load->model('Read_data_Model');
$results=$this->Read_data_Model->readdata();
$this->load->view('read_data',['result'=>$results]);

}

public function updaterecord()
{
    $uid = $this->input->post('uid');
    $name = $this->input->post('fname');
    $email = $this->input->post('email');
    $mobile = $this->input->post('mobile');
    $count = count($uid);
for ($x = 0; $x <= $count; $x++) {
// Create connection
$conn = new mysqli('localhost', 'root', '', 'cidb');
// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

$sql = "UPDATE tblusers SET fullname='$name[$x]', mobileNumber='$mobile[$x]', emailId='$email[$x]' WHERE id='$uid[$x]'";

$a = $conn->query($sql);
    
    // $data = array(
    //           'fullName' => $name,
    //     'mobileNumber' => $mobile,
    //     'emailId' => $email
    // );

    //     $this->db->where('id', $uid);
    //     $this->db->update('tblusers', $data);
    //    // $this->db->update('tblusers', $data ,array('id' => $uid));
    //     echo 'order has successfully been updated';


    // $data = array(
    //     'id' => $this->input->post('uid'),
    //     'fullname' => $this->input->post('fname'),
    //     'mobileNumber' => $this->input->post('mobile'),
    //     'emailId' => $this->input->post('email')       
        
    // );

    // foreach ($data as $key => $value) {
    //     foreach ($value as $detail) {
    //         // $this->db->where('id', $detail);
    //         // $query = $this->db->update('tblusers', $data);
    //         echo $detail;
    //         echo "<br>";
            
    //      }
    //  }



    

}
if ($a) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
}


}