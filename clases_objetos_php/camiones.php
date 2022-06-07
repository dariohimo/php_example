<?php




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

}

//echo 'camiones sin';

?>