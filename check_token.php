<?php
	include "curl.php";
	$token = ACCESS_TOKEN;
	$my = json_decode(auto("https://graph.facebook.com/me?access_token=$token"),true);
	var_dump($my);
?>
