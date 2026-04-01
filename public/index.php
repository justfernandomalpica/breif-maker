<?php

use Middleware\adminRequired;
use Middleware\csrfVerificationRequired;
use Middleware\guestSessionRequired;
use Middleware\superAdminRequired;

require __DIR__ . "/../config/app.php";

// Core
$router->get("/healthcheck", [$coreController, "healthz"])->name("healthz");

// Public
$router->get("/", [$indexController, "index"])->name("index");
$router->post("/identify", [$indexController,"post"])
    ->name("identify.post")
    ->middleware(csrfVerificationRequired::class);
$router->get("/login", [$indexController, "login"])->name("login");
$router->post("/login", [$indexController,"auth"])->name("login.post");

$router->get("/form", [$formController,"index"])->name("form")->middleware(guestSessionRequired::class);
$router->post("/form", [$formController,"post"])->name("form.post")->middleware(guestSessionRequired::class);
$router->get("/thankyou", [$formController, "farewell"])->name("form.farewell")->middleware(guestSessionRequired::class);

$router->get("/admin", [$adminController, "index"])->name("admin.dashboard")->middleware(adminRequired::class);
$router->get("/admin/responses", [$adminController, "getAllResponses"])->name("admin.responses")->middleware(adminRequired::class);
$router->get("/admin/responses/{id}", [$adminController, "getResponse"])
    ->name("admin.response")
    ->where("id", "\d+")
    ->middleware(adminRequired::class);
$router->post("/admin/responses/{id}/pdf", [$adminController, "responseToPDF"])
    ->name("admin.pdf")
    ->where("id", "\d+")
    ->where("id", "\d+")
    ->middleware(adminRequired::class);
$router->post("/admin/logout", [$adminController, "logout"])->name("admin.logout")->middleware(adminRequired::class);

$router->get("/admin/users", [$usersController, "getAll"])->name("admin.users.all")->middleware(superAdminRequired::class);
$router->get("/admin/users/{id}", [$usersController, "getById"])
    ->name("admin.user")
    ->where("id", "\d+")
    ->middleware(superAdminRequired::class);
$router->post("/admin/users", [$usersController, "setNew"])->name("admin.users.new")->middleware(superAdminRequired::class);
$router->pathc("/admin/users/{id}/password", [$usersController, "setPassword"])
    ->name("admin.user.password")
    ->middleware(superAdminRequired::class);
$router->pathc("/admin/users/{id}/role", [$usersController, "setRole"])
    ->where("id", "\d+")
    ->name("admin.user.password")
    ->middleware(superAdminRequired::class);
$router->delete("/admin/users/{id}", [$usersController, "delete"])
    ->where("id", "\d+")
    ->name("admin.user.delete")
    ->middleware(superAdminRequired::class);

$router->dispatch();