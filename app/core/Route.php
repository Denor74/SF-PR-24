<?php
// Файл отвечает за перенаправление адресов

namespace App\core;

define('CONTROLLERS_NAMESPACE', 'App\\controllers\\');

class Route
{
    public static function start()
    {
        //  для перенаправления в определённый класс
        // приводим к нужному регистру
        $controllerClassName = 'home';
        // точка входа
        $actionName = 'index';
        // для передачи дополнительных параметров создаем массив
        $payload = [];

        // Распарсиваем адресную строку
        // explode() - разбиваем строку на массив
        $routers = explode('/', $_SERVER["REQUEST_URI"]);

        // проверяем есть ли первое значение в массиве $routers если нет перенаправляем на home
        if (!empty($routers[1])) {
            $controllerClassName = $routers[1];
        }

        // проверяем есть ли второе значение в массиве $routers если нет перенаправляем на index

        if (!empty($routers[2])) {
            $actionName = $routers[2];
        }
        // array_slice отрезает и возвращает часть массива.
        // отрезаем с 3 (4) значения
        if (!empty($routers[3])) {
            $payload = array_slice($routers, 3);
        }

        // ucfirst - принимает строку в качестве аргумента и возвращает строку с первым символом в верхнем регистре
        $controllerName = CONTROLLERS_NAMESPACE . ucfirst($controllerClassName);
        // приводим всё к нижнему регистру и делаем первый символ названия файла в заглавном регистре
        $controllerFile = ucfirst(strtolower($controllerClassName)) . '.php';

       
        // убеждаемся, что файл  $controllerFile существует
        $contrller_patch = CONTROLLER . $controllerFile;
        
        if(file_exists($contrller_patch)) {
            include_once $contrller_patch;
        } else {
            Route::Error();
        }

        $controller = new $controllerName();

        // проверяем существует ли метод
        $method = $actionName;
        if(method_exists($controller, $method)) {
            $controller->$method($payload);
        } else {
            Route::Error();
        }



        // var_dump($routers);
        // echo '<br>';
        // echo DIRECTORY_SEPARATOR;
        // var_dump($actionName);
        // echo '<br>';
        // var_dump($controllerClassName);
    }
    
    // Страница 404
    public static function Error() {
     //  header () используется для отправки клиенту заголовка HTTP-ответа   
    header('HTTP 404 Not Found');
    header('Status: 404  Not Found');
    header('Location:/error');
    }
}
