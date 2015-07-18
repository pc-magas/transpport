<?php
if(!function_exists('password'))
{
	function password($plaintext,$salt=null)
	{
		if(empty($salt)) $salt=mcrypt_create_iv(22,MCRYPT_DEV_URANDOM);
		
		$opts=array('cost'=>12,'salt'=>$salt);
		
		$new_password=password_hash($password,PASSWORD_BCRYPT,$opts);
		
		return $new_password;
	}
}
