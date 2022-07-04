<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function index()
    {

        $this->load->model('mahasiswa_model', 'mhs1');
        $this->mhs1->id = 1;
        $this->mhs1->nim = '0110121009';
        $this->mhs1->nama = 'Fendy Setiawan';
        $this->mhs1->gender = 'L';
        $this->mhs1->ipk = 3.75;

        $this->load->model('mahasiswa_model', 'mhs2');
        $this->mhs2->id = 2;
        $this->mhs2->nim = '0110121017';
        $this->mhs2->nama = 'Widiyawati';
        $this->mhs2->gender = 'P';
        $this->mhs2->ipk = 3.85;

        $this->load->model('mahasiswa_model', 'mhs3');
        $this->mhs3->id = 3;
        $this->mhs3->nim = '0110121011';
        $this->mhs3->nama = 'Ilyasa Efrian';
        $this->mhs3->gender = 'L';
        $this->mhs3->ipk = 3.60;

        $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3];
        $data['list_mhs'] = $list_mhs;

        $this->load->view('partial/header');
        $this->load->view('partial/sidebar');
        $this->load->view('mahasiswa', $data);
        $this->load->view('partial/footer');
    }
}
