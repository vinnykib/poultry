<?php 
extract($_POST);
if(isset($sub))
{
$user=$_SESSION['farmer'];

$sql=mysqli_query($conn,"select * from feedback where student_id='$user' and faculty_id='$faculty'");
$r=mysqli_num_rows($sql);

if($r==true)
{
echo "<h2 style='color:red'>You already given feedback to this faculty</h2>";
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
<center><h3>Messages from Poultry Farmers</h3></center><br>
 
<fieldset>



  <div class="container">
  <div class="row">

    <section class="content">
      <div class="col-md-10 col-md-offset-0">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="pull-right">
            <div class="table-container">
              <table class="table table-filter">
                <tbody>
                     
                  <tr data-status="pendiente">
                    <td>
                      <div class="media">
                        <a href="#" class="pull-left">
                          <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
                        </a>
                        <div class="media-body">
                          <span class="media-meta pull-right">Febrero 13, 2016</span>
                          <h4 class="title">
                            Lorem Impsum
                          </h4>
                          <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
                        </div>
                      </div>
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>



</fieldset>


<!--<a href="transport.html"><p align="right"><button type="Button"style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:7px">Next</button></p></a>
<a href="About.php"><p align="right"><button type="Button" style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:7px">Back</button></p></a>-->

</div><!--close content_item-->
      </div><!--close content-->   
	
	</div><!--close site_content-->  	
  
    
    </div><!--close main-->
  </form>
<center>