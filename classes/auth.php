<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Locked
 * Date: 16.04.13
 * Time: 13:34
 * To change this template use File | Settings | File Templates.
 */

class auth
{

	function index()
	{
		global $_REQUEST;
		global $_ERRORS;
		if (isset($_SESSION['session_expired'])) {
			$_ERRORS[] = "session on aegunud!";
			unset($_SESSION['session_expired']);
		}
		if (isset($_POST['username'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$user_id = get_one("SELECT user_id FROM user WHERE username='$username' AND password='$password'");

		}
	}
}