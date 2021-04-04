<?php
spl_autoload_register('route_middleware');
class post_Controller extends post_Middleware { 
    public function registrationcontroller($data) {
        $this->registrationcore($data);
    }
}

function route_middleware(){
    include("../web/web.php");
    include_once $route['middleware'];
}