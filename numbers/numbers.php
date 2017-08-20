<!DOCTYPE html>
<html>
<head>
	<title>display numbers</title>
</head>
<body>
	<?php
		$nos = 1;
		while($nos <10)
		{
		echo $nos."-";
		$nos++;
				if ($nos == 10)
					echo $nos;
		}
	?>

</body>
</html>