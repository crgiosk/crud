<?php 
require_once('metodos.php');
$metodo=new Metodos();
$update="UPDATE pagosxrecibo SET PRECid='".$_POST['preid']."', PREvalor='".$_POST['valor']."',PREfecha='".$_POST['fecha']."', PREtipo='".$_POST['tipo']."', PREobservacion='".$_POST['observaciones']."' where PREid ='".$_POST['id']."';";

if($metodo->Insertar($update)){
    echo 1;
}else{
    echo 0;
}


?>