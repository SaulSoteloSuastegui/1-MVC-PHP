<?php

class Nuevo extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render('nuevo/index');
    }
//desde una vista hace la peticion al controlador base, el cual instancia al objeto seleccionado y 
// al metodo pero estos tendran las funcionalidades base que proporciona el controlador base
    function registrarAlumno(){
        //de la vista nuevo del formulario ::nuevo/registrarAlumno 
        //recibo los datos y llamos a mi modelo
        echo "Recibimos los datos del alumno";
        //la clase controller con el metodo loadmodel instancia al objeto del modelo nuevomodel
        //por ello podemos acceder a sus metos
       // $this->model->insert();

       //una ves recibidos los datos llamaramos al modelo para insertar los datos en la base de datos
    // $this->model->insert();

    // en app se utiliza el metodo del controlador base   $controller->loadModel($url[0]);
    // al estar instanciado el objeto modelo correspondiente desde nuestro controlador base
    //podemos llamar a sus metos.
    $this->model->insert();
    }
}

?>

