<?php
class category extends ACore{
	public function get_content(){

		if(!$_GET['id_cat']){
			echo "<p>No date</p>";
		}
		else{
			$id_cat = (int)$_GET['id_cat'];
			if(!$id_cat){
				exit("<p>No date</p>");
			}
			else {
				$result = $this->m->get_cat($id_cat);
				return $result;
			}
		}	
	}
}
?>