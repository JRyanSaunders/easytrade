<?php

define('EasyTrade_Path', __DIR__);

class EasyTradeCore
{
    function __construct()
	{
		// $this->debug = isset($_GET['debug']);
		$this->include_files();
        $this->hook_actions();
	}

    private function include_files()
	{
        /* Connect to Database */
        include EasyTrade_Path . '/functions/database-functions.php';

        /* Create Tables */
        include EasyTrade_Path . '/functions/create-tables.php';

    }

	private function hook_actions()
	{

    }

    public static function logout()
    {
        if ($loggedin == false) {
            die;
        } 
        else {
            $_SESSION['loggedin'] = false;
            $_SESSION['username'] = false;
            $_SESSION['user_role'] = false;
            $_SESSION['user_ID'] = false;
            die;
        }  
    }

}

new EasyTradeCore();
?>