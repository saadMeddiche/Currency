<?php
require_once './autoload.php';

$pages = ['home','convert'];

require_once './views/includes/header.php';

if (isset($_GET['page'])) {

    
    if (in_array($_GET['page'], $pages)) {

        $page = $_GET['page'];
        HomeController::index($page);
    } else {
        include('views/includes/404.php');
    }
} else {
    HomeController::index('home');
}

require_once './views/includes/footer.php';