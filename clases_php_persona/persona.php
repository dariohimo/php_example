<?php
//https://nutricionyfarmacia.es/blog/dietetica/dietas/como-calcular-tu-peso-ideal/

class Persona{
   
   //atributos, comportamiento
  
   var $nombre;
   var $apellidos;
   var $edad;
   var $peso;
 
   //metodo constructor
  
   function __construct()
    {
     
     $this->nombre = 4;
     $this->apellidos = '';
     $this->edad = 22;
     $this->peso = 50;
        
   }

   function mayorEdad($edad) {
     
      
      if ($edad > 18) {
        echo '<br>'. 'Tiene: '. '<strong>' . $edad . '</strong>' . " años, es mayor de 18 años";
    } else {
        echo 'Tiene ' . '<strong>' . $edad . '</strong>' . " años,  es menor de 18 años";
    }
   
    }

    function nombreCompleto($nombre, $apellidos){

      echo "<p></p><br> <strong> $nombre  $apellidos </strong>";


    }

//

    function pesoIdeal($altura, $peso){
      
      $imc = round($peso / pow($altura, 2)) ;
      echo ", $imc <b>IMC</b>";
     
      if ($imc <= 18) {
        echo " ,<strong> Baja de peso </strong> come un poquito más sube a más de 18,5 Kg";
      
      } elseif ($imc < 25){
        echo " , Su Peso es <b >Normal</b>";  //18,5 - 24,9

      } elseif ($imc < 30 ){  // 25 - 29,9
          echo " , <strong style='color:red'>Sobrepeso</strong> deja de comer hamburguesas grasositas";

      }elseif ($imc < 35){   //30 - 34,9 
         
        echo " <strong style='color:red'>Obesidad moderada</strong> no cabe en la ropa compra un perro para que camines";
             
      }elseif ($imc < 40) {
        echo " , <strong style='color:red'>Obesidad severa</strong>, muchas empanaditas a correr o caminar urgente";
      }else {
        echo "<b style='color:red'> Ve al GYM el perro no funciono. </b>";
      }
      

    }






/*
   function establecer_color($color_carro, $nombre_carro) {
      
       $this -> color = $color_carro;

      // echo 'El color del carro es: ' . $color_carro;

       echo '<br>' . 'El auto ' . '<strong>'. $nombre_carro . '</strong>' . ' es de color: ' . $color_carro . '<br>';
       echo '<br>';
     
   }

*/

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