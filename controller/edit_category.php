<?php
class edit_category extends ACore_Admin{
	
	public function get_content(){

		$result = $this->m->edit_category();
		return $result;
	}
}
?>