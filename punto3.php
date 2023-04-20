<?php

include "punto3.html";

$cantidad = null;
$i=0;

if(isset($_POST['numero'])){
    $cantidad= $_POST['numero'];

    for($i=1;$i<=$cantidad;$i++){
        echo "Hola Mundo $i <br>";
    }
}

?>