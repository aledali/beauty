<?php
abstract class ACore_Admin{

	protected $m;
	
	public function __construct(){
		if(!$_SESSION['user']){
			header('Location:?option=login');
		}
		$this->m = new model_Admin();
	}

	protected function get_header(){
	}

	protected function get_menu(){
	}

	protected function get_side_bar(){
	}

	protected function get_footer(){
	}

	public function get_body($tpl){
		if($_POST || $_GET['del']){

			$this->process();
		}
		$this->get_header();
		$this->get_menu();
		$this->get_side_bar();
		$content = $this->get_content();
		$this->get_footer();

	include "tpl/admin/index.php";
		
	}

	abstract function get_content();
}
?>