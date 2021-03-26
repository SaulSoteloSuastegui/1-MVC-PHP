<?php

class Errores extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje = "Error generico";
        $this->view->render('error/index');

        echo "<p>Error desde la clase error</p>";
    }
}
?>