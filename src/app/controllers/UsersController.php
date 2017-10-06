<?php

namespace App\Controllers;

use App\Models\Users;

class UsersController extends \Phalcon\Mvc\Controller {

  public function freeUserAction()
  {
    return ['result' => 'free'];
  }

  public function createAction()
  {

   if ($this->request->isPost()) {
     $model = new Users();
     $model->save($_POST);
//     $model->login = $this->request->getPost('login', 'striptags');
//     $model->fio = $this->request->getPost('fio', 'striptags');
//     $model->password = $this->request->getPost('password', 'striptags');

//   if ($model->save() === false) {
//     return ['dfd' => 'error'];
//   } else {
//     return ['dfd' => 'success'];
//   };

   };
    return ['respond' => $model->fio];
  }

  public function listUserAction()
  {
    return [
        'database' => [
            'adapter' => 'mysql',
            'host' => 'mysql',
            'port' => 5432,
            'username' => 'root',
            'password' => 'mysql_12345',
            'dbname' => 'app_db',
        ],

        'application' => [
            'controllersDir' => "app/controllers/",
            'modelsDir' => "app/models/",
            'baseUri' => "/",
        ],
    ];
  }
}