<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="row col-10 mx-auto">
		<?php
			$con = mysqli_connect('127.0.0.1', 'root', "", "blog");
			$q = mysqli_query($con, "SELECT * FROM users");
			$result = $q->fetch_assoc();
			$result2 = $q->fetch_assoc();
			$result3 = $q->fetch_assoc();
			$result4 = $q->fetch_assoc();
		?>
		<div class="col-3">
			<p class="ml-2" style="font-weight: bold;"><?php echo $result["name"]; ?></p>
			<p class="ml-2" style="font-weight: bold;"><?php echo $result["email"]; ?></p>
			<p class="ml-2" style="font-weight: bold;"><?php echo $result["phone"]; ?></p>
			<button class="btn bg-primary">Написать</button>
			<hr>
			<p class="ml-2" style="font-weight: bold;"><?php echo $result2["name"]; ?></p>
			<p class="ml-2" style="font-weight: bold;"><?php echo $result2["email"]; ?></p>
			<p class="ml-2" style="font-weight: bold;"><?php echo $result2["phone"]; ?></p>
			<button class="btn bg-primary">Написать</button>
			<hr>
			<p class="ml-2" style="font-weight: bold;"><?php echo $result3["name"]; ?></p>
			<p class="ml-2" style="font-weight: bold;"><?php echo $result3["email"]; ?></p>
			<p class="ml-2" style="font-weight: bold;"><?php echo $result3["phone"]; ?></p>
			<button class="btn bg-primary">Написать</button>
			<hr>
			<p class="ml-2" style="font-weight: bold;"><?php echo $result4["name"]; ?></p>
			<p class="ml-2" style="font-weight: bold;"><?php echo $result4["email"]; ?></p>
			<p class="ml-2" style="font-weight: bold;"><?php echo $result4["phone"]; ?></p>
			<button class="btn bg-primary">Написать</button>
		</div>
		<div class="col-9">
		<form action="pages.php" method="GET">
			<div style="">
					<p style="font-weight: bold; font-size: 20px;">Заголовок</p>
			</div>
			<input type="" name="name1" placeholder="Заголовок" style="width: 300px;" class="rounded border border-dark shadow-lg">
			<div style="">
					<p style="font-weight: bold; font-size: 20px;">Текст поста:</p>
			</div>
			<textarea name="text" style="height: 300px;" class="col-5 rounded border border-dark shadow-lg"></textarea>
			<div style="">
					<p style="font-weight: bold; font-size: 20px;">Имя автора</p>
			</div>
			<input type="" name="author" placeholder="Автор" style="width: 300px;" class="rounded border border-dark shadow-lg">
			<div style="margin-top: 20px;">
				<button class="btn bg-primary">Отправить</button>
			</div>
		</form>
	</div>
	</div>
</body>
</html>