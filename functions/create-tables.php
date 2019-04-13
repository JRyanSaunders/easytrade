<?php
class EasyTrade_Create_Tables
{

    function __construct()
	{
        $this->create_users_table();
        $this->create_users_meta_table();
        $this->create_pages_table();
        $this->create_page_meta_table();
        $this->create_blocks_table();
        $this->create_blocks_meta_table();
        $this->create_pages_blocks_table();
        $this->create_core_site_info_table();

    }

    public function create_users_table() {

        $table_name = 'user';

        $table_fields = '
            ID int(11) AUTO_INCREMENT,
            USERNAME varchar(255) NOT NULL,
            EMAIL varchar(255) NOT NULL,
            PASSWORD varchar(255) NOT NULL,
            LOGGEDIN boolean NOT NULL DEFAULT 0,
            PRIMARY KEY  (ID)';

        $new_table = EasyTrade_Database::create_database_table($table_name, $table_fields);

    }

    public function create_users_meta_table() {

        $table_name = 'user_meta';

        $table_fields = '
            ID int(11) AUTO_INCREMENT,
            USERID int(11) NOT NULL,
            FIRSTNAME varchar(255) NOT NULL,
            LASTNAME varchar(255) NOT NULL,
            BIRTHDAY DATE NOT NULL,
            TYPE varchar(255) NOT NULL,
            ACCOUNT_CREATION_DATE DATE NOT NULL,
            PRIMARY KEY  (ID)';

        $new_table = EasyTrade_Database::create_database_table($table_name, $table_fields);

    }

    public function create_pages_table() {

        $table_name = 'page';

        $table_fields = '
            ID int(11) AUTO_INCREMENT,
            PAGE_TITLE varchar(255) NOT NULL,
            PAGE_CREATION_DATE varchar(255) NOT NULL,
            STATUS varchar(255) NOT NULL,
            URL_NAME varchar(255) NOT NULL,
            EDIT_TYPE varchar(255) NOT NULL,
            PRIMARY KEY  (ID)';

        $new_table = EasyTrade_Database::create_database_table($table_name, $table_fields);

    }

    public function create_page_meta_table() {

        $table_name = 'page_meta';

        $table_fields = '
            ID int(11) AUTO_INCREMENT,
            PAGEID varchar(255) NOT NULL,
            METAKEY varchar(255) NOT NULL,
            METAVALUE varchar(255) NOT NULL,
            PRIMARY KEY  (ID)';

        $new_table = EasyTrade_Database::create_database_table($table_name, $table_fields);

    }

    public function create_blocks_table() {

        $table_name = 'blocks';

        $table_fields = '
            ID int(11) AUTO_INCREMENT,
            NAME varchar(255) NOT NULL,
            PRIMARY KEY  (ID)';

        $new_table = EasyTrade_Database::create_database_table($table_name, $table_fields);

    }

    public function create_blocks_meta_table() {

        $table_name = 'blocks_meta';

        $table_fields = '
            ID int(11) AUTO_INCREMENT,
            BLOCKID varchar(255) NOT NULL,
            BLOCK_FIELD_NAME varchar(255) NOT NULL,
            DATA_TYPE varchar(255) NOT NULL,
            PRIMARY KEY  (ID)';

        $new_table = EasyTrade_Database::create_database_table($table_name, $table_fields);

    }

    public function create_pages_blocks_table() {

        $table_name = 'pages_blocks';

        $table_fields = '
            ID int(11) AUTO_INCREMENT,
            PAGEID varchar(255) NOT NULL,
            BLOCK_FIELD_NAME varchar(255) NOT NULL,
            DATA_TYPE varchar(255) NOT NULL,
            PRIMARY KEY  (ID)';

        $new_table = EasyTrade_Database::create_database_table($table_name, $table_fields);

    }

    public function create_core_site_info_table() {

        $table_name = 'core_site_info';

        $table_fields = '
            ID int(11) AUTO_INCREMENT,
            NAME varchar(255) NOT NULL,
            VALUE varchar(255) NOT NULL,
            PRIMARY KEY  (ID)';

        $new_table = EasyTrade_Database::create_database_table($table_name, $table_fields);

    }

}

new EasyTrade_Create_Tables();
?>