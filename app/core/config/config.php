<?php

// Создаем файл конфигурации с указанием глобальных констант для всего приложения

namespace App\core;


// define() - определяет именованную константу
//  dirname — Возвращает имя родительского каталога из указанного пути
// __DIR__ вернет путь папки в которой находится скрипт
// DIRECTORY_SEPARATOR - определяет разделитель в зависимости от ОС

// Опрееляем корневую директорию
define('ROOT', dirname(__DIR__, 3) . DIRECTORY_SEPARATOR);

define('APP', ROOT . 'app' . DIRECTORY_SEPARATOR);
define('CORE', APP . 'core' . DIRECTORY_SEPARATOR);
define('DATA', APP . 'data' . DIRECTORY_SEPARATOR);
define('MODEL', APP . 'models' . DIRECTORY_SEPARATOR);
define('VIEW', APP . 'views' . DIRECTORY_SEPARATOR);
define('CONTROLLER', APP . 'controllers' . DIRECTORY_SEPARATOR);
define('LAYOUT', VIEW . 'layout' . DIRECTORY_SEPARATOR);

