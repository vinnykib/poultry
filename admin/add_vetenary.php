<?php
error_reporting(1);
	include('../dbconfig.php');
	extract($_POST);
	if(isset($save))
	{	
		$pp = $_POST["pas"] != $_POST["cpas"];

		if(strlen($mob)<10 || strlen($mob)>10)
		{
		$err="<font color='red'>Mobile number must be 10 digit</font>";
		}
		elseif ($pp==true) {
	    $err="<font color='red'><h4 align='center'>Password and confirm password must be same</h4</font>";
        }
		else
		{
		 
		 //$pass=md5($pas);
		
$q=mysqli_query($conn,"select * from vetenary where email='$email'");
	$r=mysqli_num_rows($q);	
	if($r)
	{
	$err="<font color='red'>This email already exists choose diff email.</font>";
	}
	else
	{	
		mysqli_query($conn,"insert into vetenary values('','$name','$Designation','$prg','$sem','$email','$pass','$mob',now())");
		
	$subject ="New User Account Creation";
	$from="info@angela.com";
	$message ="User name: ".$user_name." Password ".$pass;
    $headers = "From:".$from;
    mail($email,$subject,$message,$headers);
		
	$err="<font color='green'>New Vet Successfully Added.</font>";
	}
	}
}	

?>


<h1 class="page-header">Add Vet</h1>
<div class="col-lg-8" style="margin:15px;">
	<form method="post">
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label><?php echo @$err;?></label>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Name:</label>
            	<input type="text" value="<?php echo @$name;?>" name="name" class="form-control" required>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Designation:</label>
            	<input type="text" value="<?php echo @$Designation;?>" name="Designation" class="form-control" required>
        </div>
   	</div>
 	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Email :</label>
            	<input type="email" value="<?php echo @$email;?>"  name="email" class="form-control" required>
        </div>
    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Password :</label>
            	<input type="password" value="<?php echo @$pass;?>"  name="pas" class="form-control" required>
        </div>
    </div>

    <div class="control-group form-group">
    	<div class="controls">
        	<label>Confirm Password :</label>
            	<input type="password" value="<?php echo @$pass;?>"  name="cpas" class="form-control" required>
        </div>
    </div>	
                  
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Mobile Number:</label>
            	<input type="number" id="mob" value="<?php echo @$mob;?>" class="form-control" maxlength="10" name="mob"  required>
        </div>
  	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
            	<input type="submit" class="btn btn-success" name="save" value="Save">
        </div>
  	</div>
	</form>


</div>