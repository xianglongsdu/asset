<?php
function encrypt($username, $password) {
	return md5($username + $password);
}