<?php declare(strict_types=1);

namespace Controllers;

use Core\Rendering\RenderEngine;

class UsersController {
    private RenderEngine $rEngine;

    public function __construct(RenderEngine $rEngine) {
        $this->rEngine = $rEngine;
    }
    public function getAll() {
        debug("getAll");
    }
    public function getById() {
        debug("getById");
    }
    public function setNew() {
        debug("setNew");
    }
        public function setPassword() {
        debug("setPassword");
    }
    public function setRole() {
        debug("setRole");
    }
    public function delete() {
        debug("delete");
    }
}