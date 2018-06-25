<?php 
include('../dbconfig.php');
extract($_POST);
if(isset($reply))
{
$vet_e = $_SESSION['vetenary'];

$sql=mysqli_query($conn,"select email from replies where vet_e = $vet_e");
$r=mysqli_num_rows($sql);


if($r==true)
{
echo "<h2 style='color:red'>You have replied!</h2>";
}
else
{

$qu="insert into replies values('','$vet_e','$feedback',now())";

$q="update messages set is_read = 1 where id = $id";

mysqli_query($conn,$qu);
mysqli_query($conn,$q);

//header('location:index.php?page=view_message');
echo "<h2 style='color:green'>Your reply has been successfully sent.</h2>";
}
}


?>
<form method="post">
<fieldset>

<center><h3>Vet Reply Form</h3></center><br>
 
<fieldset>


<center>
<h4>Reply according to what the poultry farmer asks:</h4>	<br>
<textarea name="feedback" placeholder="Type your reply here..." rows="5" cols="60" id="comments" style="font-family:sans-serif;font-size:1.2em;" required>
</textarea>
</center><br><br>

<p align="center"><input type="submit" value="Reply" class="btn btn-primary" name="reply"/></p>



</form>
</fieldset>


</div><!--close content_item-->
      </div><!--close content-->   
	
	</div><!--close site_content-->  	
  
    
    </div><!--close main-->
  </form>
<center>