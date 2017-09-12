<?php
    require_once 'directors-api.php';
    require_once 'movies-api.php';

    $method = $_SERVER['REQUEST_METHOD']; // verb
    
    switch ($_REQUEST["ctrl"]) {
        case 'director':
            $api = new DirectorApi();
            echo $api->gateway($method, $_REQUEST);
            break;
        case 'movie':
            $api = new MovieApi();
            echo $api->gateway($method, $_REQUEST);
            break;
    }
?>