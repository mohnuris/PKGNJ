<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->form_validation->set_rules('username', 'Username', 'required|trim|alpha_dash');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');

    if ($this->form_validation->run() == false) {
      $data['title'] = "Login I'dadiyah ";
      $this->load->view('templates/auth_header', $data);
      $this->load->view('auth/login');
      $this->load->view('templates/auth_footer');
    } else {
      // Validation Sukses
      $this->_login();
    }
  }

  // Method Login
  private function _login()
  {
    $username = $this->input->post('username', true);
    $password = $this->input->post('password', true);

    $user = $this->db->get_where('tb_user', ['username' => $username])->row_array();

    // jika usernya ada
    if ($user) {
      // jika usernya aktif
      if ($user['is_active'] == 1) {

        // cek password
        if (password_verify($password, $user['password'])) {
          $data = [
            'username' => $user['username'],
            'role_id' => $user['role_id']
          ];
          $this->session->set_userdata($data);

          // cek role id
          if ($user['role_id'] == 1) {
            redirect('admin');
          } else {
            redirect('user');
          }
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger font-weight-500" role="alert">Wrong Password </div>');
          redirect('auth');
        }
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger font-weight-500" role="alert">This email has been not activated </div>');
        redirect('auth');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger font-weight-500" role="alert">Email is not registered </div>');
      redirect('auth');
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('role_id');

    $this->session->set_flashdata('message', '<div class="alert alert-success font-weight-500" role="alert">Anda berhasil keluar .. !!! </div>');
    redirect('auth');
  }
}
