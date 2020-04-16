<?php
defined('BASEPATH') or exit('No direct script access allowed');

class siswa extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    check_login();
    $this->load->model('siswa_model', 'siswa');
    $this->load->library('pagination');
  }


  // dashboard user
  public function User_Lulus()
  {
    //Config
    $config['base_url'] = base_url('siswa/User_Lulus');
    $config['total_rows'] = $this->siswa->total('Tuntas');
    $config['per_page'] = 10;

    //Initialize
    $this->pagination->initialize($config);

    $data['title'] = 'Halaman siswa Lulus';
    $data['user'] = $this->db->get_where('tb_user', ['username' =>
    $this->session->userdata('username')])->row_array();
    $data['start'] = $this->uri->segment(3);
    $data['siswalulus'] = $this->siswa->get_siswa('Tuntas', $config['per_page'], $data['start']);

    $this->load->view('templates_user/header', $data);
    $this->load->view('templates_user/sidebar', $data);
    $this->load->view('templates_user/topbar', $data);
    $this->load->view('siswa/lulus', $data);
    $this->load->view('templates_user/footer');
  }

  public function User_Tidak_Lulus()
  {
    //Config
    $config['base_url'] = base_url('siswa/User_Tidak_Lulus');
    $config['total_rows'] = $this->siswa->total('Tidak Tuntas');
    $config['per_page'] = 10;

    //Initialize
    $this->pagination->initialize($config);

    $data['title'] = 'Halaman siswa Tidak Lulus';
    $data['user'] = $this->db->get_where('tb_user', ['username' =>
    $this->session->userdata('username')])->row_array();
    $data['start'] = $this->uri->segment(3);
    $data['siswaNLulus'] = $this->siswa->get_siswa('Tidak Tuntas', $config['per_page'], $data['start']);

    $this->load->view('templates_user/header', $data);
    $this->load->view('templates_user/sidebar', $data);
    $this->load->view('templates_user/topbar', $data);
    $this->load->view('siswa/tidak_lulus', $data);
    $this->load->view('templates_user/footer');
  }

  // dashboard admin
  public function Admin_Lulus()
  {
    //Config
    $config['base_url'] = base_url('siswa/Admin_Lulus');
    $config['total_rows'] = $this->siswa->total('Tuntas');
    $config['per_page'] = 10;

    //Initialize
    $this->pagination->initialize($config);

    $data['title'] = 'Halaman siswa Lulus';
    $data['user'] = $this->db->get_where('tb_user', ['username' =>
    $this->session->userdata('username')])->row_array();
    $data['start'] = $this->uri->segment(3);
    $data['siswalulus'] = $this->siswa->get_siswa('Tuntas', $config['per_page'], $data['start']);

    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar', $data);
    $this->load->view('templates_admin/topbar', $data);
    $this->load->view('siswa/lulus', $data);
    $this->load->view('templates_admin/footer');
  }

  public function Admin_Tidak_Lulus()
  {
    //Config
    $config['base_url'] = base_url('siswa/Admin_Tidak_Lulus');
    $config['total_rows'] = $this->siswa->total('Tidak Tuntas');
    $config['per_page'] = 10;

    //Initialize
    $this->pagination->initialize($config);

    $data['title'] = 'Halaman siswa Tidak Lulus';
    $data['user'] = $this->db->get_where('tb_user', ['username' =>
    $this->session->userdata('username')])->row_array();
    $data['start'] = $this->uri->segment(3);
    $data['siswaNLulus'] = $this->siswa->get_siswa('Tidak Tuntas', $config['per_page'], $data['start']);

    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar', $data);
    $this->load->view('templates_admin/topbar', $data);
    $this->load->view('siswa/tidak_lulus', $data);
    $this->load->view('templates_admin/footer');
  }
}
