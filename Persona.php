<?php



class Persona{



    //ATRIBUTOS
    public $nombre;
    public $apellido;  


    //CONSTRUCTOR
    public function __construct(){
        $this ->nombre = "Hola";      
    }

    //METODOS

    public function saludar($nombre){
        echo ("¿Hola como estas?".$nombre);   
    }

}

?>


