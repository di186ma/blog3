<?php

namespace Framework;
use Framework\Router;
use Dotenv\Dotenv;


class Application
{
    public static function init(){
        require "src/routes.php";
        echo "Приложение инициализировано<p>";
        foreach (Router::$routes as $route){
            $route->getParams();
        }
        foreach (Router::$routes as $route){
            $route->getMask();
        }
    }
}