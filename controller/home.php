<?php

//ouverture de session
session_start() ;


if (isset($_SESSION['message'])) {
    echo $_SESSION['message'];
} 

include(VIEWS.'home.php') ;

unset($_SESSION['message']) ;
 ?>
