<?php

class App{
    
    function __construct(){
        echo "<p>Nueva app</p>";

        $url = $_GET['url'];
        $url = rtrim($url, '/');
        $url = explode('/' , $url);

        var_dump($url);
    
    }
}

?>