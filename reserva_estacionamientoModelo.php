<?php
include_once('reserva_estacionamiento.php');
include_once('conexion.php');

class Reserva_estacionamientoModelo
{
	private $conexion;
    
    public function __construct()
	{
		$this -> setConexion(new Conexion());
	}

	public function setConexion($conexion)
	{
		$this -> conexion = $conexion;
	}

	public function getConexion()
	{
		return $this -> conexion;
	}

	public function ListarResest($id)
	{
		try 
		{
			$resultado = array();
			$sql = "SELECT * FROM reserva_estacionamiento";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute(array($id));
			foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
			{
				$reserva_estacionamiento = new Reserva_estacionamiento($r->id_estacionamiento_resest,$r->run_pasajero_resest,
				    $r->fecha_llegada_resest,
				    $r->fecha_salida_resest,
				    $r->activo_resest);
				$resultado[]=$reserva_estacionamiento;
			}
			return $resultado;
		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function RegistrarResest(Reserva_estacionamiento $resest)
	{
        try
        { 
        	$sql = "INSERT INTO $reserva_estacionamiento VALUES(?,?,?,?,?)";
        	$this -> getConexion()->getPdo()->prepare($sql)->execute(array(
        	$resest -> getId_estacionamiento_resest(),
        	$resest -> getRun_pasajero_resest(),
        	$resest-> getFecha_llegada_resest(),
        	$resest -> getFecha_salida_resest(),
        	$resest -> getActivo_resest(),
        	)
        );
        	echo "Agregado exitosamente";
        }
        catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

    public function Obtener($nro)
	{
		try 
		{
			$sql = "SELECT * FROM reserva_estacionamiento WHERE nro_resest = ?";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute(array($nro));
			$r = $stm -> fetch(PDO::FETCH_OBJ);
			$reserva_estacionamiento = new Reserva_estacionamiento($r->id_estacionamiento_resest,$r->run_pasajero_resest,
				    $r->fecha_llegada_resest,
				    $r->fecha_salida_resest,
				    $r->activo_resest);

			return $reserva_estacionamiento;
		}
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($run)
	{
		try 
		{
			$sql = "DELETE FROM reserva_estacionamiento WHERE nro_resest = ?";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute(array($run));
			echo "Eliminado";
		} 
		catch (Exception $e)
		{
			die($e->getMessage());
		}
	}	
}
?>