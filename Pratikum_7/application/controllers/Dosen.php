<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function index()
    {
        $this->load->model('dosen_model', 'dsn1');
        $this->dsn1->id = 1;
        $this->dsn1->nidn = '0110121006';
        $this->dsn1->nama = 'Yusuf Rijal';
        $this->dsn1->pendidikan = 'S1';
        $this->dsn1->gender = 'Laki-laki';
        $this->dsn1->tmp_lahir = 'Depok';
        $this->dsn1->tgl_lahir = '11-10-1980';
        $this->dsn1->pendidikan = 'S1 Bisnis';

        $this->load->model('dosen_model', 'dsn2');
        $this->dsn2->id = 2;
        $this->dsn2->nidn = '0110121009';
        $this->dsn2->nama = 'Fendy Setiawan';
        $this->dsn2->pendidikan = 'S1';
        $this->dsn2->gender = 'Laki-laki';
        $this->dsn2->tmp_lahir = 'Depok';
        $this->dsn2->tgl_lahir = '10-11-1985';
        $this->dsn2->pendidikan = 'S1 Sistem Informasi';

        $this->load->model('dosen_model', 'dsn3');
        $this->dsn3->id = 3;
        $this->dsn3->nidn = '0110121023';
        $this->dsn3->nama = 'Baik';
        $this->dsn3->pendidikan = 'S1';
        $this->dsn3->gender = 'Laki-laki';
        $this->dsn3->tmp_lahir = 'Depok';
        $this->dsn3->tgl_lahir = '01-01-1990';
        $this->dsn3->pendidikan = 'S1 Teknik Informatika';

        $all_dosen = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data['all_dosen'] = $all_dosen;

        $this->load->view('partial/header');
        $this->load->view('partial/sidebar');
        $this->load->view('dosen/view_dosen', $data);
        $this->load->view('partial/footer');
    }
}
