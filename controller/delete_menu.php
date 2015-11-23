<?php
class delete_menu extends ACore_Admin{
	public function process(){
		if($_GET['del']){
			$id_menu = (int)$_GET['del'];

			$result = $this->m->delete_menu($id_menu);

			if($result){
				$_SESSION['res'] = "Deleted";
				header("Location:?option=edit_menu");
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