<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_model');
    // if (empty($this->session->userdata('username')) and empty($this->session->userdata('password'))) {
    //   redirect('auth/login');
    // } else {public function users()
  }
  public function index()
  {
    $data['us'] = $this->db->get('tb_users')->num_rows();
    $this->load->view('template/header');
    $this->load->view('template/navbar');
    $this->load->view('template/t_users');
    $this->load->view('template/footer');
  }

  public function users()
  {
    // if ($this->sesion->userdata('level') == 'admin') {
    $tittle['subtittle'] = "halaman Users";
    $tittle['dashboard'] = "Admin";
    $data['us'] = $this->Admin_model->tampildata('tb_users', 'id_users');
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('template/t_user', $data);
    $this->load->view('template/footer');
    // // } else {
    // }
  }
  public function tb_users()
  {
    $tittle['subtittle'] = "Halaman Tambah Users";
    $tittle['dashboard'] = "Tambah Users ";
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('formulir/f_users');
    $this->load->view('template/footer');
  }

  public function edituser()
  {
  }

  public function sm_users()
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
      $this->load->view('formulir/f_users');
      $this->load->view('template/footer');
    } else {
      $data = array(
        'nama_lengkap' => $this->input->post('nama_lengkap'),
        'username' => $this->input->post('username'),
        'password' => md5($this->input->post('password')),
        'email' => $this->input->post('email'),
        'level' => $this->input->post('level')
      );
      $query = $this->Admin_model->simpandata('tb_users', $data);

      if ($query) {
        $this->session->set_flashdata('info', 'Data Tersimpan');
        redirect('users/users');
      } else {
        $this->session->set_flashdata('danger', 'Gagal Tersimpan');
        redirect('users/users');
      }
    }
  }

  public function hapususers($id)
  {
    $this->Admin_model->hapusdata('tb_users', $id, 'id_users');
    if ($this->db->affected_rows()) {
      $this->session->set_flashdata('info', 'Data sekolah Berhasil Dihapus');
      redirect('Users/users');
    } else {
      $this->session->set_flashdata('error', 'Data sekolah Gagal Terhapus');
      redirect('Users/users');
    }
  }

  public function edusers($id)
  {
    $tittle['subtittle'] = "Halaman Edit Users";
    $tittle['dashboard'] = "Edit Users ";
    // $data['sk'] = $this->Admin_model->formedit('tb_users', 'nm_sekolah', $id);
    $data['es'] = $this->Admin_model->formedit('tb_users', 'id_users', $id);
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('formulir/E_users', $data);
    $this->load->view('template/footer');
  }
}
