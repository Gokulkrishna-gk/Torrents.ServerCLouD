<?php

// oh fuck, log em out...

if (isset($_COOKIE['torrents_svrcd_session']) && trim($_COOKIE['torrents_svrcd_session']) != '') { // user has a session already?
	// delete the saved session token from the database
	require_once('dbconn_mysql.php');
	$user_session_id = trim($_COOKIE['torrents_svrcd_session']);
	$user_session_id_db = "'".$mysqli->escape_string($user_session_id)."'";
	$delete_session = $mysqli->query("DELETE FROM user_sessions WHERE session_id=$user_session_id_db");
}

$_COOKIE = array();
unset($_COOKIE);
setcookie('torrents_svrcd_session', '', time() - 3600);
setcookie('torrents_svrcd_session', '', time() - 3600, '/', 'torrents.servercd.cf');

header('Location: index.php');
die();

?>