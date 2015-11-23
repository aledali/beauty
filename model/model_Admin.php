<?php
class model_Admin{
	
	protected $db;

	public function __construct(){
		$this->db=mysql_connect(HOST,USER,PASSWORD);
		if(!$this->db){
			exit("Error connect database".mysql_error());
		}
		if(!mysql_select_db(DB,$this->db)){
			exit("Not exists this basedate");
		}
		mysql_query("SET NAMES 'UTF8'");
	}

	public function get_categories(){
		$query = "SELECT id_category,name_category FROM category";
		$result = mysql_query($query);
		if(!$result){
			exit(mysql_error());
		}
		$row = array();
		for($i=0; $i < mysql_num_rows($result); $i++){
			$row[] = mysql_fetch_array($result,MYSQL_ASSOC);
		}
		return $row;
	} 

	public function get_admin_content(){
		$query = "SELECT id,title FROM articl";
		$result = mysql_query($query);
		if(!$result){
			exit(mysql_error());
		}
		for($i=0; $i < mysql_num_rows($result); $i++){
			$row[] = mysql_fetch_array($result,MYSQL_ASSOC);
		}
		return $row;
	}

	public function add_article($title,$img_src,$date,$text,$discription,$cat){
		$query = "INSERT INTO articl (title,img_src,date,text,discription,cat) VALUES ('$title','$img_src','$date','$text','$discription','$cat')";
		if(!mysql_query($query)){
			exit(mysql_error());
		}
		else 
			return TRUE;
	}

	public function update_article($id,$title,$img_src,$date,$text,$discription,$cat){
		$query = "UPDATE articl SET title='$title',img_src='$img_src',date='$date',text='$text',discription='$discription',cat='$cat' WHERE id='$id'";
		if(!mysql_query($query)){
			exit(mysql_error());
		}
		else 
			return TRUE;
	}

	public function get_text_article($id){
		$query = "SELECT id,title,discription,text,cat FROM articl WHERE id='$id'";
		$result = mysql_query($query);
		if(!$result){
			exit(mysql_error());
		}
		$row = array();
		$row = mysql_fetch_array($result,MYSQL_ASSOC);

		return $row;		

	}

	public function get_edit_menu(){
		$query = "SELECT id_menu,name_menu FROM menu";
		$result = mysql_query($query);
		if(!$result){
			exit(mysql_error());
		}
		else {
			$row=array();
			for($i=0; $i < mysql_num_rows($result); $i++){
				$row[] = mysql_fetch_array($result,MYSQL_ASSOC);
			}

			return $row;

		}
	}

	public function add_menu($title,$text){
		$query = "INSERT INTO menu (name_menu,text_menu) VALUES ('$title','$text')";
		if(!mysql_query($query)){
			exit(mysql_error());
		}
		else 
			return TRUE;
	}

	public function update_menu($id,$title,$text){
		$query = "UPDATE menu SET name_menu='$title',text_menu='$text' WHERE id_menu='$id'";
		if(!mysql_query($query)){
			exit(mysql_error());
		}
		else 
			return TRUE;
	}

	public function get_text_menu($id){
		$query = "SELECT id_menu,name_menu,text_menu FROM menu WHERE id_menu='$id'";
		$result = mysql_query($query);
		if(!$result){
			exit(mysql_error());
		}
		$row = array();
		$row = mysql_fetch_array($result);

		return $row;		
	}

	public function edit_category(){
		$query = "SELECT id_category,name_category FROM category";
		$result = mysql_query($query);
		if(!$result){
			exit(mysql_error());
		}
		else {
			for($i=0; $i < mysql_num_rows($result); $i++){
				$row[] = mysql_fetch_array($result,MYSQL_ASSOC);
			}
		return $row;

		}
	}

	public function add_category($name_category){
		$query = "INSERT INTO category (name_category) VALUES ('$name_category')";
		if(!mysql_query($query)){
			exit(mysql_error());
		}
		else 
			return TRUE;
	}

	public function get_text_category($id){
		$query = "SELECT id_category,name_category FROM category WHERE id_category='$id'";
		$result = mysql_query($query);
		if(!$result){
			exit(mysql_error());
		}
		$row = array();
		$row = mysql_fetch_array($result,MYSQL_ASSOC);

		return $row;		
	}

	public function update_category($id,$title){
		$query = "UPDATE category SET name_category='$title' WHERE id_category='$id'";
		if(!mysql_query($query)){
			exit(mysql_error());
		}
		else
			return TRUE;
	}

	public function delete_article($id_text){
		$query = "DELETE FROM articl WHERE id='$id_text'";
		if(!mysql_query($query)){
			exit(mysql_error());
		}
		else
			return TRUE;
	}

	public function delete_category($id_category){
		$query = "DELETE FROM category WHERE id_category='$id_category'";
		if(!mysql_query($query)){
			exit(mysql_error());
		}
		else
			return TRUE;
	}

	public function delete_menu($id_menu){
		$query = "DELETE FROM menu WHERE id_menu='$id_menu'";
		if(!mysql_query($query)){
			exit(mysql_error());
		}
		else
			return TRUE;
	}

	
}
?>