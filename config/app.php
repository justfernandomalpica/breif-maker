<?php
define("PROJECT_ROOT", dirname(__DIR__, 1));
require PROJECT_ROOT . "/vendor/autoload.php";

use Controllers\AdminController;
use Controllers\CoreController;
use Controllers\FormController;
use Dotenv\Dotenv;
use Core\ActiveRecord;
use Controllers\IndexController;
use Controllers\UsersController;
use Core\Routing\Router;
use Core\Rendering\RenderEngine;

// Environment variables
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();
require PROJECT_ROOT . "/helpers/functions.php";

// Set Database
require __DIR__ . "/database.php";

// Set Active Record
ActiveRecord::setDB($db);
// Set Router
$router = new Router();
// Set Render Engine
$rEngine = new RenderEngine("views/layout", "views");

// Services
$usersController = new UsersController($rEngine);
$adminController = new AdminController($rEngine);
$indexController = new IndexController($rEngine);
$coreController = new CoreController($rEngine);
$formController = new FormController($rEngine);