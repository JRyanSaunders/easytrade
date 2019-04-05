<?php
class EasyTrade_Create_Tables
{

    function __construct()
	{
        $this->create_testing_table();

    }

    public function create_testing_table() {

        $table_name = 'testing_table';

        $table_fields = '
            ID int(11) AUTO_INCREMENT,
            FIRSTNAME varchar(255) NOT NULL,
            EMAIL varchar(255) NOT NULL,
            PASSWORD varchar(255) NOT NULL,
            PRIMARY KEY  (ID)';

        $new_table = EasyTrade_Database::create_database_table($table_name, $table_fields);

    }

}

new EasyTrade_Create_Tables();
?>