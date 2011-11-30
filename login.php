<?php
/*
Anonymous login
version 1.0
by Samuel Champagne

This work is licensed under the Creative Commons Attribution-ShareAlike 3.0 Unported License. To view a copy of this license, visit http://creativecommons.org/licenses/by-sa/3.0/ or send a letter to Creative Commons, 444 Castro Street, Suite 900, Mountain View, California, 94041, USA.

View README.txt for Documentation

project homepage - http://samuelchampagne.com/projects/anonymous-login/

github - https://github.com/gamepreneur/Anonymous-Login
*/
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