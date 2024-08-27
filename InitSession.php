<?php

    include_once 'Metier.php';
    
    session_start();
    $sessionName = 'MovieList';

    if (!isset($_SESSION[$sessionName]))
     $_SESSION[$sessionName] = new Wishlist();
    $wish = &$_SESSION[$sessionName];
    
?>
