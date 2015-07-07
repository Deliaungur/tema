<?php

    class mainController extends Controller
    {
        // private $menu = array(
        //                     "home"=>"homeController",
        //                     "about"=>"aboutController",
        //                     "contact"=>"contactController",
        //                     "login"=>"loginController");  
        private $array; 
        private $menu;
        
        public function __construct(){
            // get $menu from DB
            $obj = new menuModel;
            $this->array = $obj->get();
            
            foreach($this->array as $menuItem){
                $this->menu[$menuItem] = $menuItem."Controller";
            }
            
            if(isset($_GET['page'])){
                $page = $_GET['page'];
            }
            else $page = 'home';
            
            if(array_key_exists($page,$this->menu)){
                new $this->menu[$page];
            }
            else new errorController;
            
        } 
    }