<?php

//require the autoload file
require_once('vendor/autoload.php');

//create an istance of the base class
//instantiate fat-free
$f3 = Base::instance();

//define a default route
$f3->route('GET /', function() {


    $view = new View();
    echo $view->render('views/home.html');
}
);

//run Fat-Free
$f3->run();