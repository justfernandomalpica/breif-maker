<?php declare(strict_types=1);

namespace Controllers;

use Core\Rendering\RenderEngine;

class AdminController {
    private RenderEngine $rEngine;

    public function __construct(RenderEngine $rEngine) {
        $this->rEngine = $rEngine;
    }
    public function index() {
        debug("index");
    }
    public function getAllResponses() {
        debug("getAllResponses");
    }
    public function getResponse() {
        debug("getResponse");
    }
        public function responseToPDF() {
        debug("responseToPDF");
    }
    public function logout() {
        debug("logout");
    }
}