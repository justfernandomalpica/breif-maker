<?php

namespace Controllers;

use Core\Rendering\RenderEngine;
use Core\Rendering\View;
use Models\User;

class IndexController {
    private RenderEngine $rEngine;

    public function __construct(RenderEngine $rEngine) {
        $this->rEngine = $rEngine;
    }

    public function index() : void {
        $view = new View("public/loginForm");
        $this->rEngine->render("master",$view);
    }

    public function post() : void {
        debug("post");
    }

    public function login() :void {
        debug("login");
    }

    public function auth() : void {
        debug("auth");
    }
    
}