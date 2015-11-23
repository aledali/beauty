<?php
class add_article extends ACore_Admin{

	protected function process(){
		if(!empty($_FILES['img_src']['tmp_name'])){
			if(!move_uploaded_file($_FILES['img_src']['tmp_name'],'img/'.$_FILES['img_src']['name'])){
				exit('No update file');				
			}
			$img_src = 'img/'.$_FILES['img_src']['name'];
		}
		else {
			exit('Uploade file');
		}
		$title = $_POST['title'];
		$date = date('Y-m-d',time());
		$discription = $_POST['discription'];
		$text = $_POST['text'];
		$cat = $_POST['cat'];

		if(empty($title) || empty($discription) || empty($text)){
			exit("Field is not filled");
		}

		$result = $this->m->add_article($title,$img_src,$date,$text,$discription,$cat);

		if(!$result){
			exit("Incorect date");
		}
		else {
			$_SESSION['res'] = 'Changes saved';
			header("Location:?option=admin");
			exit;
		}

	}


	public function get_content(){

		$cat = $this->m->get_categories();
		return $cat;
	}
	
}
?>