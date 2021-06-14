<!DOCTYPE html>
<html>
<head>
<style>
h1 { text-align:center;
color:orange;}
.log{
  position: absolute;
  bottom: 20px;
  right: 30px;}

  #box{

    background-color: grey;
    margin: auto;
    width: 300px;
    padding: 20px;
  }

</style>
</head>
<body background="admin_login_image.jpg">

<h1 style="align:center;"> Welcome Admin</h1>
<div id="box">
	<input type="button" text-align="center" onclick="Candidate_reg()" value="Candidate Registration"> <br><br>

	<input type="button" text-align="center" onclick="Voter_reg()" value="Voter Registration"> <br><br>

	<input type="button" text-align="center" onclick="Check_status()" value="Check Status"> <br><br>

	<input type="button" text-align="center" onclick="Result()" value="Result"> <br><br>

	<input type="button" class="log"  value="Logout" onclick="logout()"> <br><br>
    <script>

	function Candidate_reg(){
    	window.location="Candidate_registration.php";}

	
	function Voter_reg(){
    	window.location="Voter_registration.php";}

    function Check_status(){
    	window.location="Check_status.php";}

    function Result(){
    	window.location="Result.php";}

    function logout(){
   	window.location.replace("Admin_login.php");}

   </script>

  

</div>
</body>
</html>