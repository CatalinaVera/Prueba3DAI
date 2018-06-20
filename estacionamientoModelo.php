<?php
include_once('estacionamiento.php');
include_once('conexion.php');

class EstacionamientoModelo
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

	public function ListarEstacionamiento($id)
	{
		try 
		{
			$resultado = array();
			$sql = "SELECT * FROM estacionamiento WHERE id_estacionamiento  = ?";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute(array($id));
			foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
			{
				$estacionamiento  = new Estacionamiento ($r->id_estacionamiento ,
				    $r->estado_estacionamiento ,
				    $r->activo_estacionamiento );
				$resultado[]=$estacionamiento ;
			}
			return $resultado;
		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

}
?>