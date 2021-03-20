<?php

class App{
    
    function __construct(){
        echo "<p>Nueva app</p>";

        $url = $_GET['url'];

        echo $url;
    }
}

?>