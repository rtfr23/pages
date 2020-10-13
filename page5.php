<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body>
	<?php


	$database = [
				[
					"title" => "Статья 5",
					"short_text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
					"img" => "img/5.jpg",
					"users" => "user25",
					"link" => "page5.php",
				],
			];

		echo "<h1 style= 'background: green; width: 300px;'>" . $database[0]["title"] . "</h1>";
		echo "<p>" . $database[0]["short_text"] . "</p>";
		echo "<img src=" . $database[0]["img"] . " class= 'w-50' " . ">";
		echo "<p>" . "Автор: " . $database[0]["users"] . "</p>";
		echo date("h:i j M Y ", strtotime($date));
	?>
</body>
</html>
