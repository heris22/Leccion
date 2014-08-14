<html>
<head>
  <title>Mostrar</title>
	<link href="Bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="Bootstrap/estilo.css" rel="stylesheet" />
    <script src="js/jquery.min.js"></script>  
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
		</div>
	</div>

	<div class="container">
		<div class="row">
			<?php

				include_once ("NotaControlador.php");

				 $id=1;

				 $NotaControlador = new NotaControlador();
				 	echo "<div>";
				 	echo "<table border='1' align='center' ><td align='center'>Nombre</td><td class='ocultarenmovil' align='center'>Parcial</td><td align='center' class='ocultarenmovil' >Final</td><td class='ocultarenmovil' align='center'>Mejoramiento</td><td align='center'>Promedio</td></tr>";

				 foreach ($NotaControlador->mostrarNota() as $c) {
				 	
				 	echo "<tr>";
				 	
				 	echo "<td align='center'>".$c->getNombre()."</td>";
				 	echo "<td align='center'>".$c->getParcial()."</td>";
				 	echo "<td align='center'>".$c->getFinal()."</td>";
				 	echo "<td align='center'>".$c->getMejoramiento()."</td>";
				 	echo "<td align='center'>".$c->getPromedio()."</td>";
				 	
				 	echo "</tr>";
				 }
				 	echo "</table>";
				 	echo "</div>";
			?>
		</div>
	</div>
</body>
</html>
