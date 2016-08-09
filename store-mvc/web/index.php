<?php

require_once '../autoload.php';

$arrPath = explode('/', strtolower($_REQUEST['path']) );

switch ($arrPath[0]) {
    case 'admin':                    // ссылки вида {имя_сайта}/admin/*
        switch ($arrPath[1])  {
            case 'signin':              // ссылки вида {имя_сайта}/admin/singin/ (*)

                $parameters = explode('?', $arrPath[2]) ? : [];

                $loginController = new adminLoginController($parameters);

                $content = $loginController->getResponse();
            break;
            case 'stat':
            case 'customers':
            default:
            $content = implode('.', $arrPath);
        }
    default:
        $userController = new userContentController();
        $content = $userController->printCatalogues();
        $content .= $userController->printProducts();

}
include '../views/pages/main/header.html';
include '../views/pages/main/menu.html';
include '../views/pages/main/content.html';
include '../views/pages/main/footer.html';