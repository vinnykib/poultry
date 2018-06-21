<?php 
extract($_POST);
if(isset($sub))
{
$user=$_SESSION['farmer'];

$sql=mysqli_query($conn,"select * from feedback where student_id='$user' and faculty_id='$faculty'");
$r=mysqli_num_rows($sql);

if($r==true)
{
echo "<h2 style='color:red'>You already given</h2>";
}
else
{
$query="insert into feedback values('','$user','$faculty','$quest1','$quest2','$quest3','$quest4','$quest5','$quest6','$quest7','$quest8','$quest9','$quest10','$quest11','$quest12','$quest13','$quest14',now())";

mysqli_query($conn,$query);

echo "<h2 style='color:green'>Thank you </h2>";
}
}


?>
<form method="post">
<fieldset>
<center><h3>Poultry Farmer Inquiry Form</h3></center><br>
<center><p><i>You can ask questions to seeks answers from vets available. The inquiries can be about chicken medications, feeds and anything concerning your chickens. <p>Feel free to seek consultation.</p></i></p></center>
 
<fieldset>


<center>
<h4>Ask anything about your chicken:</h4>	<br>
<textarea name="question" placeholder="Type your question here..." rows="5" cols="60" id="comments" style="font-family:sans-serif;font-size:1.2em;">
</textarea></center><br><br>

<p align="center"><button type="submit" style="font-size:10pt;color:white;background-color:green; border:2px solid #336600;padding:7px" name="sub">Send</button></p>


</form>
</fieldset>


</div><!--close content_item-->
      </div><!--close content-->   
	
	</div><!--close site_content-->  	
  
    
    </div><!--close main-->
  </form>
<center>