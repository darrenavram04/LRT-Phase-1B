<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'judul' => 'Dashboard',
            'page'  => 'v_dashboard'
        ];
        return view('v_template', $data);
    }

    public function vectorMap(): string
    {
        $data = [
            'judul' => 'Vector Map',
            'page'  => 'v_2d'
        ];
        return view('v_template', $data);
    }

    public function baseMap(): string
    {
        $data = [
            'judul' => 'Base Map',
            'page'  => 'v_base_map'
        ];
        return view('v_template', $data);
    }

   
    public function Report(): string
    {
        $data = [
            'judul' => 'Report',
            'page'  => 'v_report'
        ];
        return view('v_template', $data);
    }

        public function landingPage()
    {
        return view('v_landing', ['show_header' => true]); // v_landing.php adalah halaman baru
    }

    public function VectorPage()
    {
        return view('v_2d', ['show_header' => true]); // v_landing.php adalah halaman baru
    }
}
