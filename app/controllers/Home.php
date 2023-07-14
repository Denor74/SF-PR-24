<?php
namespace App\controllers;

use App\core\Controller;

class Home  extends Controller {

    public function index() {
        
        // Из родительского класса наследуем поле view метод render
        // в render передаем контент и шаблон
        $this->view->render('home.phtml', 'template.phtml');
}
}