<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="en">

<head>
<title>Error</title>
<link rel="icon" href="images/gramislogoicon.png" type="image/png">
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="container">
		<div class="contentbox">
			<div class="textbox">
				<br>
				<h2>An error occured while posting a message.</h2>
				<?php 
					if (isset($_GET["error"])) 
						echo "<h3>Error: " . $_GET["error"] . "</h3>"; 
				?>			
			</div>
		</div>
		<div class="divider"></div>
	</div>
</body>
</html>
