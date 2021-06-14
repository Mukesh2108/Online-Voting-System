<?php

function random_num($len)
{

	$text = "";

	$len = 9;

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}


function check_login($con)
{

	if(isset($_SESSION['Voter_id']))
	{

		$id = $_SESSION['Voter_id'];
		$query = "select * from Voter_list where Voter_id = '$Voter_id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: Voter_validation.php");
	die;

}