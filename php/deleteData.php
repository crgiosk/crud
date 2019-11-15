<?php 
require_once('metodos.php');
$metodo=new Metodos();
$id=$_POST['id'];
$sql="DELETE FROM pagosxrecibo where PREid='".$id."';";
if($metodo->Insertar($sql)){
    echo 1;
}else{
    echo 0;
}
?>