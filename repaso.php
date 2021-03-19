<?php
/**
 * @param array $vinoAux
 * @return array
 */
function promedioVinito( $vinoAux){
/**variables internas
 * $sumaBotellas int
 * sumaPrecio int
 * $promedioPrecio float
*/
    $sumaBotellas=0;
    $sumaPrecio=0;
    $vinitoFinal=array();
        for($i=0; $i<count($vinoAux["variedad"]); $i++){
            $sumaBotellas= $sumaBotellas+ $vinoAux["cantBotellas"][$i];
            $sumaPrecio= $sumaPrecio + $vinoAux["precioUnidad"][$i];
    
        }
    $promedioPrecio= $sumaPrecio/ count($vinoAux["variedad"]);
    $vinitoFinal=["promedioPrecio"=> $promedioPrecio, "sumaBotellas"=> $sumaBotellas];
    return $vinitoFinal;
    }
    




/**PROGRAMA PRINCIPAL
 * $opcion string
 * $promedio array (llamada a la funcion)
 * $vino array
 */

 $vino=array();
$vino["Malbec"]=array(
    "variedad" => ["amargo","dulce"],
    "cantBotellas" => [1 , 10],
    "fechaProd"=>  [2005, 2001],
    "precioUnidad"=>[1500, 2500]
);

$vino["Cabernet"]=array(
    "variedad" => ["amargo","dulce"],
    "cantBotellas" => [15 , 12],
    "fechaProd"=>  [2008, 2010],
    "precioUnidad"=>[1500, 2000]
);
$vino["Merlot"]=array(
    "variedad" => ["amargo","dulce"],
    "cantBotellas" => [15 , 40],
    "fechaProd"=>  [2003, 2012],
    "precioUnidad"=>[1500, 1000]
);



echo "Seleccione el vino (Malbec , Cabernet o Merlot: ";
$opcion=trim(fgets(STDIN));

if($opcion=="malbec"){
    $promedio= promedioVinito($vino["Malbec"]);
    echo "total Botellas: ". $promedio["sumaBotellas"]. "\n";
    echo "el promedio es". $promedio["promedioPrecio"]."\n";
}elseif ($opcion=="cabernet"){
    $promedio= promedioVinito($vino["Cabernet"]);
    echo "total Botellas: ". $promedio["sumaBotellas"]. "\n";
    echo "el promedio es". $promedio["promedioPrecio"]."\n";

}elseif($opcion=="merlot"){
    $promedio= promedioVinito($vino["Merlot"]);
    echo "total Botellas: ". $promedio["sumaBotellas"] .  "\n";
    echo "el promedio es: ". $promedio["promedioPrecio"] . "\n";
}






