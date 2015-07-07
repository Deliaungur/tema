<?php

    class contentController extends Controller
    {
        function __construct(){
	        // here we will get the data from the model
	        $obj = new contentModel;
	        $data = $obj->get();
	        $links = array("tpopa","obolojan");	// this should be replaced by a linkModel that gets blog names from DB
	       
	       	foreach($data as $stud){
	        	echo $this->render(VIEWS."contentView.php",
	        						array('student'=>implode(' ',$stud)));   
	        }
	        
	        foreach($links as $link){
	            echo $this->render(VIEWS."linkView.php",
	        						array('link'=>$link));   
	        }
        }
    }
  
    