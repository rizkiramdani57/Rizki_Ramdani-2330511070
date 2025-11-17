<?php

namespace App\Controllers;

use App\Models\ProfileModel;
use App\Models\EducationModel;
use App\Models\ExperienceModel;
use App\Models\SkillModel;

class Home extends BaseController
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

    public function index()
    {
        helper('url');
        
        try {
            $data = [
                'profile' => $this->profileModel->first(),
            ];
        } catch (\Exception $e) {
            // Jika database belum di-setup, gunakan data kosong
            $data = [
                'profile' => null,
            ];
        }
        
        return view('home', $data);
    }

    public function cv()
    {
        helper('url');
        
        try {
            $data = [
                'profile' => $this->profileModel->first(),
                'educations' => $this->educationModel->getOrdered(),
                'experiences' => $this->experienceModel->getOrdered(),
                'skills' => $this->skillModel->getOrdered(),
            ];
        } catch (\Exception $e) {
            // Jika database belum di-setup, gunakan data kosong
            $data = [
                'profile' => null,
                'educations' => [],
                'experiences' => [],
                'skills' => [],
            ];
        }
        
        return view('cv', $data);
    }

    public function education()
    {
        helper('url');
        
        try {
            $data = [
                'profile' => $this->profileModel->first(),
                'educations' => $this->educationModel->getOrdered(),
            ];
        } catch (\Exception $e) {
            $data = [
                'profile' => null,
                'educations' => [],
            ];
        }
        
        return view('education', $data);
    }

    public function experience()
    {
        helper('url');
        
        try {
            $data = [
                'profile' => $this->profileModel->first(),
                'experiences' => $this->experienceModel->getOrdered(),
            ];
        } catch (\Exception $e) {
            $data = [
                'profile' => null,
                'experiences' => [],
            ];
        }
        
        return view('experience', $data);
    }

    public function skills()
    {
        helper('url');
        
        try {
            $data = [
                'profile' => $this->profileModel->first(),
                'skills' => $this->skillModel->getOrdered(),
            ];
        } catch (\Exception $e) {
            $data = [
                'profile' => null,
                'skills' => [],
            ];
        }
        
        return view('skills', $data);
    }
}
