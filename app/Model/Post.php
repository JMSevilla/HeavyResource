<?php
spl_autoload_register('route_controller');
class postModel extends post_Controller { 
    public function registration() {
        $data = [
            'data1' => $_POST['data1'],
            'data2' => $_POST['data2'],
            'data3' => $_POST['data3'],
            'data4' => $_POST['data4']
        ];
        $this->registrationcontroller($data);
    }
}

function route_controller() {
    include("../web/web.php");
    include_once $route['controller'];
}