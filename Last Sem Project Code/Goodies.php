<?php
extract($_POST);
$amount_per_item = [4,7,2,5,8];
$amount = 0;

if (isset($obj1))  $amount+=$amount_per_item[0];
if (isset($obj2))  $amount+=$amount_per_item[1];
if (isset($obj3))  $amount+=$amount_per_item[2];
if (isset($obj4))  $amount+=$amount_per_item[3];
if (isset($obj5))  $amount+=$amount_per_item[4];





?>

<html>
	<head>
		<!--
		<style>
			.AMOUNT{
			  font-size: 80px;
			  color: #fff;
			  text-align: center;
			  -webkit-animation: glow 1s ease-in-out infinite alternate;
			  -moz-animation: glow 1s ease-in-out infinite alternate;
			  animation: glow 1s ease-in-out infinite alternate;
			}

			@-webkit-keyframes AMOUNT {
			  from {
			     text-shadow: 0 0 10px #ffe, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
			  }
			  to {
			    text-shadow: 0 0 20px #ffe, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
			  }
			}
		</style>
	-->
	<body>
		<form action="final_buy.php" method="post">
			<label>Address</label><br>
  			<textarea name="address" rows="10" cols="30"></textarea><br>

			Amount:
			<span><?php echo $amount;?></span><br>

			<p class ="AMOUNT"><input type="hidden" name="amount" value=<?php echo $amount;?>></p>

			<input type="Submit" value="Buy">
		</form>
	</body>
</html>