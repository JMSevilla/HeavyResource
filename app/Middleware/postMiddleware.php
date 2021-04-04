<?php
spl_autoload_register('route_database');
class post_Middleware extends dbh { 
    public function registrationcore($data) {
        include("../Queries/queries.php");
        if($_SERVER["REQUEST_METHOD"] == "POST") { 
            if($this->querystring($queries['/api/registration'])) { 
                $this->bind(":fname", $data['data1']);
                $this->bind(":lname", $data['data2']);
                $this->bind(":uname", $data['data3']);
                $this->bind(":pass", $this->encrypt($data['data4']));
                if($this->execution()) { 
                    echo json_encode(array("statusCode" => 200));
                }
            }
        }
    }
}

function route_database() {
    include("../web/web.php");
    include_once $route['database'];
}