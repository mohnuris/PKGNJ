<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_admin extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Login_model');
    // if (empty($this->session->userdata('username')) and empty($this->session->userdata('password'))) {
    //   redirect('login');
    // } else {
    //   $nama_lengkap = ($this->session->userdata('nama_lengkap'));
    // }
  }

  public function index()
  {
    $data['pesan'] = " ";
    $this->load->view('auth/login', $data);
  }

  public function proses_login()
  {
    $user = $this->input->post('username');
    $pass = $this->input->post('password');

    $ceklogin = $this->Login_model->akses_login($user, $pass);

    if ($ceklogin) {
      foreach ($ceklogin as $r) {
        $this->session->set_userdata('id_users', $r->id_users);
        $this->session->set_userdata('id_users', $r->id_users);
      }
    } else {
      # code...
    }
  }
}