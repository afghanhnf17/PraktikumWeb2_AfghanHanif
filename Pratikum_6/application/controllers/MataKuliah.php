<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MataKuliah extends CI_Controller
{
    public function index()
    {

        $this->load->model('matakuliah_model', 'mk1');
        $this->mk1->id = 1;
        $this->mk1->kode = '100';
        $this->mk1->nama = 'Pemrograman Web 2';
        $this->mk1->sks = '3';

        $this->load->model('matakuliah_model', 'mk2');
        $this->mk2->id = 2;
        $this->mk2->kode = '101';
        $this->mk2->nama = 'Jaringan Komputer';
        $this->mk2->sks = '3';

        $this->load->model('matakuliah_model', 'mk3');
        $this->mk3->id = 3;
        $this->mk3->kode = '112';
        $this->mk3->nama = 'Statistika & Probabilitas';
        $this->mk3->sks = '3';

        $list_mk = [$this->mk1, $this->mk2, $this->mk3];
        $data['list_mk'] = $list_mk;

        $this->load->view('partial/header');
        $this->load->view('partial/sidebar');
        $this->load->view('matakuliah', $data);
        $this->load->view('partial/footer');
    }
}
