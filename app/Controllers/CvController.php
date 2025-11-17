<?php

namespace App\Controllers;

use App\Models\ProfileModel;
use App\Models\EducationModel;
use App\Models\ExperienceModel;
use App\Models\SkillModel;

class CvController extends BaseController
{
    protected $profileModel;
    protected $educationModel;
    protected $experienceModel;
    protected $skillModel;

    public function __construct()
    {
        $this->profileModel = new ProfileModel();
        $this->educationModel = new EducationModel();
        $this->experienceModel = new ExperienceModel();
        $this->skillModel = new SkillModel();
    }

    // Profile CRUD
    public function profile()
    {
        $data['profile'] = $this->profileModel->first();
        return view('admin/profile', $data);
    }

    public function saveProfile()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'telepon' => $this->request->getPost('telepon'),
            'alamat' => $this->request->getPost('alamat'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];

        $profile = $this->profileModel->first();
        if ($profile) {
            $this->profileModel->update($profile['id'], $data);
        } else {
            $this->profileModel->insert($data);
        }

        return redirect()->to('/cv/profile')->with('success', 'Profile berhasil disimpan');
    }

    // Education CRUD
    public function education()
    {
        $data['educations'] = $this->educationModel->findAll();
        return view('admin/education', $data);
    }

    public function saveEducation()
    {
        $data = [
            'tingkat' => $this->request->getPost('tingkat'),
            'institusi' => $this->request->getPost('institusi'),
            'tahun_mulai' => $this->request->getPost('tahun_mulai'),
            'tahun_selesai' => $this->request->getPost('tahun_selesai'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'urutan' => $this->request->getPost('urutan') ?? 0,
        ];

        $id = $this->request->getPost('id');
        if ($id) {
            $this->educationModel->update($id, $data);
        } else {
            $this->educationModel->insert($data);
        }

        return redirect()->to('/cv/education')->with('success', 'Data pendidikan berhasil disimpan');
    }

    public function deleteEducation($id)
    {
        $this->educationModel->delete($id);
        return redirect()->to('/cv/education')->with('success', 'Data pendidikan berhasil dihapus');
    }

    // Experience CRUD
    public function experience()
    {
        $data['experiences'] = $this->experienceModel->findAll();
        return view('admin/experience', $data);
    }

    public function saveExperience()
    {
        $data = [
            'jabatan' => $this->request->getPost('jabatan'),
            'perusahaan' => $this->request->getPost('perusahaan'),
            'lokasi' => $this->request->getPost('lokasi'),
            'tahun_mulai' => $this->request->getPost('tahun_mulai'),
            'tahun_selesai' => $this->request->getPost('tahun_selesai'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'urutan' => $this->request->getPost('urutan') ?? 0,
        ];

        $id = $this->request->getPost('id');
        if ($id) {
            $this->experienceModel->update($id, $data);
        } else {
            $this->experienceModel->insert($data);
        }

        return redirect()->to('/cv/experience')->with('success', 'Data pengalaman berhasil disimpan');
    }

    public function deleteExperience($id)
    {
        $this->experienceModel->delete($id);
        return redirect()->to('/cv/experience')->with('success', 'Data pengalaman berhasil dihapus');
    }

    // Skills CRUD
    public function skills()
    {
        $data['skills'] = $this->skillModel->findAll();
        return view('admin/skills', $data);
    }

    public function saveSkill()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'tingkat' => $this->request->getPost('tingkat'),
            'urutan' => $this->request->getPost('urutan') ?? 0,
        ];

        $id = $this->request->getPost('id');
        if ($id) {
            $this->skillModel->update($id, $data);
        } else {
            $this->skillModel->insert($data);
        }

        return redirect()->to('/cv/skills')->with('success', 'Data skill berhasil disimpan');
    }

    public function deleteSkill($id)
    {
        $this->skillModel->delete($id);
        return redirect()->to('/cv/skills')->with('success', 'Data skill berhasil dihapus');
    }
}

