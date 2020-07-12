<?php
use Core\Router;
Router::connect('/', ['controller' => 'app ', 'action' => 'index']);
Router::connect('/register', ['controller' => 'user', 'action' => 'add']);
Router::connect('/PiePHP/user/wesh', ['controller' => 'user', 'action' => 'filter']);
Router::connect('/PiePHP/test', ['controller' => 'app', 'action' => 'index']);