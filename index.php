<?php require_once('config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="description" content="">
<meta name="keywords" content="" />
<meta name="author" content="Giorgi Machkhaneli"/>
<title>test</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script type="text/javascript" src="javascript.js"></script>

</head>
<body>
	<form action="" method="post">
		<select name="cars" onchange="selectcar(this.value)">
			<option value="" >.......</option>
			<?php 
				$res=$select->SelectCar();
				foreach ($res as $row){echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';}
			?>
		</select>
		<select id="models"></select>
	</form>
	<script>
	
	</script>
</body>
</html>