<?php
/**
 * PERCEVAL MISTCHENCO, AUGUSTO
 * FAI-3085
 */

 include "Teatro.php";
/**
 * Funcion que utilizo como munu de opciones
 */
function seleccionarOpcion(){
    // @opcionValida Booleana - bandera
    // @opcion INT  - devuelve la opcion ingresada
        echo "--------------------------------------------------------------\n";
        echo "\n ( 1 ) Cambiar Nombre Del teatro"; 
        echo "\n ( 2 ) Cambiar direccion del teatro"; 
        echo "\n ( 3 ) Cambiar una funcion del teatro";
        echo "\n ( 4 ) Mostrar todas las funciones del teatro";
        echo "\n ( 5 ) Salir"; 
        echo "\n --------------------------------------------------------------\n";
        // Validamos la opcion ingresada sino solicitamos ingrese un opcion correcta
        do{
            echo "Indique una opcion valida :";
            $opcion = (trim(fgets(STDIN)));
            if($opcion < 1 && $opcion > 5){
                echo "Debe ingresar una opcion valida \n";
                $opcionValida = false;
            }else{
                $opcionValida = true;
            }
        }while(!$opcionValida);
        
        return $opcion;
}
/**
 * FUNCION QUE MODIFICA EL NOMBRE DEL ATRIBUTO nombreTeatro
 * @return object;
 */
  function cambiarNombre($teatroPrincipal){
        echo "Ingrese un Nombre Nuevo para el teatro: ";
        $nombreTeatroNuevo=trim(fgets(STDIN));
        $teatroPrincipal->setNombreTeatro($nombreTeatroNuevo);

    return $teatroPrincipal;
}
/**
 * FUNCION QUE UTILIZO PARA MODIFICAR LA DIRECCION DESDE EL METODO PUBLICO SETDIRECCIONTEATRO
 * @return object;
 */
function agregarDireccion($teatroPrincipal){

        echo "ingrese direccion nueva";
        $direccionNueva=trim(fgets(STDIN));
        $teatroPrincipal->setDireccionTeatro($direccionNueva);
        
return $teatroPrincipal;    
}
/**
 * FUNCION QUE MODIFICA EL ARREGLO QUE DESPUES VOY A UTILIZAR EN LA CLASE COMO ATRIBUTO
 * @return array;
 */
    function agregarObra( $obras_de_teatro){
        echo "Que funcion desea modificar? : ";
        $opcionFuncion=trim(fgets(STDIN));
        
        if($opcionFuncion==1){
            echo "Ingrese el nuevo nombre de la funcion 1: ";
            $nombreFuncionNuevo=trim(fgets(STDIN));
            $obras_de_teatro['FuncionUno']['nombre']=$nombreFuncionNuevo;
            echo"Ingrese el precio de la nueva funcion: ";
            $precioFuncionNueva=trim(fgets(STDIN));
            is_numeric($precioFuncionNueva);
            $obras_de_teatro['FuncionUno']['precio']=$precioFuncionNueva;
         }
                if($opcionFuncion==2){
                    echo "Ingrese el nuevo nombre de la funcion 2: ";
                    $nombreFuncionNuevo=trim(fgets(STDIN));
                    $obras_de_teatro["FuncionDos"]["nombre"]=$nombreFuncionNuevo;
                    echo"Ingrese el precio de la nueva funcion: ";
                    $precioFuncionNueva=trim(fgets(STDIN));
                    $obras_de_teatro["FuncionDos"]["precio"]=$precioFuncionNueva;  
            
        
                }
                    if($opcionFuncion==3){
                         echo "Ingrese el nuevo nombre de la funcion 3: ";
                        $nombreFuncionNuevo=trim(fgets(STDIN));
                        $obras_de_teatro["FuncionTres"]["nombre"]=$nombreFuncionNuevo;
                        echo"Ingrese el precio de la nueva funcion: ";
                        $precioFuncionNueva=trim(fgets(STDIN));
                        $obras_de_teatro["FuncionTres"]["precio"]=$precioFuncionNueva;  
           
        
                    }
                        if($opcionFuncion==4){
                            echo "Ingrese el nuevo nombre de la funcion 4: ";
                            $nombreFuncionNuevo=trim(fgets(STDIN));
                            $obras_de_teatro["FuncionCuatro"]["nombre"]=$nombreFuncionNuevo;
                            echo"Ingrese el precio de la nueva funcion: ";
                            $precioFuncionNueva=trim(fgets(STDIN));
                            $obras_de_teatro["FuncionCuatro"]["precio"]=$precioFuncionNueva;  
          
                        }   

        return $obras_de_teatro;
    }


//ESTRUCTURA DE DATOS

$obras_de_teatro=array();
$obras_de_teatro["FuncionUno"]=array("nombre" =>"HAMLET","precio" => "150");
$obras_de_teatro["FuncionDos"]=array("nombre" => "ROMEO Y JULIETA","precio" => "200");
$obras_de_teatro["FuncionTres"]=array("nombre" => "LA VIDA ES SUEÑO ","precio" => "250");
$obras_de_teatro["FuncionCuatro"]=array("nombre" => "LA CELESTINA", "precio" => "300");


//CREACION DEL OBJETO
$nombreTeatroNuevo="prueba";
$direccionNueva="alberdi";
$teatroPrincipal=new teatro($nombreTeatroNuevo, $direccionNueva,$obras_de_teatro);



//**bucle de control desde actua en la opcion elegida por el usuario*/
do{

    $opcion=seleccionarOpcion();
    switch($opcion){

        case 1:
             $nuevoNombre=cambiarNombre($teatroPrincipal);
        break;
        
        case 2:
            $nuevaDireccion=agregarDireccion($teatroPrincipal);
        
        break;

        case 3:
            $nuevaFuncion=agregarObra($obras_de_teatro);
            $teatroPrincipal->setObrasTeatro($nuevaFuncion);
        break;
        
        case 4:
            echo $teatroPrincipal;
        break;
    }
}while($opcion!=5);