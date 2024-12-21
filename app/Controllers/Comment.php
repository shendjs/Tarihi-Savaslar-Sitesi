<?php

namespace App\Controllers;

use App\Libraries\MongoDBHelper;

class Comment extends BaseController
{
    protected $comments;

    public function __construct()
    {
        $mongo = new MongoDBHelper();
        $this->comments = $mongo->getCollection('comments'); // Yorumlar için koleksiyon
    }

    public function add()
    {
        if ($this->request->getMethod() === 'post') {
            $data = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'message' => $this->request->getPost('message'),
                'created_at' => date('Y-m-d H:i:s'),
            ];

            // Veri doğrulama
            if (empty($data['name']) || empty($data['email']) || empty($data['message'])) {
                return redirect()->to(base_url('/'))->with('error', 'Tüm alanları doldurun.');
            }

            try {
                $result = $this->comments->insertOne($data);
                if ($result->getInsertedCount() > 0) {
                    log_message('info', 'Yorum başarıyla eklendi: ' . json_encode($data));
                    return redirect()->to(base_url('/'))->with('success', 'Yorum başarıyla eklendi.');
                } else {
                    log_message('error', 'Yorum eklenemedi. Veritabanı hatası.');
                    return redirect()->to(base_url('/'))->with('error', 'Yorum eklenemedi.');
                }
            } catch (\Exception $e) {
                log_message('critical', 'MongoDB Hatası: ' . $e->getMessage());
                return redirect()->to(base_url('/'))->with('error', 'Yorum eklenirken bir hata oluştu.');
            }
        }

        return redirect()->to(base_url('/'));
    }

    public function list()
    {
        try {
            $comments = $this->comments->find()->toArray(); // Yorumları MongoDB'den al
            log_message('info', 'Yorumlar başarıyla alındı: ' . json_encode($comments)); // Log verileri
            echo '<pre>';
            print_r($comments); // Ekranda test için yorumları göster
            echo '</pre>';
            return view('index', ['comments' => $comments]); // Yorumları 'index' görünümüne gönder
        } catch (\Exception $e) {
            log_message('critical', 'Yorumlar alınamadı. MongoDB Hatası: ' . $e->getMessage());
            return view('index', ['comments' => [], 'error' => 'Yorumlar alınırken bir hata oluştu.']);
        }
    }
    
    public function testMongo()
    {
        $data = [
            'name' => 'Test Kullanıcı',
            'email' => 'test@example.com',
            'message' => 'Bu bir test mesajıdır.',
            'created_at' => date('Y-m-d H:i:s'),
        ];

        try {
            $this->comments->countDocuments(); // Bağlantı testi
            $result = $this->comments->insertOne($data); // Veri ekle
            if ($result->getInsertedCount() > 0) {
                echo 'Test verisi başarıyla eklendi: ' . json_encode($data);
            } else {
                echo 'Test verisi eklenemedi.';
            }
        } catch (\Exception $e) {
            echo 'MongoDB Bağlantı Hatası: ' . $e->getMessage();
        }
    }
}
