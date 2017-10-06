<?php
  try {
    $config = require(__DIR__ . '/../app/config/config.php');
    require __DIR__ . '/../app/config/loader.php';
    $di = require __DIR__ . '/../app/config/di.php';
    $app = new \Phalcon\Mvc\Micro();

    $app->setDI($di);

    require __DIR__ . '/../app/config/routes.php';

    $app->after(
      function () use ($app) {
      
        $return = $app->getReturnedValue();

        if (is_array($return)) {
          $app->response->setContent(json_encode($return));
        } elseif (!strlen($return)) {
          $app->response->setStatusCode('204', 'No Content');
        } else {
          throw new Exception('Bad Response');
        }

        $app->response->send();
      }
    );

    $app->handle();

  } catch (\Exception $e) {
    // ...
  }