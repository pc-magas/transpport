<?php
if(!function_exists('password'))
{
	function password($password,$salt=null)
	{
		$return_salt=false;
		if($return_salt=empty($salt)) $salt=mcrypt_create_iv(22,MCRYPT_DEV_URANDOM);
		
		$opts=array('cost'=>12,'salt'=>$salt);
		
		$new_password=password_hash($password,PASSWORD_BCRYPT,$opts);
		
		return (!$return_salt)?$new_password:array('password'=>$new_password,'salt'=>$salt);
	}
}
