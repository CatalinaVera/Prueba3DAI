<?php

class Reserva_sitio{

	private $nro_resit;
	private $id_sitio_resit;
	private $run_pasajero_resit;
	private $fecha_llegada_resit;
	private $fecha_salida_resit;
	private $activo_resit;

	public function __construct ($nro_resit, $id_sitio_resit,$run_pasajero_resit, $fecha_llegada_resit,$fecha_salida_resit,$activo_resit)
	{
		$this -> setNro_resit($nro_resit);
		$this -> setId_sitio_resit($id_sitio_resit);
		$this -> setRun_pasajero_resit($run_pasajero_resit);
		$this -> setFecha_llegada_resit($fecha_llegada_resit);
		$this -> setFecha_salida_resit($fecha_salida_resit);
		$this -> setActivo_resit($activo_resit);

	}

	public function setNro_resit($nro_resit)
	{
		$this -> nro_resit = $nro_resit;
	}

	public function setId_sitio_resit($id_sitio_resit)
	{
		$this -> id_sitio_resit = $id_sitio_resit;
	}

	public function setRun_pasajero_resit($run_pasajero_resit)
	{
		$this -> run_pasajero_resit = $run_pasajero_resit;
	}

	public function setFecha_llegada_resit($fecha_llegada_resit)
	{
		$this -> fecha_llegada_resit = $fecha_llegada_resit;
	}

	public function setFecha_salida_resit($fecha_salida_resit)
	{
		$this -> fecha_salida_resit = $fecha_salida_resit;
	}

	public function setActivo_resit($activo_resit)
	{
		$this -> activo_resit = $activo_resit;
	}

	public function getNro_resit()
	{
		return $this -> nro_resit;
	}

	public function getId_sitio_resit()
	{
		return $this -> id_sitio_resit;
	}

	public function getRun_pasajero_resit()
	{
		return $this -> run_pasajero_resit;
	}

	public function getFecha_llegada_resit()
	{
		return $this -> fecha_llegada_resit;
	}

	public function getFecha_salida_resit()
	{
		return $this -> fecha_salida_resit;
	}

	public function getActivo_resit()
	{
		return $this -> activo_resit;
	}
}
?>