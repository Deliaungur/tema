<?php

    class menuController extends Controller
    {
        //private $menu = array('home', 'about', 'contact', 'login');
        private $menu;
        public function __construct(){
            // get menuItems from DB
            $obj = new menuModel;
            $this->menu = $obj->get();
            echo "<ul>";
            foreach($this->menu as $menuItem){
                echo $this->render(VIEWS.'menuView.php',
                            array('menuItem'=>$menuItem));
            }
            echo "</ul>";
        }
    }