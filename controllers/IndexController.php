<?php

namespace Controllers;

use Core\Alerts\AlertManager;
use Core\Auth\csrfToken;
use Core\Rendering\RenderEngine;
use Core\Rendering\View;

class IndexController {
    private RenderEngine $rEngine;

    public function __construct(RenderEngine $rEngine) {
        $this->rEngine = $rEngine;
    }

    public function index() : void {
        $view = new View("public/identify");

        $view->data([
            'csrfToken'=>csrfToken::setGet(),
            'alerts'=>AlertManager::getAll(),
            'title'=>'Hola!'
        ]);

        $this->rEngine->render("master",$view);
    }

    public function post() : void {
        $data = $_POST;

        $name = $this->validateString($data['name']);
        if($name === false) AlertManager::error('Dato invalido', 'Por favor ingresa un nombre válido');

        $email = $this->validateEmail($data['email']);
        if($email === false) AlertManager::error('Dato invalido', 'Por favor ingresa un correo válido');

        $alerts = AlertManager::getAll();

        if(!empty($alerts)) {
            debug('Redirección a \'/form\' si hay errores');
        } else {
            $_SESSION['sid'] = unique_id(15);
            debug('Redirección a \'/\' si no hay errores');
        }
    }

    public function login() :void {
        debug("login");
    }

    public function auth() : void {
        debug("auth");
    }

    private function validateString(string $input) : bool | string {
        $input = trim($input);
        if($input === '') return false;
        return $input;
    }

    private function validateEmail(string $input) : bool | string {
        $email = $this->validateString($input);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        if($email === false) return false;
        return $email;
    }
}