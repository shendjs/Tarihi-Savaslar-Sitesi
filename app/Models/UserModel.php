<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Kullanıcılar tablosu
    protected $primaryKey = 'id'; // Birincil anahtar
    protected $allowedFields = ['username', 'password']; // İzin verilen alanlar

    /**
     * Kullanıcıyı kullanıcı adına göre getir
     * 
     * @param string $username
     * @return array|null
     */
    public function getUserByUsername($username)
    {
        return $this->where('username', $username)->first();
    }

    /**
     * Kullanıcıyı doğrula
     * 
     * @param string $username
     * @param string $password
     * @return bool|array Kullanıcı bilgileri veya false
     */
    public function validateUser($username, $password)
    {
        $user = $this->getUserByUsername($username);

        if ($user && password_verify($password, $user['password'])) {
            return $user; // Kullanıcı doğrulandı, kullanıcı bilgilerini döndür
        }

        return false; // Kullanıcı doğrulanamadı
    }

    /**
     * Yeni kullanıcı kaydı
     * 
     * @param string $username
     * @param string $password
     * @return bool
     */
    public function registerUser($username, $password)
    {
        $data = [
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT), // Şifre hashleme
        ];

        return $this->insert($data);
    }
}
