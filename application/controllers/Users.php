<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_model', 'admin');
    if (empty($this->session->userdata('username')) and empty($this->session->userdata('password'))) {
      redirect('auth/login');
    } else {
      $nama_lengkap = ($this->session->userdata('nama_lengkap'));
    }
  }


  public function index()
  {
    $tittle['subtittle'] = "DASBOARD";
    $tittle['dashboard'] = "MENU";
    $data['si'] = $this->db->get('tb_siswa')->num_rows();
    $data['gr'] = $this->db->get('tb_guru')->num_rows();
    // $data['tw'] = $this->db->get('tb_triwulan')->num_rows(); //triwulan
    $data['ks'] = $this->db->get('tb_kepalasekolah')->num_rows(); //prestasi
    $data['jr'] = $this->db->get('tb_jurusan')->num_rows(); //jurusan
    $data['kl'] = $this->db->get('tb_kelas')->num_rows(); //kelas
    $data['mp'] = $this->db->get('tb_mapel')->num_rows(); //mata pelajaran
    $data['ni'] = $this->db->get('tb_nilai')->num_rows(); //table
    $data['cr'] = $this->db->get('charts')->num_rows(); //charts
    $data['tb'] = $this->db->get('tables')->num_rows(); //table
    $data['us'] = $this->db->get('tb_users')->num_rows(); //user
    // $data['sl'] = $this->db->get('soal')->num_rows(); //soal
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('template/home');
    $this->load->view('template/footer');
  }


  public function users()
  {
    //level admin
    if ($this->sesion->userdata('level') == 'admin') {
      $tittle['subtittle'] = "halaman Users";
      $tittle['dashboard'] = "Admin";
      $data['us'] = $this->Admin_model->tampildata('tb_users', 'id_users');
      $this->load->view('template/header', $tittle);
      $this->load->view('template/navbar');
      $this->load->view('template/t_user', $data);
      $this->load->view('template/footer');
    } else {
      // level users

    }
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

  public function editusers()
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
      $data['es'] = $this->Admin_model->formedit('tb_users', 'id_users', $id);
      $this->load->view('template/header', $tittle);
      $this->load->view('template/navbar');
      $this->load->view('formulir/E_users', $data);
      $this->load->view('template/footer');
    } else {

      if ($this->input->post('password')) {
        // echo "password ada";
        $data = array(
          'nama_lengkap' => $this->input->post('nama_lengkap'),
          'username' => $this->input->post('username'),
          'password' => md5($this->input->post('password')),
          'email' => $this->input->post('email'),
          'level' => $this->input->post('level')
        );

        $query = $this->Admin_model->editdata('tb_users', 'id_users', $id, $data);

        if ($query) {
          $this->session->set_flashdata('info', 'Data Teredit');
          redirect('users/users');
        } else {
          $this->session->set_flashdata('danger', 'Gagal Teredit');
          redirect('users/users');
        }
      } else {

        // echo "password tidak ada";
        $data = array(
          'nama_lengkap' => $this->input->post('nama_lengkap'),
          'username' => $this->input->post('username'),
          'email' => $this->input->post('email'),
          'level' => $this->input->post('level')
        );
        $query = $this->Admin_model->editdata('tb_users', 'id_users', $id, $data);

        if ($query) {
          $this->session->set_flashdata('info', 'Data Teredit');
          redirect('users/users');
        } else {
          $this->session->set_flashdata('danger', 'Gagal Teredit');
          redirect('users/users');
        }
      }
    }
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
    $data['es'] = $this->Admin_model->formedit('tb_users', 'id_users', $id);
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('formulir/E_users', $data);
    $this->load->view('template/footer');
  }
}
