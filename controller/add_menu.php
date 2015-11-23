<?php
class add_menu extends ACore_Admin{

	protected function process(){
		
		$title = $_POST['title'];
		$text = $_POST['text'];

		if(empty($title) || empty($text)){
			exit("Field is not filled");
		}
		$result = $this->m->add_menu($title,$text);
		if(!$result){
			exit("Incorect date");
		}
		else {
			$_SESSION['res'] = 'Changes saved';
			header("Location:?option=edit_menu");
			exit;
		}
	}


	public function get_content(){

	}
	
}
?>