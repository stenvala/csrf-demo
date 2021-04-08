<?php 

foreach ($_GET as $key => $value) {
    if ($key == 'cors') {
        header('Access-Control-Allow-Origin: *');        
    }
}


foreach (getallheaders() as $key => $value) {
    if (trim($key) == 'csrf-token') {
        print('Token found');
        setcookie('sessionId', 'goodSession');
        return;
    }    
}

header("HTTP/1.0 403 Unauthorized");
