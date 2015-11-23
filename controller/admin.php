<?php
class admin extends ACore_Admin{
	
	public function get_content(){
		$result = $this->m->get_admin_content();
		return $result;
	}
}
?>