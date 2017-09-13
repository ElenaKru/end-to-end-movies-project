<?php
require_once 'controller.php';
require_once '../models/directorModel.php';

class DirectorController extends Controller {
    private $db;

    function __construct() {
        // $this->db = new BL();
    }

    function CreateDirector($params) {
        $d = new DirectorModel($params);
        return BL::CreateEntity(directorModel::tableName, $d->jsonSerialize());
        //$this->db->CreateEntity($c);

    }

    function getAllDirectors() {
        return json_encode(BL::getAllIds(DirectorModel::tableName));
    }

    function getDirectorById($id) {
        // CONNECT BL
        $array = [
            "id" => $id,
            "name" => MD5($id)
        ];

        $c = new DirectorModel($array);
        return $c->jsonSerialize();
    }


}