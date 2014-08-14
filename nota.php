<?php

class nota{

	private $idnota;
	private $nombre;
	private $parcial;	
	private $finals;
	private $mejoramiento;
	private $promedio;

	function __construct($idnota,$nombre,$parcial,$finals,$mejoramiento,$promedio) { 
 		$this->idnota = $idnota;
 		$this->nombre = $nombre;
 		$this->parcial = $parcial;
 		$this->finals = $finals;
 		$this->mejoramiento = $mejoramiento;
 		$this->promedio = $promedio;
 	} 

 	function setIdnota($idnota){
		$this->idnota = $idnota;
	}
	
	function getIdnota(){
		return $this->idnota;
	}

 	function setNombre($nombre){
		$this->nombre = $nombre;
	}

	function getNombre(){
		return $this->nombre;
	}

	function setParcial($parcial){
		$this->parcial = $parcial;
	}

	function getParcial(){
		return $this->parcial;
	}

	function setFinal($finals){
		$this->finals = $finals;
	}

	function getFinal(){
		return $this->finals;
	}

	function setMejoramiento($mejoramiento){
		$this->mejoramiento = $mejoramiento;
	}

	function getMejoramiento(){
		return $this->mejoramiento;
	}

	function setPromedio($promedio){
		$this->promedio = $promedio;
	}

	function getPromedio(){
		return $this->promedio;
	}

}	
?>
