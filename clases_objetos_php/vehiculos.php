<?php


class Carro{
   
   //atributos, comportamiento
  
   var $ruedas;
   var $color;
   var $motor;
 
   //metodo constructor
  
   function __construct()
    {
     
     $this->ruedas = 4;
     $this->color = '';
     $this->motor = 1600;
        
   }

   function arrancar() {
      echo 'Estoy ' . '<strong>' . 'arrancando run run run' . '</strong>' . '<br>';
   }


   function establecer_color($color_carro, $nombre_carro) {
      
       $this -> color = $color_carro;

      // echo 'El color del carro es: ' . $color_carro;

       echo '<br>' . 'El auto ' . '<strong>'. $nombre_carro . '</strong>' . ' es de color: ' . $color_carro . '<br>';
       echo '<br>';
     
   }


 }

 /// fin class

/*
 class Camion{
   
    //atributos, comportamiento
   
    var $ruedas;
    var $color;
    var $motor;
  
    //metodo constructor
   
    function __construct()
     {
      
      $this->ruedas = 9;
      $this->color = 'gris';
      $this->motor = 5600;
         
    }
 
    
    function establecer_color($color_carro, $nombre_carro) {
       
        $this -> color = $color_carro;
 
       // echo 'El color del carro es: ' . $color_carro;
 
        echo '<br>' . 'El auto ' . '<strong>'. $nombre_carro . '</strong>' . ' es de color: ' . $color_carro . '<br>';
      
    }
 
 
  }
 
  /// fin class
*/





 ?>