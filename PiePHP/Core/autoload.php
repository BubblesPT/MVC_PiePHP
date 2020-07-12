<?php

/*function myAutoloader($className)
{
    //make it work for MVC
    if (file_exists($className.".php")){

        include $className.'.php';

    } elseif (file_exists("src/".$className.".php")){
        include "src/".$className.".php";
    }

    var_dump($className);

}
spl_autoload_register('myAutoloader');*/
spl_autoload_register(function ($className){
    $className = str_replace("\\", "/", $className);
    $var = $className . ".php";
    if (is_file($var)){
        include $var;
    } elseif (is_file("src/".$var)){
        include "src/".$var;
    }

});
