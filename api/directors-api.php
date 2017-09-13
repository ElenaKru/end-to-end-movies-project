<?php
require_once 'abstract-api.php';
require_once '../controllers/directorController.php';

class DirectorApi extends Api{

    function Create($params) {
        $c = new DirectorController;
        return $c->CreateDirector($params);
    }

    function Read($params) {
        $c = new DirectorController;

        if (array_key_exists("id", $params)) {
            $customer = $c->getDirectorById($params["id"]);
            return json_encode($customer, JSON_PRETTY_PRINT);
        }
        else {
            return $c->getAllDirectors();
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