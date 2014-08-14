<?php
$nombre = $_POST['nombre'];
$parcial = $_POST['parcial'];
$finals = $_POST['finals'];
$mejoramiento = $_POST['mejoramiento'];
$promedio = $_POST['promedio'];


{
$conn= mysql_connect("localhost", "root", "Estud1ante") or die (mysql_error());
mysql_select_db("Leccion", $conn);
mysql_query("INSERT INTO calificacion (nombre,parcial,finals,mejoramiento,promedio) VALUES ('$nombre','$parcial','$finals','$mejoramiento','$promedio')",$conn ); 
echo "datos insertado";
}


?>
