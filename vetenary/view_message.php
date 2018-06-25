
<?php

echo '<form method="post">';
echo '<fieldset>';
echo '</fieldset>';

echo '<center><h3>Messages from Poultry Farmers</h3></center><br>
 ';

 

                          $i=1;

                          // $que=mysqli_query($conn,"SELECT 'messages.email', 'messages.question', 'messages.send_at', 'farmer.name','farmer.email'
                          //                           FROM messages
                          //                           INNER JOIN farmer ON 'messages.farmer_e' = 'farmer.email' where is_read = 0");
                           //$que=mysqli_query($conn,"select * from messages where is_read = 0");
                           $que=mysqli_query($conn,"select * from messages inner join farmer on messages.farmer_e = farmer.email where is_read = 0");

                           if($que==false)
                            {
                            echo "<center><h2 style='color:red'>Messages not found</h2></center>";
                            }
                            else{
                          
                          while($row=mysqli_fetch_array($que))
                          {
                            echo '<fieldset>';

                            echo '<div class="container">';

                            echo '<div class="row">';
                            echo '<section class="content">';
                            echo '<div class="col-md-10 col-md-offset-0">';
                            echo '<div class="panel panel-default">';
                            echo '<div class="panel-body">';
                            echo '<div class="pull-right">';
                            echo '<div class="table-container">';

                            echo '<table class="table table-filter">';
                            echo '<tbody>';
                            echo '<tr data-status="pendiente">';
                            echo '<td>';
                            echo '<div class="media">';
                            echo '<a href="#" class="pull-left"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo"></a>';
                            echo '<div class="media-body">';
                            echo '<span class="media-meta pull-right"><p>'.$row['send_at'].'</p></span>';
                            echo '<h4 class="title">'.$row['name'].'</h4>';
                            echo "<p>".$row['question']."</p>";
                            echo '<a href="index.php?page=reply_message" class="pull-left"><h4>Reply</h4></a>';
                            echo ' </div>';
                            echo ' </div>';
                            echo '</td>';
                            echo '</tr>';
                            echo '</tbody>';
                            echo '</table>';

                            echo ' </div>';
                            echo ' </div>';
                            echo ' </div>';
                            echo ' </div>';
                            echo ' </div>';
                            echo ' </div>';
                            echo ' </div>';
                            ;

                            echo '</fieldset>';
                            
                        
                            
                            $i++;
                          }
                          }
                          echo '</form>';

             ?>



