<?php

class Controller{

    // Este controlador base tendra tanto la vista como el model
    //Es el controlado el que dependiendo de lo que manda la vista tranaja con el modelo
    //para  despues regresar esa vista
    function __construct(){
        //echo "<p>Controlador base</p>";
        //tenemos las vista creada
        $this->view = new View();
    }
//Añadiendo el modelo- acepte los modelo
//Cuando instancia el objeto hereda la conexicon de database
//
    function loadmodel($model){
        $url = 'models/'.$model.'model.php';

        if(file_exists($url)){
            require $url;
            //
            $modelName = $model.'model';
            //$thiss model con esto mando llamar al modelo que estoy espesificando en el controlador
            
            //instanciamos al modelo seleccionadon nuevomodel y heredando la conexion
            //$this tenemos el modelo creado
            $this->model = new $modelName();
        }
    }
/*
    $this->view = new View(); creamos la vista
     $this->model = new $modelName(); creamos el modelo solicitado
     tenemos el MVC
// Este controlador base tendra tanto la vista como el model
    //Es el controlado el que dependiendo de lo que manda la vista trabaja con el modelo
    //para  despues regresar volvr a regresar esa vista
*/



}