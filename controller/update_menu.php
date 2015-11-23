<?php
class update_menu extends ACore_Admin{

	protected function process(){
		
		$id = $_POST['id'];
		$title = $_POST['title'];
		$text = $_POST['text'];

		if(empty($title) || empty($text)){
			exit("Field is not filled");
		}

		$result = $this->m->update_menu($id,$title,$text);
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

		if($_GET['id_text']){
			$id_menu = (int)$_GET['id_text'];
		}
		else {
			exit('incorect date');
		}

		$result = $this->m->get_text_menu($id_menu);
		return $result;
	}
	
}
?>