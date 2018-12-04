<?php
class Customer extends CustomerCore
{
	/*
    * module: tmsociallogin
    * date: 2018-12-04 16:50:23
    * version: 1.2.0
    */
    public function logout()
	{
		if (file_exists(dirname(__FILE__).'/../../facebook/facebook.php'))
		{
			include(dirname(__FILE__).'/../../facebook/facebook.php');
			$facebook = new Facebook(array(
				'appId'  => Configuration::get('TMSOCIALLOGIN_APPID'),
				'secret' => Configuration::get('TMSOCIALLOGIN_APPSECRET'),
			));
			$facebook->destroySession();
		}
		parent::logout();
	}
	/*
    * module: tmsociallogin
    * date: 2018-12-04 16:50:23
    * version: 1.2.0
    */
    public function mylogout()
	{
		if (file_exists(dirname(__FILE__).'/../../facebook/facebook.php'))
		{
			include(dirname(__FILE__).'/../../facebook/facebook.php');
			$facebook = new Facebook(array(
				'appId'  => Configuration::get('TMSOCIALLOGIN_APPID'),
				'secret' => Configuration::get('TMSOCIALLOGIN_APPSECRET'),
			));
			$facebook->destroySession();
		}
		parent::mylogout();
	}
}
