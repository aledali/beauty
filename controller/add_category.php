<?php
class add_category extends ACore_Admin{

	protected function process(){
		
		$name_category = $_POST['name_category'];

		if(empty($name_category)) {
			exit("Field is not filled");
		}
		$result = $this->m->add_category($name_category);
		if(!$result){
			exit("Incorect date");
		}		
		else {
			$_SESSION['res'] = 'Changes saved';
			header("Location:?option=edit_category");
			exit;
		}
	}


	public function get_content(){

	}
	
}
?>