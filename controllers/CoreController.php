<?php declare(strict_types=1);

namespace Controllers;

use Core\Rendering\RenderEngine;

class CoreController {
    private RenderEngine $rEngine;

    public function __construct(RenderEngine $rEngine) {
        $this->rEngine = $rEngine;
    }

    public function healthz() {
        include PROJECT_ROOT . "/views/public/healthcheck.php";
        exit;
    }
}