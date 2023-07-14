<?php

// подключаем пространство имен для autoload классов из composer.json 
namespace App;

// Стартуем сессию
session_start();

// подключаем глобальные константы из config.php
require_once 'core' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'config.php';

// Подключаем автолоадер
require_once dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

// подключаем Twig



// обращаемся к пространству имён из Route метод start мз класса Route
core\Route::start();
