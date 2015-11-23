<?php
class delete_category extends ACore_Admin{
	public function process(){
		if($_GET['del']){
			$id_category = (int)$_GET['del'];

			$result = $this->m->delete_category($id_category);

			if($result){
				$_SESSION['res'] = "Deleted";
				header("Location:?option=edit_category");
				exit();
			}
			else {
				exit('Error delete');
			}
		}
		else {
			exit("Incorect date");
		}
	}
	public function get_content(){

	}
}
?>