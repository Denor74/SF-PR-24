<?php

namespace App\controllers;
use App\core\Controller;

// наследуем класс от класса Controller из App\core\Controller.php
class Error extends Controller {

    public function index() {
       
        // Из родительского класса наследуем поле view метод render
        // в render передаем контент и шаблон
        $this->view->render('error.phtml', 'template.phtml');
    }

}