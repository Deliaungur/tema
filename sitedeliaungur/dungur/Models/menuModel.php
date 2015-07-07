<?php

    class menuModel extends DBModel
    {  
	    public function get(){

		$query = "SELECT menuitem FROM menu";
		$result = $this->db()->query($query);	
		
		foreach($result as $menuitem)
			foreach($menuitem as $val){
 			   $menu_array[] = $val;
		}

		return $menu_array;
	}

}