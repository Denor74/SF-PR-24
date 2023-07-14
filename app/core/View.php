<?php

namespace App\core;

class View
{
    // в функцию передаём:
    // $content_view - контент
    // $template_view - шаблон
    // $payload - данные
    public function render($content_view, $template_view = null, $payload = null)
    {
        // Если передаётся шаблон - Включаем на страницу
        if($template_view) {
           include_once LAYOUT . $template_view;
        }

    }
}
