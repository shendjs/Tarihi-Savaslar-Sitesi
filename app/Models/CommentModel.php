<?php

namespace App\Models;

use MongoDB\Client;

class CommentModel
{
    private $collection;

    public function __construct()
    {
        $client = new Client("mongodb://localhost:27017");
        $db = $client->tarihi_savaslar;
        $this->collection = $db->comments;
    }

    public function addComment($data)
    {
        return $this->collection->insertOne($data);
    }

    public function getComments()
    {
        return $this->collection->find()->toArray();
    }
}

