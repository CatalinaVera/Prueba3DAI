<?php
include_once('sitio.php');
include_once('conexion.php');

class SitioModelo
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

	public function ListarSitio()
	{
		try 
		{
			$resultado = array();
			$sql = "SELECT * FROM sitio";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute();
			foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
			{
				$sitio = new Sitio($r->id_sitio, $r->estacionamiento_sitio,$r->valor_sitio,
				    $r->estado_sitio,
				    $r->activo_sitio);
				$resultado[]=$sitio;
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