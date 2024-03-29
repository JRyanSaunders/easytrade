<?php
/* Core PHP file of the whole CMS */ 

define('EasyTrade_File_Path', __DIR__);
$full_URL = explode('/', $_SERVER['REQUEST_URI']);
define('EasyTrade_Home_URL', "http://" . $_SERVER['SERVER_NAME'] . "/" . $full_URL[1] . "/");
define('EasyTrade_Admin_URL', EasyTrade_Home_URL . 'admin-pages/');

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
        include EasyTrade_File_Path . '/functions/database-functions.php';

        /* Create Tables */
        include EasyTrade_File_Path . '/functions/create-tables.php';

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