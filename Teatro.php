<?php
/**
 * PERCEVAL MISTCHENCO, AUGUSTO
 * FAI-3085
 */
class teatro{
//ATRIBUTOS
    private $nombreTeatro;
    private $direccionTeatro;
    private $obrasDeTeatro=array();
//METODOS 

public function __construct($nombreTeatro,$direccionTeatro,$obrasDeTeatro){
    $this->nombreTeatro=$nombreTeatro;
    $this->direccionTeatro=$direccionTeatro;
    $this->obrasDeTeatro=$obrasDeTeatro;
}

public function setNombreTeatro($nombreTeatro){
    $this->nombreTeatro=$nombreTeatro;
}

public function setDireccionTeatro($direccionTeatro){
    $this->direccionTeatro=$direccionTeatro;
}

public function setObrasTeatro($obrasDeTeatro){
    $this->obrasDeTeatro=$obrasDeTeatro;
}

public function getNombreTeatro(){
    return $this->nombreTeatro;
}

public function getDireccionTeatro(){
    return $this->direccionTeatro;
}
public function getObrasTeatro(){
    return $this->obrasDeTeatro;

}


public function __toString(){
    $obrasDeTeatroContatenado=" ";
    foreach($this->obrasDeTeatro as $key=>$value){
        foreach($value as $k=>$v){
        
            $obrasDeTeatroContatenado=$obrasDeTeatroContatenado."--/--".$v;
                
        }
      }
    return "El nombre del teatro es: ".$this->getNombreTeatro()."\n"."La direccion del teatro es: ". $this->getDireccionTeatro()."\n"."FUNCION Y PRECIO".$obrasDeTeatroContatenado."\n";
    
}

public function __destruct(){
    echo $this . " instancia destruida, no hay referencias a este objeto \n";
}
}


