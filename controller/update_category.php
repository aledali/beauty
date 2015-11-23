<?php
class update_category extends ACore_Admin{

	protected function process(){
		
		$id = $_POST['id'];
		$title = $_POST['title'];

		if(empty($title)){
			exit("Field is not filled");
		}

		$result = $this->m->update_category($id,$title);
		if(!$result){
			exit("Field is not filled");
		}
		else {
			$_SESSION['res'] = 'Changes saved';
			header("Location:?option=edit_category");
			exit;
		}
	}


	public function get_content(){

		if($_GET['id_text']){
			$id_category = (int)$_GET['id_text'];
		}
		else {
			exit('incorect date');
		}

		$category = $this->m->get_text_category($id_category);
		return $category;
	}
	
}
?>