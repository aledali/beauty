<?php
class view extends ACore{
	
	public function get_content(){

		if(!$_GET['id_text']){
			echo "No date";
		}
		else {
			$id_text = (int)$_GET['id_text'];
			if(!$id_text){
				echo "No date";		
			}
			else{
				$result = $this->m->get_view_content($id_text);
				return $result;
			}
		}			
	}
}
?>