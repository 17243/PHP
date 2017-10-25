<?php

session_start();

    if(!empty($_GET['page']) && is_file('Controler_'.$_GET['page'].'.php')) {
        include 'Controler_'.$_GET['page'].'.php';
    }else{
        include 'Controler_reservation.php';
    }

?>