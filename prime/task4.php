<!DOCTYPE html>
<html>
<head>
	<title>check prime</title>
</head>
<body>
	<?php
		function prime_number($nos)
		{
			$half_nos = round($nos/2);
			$message = 0;
		for ($check = 2; $check <= $half_nos; $check++)
			{
				if ($nos%$check == 0)
				{
				 	$message = 1;
				 break;
				}	
			}
			if ($message == 1)
				echo $nos." is not a prime number";
			else echo $nos." is a prime number";
	
		}
		if (isset($_POST['number']))
			{
				if (!empty($_POST['number']))
				{
					$number = $_POST['number'];
					prime_number($number);
				}
				else echo "You didn't type anything";
			}
	?>

<form action="task4.php" method="post">
Kindly enter an integer to check if it's prime: <input type="number" name="number">
<input type="submit" value="check">
</form>

</body>
</html>