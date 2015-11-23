<?php
class menu extends ACore{
	
	public function get_content(){
		

		if(!$_GET['id_menu']){
			echo "No date";
		}
		else {
			$id_menu = (int)$_GET['id_menu'];
			if(!$id_menu){
				echo "No date";		
			}
			else{
				$row = $this->m->get_h_menu($id_menu);
				return $row;
			}
		}				
	}
}
?>