<?php
   
    $salt = "UEIeRc8iO1NEJWXTesDWJuOkNwH0RgK6OyzAdkdBsLvodHk2els8JbsYNQRJKLGx1I0IPGEYCXoTprLZZI7iusvbjj3yup4ipnHL";
    
    //UTF-8 settings for slovak
    
    
    try {
        $dbc = new PDO("mysql:host=" . 'localhost' . ";dbname=" . 'sach' .";",
            'admin', 'admin');
        // , array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
        $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 
    catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }

    $dbc->exec(
        "SET character_set_results = 'utf8', character_set_client = 'utf8',
        character_set_connection = 'utf8', character_set_database = 'utf8',
        character_set_server = 'utf8'"
    );