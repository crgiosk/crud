<?php
require_once('metodos.php');
$metodos=new Metodos();
$string="";
$info=$_POST['nuevo'];
for ($i=0; $i <=sizeof($info) ; $i++) { 
   if($i==sizeof($info)){
    $string=trim($string,',');
    if($metodos->Insertar("INSERT INTO pagosxrecibo VALUES(".$string.");")){
        $metodos->conectar()->close();
        echo 1;
    }else{
        echo 0;
    }

   }else{
        $string.="'".$info[$i]."',";
   }
}

