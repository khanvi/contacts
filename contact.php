<!DOCTYPE html>
<html lang="en">
<head>
	<title>Главная</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
		<?php
			$connect = mysqli_connect('127.0.0.1','root','','hv');
			$query = mysqli_query($connect, 'SELECT * FROM contact');
			?>
		<p class="h3">
			Контакты:
		</p>
		<div class="container">
			<div class="row">
				<p class="col-6">Имя</p>
				<p class="col-6">Телефон</p>
			</div>
				<?php
					for($i=0;$i<$query->num_rows;$i++){
						$k = $query->fetch_assoc();
						echo '<div class="row">';
						echo '<p class="col-6">'. $k['name'] .'</p>';
						echo '<p class="col-6">'. $k['phone'] .'</p>';
						echo '</div>';
					}
				?>
		</div>
</body>
</html>