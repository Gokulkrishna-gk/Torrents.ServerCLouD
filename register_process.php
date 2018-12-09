<?php

// make a new goddamn user

if (!isset($_POST['e']) || trim($_POST['e']) == '') {
	die('I guess someone just press the submit button without filling in email address huh.');
}

if (!filter_var(trim($_POST['e']), FILTER_VALIDATE_EMAIL)) {
	die("Don't try to mess us with invalid email ya.;)");
}

if (!isset($_POST['p1']) || trim($_POST['p1']) == '') {
	die('A account without password will be very vulnerable ya, my guest.');
}

if (!isset($_POST['p2']) || trim($_POST['p2']) == '') {
	die("I'm very sorry but to make sure you had chosen a correct password we had to let you key in it twice. Be careful ya :).");
}

if (trim($_POST['p1']) != trim($_POST['p2'])) {
	die("Oops. Your password doesn't match, which is somehow bothering us OwO.");
}

// generate a random key from /dev/random
function get_key($bit_length = 128) {
	$fp = @fopen('/dev/urandom','rb'); // should be /dev/random but it's too slow
	if ($fp !== FALSE) {
		$key = substr(base64_encode(@fread($fp,($bit_length + 7) / 8)), 0, (($bit_length + 5) / 6)  - 2);
		@fclose($fp);
		$key = str_replace(array('+', '/'), array('0', 'X'), $key);
		return $key;
	}
	return null;
}

require_once('dbconn_mysql.php');

// ok, make a new user

$new_user_email_db = "'".$mysqli->escape_string(trim($_POST['e']))."'";

// check to see if email already in use
$check_for_email = $mysqli->query("SELECT user_id FROM users WHERE email=$new_user_email_db");
if ($check_for_email->num_rows > 0) {
	die("Don't steal other user's account ya my guest~");
}

$pwd_salt = substr(get_key(256), 0, 22); // make a new 22-character salt
$new_user_pwd_hash = crypt(trim($_POST['p2']), '$2y$12$' . $pwd_salt);
$new_user_pwd_hash_db = "'".$mysqli->escape_string($new_user_pwd_hash)."'";

$new_user_row = $mysqli->query("INSERT INTO users (email, pwrdlol, tsc) VALUES ($new_user_email_db, $new_user_pwd_hash_db, UNIX_TIMESTAMP())");
if (!$new_user_row) {
	die('Kindly contact admin with the following user creation error: '.$mysqli->error);
}

$new_user_id = $mysqli->insert_id;

header('Location: index.php?register_success');

?>