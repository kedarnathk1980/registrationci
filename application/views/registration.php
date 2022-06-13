<!DOCTYPE html>
 <html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <title>Data Insertion in CodeIgniter</title>
<?php echo link_tag('assests/css/demo.css'); ?>
<?php echo link_tag('assests/css/style.css'); ?>
<?php echo link_tag('assests/css/animate-custom.css'); ?>
    </head>
    <body>
        <div class="container">
            <header>
                <h1>Data Insertion <span>in CodeIgniter</span></h1>
            </header>
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
<?php echo form_open('registration',['name'=>'registration'])?>

<!---- Success Message ---->
<?php if ($this->session->flashdata('success')) { ?>
 <p style="color:red; font-size:16px; "><?php echo $this->session->flashdata('success'); ?></p>
<?php } ?>

<!---- Error Message ---->
<?php if ($this->session->flashdata('error')) { ?>
<p style="color:red; font-size:16px;"><?php echo $this->session->flashdata('error'); ?></p>
<?php } ?>  



<p> 
<?php echo form_label('Enter your Name', 'name'); ?>
<?php echo form_input(['name'=>'fullname','id'=>'fullname','placeholder'=>'Enter you full name','value'=>set_value('fullname')]);?>
<?php echo form_error('fullname',"<div style='color:red'>","</div>");?>
</p>

<p> 
<?php echo form_label('Enter your Contact Mobile Number', 'mobnumber'); ?>
<?php echo form_input(['name'=>'mobnumber','id'=>'mobnumber','placeholder'=>'Enter your Contact Mobile Number','value'=>set_value('mobnumber')]);?>
<?php echo form_error('mobnumber',"<div style='color:red'>","</div>");?>
</p>

<p> 
<?php echo form_label('Enter your Valid Email id', 'emailid'); ?>
<?php echo form_input(['name'=>'emailid','id'=>'emailid','placeholder'=>'Enter your Valid Email id','value'=>set_value('emailid')]);?>
<?php echo form_error('emailid',"<div style='color:red'>","</div>");?>
</p>

<p> 
<?php echo form_label('Select gender','gender'); ?> : 
<?php  
$options=array(
'Male'=>'Male',
'Female'=>'Female',
'Other'=>'Other' 
);
echo form_dropdown('gender',$options);?>
</p>

<p> 
<?php echo form_label('Enter your address','address'); ?> <br />
<?php echo form_textarea(['name'=>'address','rows'=>'5','cols'=>'60','id'=>'address','class'=>'form-control','placeholder'=>'Enter your address','value'=>set_value('address')]);?>
<?php echo form_error('address',"<div style='color:red'>","</div>");?>
</p>


<p class="termcondtion"> 
<?php echo form_checkbox('TermsCondition','accept', TRUE); ?>
<?php echo form_label('Accept terms and conditions','terms'); ?>
</p>


<p class="login button"> 
<?php echo form_submit(['name'=>'submit','value'=>'Submit']);?>
</p>
<p> <a href="<?php echo site_url('Read_data'); ?>" style="color:red; font-size: 20px;">View Entered Data</a></p>
</form>
                        </div>
<?php echo form_close();?>
                     
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>