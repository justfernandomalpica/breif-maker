<?php declare(strict_types=1);

namespace Controllers;

use Core\Rendering\RenderEngine;
use Core\Rendering\View;

class FormController {
    private RenderEngine $rEngine;

    public function __construct(RenderEngine $re) {
        $this->rEngine = $re;
    }

    public function index() {
        $view = new View("public/breifForm");

        $this->rEngine->render("master", $view);
    }

    public function post() {
        debug("post");
    }
    public function farewell() {
        debug("farewell");
    }
}