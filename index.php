<?php 
    require_once('./system/config.inc.php');
    if ($maintenance) {
        echo '<div id="Maintenance"><h1>Maintenance Mode</h1><p>This website is currently under maintenance. Please try again later.</p></div>';
    } else {
        if(isset($_GET['page'])) {
            $page = $_GET['page'];
            if ($page === "index" || empty($page)){
                require_once('./system/views/index.php');
            } else if ($page === "about"){
                require_once('./system/views/about.php');
            } else if ($page === "pricing"){
                require_once('./system/views/pricing.php');
            }
        } else {
            require_once('./system/views/index.php');
        }
    }
?>