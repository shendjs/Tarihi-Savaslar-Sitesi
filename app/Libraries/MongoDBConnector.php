<?php

namespace App\Libraries;

use MongoDB\Client;

class MongoDBConnector
{
    private $client;
    private $db;

    public function __construct()
    {
        // MongoDB Bağlantısı
        $this->client = new Client('mongodb://localhost:27017'); // MongoDB'nin kurulu olduğu yer
        $this->db = $this->client->selectDatabase('tarihi_savaslar'); // Veritabanı adı
    }

    public function getCollection($collectionName)
    {
        return $this->db->selectCollection($collectionName);
    }
}
