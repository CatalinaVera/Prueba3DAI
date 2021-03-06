<?php
include_once('reserva_sitio.php');
include_once('conexion.php');

class Reserva_sitioModelo
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

	public function ListarResit()
	{
		try 
		{
			$resultado = array();
			$sql = "SELECT * FROM reserva_sitio";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute();
			foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
			{
				$reserva_sitio = new Reserva_sitio($r->id_sitio_resit,$r->run_pasajero_resit,
				    $r->fecha_llegada_resit,
				    $r->fecha_salida_resit,
				    $r->activo_resit);
				$resultado[]=$reserva_sitio;
			}
			return $resultado;
		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function RegistrarResit(Reserva_sitio $resit)
	{
		
        try
        { 
        	$sql = "INSERT INTO reserva_sitio VALUES(default,?,?,?,?,?)";
        	$this -> getConexion()->getPdo()->prepare($sql)->execute(
				array(
        	$resit -> getId_sitio_resit(),
        	$resit -> getRun_pasajero_resit(),
        	$resit -> getFecha_llegada_resit(),
        	$resit -> getFecha_salida_resit(),
        	$resit -> getActivo_resit(),
        	)
        );
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
			$sql = "SELECT * FROM reserva_sitio WHERE nro_resit = ?";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute(array($nro));
			$r = $stm -> fetch(PDO::FETCH_OBJ);
			$reserva_sitio = new Reserva_sitio($r->id_sitio_resit,$r->run_pasajero_resit,
				    $r->fecha_llegada_resit,
				    $r->fecha_salida_resit,
				    $r->activo_resit);

			return $reserva_sitio;
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
			$sql = "DELETE FROM reserva_sitio WHERE nro_resit = ?";
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