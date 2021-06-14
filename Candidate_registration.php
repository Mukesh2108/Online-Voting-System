<<?php 
session_start();
include("connection.php");
include("functions.php");


  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $Candidate_name = $_POST['Candidate_name'];
    $Party_name = $_POST['Party_name'];
    $Aadhar_num = $_POST['Aadhar_num'];
    $Address = $_POST['Address'];
    $Phone_num = $_POST['Phone_num'];
    

    if(!empty($Candidate_name) && !is_numeric($Candidate_name))
    {

      //save to database
      $query = "insert into candidate_list (Candidate_name,Party_name,Aadhar_num,Address,Phone_num) values('$Candidate_name','$Party_name','$Aadhar_num','$Address','$Phone_num');";

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
    align-content:center;
  }

</style>
<body background="admin_login_image.jpg">

<h1 style="align:center;">Candidate Registration</h1>


<div id="box">
<form  method="post">
 
  <label for="Candidate_name">Candidate Name:</label>
  <input type="text" id="Candidate_name" name="Candidate_name" pattern="^[a-zA-Z]+(\s[a-zA-Z]+)?$" required><br><br>

  <label for="Party_name">Party Name:</label>
  <input type="text" id="Party_name" name="Party_name" pattern="^[a-zA-Z]+(\s[a-zA-Z]+)?$" required><br><br>
 
  <label for="Aadhar_num">Adhar number</label>
  <input type="text" id="Aadhar_num" name="Aadhar_num" pattern="[0-9]{12}" required><br><br>
 
  <label for="Address">Address:</label>
  <input type="text" id="Address" name="Address" required><br><br>
 
  <label for="Phone_num">Phone Number:</label>
  <input type="text" id="Phone_num" name="Phone_num" pattern="[0-9]{10}" required><br><br>

<input id="button" type="submit" value="Register"><br><br>
</form>
</div>
</body>
</html>



