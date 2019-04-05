<?php

// Inserting information into the database

EasyTrade_Database::insert_into_table('tablename', 'column1, column2', '"value1", "value2"');


// Updating Data in the database

EasyTrade_Database::update_database_record('testing_table', 'EMAIL="testing@gmail.com"', 'ID=2');


// Querying the Database

$result = EasyTrade_Database::get_from_database('SELECT * FROM tablename');

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["ID"]. " - EMAIL: " . $row["EMAIL"]. " " . $row["PASSWORD"]. "<br>";
    }
} else {
    echo "0 results";
}