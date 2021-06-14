<<?php 
session_start();
include("connection.php");
include("functions.php");


  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $Voter_name = $_POST['Voter_name'];
    $Aadhar_num = $_POST['Aadhar_num'];
    $Address = $_POST['Address'];
    $Phone_num = $_POST['Phone_num'];
    $password = $_POST['password'];

    if(!empty($Voter_name) && !empty($password) && !is_numeric($Voter_name))
    {

      //save to database
      $Voter_id = random_num(20);
      $query = "insert into voter_list (Voter_id,Voter_name,Aadhar_num,Address,Phone_num,password) values ('$Voter_id','$Voter_name','$Aadhar_num','$Address','$Phone_num','$password');";

      mysqli_query($con, $query);
      
      header("Location: Welcome_admin.php");
      die;
    }else
    {
      echo "Please enter some valid information!";
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
<body background="admin_login_image.jpg">

<h1 style="align:center;"> Voter Registration</h1>


<div id="box">
<form method="post">
 
  <label for="Voter_name">Name:</label>
  <input type="text" id="Voter_name" name="Voter_name" pattern="^[a-zA-Z]+(\s[a-zA-Z]+)?$" required><br><br>
 
  <label for="Aadhar_num">Adhar number</label>
  <input type="text" id="Aadhar_num" name="Aadhar_num" pattern="[0-9]{12}" required><br><br>
 
  <label for="Address">Address:</label>
  <input type="text" id="Address" name="Address" required><br><br>
 
  <label for="Phone_num">Phone Number:</label>
  <input type="text" id="Phone_num" name="Phone_num" pattern="[0-9]{10}" required><br><br>
 
  <label for="password">Set password:</label>
  <input type="password" name="password" id="password" required><br><br>
  <input type="checkbox" onclick="showpass()">Show password<br><br>
  
  <script>

  function showpass(){
    x=document.getElementById("password");
    if(x.type=="password"){
    x.type="text";}
    else{
   x.type="password";
    }}

	</script>
<input id="button" type="submit" value="Register"><br><br>
</form>
</div>
</body>
</html>



