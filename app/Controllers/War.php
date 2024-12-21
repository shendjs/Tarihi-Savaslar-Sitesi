<?php

namespace App\Controllers;

use App\Models\WarModel;

class War extends BaseController
{
    // Savaş ekleme
    public function add()
    {
        if ($this->request->getMethod() === 'post') {
            $validation = \Config\Services::validation();

            $validation->setRules([
                'war_name' => 'required|min_length[3]|max_length[100]',
                'war_description' => 'required|min_length[10]',
                'war_image' => 'valid_url',
            ]);

            if (!$validation->withRequest($this->request)->run()) {
                return redirect()->back()->withInput()->with('errors', $validation->getErrors());
            }

            $model = new WarModel();
            $data = [
                'war_name' => $this->request->getPost('war_name'),
                'war_description' => $this->request->getPost('war_description'),
                'war_image' => $this->request->getPost('war_image'),
                'created_at' => date('Y-m-d H:i:s'),
            ];

            if ($model->save($data)) {
                return redirect()->to('/war-list')->with('success', 'Savaş başarıyla eklendi!');
            } else {
                return redirect()->back()->with('error', 'Savaş eklenemedi.');
            }
        }

        return view('add_war');
    }

    // Savaş düzenleme sayfasını göster
    public function edit($id)
    {
        $model = new WarModel();
        $war = $model->find($id);

        if (!$war) {
            return redirect()->to('/war-list')->with('error', 'Savaş bulunamadı.');
        }

        return view('edit_war', ['war' => $war]);
    }

    // Savaş güncelleme işlemi
    public function update()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'war_name' => 'required|min_length[3]|max_length[100]',
            'war_description' => 'required|min_length[10]',
            'war_image' => 'valid_url',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $model = new WarModel();
        $id = $this->request->getPost('war_id');
        $data = [
            'war_name' => $this->request->getPost('war_name'),
            'war_description' => $this->request->getPost('war_description'),
            'war_image' => $this->request->getPost('war_image'),
        ];

        if ($model->update($id, $data)) {
            return redirect()->to('/war-list')->with('success', 'Savaş başarıyla güncellendi.');
        } else {
            return redirect()->back()->with('error', 'Savaş güncellenemedi.');
        }
    }

    // Savaş silme işlemi
    public function delete($id)
    {
        $model = new WarModel();

        if ($model->delete($id)) {
            return redirect()->to('/war-list')->with('success', 'Savaş başarıyla silindi.');
        } else {
            return redirect()->to('/war-list')->with('error', 'Savaş silinirken bir hata oluştu.');
        }
    }

    // Savaş listesi
    public function list()
    {
        $model = new WarModel();
        $wars = $model->orderBy('created_at', 'DESC')->findAll();

        return view('war_list', ['wars' => $wars]);
    }

    // Belirli bir tarih aralığındaki savaşları getir
    public function listByDateRange($startDate, $endDate)
    {
        $model = new WarModel();
        $wars = $model->where('created_at >=', $startDate)
                      ->where('created_at <=', $endDate)
                      ->orderBy('created_at', 'DESC')
                      ->findAll();

        return view('war_list', ['wars' => $wars]);
    }

    // Anahtar kelime ile savaşları ara
    public function search()
    {
        $model = new WarModel();
        $keyword = $this->request->getGet('keyword');

        if (strlen($keyword) < 3) {
            return redirect()->to('/war-list')->with('error', 'Arama terimi en az 3 karakter olmalıdır.');
        }

        $wars = $model->like('war_name', $keyword)
                      ->orLike('war_description', $keyword)
                      ->orderBy('created_at', 'DESC')
                      ->findAll();

        return view('war_list', ['wars' => $wars]);
    }

    // Savaş detayları
    public function details($warName)
    {
        $model = new WarModel();
        $war = $model->where('war_name', urldecode($warName))->first();

        if (!$war) {
            return redirect()->to('/war-list')->with('error', 'Savaş bulunamadı.');
        }

        return view('war_details', ['war' => $war]);
    }
}
