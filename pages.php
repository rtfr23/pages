<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
	<style type="text/css">

		body {
			background-color: #f2f1ed;
		};

	</style>
<body>
	<div> <!-- 1. Все массивы создаем здесь-->
		<?php 
			$database = [
				[
					"title" => "Статья 1",
					"short_text" => "lorem",
					"img" => "img/1.jpg",
					"users" => "user12",
					"link" => "page1.php",
				],
				[
					"title" => "Статья 2",
					"short_text" => "lorem",
					"img" => "img/2.jpg",
					"users" => "user30",
					"link" => "page2.php",
				],
				[
					"title" => "Статья 3",
					"short_text" => "lorem",
					"img" => "img/3.jpg",
					"users" => "user50",
					"link" => "page3.php",
				],
				[
					"title" => "Статья 4",
					"short_text" => "lorem",
					"img" => "img/4.jpg",
					"users" => "user90",
					"link" => "page4.php",
				],
				[
					"title" => "Статья 5",
					"short_text" => "lorem",
					"img" => "img/5.jpg",
					"users" => "user25",
					"link" => "page5.php",
				],			
			]
		 ?>
	</div>
	<div class="col-7 mx-auto" style="margin-top: 50px; background-color: white;">
		<?php
			$con = mysqli_connect('127.0.0.1', 'root', "", "blog");
			if($con == true){
				echo "соедение есть";
			} else { 
				echo "соедения нет";
		}
			$q = mysqli_query($con, "SELECT * FROM pages");
			
			echo $result1["title"];
			$result = $q->fetch_assoc();
			 echo "<h1 style= 'background: green;'>" . $result["title"] . "</h1>";
			 echo "<p style='font-size: 25px;'>" . $result["text"] . "</p>";
			 echo "<h1 style= 'background: green;'>" . $result[""] . "</h1>";
			 echo "<img src=" . $result["img"] . " class= 'w-100' " . ">";
			 echo "<p style='font-size: 25px;'>" . "Автор: " . $result["author"]. "</p>";
		?>
		<a href="admin.php" style="font-size: 25px;">Админ панель</a>
		<h1 class="text-center">БЛОГ</h1>
		<h1>Привет: <?php echo $_GET["name"] ?></h1>
		<hr>
		<div class="col-12" style=""> <!-- 2. выводите все элементы в этом диве -->
			 <?php
			 $date = date('m/d/Y h:i:s a', time());
			 $name =  $_GET["name1"];
			 $text =  $_GET["text"];
			 $author =  $_GET["author"];
			 $a = count($database);
				for($i = 0; $i < $a; $i++){
					echo "<h1 style= 'background: green;'>" . $database[$i]["title"] . "</h1>";
					echo "<p style='font-size: 25px;'>" . $database[$i]["short_text"] . "</p>";
					echo "<img src=" . $database[$i]["img"] . " class= 'w-100' " . ">";
					echo "<p style='font-size: 25px;'>" . "Автор: " . $database[$i]["users"] . "</p>";
					echo date("h:i j M Y ", strtotime($date));
					echo "<a href= 'page1.php?num=$i'>" . $database[$i]["title"] . "</a>";
					echo "<hr>";
				}
			 ?>
		</div>
	</div>
</body>
</html>