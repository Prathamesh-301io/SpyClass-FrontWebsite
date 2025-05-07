<?php

// app/Controllers/UserManual/ManualController.php
namespace App\Controllers\UserManual;

use CodeIgniter\Controller;

class ManualController extends Controller
{
    private $path;

    public function __construct()
    {
        $this->path = 'UserManual/';
        // $this->load->helper('url');
    }


    public function index()
    {
        $data = [];

        echo view($this->path . 'layouts/front-header', $data);
        echo view($this->path . 'views/index', $data);
        echo view($this->path . 'layouts/front-footer', $data);
    }

    public function showManual($section, $subpoint = 'index')
    {
        $viewPath = $this->path . $section . '/' . $subpoint;
        $fullPath = APPPATH . 'Views/' . $viewPath . '.php';

        if (file_exists($fullPath)) {
            echo view($this->path . 'layouts/front-header');
            echo view($viewPath);
            echo view($this->path . 'layouts/front-footer');
        } else {
            echo view($this->path . 'layouts/front-header');
            echo view($this->path . '404');
            echo view($this->path . 'layouts/front-footer');
        }
    }

    public function students($module = null, $subpage = null)
    {
        $basePath = $this->path . 'students/';

        if ($module && $subpage) {
            $viewPath = $basePath . $module . '/' . $subpage;
        } elseif ($module) {
            $viewPath = $basePath . $module;
        } else {
            $viewPath = $basePath . 'index';
        }

        $fullPath = APPPATH . 'Views/' . $viewPath . '.php';

        if (file_exists($fullPath)) {
            echo view($this->path . 'layouts/front-header');
            echo view($viewPath);
            echo view($this->path . 'layouts/front-footer');
        } else {
            echo view($this->path . 'layouts/front-header');
            echo view($this->path . '404');
            echo view($this->path . 'layouts/front-footer');
        }
    }
}
