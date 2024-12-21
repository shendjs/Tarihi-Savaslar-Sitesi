<?php

require_once __DIR__ . '/vendor/autoload.php';

use MongoDB\Client;

try {
    $client = new Client("mongodb://127.0.0.1:27017");
    $databases = $client->listDatabases();
    echo "MongoDB bağlantısı başarılı.<br>";
    echo "Mevcut Veritabanları:<br>";
    foreach ($databases as $database) {
        echo $database['name'] . "<br>";
    }
} catch (Exception $e) {
    echo "Hata: " . $e->getMessage();
}
