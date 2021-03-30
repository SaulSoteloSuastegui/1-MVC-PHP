<?php
//require_once 'controllers/mal.php';
//require_once 'libs/app.php';
class App{
    
    function __construct(){
        //echo "<p>Nueva app</p>";

        $url = isset($_GET['url']) ? $_GET['url']:null;
        $url = rtrim($url, '/');
        $url = explode('/' , $url);

        //var_dump($url);
//Si ingreso sin ningun controlador en la barra de direcciones cargara el controlador main
        if(empty($url[0])){
            $archivoController = 'controllers/main.php';
            require_once $archivoController;
            $controller = new Main();
            $controller->loadModel('main');
            return false;
        }

        $archivoController = 'controllers/'.$url[0].'.php';

        if(file_exists($archivoController)){
        require_once $archivoController;
        $controller = new $url[0];
        //llamando al metodo loadModel del controlador
        //el cual instanciara el modelo necesario
        $controller->loadModel($url[0]);

            if(isset($url[1])){
                $controller->{$url[1]}();
            }


        }else{
            echo "<p>Error desde app</p>";
            require_once 'controllers/mal.php';
          $controller = new Errores();
        }
    }
}

?>