<?php
    require_once 'abstract-api.php';
    require_once '../controllers/movieController.php';

    class MovieApi extends Api{

        function Create($params) {
            $c = new MovieController;
            return $c->CreateMovie($params);
        }

        function Read($params) {
            $c = new MovieController;

            if (array_key_exists("id", $params)) {
                $customer = $c->getMovieById($params["id"]);
                return json_encode($customer, JSON_PRETTY_PRINT);
            }
            else {
                return $c->getAllMovies();
            }
        }
         function Update($params) {
             // TODO
         }
         function Delete($params) {
            // TODO
         }
    }
?>