<?php

    $ROOT_DIR = __DIR__ ;

    function __autoload($className)
    {
        global $ROOT_DIR;

        $pathInclude = [
            'models',
            'models/config',
            'models/ui',
            'models/user',
            'views',
            'views/tables',
            'views/forms',
            'views/menus',
            'controllers',
            'controllers/customers',
            'controllers/admin',
            'controllers/user',
        ];


        foreach($pathInclude as $path) {

            $nameFile = "$ROOT_DIR/$path/$className.php";
            if (file_exists($nameFile)) {
                include_once($nameFile);
                break;
            }

        }

    }