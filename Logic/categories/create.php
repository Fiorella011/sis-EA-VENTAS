<?php
require_once "../conexion.php";
$name="hahah";
$description="hahahah";
//validar que los campos no este vacios
if($name=="" || $description == ""){
    echo "Error,campos vacios";
    die();
    }
    //preparamos el array con los datos
    $arrData=array(
        $name
        $description
        //preparamos la consulta
    );$sql="INSERT INTO categories (c_name,c_description) VALUES(?,?);";
    try{
        //preparamos la consulta con la conexion 
        $prepared=$conexion->prepare($sql);
        $prepared->execute($arrData);
        echo "Datos guardados";
        catch (PDOException $e){
            echo "Error:" . $e->getMessage();
    }