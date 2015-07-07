<?php

    class headerController extends Controller
    {
        function __construct(){
        
            // here we will get the data from the model
        
            // for now, we'll just use hard-coded data, an ordinary array
            
            $header = array(
                            'blog'=>'Blogul Deliei Ungur',
                            'motto'=>'"Ajunge cel mai sus cel care ajută pe altul să urce." Zig Ziglar'
                        );
        
            echo $this->render(VIEWS."headerView.php",$header);
            
        }

    }