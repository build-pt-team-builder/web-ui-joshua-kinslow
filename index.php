<?php 
    if(isset($_GET['page'])) {
        $page = $_GET['page'];
        if ($page === "index" || empty($page)){
            require_once('./system/views/index.php');
        } else if ($page === "about"){
            require_once('./system/views/about.php');
        }
    } else {
        require_once('./system/views/index.php');
    }
?>