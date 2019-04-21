<?php
	extract($_POST);
	session_start();

	

	$uname = $_SESSION["uname"];

	$err = 0;

	$db = mysqli_connect("localhost:3306","root","","test");				//string,username,password,database name
	$stmt1 = "update username_table set Address=\"".$address."\" where Username=\"".$uname."\";";		//sql query
	$res1 = mysqli_query($db,$stmt1);

	$stmt2 = "select credits from username_table where Username=\"".$uname."\";";
	$res2 = mysqli_query($db,$stmt2);

	if($res2 && mysqli_num_rows($res2)==1)				//atleast one row and only one row
	{
		while($arr=mysqli_fetch_assoc($res2))	
		{	
			$credits=$arr["credits"];
		}
	}

	if($credits>=$amount)
		$reduced = $credits-$amount;   //do something for negative value

	else
	{
		$err = 1;
		$reduced = $credits;
	}


	$stmt3 = "update username_table set credits=".$reduced." where Username=\"".$uname."\";";		//sql query
	
	$res3 = mysqli_query($db,$stmt3);				//query object
	
	
	
?>

<html>
	<head>
		<style>
			body, html
	        { 
	            font: 14px sans-serif;


	         }

	        #BG 
	        {
	            padding: 30px;
	            background-image: url(tmb_24197_7235.jpg);
	            background-size: cover;
	            background-position: center;
	            background-repeat: no-repeat;
	            margin:0px;
	            height: 100%;
	        }

	        #Sample
	        {
	        	text-align: center;
	        	left:220px;
	        	font-size: 100px;
			    width: 100px;
			    height: 100px;
			    position :relative;
			    -webkit-animation: mymove 5s infinite; /* Safari 4.0 - 8.0 */
			    animation: mymove 5s infinite;
			}
	        
	        @keyframes mymove {
			    from {left: 0px;color:blue;}
			    to {right: 200px;color:green;}
				}

			.topcorner{
			   position:absolute;
			   top:0;
			   right:0;
			  }
			</style>

	<body>
		<div id="BG">
			<div class="topcorner"><a href="/WTPROJ/logout.php">Logout</a></div>
			<p id="Sample"> <?php if($err) echo "Insufficient Balance"; else echo "Your purchase is successful!"; ?></p>
		</div>
	</body>
</html>