
<?php 
error_reporting(0);
session_start();

  include("connection.php");
  include("functions.php");
  
      //read from database
       $query = "select Party_name ,count(Party_name) as Votes from result group by Party_name;";
       $result = mysqli_query($con, $query);
      
        if($result && mysqli_num_rows($result) > 0)
        {
          
          while($row=mysqli_fetch_array($result))
          {
          
          echo "Number of Votes polled for ".$row['Party_name']." are ".$row['Votes']." <br>";
        }
 
      }else{ echo "Not yet polled";}

?>