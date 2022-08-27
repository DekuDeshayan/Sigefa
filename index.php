<?php
session_start();

require 'config.php';

//define("BASE_URL", "http://localhost/SIGEFAv1.0");
define("BASE_URL", "https://sigefa-ralph.herokuapp.com");

spl_autoload_register(function($class){

    if(strpos($class, 'Controller') > -1){

        if(file_exists('controllers/'.$class.'.php')){
            require_once 'controllers/'.$class.'.php';
        }

    }else if(file_exists('models/'.$class.'.php') ) {
        
        require_once 'models/'.$class.'.php';

    }elseif('core/'.$class.'.php'){
        require_once 'core/'.$class.'.php';
    }

});

$core = new Core();
$core->run();



?>