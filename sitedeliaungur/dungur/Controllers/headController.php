<?php

    class headController extends Controller
    {
        function __construct(){
        
            // here we will get the data from the model
        
            // for now, we'll just use hard-coded data, an ordinary array
           
        
            echo $this->render(VIEWS."headView.php",array('title'=>'Blogul Deliei Ungur'));
            
        }

    }