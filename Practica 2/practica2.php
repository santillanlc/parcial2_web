<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Practica 2. PHP dentro de HTML</title>
</head>
<body>
	<?php 
		$numero = rand(1,4);
		$color = ["#487e8a", "#7747b6", "#85b41d", "#1457c4"];
		$numcolor = rand(0,3);

		echo "Numero generado = " . $numero ."<br>";
		echo "<div style='color:".$color[$numcolor]."'>Color generado</div>"; 

		if($numero == 1){
	?>		
		<h1 style="color: <?php echo $color[$numcolor]; ?>">Título de la página 1</h1>
	
	<?php }  elseif($numero == 2 ) { ?>

		<h2 style="color: <?php echo $color[$numcolor]; ?>">Titulo de la pagina 2</h2>

	<?php } elseif($numero == 3) { ?>

		<h3 style="color: <?php echo $color[$numcolor]; ?>">titulo 3 la pagina</h3>

	<?php } else { ?>

		<h4 style="color: <?php echo $color[$numcolor]; ?>">Titulo 4 de la pagina</h4>
	<?php } ?>
</body>
</html>