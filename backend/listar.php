<?php

require_once("conexion.php");
function validar( $usuario ){
$conexion=new conexion();
$cnn=$conexion->getConexion();	
$sql="SELECT * FROM `usuario` WHERE email=:email";
$statement=$cnn->prepare($sql);
$statement->bindParam(':email', $usuario, PDO::PARAM_STR);
$valor=$statement->execute();
if($valor){
}  
  }
  ?>
