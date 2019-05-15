<?php

$tradesman_ID = $_POST['tradesman_ID'];

include '../functions.php';

// Page ID
$get_page_ID = EasyTrade_Database::get_from_database("SELECT * FROM tradesman_page WHERE USERID=" . $_POST['tradesman_ID']);
    if ($get_page_ID->num_rows > 0) {
    while($row = $get_page_ID->fetch_assoc()) {
        $page_ID = $row["ID"];
        $tradesman_url = $row["URL_NAME"];
    }
}

if (!empty($tradesman_url)) {
    $template = file_get_contents('tradesman-page-template.php');
    $template = str_replace("#THEVAR#", $page_ID, $template);
    $new_file = fopen('../tradesman/' . $tradesman_url . '.php', 'w');
    fwrite($new_file, $template);

    header('Location: ' . EasyTrade_Home_URL . 'tradesman/' . $tradesman_url . '.php');
}
else {
    header('Location: ' . EasyTrade_Admin_URL . 'pages/tradesman-dashboard.php');
}


?>