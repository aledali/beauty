<?php
class delete_article extends ACore_Admin{
	public function process(){
		if($_GET['del']){
			$id_text = (int)$_GET['del'];

			$result = $this->m->delete_article($id_text);

			if($result){
				$_SESSION['res'] = "Deleted";
				header("Location:?option=admin");
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