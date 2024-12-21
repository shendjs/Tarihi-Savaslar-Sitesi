<?php

namespace App\Models;

use CodeIgniter\Model;

class WarModel extends Model
{
    protected $table = 'wars'; // Veritabanı tablosu adı
    protected $primaryKey = 'id'; // Birincil anahtar
    protected $allowedFields = ['war_name', 'war_description', 'war_image', 'created_at']; // Güncellenebilir alanlar

    /**
     * Belirli bir ID'ye sahip savaşı getir
     * @param int $id
     * @return array|null
     */
    public function getWarById($id)
    {
        return $this->where('id', $id)->first();
    }

    /**
     * Tüm savaşları tarihe göre sıralanmış şekilde getir
     * @return array
     */
    public function getAllWars()
    {
        return $this->orderBy('created_at', 'DESC')->findAll();
    }

    /**
     * Yeni savaş ekle
     * @param array $data
     * @return bool
     */
    public function addWar($data)
    {
        return $this->insert($data);
    }

    /**
     * Belirli bir ID'deki savaşı güncelle
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function updateWar($id, $data)
    {
        return $this->update($id, $data);
    }

    /**
     * Belirli bir ID'deki savaşı sil
     * @param int $id
     * @return bool
     */
    public function deleteWar($id)
    {
        return $this->delete($id);
    }

    /**
     * Tarih aralığına göre savaşları getir (Manuel SQL Sorgusu)
     * @param string $startDate
     * @param string $endDate
     * @return array
     */
    public function getWarsByDateRange($startDate, $endDate)
    {
        $sql = "SELECT * FROM wars WHERE created_at BETWEEN ? AND ? ORDER BY created_at DESC";
        $query = $this->db->query($sql, [$startDate, $endDate]);
        return $query->getResultArray();
    }

    /**
     * Verilen metni içeren savaşları ara
     * @param string $keyword
     * @return array
     */
    public function searchWars($keyword)
    {
        $sql = "SELECT * FROM wars WHERE war_name LIKE ? OR war_description LIKE ? ORDER BY created_at DESC";
        $query = $this->db->query($sql, ['%' . $keyword . '%', '%' . $keyword . '%']);
        return $query->getResultArray();
    }
}
