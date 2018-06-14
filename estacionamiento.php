<?php

class Estacionamiento{

	private $id_estacionamiento;
	private $estado_estacionamiento;
	private $activo_estacionamiento;

	public function __construct ($id_estacionamiento, $estado_estacionamiento,$activo_estacionamiento)
	{
		$this -> setId_sitio($id_estacionamiento);
		$this -> setEstado_sitio($estado_estacionamiento);
		$this -> setActivo_sitio($activo_estacionamiento);
	}

	public function setId_estacionamiento($id_estacionamiento)
	{
		$this -> id_estacionamiento = $id_estacionamiento;
	}

	public function setEstado_estacionamiento($estado_estacionamiento)
	{
		$this -> estado_estacionamiento = $estado_estacionamiento;
	}

	public function setActivo_estacionamiento($activo_estacionamiento)
	{
		$this -> activo_estacionamiento = $activo_estacionamiento;
	}

	public function getId_estacionamiento()
	{
		return $this -> id_estacionamiento;
	}

	public function getEstado_estacionamiento()
	{
		return $this -> estado_estacionamiento;
	}

	public function getActivo_estacionamiento()
	{
		return $this -> activo_estacionamiento;
	}

}

?>