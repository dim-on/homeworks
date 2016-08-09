<?php

/**
 * Created by PhpStorm.
 * User: rus
 * Date: 05.08.16
 * Time: 19:20
 */
class adminLoginController
{

    private $response;

    public function __construct(array $parameters)
    {
        switch ($parameters[0]) {
            case 'getform':  // path {site}/admin/signin/?getform
                $this->response = $this->getFormAction();
                break;
            default:
                $this->response = $this->signInAction();
        }

    }

    public function getFormAction() {

        $form = new adminLoginFormClass();

        return $form->Render();

    }

    public function signInAction() {

        if (!isset($_POST['login'], $_POST['password']))
            throw new Exception('Not correct parameters for logging');

        $authorization = new AuthorizationClass($_POST['login'], $_POST['password']);

        return $authorization->checkLogin();

    }
    public function getResponse()
    {
        return $this->response;
    }
}