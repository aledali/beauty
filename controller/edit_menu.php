<?php
class edit_menu extends ACore_Admin{
	
	public function get_content(){
		$result = $this->m->get_edit_menu();
		return $result;
	}
}
?>