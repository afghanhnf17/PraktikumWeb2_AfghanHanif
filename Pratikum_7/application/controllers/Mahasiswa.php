<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{

    public function index()
    {

        $this->load->model('mahasiswa_model', 'mhs1');
        $this->mhs1->id = 1;
        $this->mhs1->nim = '0110121017';
        $this->mhs1->nama = 'Widiyawati';
        $this->mhs1->gender = 'P';
        $this->mhs1->ipk = 3.85;

        $this->load->model('mahasiswa_model', 'mhs2');
        $this->mhs2->id = 2;
        $this->mhs2->nim = '0110121018';
        $this->mhs2->nama = 'Alif Wijaya';
        $this->mhs2->gender = 'L';
        $this->mhs2->ipk = 3.60;

        $this->load->model('mahasiswa_model', 'mhs3');
        $this->mhs3->id = 3;
        $this->mhs3->nim = '0110121026';
        $this->mhs3->nama = 'Nia Anggraeni';
        $this->mhs3->gender = 'P';
        $this->mhs3->ipk = 3.70;

        $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3];
        $data['list_mhs'] = $list_mhs;
        $data['judul'] = 'Form Mahasiswa';

        $this->load->view('partial/header');
        $this->load->view('partial/sidebar');
        $this->load->view('mahasiswa/mahasiswa', $data);
        $this->load->view('partial/footer');
    }

    public function create_mahasiswa()
    {
        $data['judul'] = 'Form Mahasiswa';
        $this->load->view('partial/header');
        $this->load->view('partial/sidebar');
        $this->load->view('mahasiswa/create_mahasiswa', $data);
        $this->load->view('partial/footer');
    }

    public function view_mahasiswa()
    {
        $data['judul'] = 'Form Mahasiswa';

        $this->load->model('mahasiswa_model', 'mhs1');

        $this->mhs1->nim = $this->input->post('nim');
        $this->mhs1->nama = $this->input->post('nama');
        $this->mhs1->gender = $this->input->post('jk');
        $this->mhs1->tmp_lahir = $this->input->post('tgl_lahir');
        $this->mhs1->tgl_lahir = $this->input->post('tempat_lahir');
        $this->mhs1->prodi = $this->input->post('prodi');
        $this->mhs1->ipk = $this->input->post('ipk');


        $data['mahasiswa'] = $this->mhs1;
        $this->load->view('partial/header');
        $this->load->view('partial/sidebar');
        $this->load->view('mahasiswa/view_mahasiswa', $data);
        $this->load->view('partial/footer');
    }
}
