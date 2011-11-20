<?php
if (isset($_COOKIE['anonymous_login'])) {
	$cookie = $_COOKIE['anonymous_login'];
	$plain = pack('H*',$cookie);
	$explode = explode('~',$plain);
	$firstname = $explode[0];
	$lastname = $explode[1];
	$year = $explode[2];
	$month = $explode[3];
	$day = $explode[4];
	$gender = $explode[5];
	$creation = $explode[6];
	echo $firstname.' '.$lastname.' '.$year.' '.$month.' '.$day.' '.$gender.' '.$creation;
}
?>