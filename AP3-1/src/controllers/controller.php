<?php

namespace src\controllers;

use src\models\Model;
use src\views\View;

require_once __DIR__ . "/../models/Model.php";
require_once __DIR__ . "/../views/View.php";

class Controller
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new Model();
        $this->view = new View();
    }

    public function run()
    {
        $data = $this->model->getData();
        $this->view->render($data);
    }
}
