<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="mystyle.css">
<style type="text/css">
  #box{

    background-color: grey;
    margin: auto;
    width: 400px;
    padding: 20px;
    align-items:center;
  }

</style>
</head>
<h1 style="align:center;"> Admin Login Page</h1>
<body background="admin_login_image.jpg">

<div id = "box">

<form  method="Post">

  <label>Username:</label>
  <input type="text" id="admin" name="admin" required><br><br>
  <label>Password:</label>
  <input type="password" id="password" name="password" required >
  <input type="checkbox" onclick="showpass()">Show password<br><br>

  <input type="button" value="Login"  onclick="welcomeadmin()" >
  <p id="pid"></p>
  
  <script>

  function showpass(){
    x=document.getElementById("password");
    if(x.type=="password"){
    x.type="text";}
    else{
  x.type="password";
    }}


  function welcomeadmin(){
  
  if(document.getElementById("admin").value == "admin" && document.getElementById("password").value == "1234"){
    window.location.replace("Welcome_admin.php");}
  else{
    document.getElementById("pid").innerHTML="Login Unsuccessful";}}
  
  </script>
 
</form>
</div>
</body>
</html>