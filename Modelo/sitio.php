<?php

class Sitio{

	private $id_sitio;
	private $estacionamiento_sitio;
	private $valor_sitio;
	private $estado_sitio;
	private $activo_sitio;

	public function __construct ($id_sitio, $estacionamiento_sitio,$valor_sitio, $estado_sitio,$activo_sitio)
	{
		$this -> setId_sitio($id_sitio);
		$this -> setEstacionamiento_sitio($estacionamiento_sitio);
		$this -> setValor_sitio($valor_sitio);
		$this -> setEstado_sitio($estado_sitio);
		$this -> setActivo_sitio($activo_sitio);
	}

	public function setId_sitio($id_sitio)
	{
		$this -> id_sitio = $id_sitio;
	}

	public function setEstacionamiento_sitio($estacionamiento_sitio)
	{
		$this -> estacionamiento_sitio = $estacionamiento_sitio;
	}

	public function setValor_sitio($valor_sitio)
	{
		$this -> valor_sitio = $valor_sitio;
	}

	public function setEstado_sitio($estado_sitio)
	{
		$this -> estado_sitio = $estado_sitio;
	}

	public function setActivo_sitio($activo_sitio)
	{
		$this -> activo_sitio = $activo_sitio;
	}

	public function getId_sitio()
	{
		return $this -> id_sitio;
	}

	public function getEstacionamiento_sitio()
	{
		return $this -> estacionamiento_sitio;
	}

	public function getValor_sitio()
	{
		return $this -> valor_sitio;
	}

	public function getEstado_sitio()
	{
		return $this -> estado_sitio;
	}

	public function getActivo_sitio()
	{
		return $this -> activo_sitio;
	}
}
?>