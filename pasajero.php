<?php

class Pasajero{

	private $run_pasajero;
	private $dv_pasajero;
	private $nombres_pasajero;
	private $activo_pasajero;

	public function __construct ($run_pasajero, $dv_pasajero,$nombres_pasajero, $activo_pasajero)
	{
		$this -> setRun_pasajero($run_pasajero);
		$this -> setDv_pasajero($dv_pasajero);
		$this -> setNombres_pasajero($nombres_pasajero);
		$this -> setActivo_pasajero($activo_pasajero);
	}

	public function setRun_pasajero($run_pasajero)
	{
		$this -> run_pasajero = $run_pasajero;
	}

	public function setDv_pasajero($dv_pasajero)
	{
		$this -> dv_pasajero = $dv_pasajero;
	}

	public function setNombres_pasajero($nombres_pasajero)
	{
		$this -> nombres_pasajero = $nombres_pasajero;
	}

	public function setActivo_pasajero($activo_pasajero)
	{
		$this -> activo_pasajero = $activo_pasajero;
	}

	public function getRun_pasajero()
	{
		return $this -> run_pasajero;
	}

	public function getDv_pasajero()
	{
		return $this -> dv_pasajero;
	}

	public function getNombres_pasajero()
	{
		return $this -> nombres_pasajero;
	}

	public function getActivo_pasajero()
	{
		return $this -> activo_pasajero;
	}
}
?>