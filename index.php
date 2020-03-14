<?php

include('Persona.php');      

//Creacion de un Objeto o instancia de la clase 
$EsperanzaGomez = new Persona();

echo($EsperanzaGomez->nombre);

$EsperanzaGomez->nombre="Esperancita";
echo("<br>");
echo($EsperanzaGomez->nombre);

?>

