<?php
	class contentModel extends DBModel
	{
		public function get(){
			$query = "SELECT * FROM students where id<5";
			$result = $this->db()->query($query);
			//var_dump($result);
			foreach($result as $stud){
				$stud_array[]=$stud;
			}
			//echo "<pre>";
			//var_dump($stud_array);
			return $stud_array;
		}
	}