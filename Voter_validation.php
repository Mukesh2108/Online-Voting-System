<?php 
error_reporting(0);
session_start();

  include("connection.php");
  include("functions.php");


  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $Voter_id = $_POST['Voter_id'];
    $password = $_POST['password'];

    if(!empty($Voter_id) && !empty($password))
    {

      //read from database
      $query = "select * from Voter_list where Voter_id = '$Voter_id' limit 1";
      $result = mysqli_query($con, $query);

      if($result)
      {
        if($result && mysqli_num_rows($result) > 0)
        {

          $user_data = mysqli_fetch_assoc($result);
          
          if($user_data['password'] == $password ){
          if( $user_data['Casted']==0)
          {

            $_SESSION['Voter_id'] = $user_data['Voter_id'];
            header("Location: Vote_casting.php");
            die;
            
          }else{
            echo "you have already casted your vote";}
        }else{
          echo "wrong username or password";}
      }else{ echo "wrong username or password";}
    }
  }
}

?>




<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="mystyle.css">
<style>
h1 { text-align:center;
color:orange;}
#box{

    background-color: grey;
    margin: auto;
    width: 400px;
    padding: 30px;
  }
</style>
</head>
<body background="admin_login_image.jpg">

<h1 style="align:center;"> Voter Validation</h1>

<div id="box">
<form  method="post">

  <label>Voter Id:</label>
  <input type="text" id="Voter_id" name="Voter_id" required><br><br>
  
  <label>Password:</label>
  <input type="password" id="password" name="password" required>
  <input type="checkbox" onclick="showpass()">show password<br><br>
  
  <input type="submit" value="Login" id="button">
  
  <script>
  function showpass(){
  var x=document.getElementById("password");
  if(x.type=="text"){
  x.type="password";}
  else{
  x.type="text";}}
  
  function Vote_Casting(){
  window.location="/Vote_casting.php";}
  </script>
  
</form>
</div>
</fieldset>
</body>
</html>