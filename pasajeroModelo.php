<<?php
include_once('pasajero.php');
include_once('conexion.php');

class PasajeroModelo
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

	public function ListarPasajeros()
	{
		try 
		{
			$resultado = array();
			$sql = "SELECT * FROM pasajero";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute();
			foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
			{
				$pasajero = new Pasajero($r->run_pasajero, $r->dv_pasajero,$r->nombres_pasajero,$r->password_pasajero,$r->correo_pasajero,
				    $r->activo_pasajero);
				$resultado[]=$pasajero;
			}
			return $resultado;
		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function RegistrarPasajero(Pasajero $pasajero)
	{
        try
        { 
        	$sql = "INSERT INTO pasajero VALUES(?,?,?,?,?,?)";
        	$THIS -> getConexion()->getPdo()->prepare($sql)->execute(array(
        	$pasajero -> getRun_pasajero(),
        	$pasajero -> getDv_pasajero(),
        	$pasajero -> getNombres_pasajero(),
        	$pasajero -> getPassword_pasajero(),
        	$pasajero -> getCorreo_pasajero(),
        	$pasajero -> getActivo_pasajero()
        	)
        );
        }
        catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>