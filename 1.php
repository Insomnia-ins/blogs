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
	<div>
	<?php
	
		$za = $_GET["zag"];
	
		$op = $_GET["op"];

		$av = $_GET["av"];

		$img = $_GET["img"];
	

	?> <!-- 1. Все массивы создаем здесь-->
		<?php 
		$database = [
			["title" => "Статья 1","short_text" => "Отдыхаю","img" => "1.jpg","user" => "Greg1122"],
			["title" => "Статья 2","short_text" => "C Утреней катки","img" => "2.jpg","user" => "SnowPhil134"],
			["title" => "Статья 3","short_text" => "Выходные","img" => "3.jpg","user" => "alex1_1"],
			["title" => "Статья 4","short_text" => "Словила хороший кадр ","img" => "4.jpg","user" => "pht_Ann12"],
			["title" => "Статья 5","short_text" => "Фото с последнего похода","img" => "5.jpg","user" => "Max_Kri1"],
			["title" => $_GET["zag"],"short_text" => $_GET["op"],"img" => $_GET["img"],"user" => $_GET["av"]],


		]
		 ?>
		 <?php
		 	$connect = mysqli_connect("127.0.0.1","root","","1stDatabase");

		 	if ($connect==false) {
		 		echo "eror";
		 		
		 	}else {
		 		echo "correct";
		 	}
		 	$text_query = "SELECT * FROM posts";
		 	$query = mysqli_query($connect, $text_query);
		 	if ($query==false) {
		 		echo "Запрос не установлен";
		 		
		 	} else {
		 		echo "Запрос установлен";
		 	}
		 	$result1 = $query->fetch_assoc();
		 	$result2 = $query->fetch_assoc();
		 	$result3 = $query->fetch_assoc();
		 	$result4 = $query->fetch_assoc();
		 	$result5 = $query->fetch_assoc();
		 	
		 ?>
	</div>
<a href=""></a>
	<div class="col-7 mx-auto" style="margin-top: 50px; background-color: white;">
		<h1 class="text-center">БЛОГ</h1>
		<hr>
		<div class="col-12" style="">
			<a href=""></a>
		<h1>Welcome, Name</h1>
		<?php 
			echo date("d.m.Y");
			echo "  ";
			echo date("H:i:s");
			echo  $_GET["op"];
		?>
		<?php 
			 
			 	
				echo "<h1 >" .$result1["title"]. "</h1>";

			
				echo "<h3>".$result1["short_text"]."</h3>";

			
				echo "<img class='w-100' style='height:800px;' src=".$result1["img"].">";
			

				echo "<h4>Author:   ".$result1["user"]."</h4>";

				echo "<a href='aboy.php'><button   class='btn btn-primary '>Подробнее</button></a>";



				echo "<h1 style='padding-top:90px;' >" .$result2["title"]. "</h1>";

			
				echo "<h3>".$result2["short_text"]."</h3>";

			
				echo "<img class='w-100' src=".$result2["img"].">";
			

				echo "<h4>Author:   ".$result2["user"]."</h4>";
				echo "<a href='about2.php'><button   class='btn btn-primary '>Подробнее</button></a>";





				echo "<h1 style='padding-top:90px;'>" .$result3["title"]. "</h1>";

			
				echo "<h3>".$result3["short_text"]."</h3>";

			
				echo "<img class='w-100' src=".$result3["img"].">";
			

				echo "<h4>Author:   ".$result3["user"]."</h4>";

				echo "<a href='about3.php'><button   class='btn btn-primary '>Подробнее</button></a>";




				echo "<h1 style='padding-top:90px;' >" .$result4["title"]. "</h1>";

			
				echo "<h3>".$result4["short_text"]."</h3>";

			
				echo "<img class='w-100' src=".$result4["img"].">";
			

				echo "<h4>Author:   ".$result4["user"]."</h4>";

				echo "<a href='about4.php'><button   class='btn btn-primary '>Подробнее</button></a>";





				echo "<h1 style='padding-top:90px;'>" .$result5["title"]. "</h1>";

			
				echo "<h3>".$result5["short_text"]."</h3>";

			
				echo "<img class='w-100' src=".$result5["img"].">";
			

				echo "<h4>Author:   ".$result5["user"]."</h4>";

				echo "<a href='about5.php'><button   class='btn btn-primary '>Подробнее</button></a>";
			
			 ?>

		<!-- 2. выводите все элементы в этом диве -->
			
			 


		</div>
	</div>
</body>
</html>