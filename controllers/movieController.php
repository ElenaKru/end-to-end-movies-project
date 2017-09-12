<?php 
    require_once 'controller.php';
    require_once '../models/movieModel.php';

    class MovieController extends Controller {
        private $db;

        function __construct() {
            // $this->db = new BL();
        }
        
        function CreateMovie($params) {
            $m = new MovieModel($params);
            return BL::CreateEntity(movieModel::tableName, $m->jsonSerialize());

        }

        function getAllMovies() {
            
        }

        function getMovieById($id) {
            // CONNECT BL
            $array = [
                "id" => $id,
                "name" => MD5($id)
            ];
           
            $c = new MovieModel($array);
            return $c->jsonSerialize();
        }


    }