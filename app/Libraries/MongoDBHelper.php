<?php

namespace App\Libraries;

use MongoDB\Client;

class MongoDBHelper
{
    protected $client;
    protected $db;

    public function __construct()
    {
        $this->client = new Client("mongodb://127.0.0.1:27017");
        $this->db = $this->client->tarihi_savaslar; // Burada "tarihi_savaslar" veritabanını seçiyoruz
    }

    public function getCollection($collection)
    {
        return $this->db->$collection; // İstenen koleksiyonu döndürür
    }
}
