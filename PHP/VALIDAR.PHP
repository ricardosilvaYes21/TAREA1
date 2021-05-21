<?php

include('conectar.php');
$n_POST_["nombre"];
$p=POST_["pass"];

if(!$n){
    echo "error campo vacio nombre";
}else if (!$p){
    echo "error campo vacio password";
}else{
    $con=conecta();
}
?>