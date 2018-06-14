<?php

class Reserva_sitio{

	private $nro_resest;
	private $id_estacionamineto_resest;
	private $run_pasajero_resest;
	private $fecha_llegada_resest;
	private $fecha_salida_resest;
	private $activo_resest;

	public function __construct ($nro_resit, $id_estacionamineto_resest,$run_pasajero_resest, $fecha_llegada_resest,$fecha_salida_resest,$activo_resest)
	{
		$this -> setNro_resest($nro_resest);
		$this -> setId_estacionamiento_resest($id_estacionamiento_resest);
		$this -> setRun_pasajero_resest($run_pasajero_resest);
		$this -> setFecha_llegada_resest($fecha_llegada_resest);
		$this -> setFecha_salida_resest($fecha_salida_resest);
		$this -> setActivo_resest($activo_resest);

	}

	public function setNro_resest($nro_resest)
	{
		$this -> nro_resest = $nro_resest;
	}

	public function setId_estacionamiento_resest($id_estacionamiento_resit)
	{
		$this -> id_estacionamiento_resest = $id_estacionamiento_resest;
	}

	public function setRun_pasajero_resest($run_pasajero_resest)
	{
		$this -> run_pasajero_resest = $run_pasajero_resest;
	}

	public function setFecha_llegada_resest($fecha_llegada_resest)
	{
		$this -> fecha_llegada_resest = $fecha_llegada_resest;
	}

	public function setFecha_salida_resest($fecha_salida_resest)
	{
		$this -> fecha_salida_resest = $fecha_salida_resest;
	}

	public function setActivo_resest($activo_resest)
	{
		$this -> activo_resest = $activo_resest;
	}

	public function getNro_resest()
	{
		return $this -> nro_resest;
	}

	public function getId_estacionamiento_resest()
	{
		return $this -> id_estacionamiento_resest;
	}

	public function getRun_pasajero_resest()
	{
		return $this -> run_pasajero_resest;
	}

	public function getFecha_llegada_resest()
	{
		return $this -> fecha_llegada_resest;
	}

	public function getFecha_salida_resest()
	{
		return $this -> fecha_salida_resest;
	}

	public function getActivo_resest()
	{
		return $this -> activo_resest;
	}
}
?>