<?php

include('DataBaseControlador.php');
include('nota.php');

class NotaControlador extends DataBaseControlador
{
    
    function mostrarNota() {
    $row = self::$db->getRow("SELECT * FROM calificacion");
    $arrayNota= array();  
    
        foreach ($row as $c){
          $notaAuxiliar = new nota($c{'idnota'},$c{'nombre'},$c{'parcial'},$c{'finals'},$c{'mejoramiento'},$c{'promedio'});
          array_push($arrayNota, $notaAuxiliar);
        }
        
        
        
    return $arrayNota;        
  }

}
?>
