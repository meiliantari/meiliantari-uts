<?php

function createDB()
{
    $conn = mysqli_connect("localhost", "root", "", null, 3306);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Create database
    $sql = "CREATE DATABASE IF NOT EXISTS alumni CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;";
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully" . PHP_EOL;
    } else {
        echo "Error creating database: " . mysqli_error($conn) . PHP_EOL;
    }

    mysqli_close($conn);
}

function dbCOn()
{
    $db = require_once "conn.php";
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $db;
}

function createAlumni($db)
{
    mysqli_query($db, "DROP TABLE IF EXISTS `tb_alumni`;");
    $sql = <<<SQL
    CREATE TABLE `tb_alumni` (
        `id` bigint unsigned NOT NULL AUTO_INCREMENT,
        `nim` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
        `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
        `tahun_lulus` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
        `instansi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
        `created_at` timestamp NULL DEFAULT NULL,
        `updated_at` timestamp NULL DEFAULT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
    SQL;

    if (mysqli_query($db, $sql)) {
        echo "Table alumni created successfully" . PHP_EOL;
    } else {
        echo "Error creating table alumni: " . mysqli_error($db) . PHP_EOL;
    }
}


createDB();
$db = dbCOn();
createAlumni($db);
