﻿<?php
$to      = 'chatkiewicz.paulina@gmail.com';

$headers = 'From: ' . $_POST['email'] . "\r\n" .
	'Content-type: text/html; charset=utf-8';

mail($to, $headers);

?>
<html style="font-size: 150%;">
	<head>
		<meta charset="UTF-8">
	</head>
	<body style="display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;">
		<?php
		echo "<p>You've just subscribed to our newsletter. Enjoy! :)</p>";
		?>
		<?php
		echo "<a href='http://test15674.futurehost.pl' style=' color: #fff;
  text-decoration: none;
  display: block;
  padding: 10px 15px;
  background: crimson;'>Powrót</a>";
		?>
	</body>
</html>