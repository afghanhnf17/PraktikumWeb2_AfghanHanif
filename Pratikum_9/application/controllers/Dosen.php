<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("dosen_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['dosen'] = $this->dosen_model->getAll();

        $this->load->view('partial/header');
        $this->load->view('partial/sidebar');
        $this->load->view('dosen/dosen', $data);
        $this->load->view('partial/footer');
    }

    public function create_dosen()
    {
        $data['judul'] = 'Form Dosen';

        $this->load->view('partial/header');
        $this->load->view('partial/sidebar');
        $this->load->view('dosen/create_dosen', $data);
        $this->load->view('partial/footer');
    }


    public function delete()
    {
        $id = $this->input->get('id');

        $this->load->model('dosen_model', 'dsn');
        $this->dsn->delete([$id]);

        redirect(base_url() . 'dosen', 'refresh');
        return;
    }

    public function save_dosen()
    {

        $this->form_validation->set_rules('nidn', 'nidn', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('jk', 'jk', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required');
        $this->form_validation->set_rules('prodi', 'prodi', 'required');
        $this->form_validation->set_rules('pendidikan_akhir', 'pendidikan_akhir', 'required');
        if ($this->form_validation->run() == true) {
            $data['nidn'] = $this->input->post('nidn');
            $data['nama'] = $this->input->post('nama');
            $data['jk'] = $this->input->post('jk');
            $data['tempat_lahir'] = $this->input->post('tempat_lahir');
            $data['prodi'] = $this->input->post('prodi');
            $data['pendidikan_akhir'] = $this->input->post('pendidikan_akhir');
            $this->dosen_model->save_dosen($data);
            redirect('dosen');
        } else {
            $this->load->view('partial/header');
            $this->load->view('partial/sidebar');
            $this->load->view('dosen/dosen');
            $this->load->view('partial/footer');
        }
    }


    public function edit_dosen($id)
    {
        $data['dosen'] = $this->dosen_model->getDataDosen($id);
        $data['judul'] = 'Form Dosen';
        $this->load->view('partial/header');
        $this->load->view('partial/sidebar');
        $this->load->view('dosen/edit_dosen', $data);
        $this->load->view('partial/footer');
    }

    public function aksi_edit()
    {
        $this->form_validation->set_rules('nidn', 'nidn', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('jk', 'jk', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required');
        $this->form_validation->set_rules('prodi', 'prodi', 'required');
        $this->form_validation->set_rules('pendidikan akhir', 'pendidikan akhir', 'required');
        if ($this->form_validation->run() == true) {
            $id = $this->input->post('id');
            $data['nidn'] = $this->input->post('nidn');
            $data['nama'] = $this->input->post('nama');
            $data['jk'] = $this->input->post('jk');
            $data['tgl_lahir'] = $this->input->post('tgl_lahir');
            $data['tempat_lahir'] = $this->input->post('tempat_lahir');
            $data['prodi'] = $this->input->post('prodi');
            $data['pendidikan akhir'] = $this->input->post('pendidikan akhir');
            $this->dosen_model->edit_dosen($id, $data);
            redirect('dosen');
        } else {
            $id = $this->input->post('id');
            $data['dosen'] = $this->dosen_model->getDataDosen($id);

            $this->load->view('partial/header');
            $this->load->view('partial/sidebar');
            $this->load->view('dosen/edit_dosen', $data);
            $this->load->view('partial/footer');
        }
    }
}
