<?php 
	class Conection{
        /*encapsulamiento de las variables de la bd */
		private $server="localhost";
		private $user="root";
		private $bd="riviera";
		private $passwrod="";
        /*funcion privada que devuelve la conexion o el error*/
		private function _Conection(){
			$conection = new  mysqli($this->server,$this->user,$this->passwrod,$this->bd);
			$conection->set_charset("utf8");
			if ($conection->connect_errno) {
				echo "Error inesperado, Servidor y/o base de datos no encontrados. \nError: ".$conection->connect_error;
			}else{
				return $conection;
			}
		}
        /*Creo esta funcion con el fin de accerder a la conexion, y que una function privada solo se puede usar dentro de su misma 
        Con self::_Conection hago referencia a la funcion privada
        */
		public function getConection(){
			return self::_Conection();
		}

	}
