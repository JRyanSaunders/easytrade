<?php
class EasyTrade_Database
{
    public static $host = 'localhost';
    public static $username = 'root';
    public static $password = 'casper1';
    public static $database = 'easytrade';

    function __construct()
	{
        $this->connect_to_database();
	}

    public function connect_to_database() {
        // Create connection
        $conn = new mysqli(self::$host, self::$username, self::$password, self::$database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }

    public function create_database_table($tablename, $fields) {

        $conn = EasyTrade_Database::connect_to_database();

        //check if table exists
        $query = "SELECT ID FROM $tablename";
        $result = mysqli_query($conn, $query);

        if(empty($result))
        {
            $sql = "CREATE TABLE " . $tablename . " (" . $fields . ")";

            if ($conn->query($sql) === TRUE) {
                echo "Table $tablename created successfully";
            } else {
                echo "Error creating table $tablename: " . $conn->error;
            }
        }

        $conn->close();

    }

    public function insert_into_table($tablename, $columns, $data) {

        $conn = EasyTrade_Database::connect_to_database();

        $sql = "INSERT INTO " . $tablename . " (" . $columns . ") VALUES (" . $data . ")";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
                return mysqli_insert_id($conn);
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

        $conn->close();

    }

    public function get_from_database($sql) {

        $conn = EasyTrade_Database::connect_to_database();

        if ($conn->query($sql) == TRUE) {
            return $conn->query($sql);
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }     

    }

    public function update_database_record($tablename, $new_data, $identifier) {

        $conn = EasyTrade_Database::connect_to_database();

        $sql = "UPDATE " . $tablename . " SET " . $new_data . " WHERE " . $identifier ;

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
        $conn->close();

    }

}

new EasyTrade_Database();
?>