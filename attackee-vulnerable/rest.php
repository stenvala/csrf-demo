<?php 

foreach ($_GET as $key => $value) {
    if ($key == 'cors') {
        header('Access-Control-Allow-Origin: *');
    }
}

setcookie('sessionId', 'goodSession');

print('Welcome to attack my site');
