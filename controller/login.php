<?php

class login extends ACore{

	protected function process(){
		$login = strip_tags(mysql_real_escape_string($_POST['login']));
		$password = strip_tags(mysql_real_escape_string($_POST['password']));

		if(!empty($login) && !empty($password)){
			$password = md5($password);
			$query = "SELECT id FROM users WHERE login='$login' AND password='$password'";
			$result = mysql_query($query);
			if(!$result){
				exit(mysql_error());
			}

			if(mysql_num_rows($result) == 1){

				$_SESSION['user'] = TRUE;
				header("Location:?option=admin");
				exit;
			}
			else {
				exit('User not found');
			}

		}
		else {
			exit("Required fields");
		}

	}

	public function get_content(){

		
		echo '	<div id="content">
			  <div class="entry">';

print <<<HEREDOC

<form action='' method='POST'>
<p>Login:<br />
<input type='text' name='login' class=''>
</p>
<p>Password:<br />
<input type='password' name='password' class=''>
</p>
<p><input type='submit' name='button' value='Save'>
</p>
</form>
HEREDOC;

		
		echo "	</div>
			  </div>";
		
	}

}

?>