<?php
	extract($_POST);

	if(!($pwd===$confirm_pwd)) 
	{
		echo "The passwords do not match. Renter";
		header("Refresh:2; url=register.html");
		exit;
	}


	$db = mysqli_connect("localhost:3306","root","","test");				//string,username,password,database name
	$stmt="insert into username_table (Username,Password) values(\"".$uname."\",\"". $pwd."\");";		//sql query
	
	
	
	$res = mysqli_query($db,$stmt);				//query object
	
	if($res)
	echo "YOU are signed up";
	header("Refresh:2;url=login.html");
?>