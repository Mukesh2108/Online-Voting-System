<?php 
error_reporting(0);
session_start();

  include("connection.php");
  include("functions.php");

  $query = "select * from Candidate_list";
  $result = mysqli_query($con, $query);
       
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="mystyle.css">
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}


.button1 {
  background-color: white;
  color: black;
  border: 2px solid #4CAF50; /* Green */
  align: center
}
</style>
</head>
<body background="admin_login_image.jpg" style="color: #009612">
<form action= "Casted.php" method = "post" >
<table>
  <tr>
    <th>S.no</th>
    <th>Candidate Name</th>
    <th>Party Name</th>
    <th>Press to Vote</th>
  </tr>
 
  <?php while($row=mysqli_fetch_array($result)):?>
  <tr>
    <td><?php echo $row['Candidate_id'];?></td>
    <td><?php echo $row['Candidate_name'];?></td>
    <td><?php echo $row['Party_name'];?></td>
    <td> <input type="radio" id="Rbtn" name="Voted" Value=<?php echo $row['Party_name'];?> ></td>
  </tr>
  <?php endwhile;?>
</table><br><br>

<input class="button1"  type="submit" Value="Casted" >
</form>
</body>
</html>



