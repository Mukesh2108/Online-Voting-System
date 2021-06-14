<?php 
error_reporting(0);
session_start();

  include("connection.php");
  include("functions.php");
  
      //read from database
      $query = "select count(*) as casted_votes  from Voter_list where casted = 1 ";
      $result = mysqli_query($con, $query);
      $query = "select count(*) as total from Voter_list  ";
      $all = mysqli_query($con, $query);
        if($result && mysqli_num_rows($result) > 0)
        {

          $user_data = mysqli_fetch_assoc($result);
          
          $user_info = mysqli_fetch_assoc($all);
          
          
            
          
        
      }else{ echo "Not yet polled";}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Check Status</title>
</head>
<body>
  <div>

    Number of Votes polled till now are :<?php echo $user_data['casted_votes']."<br><br> <br>"; ?>

    polling percentage till now is : <?php echo (($user_data['casted_votes']/$user_info['total'])*100)."%"."<br>"; ?>
  </div>

</body>
</html>