<?php
spl_autoload_register('route_models');
if(isset($_POST['registerTrigger']) == true) { 
    $callback = new postModel();
    $callback->registration();
}

function route_models() {
    include("../web/web.php");
    include_once $route['models'];
}