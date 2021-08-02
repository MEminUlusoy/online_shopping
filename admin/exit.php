<?php
    session_start();
    $_SESSION = array();
    session_destroy();

    
    echo "ÇIKIŞ YAPILDI ANA SAYFAYA DÖNÜN.";
?>