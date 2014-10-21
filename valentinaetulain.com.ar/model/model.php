<?php

	class Model{
		//Configuración
		private $host = "localhost";
		private $db	= "imagenes";
		private $user	= "root";
		private $pass	= "";
		
		private function conectar(){
			$conn = null;
			try{
				$conn = new PDO("mysql:host=$this->host;dbname=$this->db",$this->user,$this->pass);	
			} catch(PDOException $pe) {
				die('Error de conexion, Mensaje: ' -$pe->getMessage());
			}
			return $conn;
		}
		
		public function query($sql){
			$conn = $this->conectar();
			$q = $conn->query($sql);
			return $q->fetchAll();			
		}
		
		public function queryPrepare($sql, $arr){
			$conn = $this->conectar();
			$q = $conn->prepare($sql, $arr);
			$q->execute($arr);
			return $q->fetchAll();
		}
}

?>