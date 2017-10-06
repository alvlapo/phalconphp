<?php

return new \Phalcon\Config(
    [
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
    ]
);