<?php

  $usersCollection = new \Phalcon\Mvc\Micro\Collection();
  $usersCollection->setHandler('\App\Controllers\UsersController', true);
  $usersCollection->setPrefix('/user');
  $usersCollection->get('/', 'freeUserAction');
  $usersCollection->get('/list', 'listUserAction');
  $usersCollection->post('/', 'createAction');
  $app->mount($usersCollection);






  $app->notFound(
    function () use ($app) {
      $app->response->setStatusCode(404, 'Not Found');
      $app->response->sendHeaders();

      $message = 'Nothing to see here. Move along....';
      $app->response->setContent($message);
      $app->response->send();
    }
  );