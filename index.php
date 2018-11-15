<?php

    const MYSQL_HOST = 'localhost';
    const MYSQL_USER = 'root';
    const MYSQL_PASS = '';
    const MYSQL_DATABASE = 'books';

    include_once __DIR__ . '/controller.php';
    include_once __DIR__ . '/model.php';

    $controller = new controller();

    $action = array_key_exists('action', $_GET) ? $_GET['action'] : 'index';
    if(!method_exists($controller, $action)){
        $action = 'index';
    }

    $content = $controller->{$action}();

    header('Content-Type: text/html; charset=UTF-8');

?><html>
  <head>
      <title>Книги</title>
  </head>
  <body>
     <?= $content ?>
  </body>
</html>

