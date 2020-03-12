<?php
require_once 'gameFiles.php';
require_once 'gameConfig.php';
echo "<pre>";
 /*names of two input: username and password*/
/*foreach($_POST as $key => $val){
    echo "$key:$val\n";
}*/

extract($_POST);


//1: can login 2: user does not exist  3: invaild password
$re = checkLogin($username, $password);
//$re = 2; //Please comment this after completing your checkLogin function

if($re===1){
	/*Redirect browser*/
	header("Location: gameWelcome.php/?user=$username");

}else{
	echo "Invaild username or password";

	/*Redirect to login.php after 5 seconds*/
    header("refresh:5; url=/CS240/mathgame/GameStart.php");
}


/**
*Returns 1: can login
*		 2: user does not exist
		 3: invaild password
	*/
function checkLogin($name, $pw){
	$all_user = get_user_info(STUDENTFILE);

	//$name = strtolower($name);

	//print_r($all_user);

	//Check if the username exists, if not return 2
	$user_found = array_key_exists($name, $all_user);
	if(!$user_found) return 2;



	//Check to see if the password matches, if so return 1
	if ($pw == $all_user[$name]['password']) return 1;

	//if the password didn't match return a 3
	return 3;
}



?>
