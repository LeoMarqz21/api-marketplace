<?php 

    /*
    ** Config :: CORS :: Cross Origin Resource Sharing || Comparticion de recursos de distintos origenes.
    */
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Header: Origin, X-Requested-With, Content-Type, Acept');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
    header('Content-Type: application/json; charset=utf-8');
    //end config...

    //ROUTER
    require_once("controllers/router.controller.php");
    
    //GET
    require_once("controllers/get.controller.php");
    require_once("models/get.model.php");
    
    //POST
    require_once("controllers/post.controller.php");
    require_once("models/post.model.php");

    $router = new RoutesController();
    $router->index();

    return;

?>