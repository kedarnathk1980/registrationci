<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>How to fetch  data from datbase in CodeIgniter </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<?php echo link_tag('http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css');?>
    <style type="text/css">
        .table-bordered {
border: 1px solid #dddddd;
border-collapse: separate;
border-left: 0;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
}

.table {
width: 100%;
margin-bottom: 20px;
background-color: transparent;
border-collapse: collapse;
border-spacing: 0;
display: table;
}

.widget.widget-table .table {
margin-bottom: 0;
border: none;
}

.widget.widget-table .widget-content {
padding: 0;
}

.widget .widget-header + .widget-content {
border-top: none;
-webkit-border-top-left-radius: 0;
-webkit-border-top-right-radius: 0;
-moz-border-radius-topleft: 0;
-moz-border-radius-topright: 0;
border-top-left-radius: 0;
border-top-right-radius: 0;
}

.widget .widget-content {
padding: 20px 15px 15px;
background: #FFF;
border: 1px solid #D5D5D5;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
border-radius: 5px;
}

.widget .widget-header {
position: relative;
height: 40px;
line-height: 40px;
background: #E9E9E9;
background: -moz-linear-gradient(top, #fafafa 0%, #e9e9e9 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fafafa), color-stop(100%, #e9e9e9));
background: -webkit-linear-gradient(top, #fafafa 0%, #e9e9e9 100%);
background: -o-linear-gradient(top, #fafafa 0%, #e9e9e9 100%);
background: -ms-linear-gradient(top, #fafafa 0%, #e9e9e9 100%);
background: linear-gradient(top, #fafafa 0%, #e9e9e9 100%);
text-shadow: 0 1px 0 #fff;
border-radius: 5px 5px 0 0;
box-shadow: 0 2px 5px rgba(0,0,0,0.1),inset 0 1px 0 white,inset 0 -1px 0 rgba(255,255,255,0.7);
border-bottom: 1px solid #bababa;
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FAFAFA', endColorstr='#E9E9E9');
-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#FAFAFA', endColorstr='#E9E9E9')";
border: 1px solid #D5D5D5;
-webkit-border-top-left-radius: 4px;
-webkit-border-top-right-radius: 4px;
-moz-border-radius-topleft: 4px;
-moz-border-radius-topright: 4px;
border-top-left-radius: 4px;
border-top-right-radius: 4px;
-webkit-background-clip: padding-box;
}

thead {
display: table-header-group;
vertical-align: middle;
border-color: inherit;
}

.widget .widget-header h3 {
top: 2px;
position: relative;
left: 10px;
display: inline-block;
margin-right: 3em;
font-size: 14px;
font-weight: 600;
color: #555;
line-height: 18px;
text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.5);
}

.widget .widget-header [class^="icon-"], .widget .widget-header [class*=" icon-"] {
display: inline-block;
margin-left: 13px;
margin-right: -2px;
font-size: 16px;
color: #555;
vertical-align: middle;
}
    </style>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="<?php //echo base_url('http://code.jquery.com/jquery-1.11.1.min.js'); ?>"></script>
    <script src="<?php //echo base_url('http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js'); ?>"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class="span12" align="center" style="margin-top: 2%">   
<div class="widget stacked widget-table action-table">
    				
				<div class="widget-header">
					<i class="icon-th-list"></i>
					<h3>How to fetch data in CodeIgniter 
						<a href="<?php echo site_url('Registration'); ?>" style="color:red; font-size: 20px;">(Insert Data) </a></h3>
				</div> <!-- /widget-header -->
				
				<div class="widget-content" >
					
				
								<div class="container">
								<form action='Read_data/updaterecord' method='post'>
								<div class="row g-3">
								<div class="col-sm">Name</div>
								<div class="col-sm">Email id</div>
								<div class="col-sm"> Mobile Number</div>
								</div>
							

										
<?php
if(count($result)) {
$cnt=1;	
foreach ($result as $row){

?>



<div class="row g-3">
<div class='col-sm'><input type="text" name="uid[]" value="<?php echo htmlentities($row->id)?>" /></div>
<div class="col-sm"><input type="text" name="fname[]" value="<?php echo htmlentities($row->fullName)?>" /></div>
<div class="col-sm"><input type="text" name="email[]" value="<?php echo htmlentities($row->emailId)?>" /></div>
<div class="col-sm"><input type="text" name="mobile[]" value="<?php echo htmlentities($row->mobileNumber)?>" /></div>
</div>

							<!-- </tr> -->
<?php 
$cnt++;
}
}else { ?>

<tr>
<td colspan="7">No Record found</td>
</tr>
<?php
}
echo "<input type='submit' name='update' value='UPDATE' />";
?>			</div>					
					</form>	
					
				</div> <!-- /widget-content -->
			
			</div> <!-- /widget -->
            </div>

</body>
</html>
<?php
    

// if(isset($_POST['update'])){
// 	$id = $_POST['uid'];
//     $update = $_POST['update'];
//     $email = $_POST['email'];
//     $name= $_POST['fname'];
//     $mobile= $_POST['mobile'];

// foreach($_POST['uid'] as $id){

// $conn= mysqli_real_connect('localhost','roor','','cidb');
//     mysqli_query($conn,"   UPDATE tblusers
//                        SET  fullname='$name', mobilenumber='$mobile', emailId= '$email'
//                      WHERE id = '$id' ");   

// }
//   //  header("location: updateusers.php");
//     //exit;
// }   

?>