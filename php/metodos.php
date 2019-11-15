<?php 
/*require es para traer y poder utilizar el archivo conexion, tanto asi como sus functionces: (getconection) */
require_once'conection.php';
/*extends significa que va a heredar de la clase conection
heredar significa que va a tener acceso a los metodos de la clase conection, solo los que son protecd
ya que como lo habia dicho, las funciones privadas solo pueden ser manipuladas por la misma clase
*/
	class Metodos extends Conection{
        /*En esta clase se haran las funciones CRUD
        consultar,insertar,actualizar ,actualizar y eliminar. 

        */
		public function conectar(){
            /*con self::getConection hago referencia a la funcion getConection que esta en la clase conexion */
			return self::getConection();
		}
		public function Insertar($String){
			self::getConection()->real_escape_string(htmlentities($String));
			return mysqli_query(self::getConection(),$String);
		}
		//Terminar despues de enviar psdt: me sale o me sale
		public function Consultar($string){

		}
	}

 ?>