<?php
session_start();
extract($_POST);

$answers = array("Captain Cold","An enormous, yellow, arrow-shaped key.","Bat-Mite","His Cosmic Treadmill.","Speedy");

$count=0;

if (isset($option1)) if($option1==$answers[0]) $count+=1;
if (isset($option2)) if($option2==$answers[1]) $count+=1;
if (isset($option3)) if($option3==$answers[2]) $count+=1;
if (isset($option4)) if($option4==$answers[3]) $count+=1;
if (isset($option5)) if($option5==$answers[4]) $count+=1;

$uname = $_SESSION["uname"];

$db = mysqli_connect("localhost:3306","root","","test");				//string,username,password,database name
$stmt1 = "select credits from username_table where Username=\"".$uname."\";";

$res = mysqli_query($db,$stmt1);


if($res && mysqli_num_rows($res)==1)				//atleast one row and only one row
{
	while($arr=mysqli_fetch_assoc($res))	
	{	
		$credits=$arr["credits"];
		
	}
}

$count1 = $count+$credits;
$stmt2 = "update username_table set credits=".$count1." where Username=\"".$uname."\";";		//sql query
	
	
$res = mysqli_query($db,$stmt2);				//query object
	


?>

<html>
	<body>
		<p>You scored: <?php echo $count;?></p>
		<p> <a href="trivia1.html"> Play Again </a></p>
	</body>
</html>

