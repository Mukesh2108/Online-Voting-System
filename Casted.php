<?php
error_reporting(0);
session_start();

  include("connection.php");
  include("functions.php");
 
      //read from database
      $query = "select * from Candidate_list";
      $result = mysqli_query($con, $query);

      $Voter_id=$_SESSION['Voter_id'];
      $query = "update Voter_list set Casted=1 where Voter_id = '$Voter_id';";
      mysqli_query($con, $query);

      if(isset($_POST['Voted']))
		{
	  $Party= $_POST['Voted'];  //  Displaying Selected Value

     
  	  $query = "insert into result (Voter_id,Party_name) values('$Voter_id','$Party');";
  	  mysqli_query($con, $query);}
  	  
  	  echo $Party;
      header("Location: Voter_validation.php");
      die;

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>