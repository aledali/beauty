<?php
class model {
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

	public function get_side_bar(){
		$query = "SELECT id_category,name_category FROM category";
		$result = mysql_query($query);

		if(!$result){
			exit ("mysql_error()");
		}
		$row = array();
		for ($i = 0;$i < mysql_num_rows($result);$i++){
			$row[] = mysql_fetch_array($result, MYSQL_ASSOC);
		}
		return $row;
	}

	public function menu_array(){
		$query = "SELECT id_menu,name_menu FROM menu";
		$result = mysql_query($query);

		if(!$result){
			exit ("mysql_error()");
		}

		$row = array();
		for ($i = 0;$i < mysql_num_rows($result);$i++){
			$row[] = mysql_fetch_array($result, MYSQL_ASSOC);			
		}
		return $row;
	}

	public function get_main_content(){
		$query = "SELECT id,title,discription,date,img_src FROM articl ORDER BY date DESC";
		$result = mysql_query($query);
		if(!$result){
			exit("mysql_error()");
		}

		for($i=0; $i < mysql_num_rows($result); $i++){
			$row[] = mysql_fetch_array($result,MYSQL_ASSOC);

		}
		return $row;
	}	

	public function get_cat($id_cat){
		$query = "SELECT id,title,discription,date,img_src FROM articl WHERE cat='$id_cat' ORDER BY date DESC";
		$result = mysql_query($query);
		if(!$result){
		exit("mysql_error()");
		}

		$row = array();
		for($i=0; $i < mysql_num_rows($result); $i++){
				$row[] = mysql_fetch_array($result,MYSQL_ASSOC);
		}

		return $row;

	}

	public function get_h_menu($id_menu){
		$query = "SELECT id_menu,name_menu,text_menu FROM menu WHERE id_menu='$id_menu'";
		$result = mysql_query($query);
		if(!$result){
			exit("mysql_error()");
		}
		$row = mysql_fetch_array($result,MYSQL_ASSOC);
		return $row;
	}

	public function get_view_content($id_text){
		$query = "SELECT title,text,date,img_src FROM articl WHERE id='$id_text'";
				$result = mysql_query($query);
				if(!$result){
					exit("mysql_error()");
				}

				$row = mysql_fetch_array($result,MYSQL_ASSOC);
				return $row;
	}


}
?>