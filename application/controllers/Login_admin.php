<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_admin extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Login_model');
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
        $this->session->set_userdata('nama_lengkap', $r->nama_lengkap);
        $this->session->set_userdata('username', $r->username);
        $this->session->set_userdata('password', $r->password);
        $this->session->set_userdata('email', $r->email);
        $this->session->set_userdata('level', $r->level);

        redirect('admin/index');
      }
    } else {
      $data['pesan'] = "Username dan Password Salah ";
      $this->load->view('login', $data);
    }
  }

  public function logout()
  {
    $this->session->sess_destory();
    redirect('auth/login');
  }
}
