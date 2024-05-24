<?php

function dbCOn()
{
    $db = require_once "conn.php";
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $db;
}

function seedAlumni($db)
{
    $sql = <<<SQL
    INSERT INTO `tb_alumni` VALUES (1,'2101010010','Yoga','2021','INSTIKI',NOW(),NOW());
    SQL;

    if (mysqli_query($db, $sql)) {
        echo "Seeding alumni success" . PHP_EOL;
    } else {
        echo "Error seeding alumni : " . mysqli_error($db)  . PHP_EOL;
    }
}


$db = dbCOn();
seedAlumni($db);
