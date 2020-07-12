<?php
namespace Core;
class Core
{
    public function __construct(){

    }

    public function run()
    {
        include "src/routes.php";
        echo __CLASS__ . "[OK]" . PHP_EOL;
        echo "<br>.............................<br>";
        echo $_SERVER["REDIRECT_URL"]."<br>";

        // /PiePHP/user/index => UserController->indexAction();

        //Router static
        if (($route = Router::get($_SERVER["REDIRECT_URL"])) != null){
            echo "Custom route found<br>";
            $controller = $route["controller"];
            //.......
        } else {

            $arr = explode("/",$_SERVER["REDIRECT_URL"]);
            print_r($arr);
            $class = "\\Controller\\" . ucfirst($arr[2]) . "Controller";
            $method = $arr[3] . "Action";

            echo "<br> $class -> $method <br>";

            $controller = new $class();
            $controller->$method();
        }

        //Dynamique



    }
}