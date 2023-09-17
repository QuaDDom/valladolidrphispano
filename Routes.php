<?php
require "./vendor/autoload.php";

$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {
    
    $r->addRoute("GET", "/", "Index");

    $r->addRoute("GET", "/404[/]", "ErrorS");

    //Blogs

    $r->addRoute("GET", "/blogs[/]", "BlogsController");

    // Routes Blog

    $r->addRoute("GET", "/blog/{title}[/]", "BlogController");

    // Admin Routes

    $r->addRoute(["GET", "POST"], "/auth/{type}[/]", "UserAdminController");


});

$httpMethod = $_SERVER["REQUEST_METHOD"];
$uri = $_SERVER["REQUEST_URI"];

if (false !== $pos = strpos($uri, "?")) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
        header("Location: " . APP_HOST . "/404");
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        header("Location: " . APP_HOST . "/404");
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        // ... call $handler with $vars
        $handler::index($vars);

        break;
}
?>