<?php 
include('../dbconfig.php');
extract($_POST);
if(isset($send))
{
$farmer_e=$_SESSION['farmer'];

$sql=mysqli_query($conn,"select email from farmer where id='$farmer_e'");
$r=mysqli_num_rows($sql);

if($r==true)
{
echo "<h2 style='color:red'>Farmer not found</h2>";
}
else
{

$query="insert into messages values('','$farmer_e','$question','',now())";

mysqli_query($conn,$query);

echo "<h2 style='color:green'>You have successfully send message, you will get feedback soon. </h2>";
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
<textarea name="question" placeholder="Type your question here..." rows="5" cols="60" id="comments" style="font-family:sans-serif;font-size:1.2em;" required>
</textarea>
</center><br><br>

<p align="center"><input type="submit" value="Send" class="btn btn-primary" name="send"/></p>



</form>
</fieldset>


</div><!--close content_item-->
      </div><!--close content-->   
	
	</div><!--close site_content-->  	
  
    
    </div><!--close main-->
  </form>
<center>