<?php
abstract class ACore{

	protected $m;
	
	public function __construct(){
		$this->m = new model();
	}

	protected function get_header(){
		return TRUE;
	}

	protected function get_menu(){
		$row = $this->m->menu_array();
		return $row;
	}

	protected function get_side_bar(){
		$result = $this->m->get_side_bar();
		return $result;
	}

	protected function get_footer(){
		$row = $this->m->menu_array();
		return $row;
	}

	public function get_body($tpl){

		if($_POST){
			$this->process();
		}

		$this->get_header();
		$menu_top = $this->get_menu();
		$sidebar = $this->get_side_bar();
		$content = $this->get_content();
		$footer = $this->get_footer();

		include "tpl/index.php";
		
	}

	abstract function get_content();

}
?>