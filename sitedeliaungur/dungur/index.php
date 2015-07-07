<?php

    require_once 'config.php';
    
    new mainController;
    new headController;   // calls the controller that renders the blog title
    new menuController;
    new contentController;  // calls the controller that renders the content of page
    new footerController;   // calls the controller that renders the footer
    new headerController;
    