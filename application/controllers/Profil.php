<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    // check_login();
    $this->load->model('Admin_model');
    // $this->load->library('pagination');
  }

  public function profil()
  {
    $tittle['subtittle'] = "halaman Profil";
    $tittle['dashboard'] = "Profil";

    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('users/profil');
    $this->load->view('template/footer');
  }
  public function editprofil()
  {
    $tittle['subtittle'] = "halaman Profil";
    $tittle['dashboard'] = "Profil";
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('users/editprofil');
    $this->load->view('template/footer');
  }

  public function editprofil_session()
  {
    $id = $this->input->post('id');

    $this->form_validation->set_rules('nama_lengkap', '', 'required', array('required' => 'Nama Lengkap Wajib di ISI'));

    $this->form_validation->set_rules('username', '', 'trim|required|min_length[5]|max_length[12]', array('required' => 'Username Wajib di ISI', 'trim' => '', 'min_length' => 'Minimal 5 Huruf', 'max_length' => 'Maksimal 12 Huruf'));

    $this->form_validation->set_rules('password', '', 'trim|min_length[5]|max_length[8]', array('trim' => '', 'min_length' => 'Minimal 5 Huruf', 'max_length' => 'Maksimal 8 Huruf'));

    $this->form_validation->set_rules('conpassword', '', 'matches[password]', array('matches' => 'Confirmasi Password TIDAK SAMA silahkan isi Kembali Password dan Confirmasi Password'));

    $this->form_validation->set_rules('email', '', 'required|valid_email');
    $this->form_validation->set_rules('level', '', 'required', array('required' => 'Level Wajib di ISI'));


    if ($this->form_validation->run() == FALSE) {
      # code...
      $tittle['subtittle'] = "Halaman Edit Users";
      $tittle['dashboard'] = "Edit Users ";
      $data['es'] = $this->Users_model->formedit('tb_users', 'id_users', $id);
      $this->load->view('template/header', $tittle);
      $this->load->view('template/navbar');
      $this->load->view('users/editprofil', $data);
      $this->load->view('template/footer');
    } else {

      if ($this->input->post('password')) {
        // echo "password ada";
        $data = array(
          'nama_lengkap' => $this->input->post('nama_lengkap'),
          'username' => $this->input->post('username'),
          'password' => $this->input->post('password'),
          'email' => $this->input->post('email'),
          'level' => $this->input->post('level')
        );

        $query = $this->Users_model->formedit('tb_users', 'id_users', $id, $data);

        if ($query) {
          $this->session->set_flashdata('info', 'Data Teredit');
          redirect('profil/profil');
        } else {
          $this->session->set_flashdata('danger', 'Gagal Teredit');
          redirect('profil/profil');
        }
      } else {

        // echo "password tidak ada";
        $data = array(
          'nama_lengkap' => $this->input->post('nama_lengkap'),
          'username' => $this->input->post('username'),
          'email' => $this->input->post('email'),
          'level' => $this->input->post('level')
        );
        $query = $this->Users_model->editdata('tb_users', 'id_users', $id, $data);

        if ($query) {
          $this->session->set_flashdata('info', 'Data Teredit');
          redirect('profil/profil');
        } else {
          $this->session->set_flashdata('danger', 'Gagal Teredit');
          redirect('profil/profil');
        }
      }
    }
  }

  public function simpan_rofil()
  {
    $this->form_validation->set_rules('nama_lengkap', '', 'required', array('required' => 'Nama Lengkap Wajib di ISI'));

    $this->form_validation->set_rules('username', '', 'trim|required|min_length[5]|max_length[12]', array('required' => 'Username Wajib di ISI', 'trim' => '', 'min_length' => 'Minimal 5 Huruf', 'max_length' => 'Maksimal 12 Huruf'));

    $this->form_validation->set_rules('password', '', 'trim|required|min_length[5]|max_length[8]', array('required' => 'Password Wajib di ISI', 'trim' => '', 'min_length' => 'Minimal 5 Huruf', 'max_length' => 'Maksimal 8 Huruf'));

    $this->form_validation->set_rules('conpassword', '', 'required|matches[password]', array('required' => 'Confirmasi Wajib di Isi', 'matches' => 'Confirmasi Password TIDAK SAMA silahkan isi Kembali Password dan Confirmasi Password'));

    $this->form_validation->set_rules('email', '', 'required|valid_email');
    $this->form_validation->set_rules('level', '', 'required', array('required' => 'Level Wajib di ISI'));


    if ($this->form_validation->run() == FALSE) {
      # code...
      $tittle['subtittle'] = "Halaman Tambah Users";
      $tittle['dashboard'] = "Tambah Users ";
      $this->load->view('template/header', $tittle);
      $this->load->view('template/navbar');
      $this->load->view('users/editprofil');
      $this->load->view('template/footer');
    } else {
      $data = array(
        'nama_lengkap' => $this->input->post('nama_lengkap'),
        'username' => $this->input->post('username'),
        'password' => ($this->input->post('password')),
        'email' => $this->input->post('email'),
        'level' => $this->input->post('level')
      );
      $query = $this->Users_model->simpandata('tb_users', $data);
      if ($query) {
        $this->session->set_flashdata('info', 'Data Tersimpan');
        redirect('profil/profil');
      } else {
        $this->session->set_flashdata('info', 'Data Tersimpan');
        redirect('profil/profil');
      }
    }
  }
}
