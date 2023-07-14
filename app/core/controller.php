<?php 
namespace App\core;

interface InterfaceController {
    public function index();
}
class Controller implements InterfaceController {

protected $view;

public function __construct()
{
    $this->view = new View();
}

public function index() {

}

}