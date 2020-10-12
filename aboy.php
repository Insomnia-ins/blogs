<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php
	$connect = mysqli_connect("127.0.0.1","root","","1stDatabase");
	$text_query = "SELECT * FROM postsmore";
	$query = mysqli_query($connect, $text_query);
		  	
	$result1 = $query->fetch_assoc();

		 	
?>
<div class="col-7 mx-auto" style="margin-top: 50px; background-color: white;">
		<h1 class="text-center">Подробнее</h1>
		<hr>
		<div class="col-12" style="">
			<a href=""></a>
		
		<?php 
			 
			 	
				echo "<h1 >" .$result1["title"]. "</h1>";

			
				

			
				echo "<img class='w-50' style='height: 500px;' src=".$result1["img"].">";
			

				
				echo "<h3>".$result1["short_text"]."</h3>";
				echo "<h4>Author:   ".$result1["user"]."</h4>";

				echo "<a href='1.php'><button   class='btn btn-primary '>Назад</button></a>";

			
			 ?>

		<!-- 2. выводите все элементы в этом диве -->
			
			 


		</div>
	</div>