<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_model');
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

  public function login()
  {
    $tittle['subtittle'] = "login";
    $tittle['dashboard'] = "user";
    // $this->load->view('template/header', $tittle);
    // $this->load->view('template/navbar');
    $this->load->view('auth/login');
    // $this->load->view('template/footer');
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
    $tittle['subtittle'] = "Tambah users";
    $tittle['dashboard'] = "form users ";
    $this->load->view('template/header', $tittle);
    $this->load->view('form_users');
    $this->load->view('template/footer');
  }

  public function edituser()
  {
  }

  public function charts()
  {
    $tittle['subtittle'] = "CHARTS";
    $tittle['dashboard'] = "charts";
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('template/charts');
    $this->load->view('template/footer');
  }
  public function table()
  {

    $tittle['subtittle'] = "Tables Rekap Triwulan";
    $tittle['dashboard'] = "Table";
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('template/tables');
    $this->load->view('template/footer');
  }

  // KEPALA SEKOLAH
  public function t_kepalasekolah()
  {
    $tittle['subtittle'] = "Halaman Data Kepala Sekolah";
    $data['ks'] = $this->Admin_model->tampildata('tb_kepalasekolah', 'id_kepala_sekolah');
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('template/t_kepalasekolah', $data);
    $this->load->view('template/footer');
  }
  public function f_kepalasekolah()
  {

    $tittle['subtittle'] = "Halaman Form Kepala Sekolah";
    $tittle['dashboard'] = "Form Kepala Sekolah ";
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('formulir/f_kepalasekolah');
    $this->load->view('template/footer');
  }
  public function sm_kepalasekolah()
  {
    $this->form_validation->set_rules('nl', 'Nama Lengkap', 'required');
    $this->form_validation->set_rules('ks', 'Kepala Sekolah', 'required');
    if ($this->form_validation->run() == FALSE) {
      # code...
      $tittle['subtittle'] = "Halaman form Kepala Sekolah";
      $tittle['dashboard'] = "Form Kepala Sekolah ";
      $this->load->view('template/header', $tittle);
      $this->load->view('template/navbar');
      $this->load->view('formulir/f_kepalasekolah');
      $this->load->view('template/footer');
    } else {
      $data = array(
        'nm_kepala' => $this->input->post('nl'),
        'kepala_sekolah' => $this->input->post('ks')
      );
      $query = $this->Admin_model->simpandata('tb_kepalasekolah', $data);

      if ($query) {
        $this->session->set_flashdata('info', 'Data Tersimpan');
        redirect('admin/t_kepalasekolah');
      } else {
        $this->session->set_flashdata('danger', 'Gagal Tersimpan');
        redirect('admin/t_kepalasekolah');
      }
    }
  }
  public function hapuskepalasekolah($id)
  {
    $this->Admin_model->hapusdata('tb_kepalasekolah', $id, 'id_kepala_sekolah');
    if ($this->db->affected_rows()) {
      $this->session->set_flashdata('info', 'Data kepalasekolah Berhasil Dihapus');
      redirect('admin/t_kepalasekolah');
    } else {
      $this->session->set_flashdata('error', 'Data Kepala Sekolah Gagal Terhapus');
      redirect('admin/t_kepalasekolah');
    }
  }
  public function edkepalasekolah($id)
  {
    $tittle['subtittle'] = "Halaman Edit Sepala Sekolah";
    $tittle['dashboard'] = "Form Edit Kepala Sekolah ";
    $data['eks'] = $this->Admin_model->formedit('tb_kepalasekolah', 'id_kepala_sekolah', $id);
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('formulir/E_kepalasekolah', $data);
    $this->load->view('template/footer');
  }

  public function ed_kepalasekolah()
  {
    $id = $this->input->post('id');
    $data = array(
      'nm_kepala' => $this->input->post('nm'),
      'kepala_sekolah' => $this->input->post('ks')
    );
    $query = $this->Admin_model->editdata('tb_kepalasekolah', 'id_kepala_sekolah', $id, $data);

    if ($query) {
      $this->session->set_flashdata('info', 'Data Teredit');
      redirect('admin/t_kepalasekolah');
    } else {
      $this->session->set_flashdata('danger', 'Gagal Teredit');
      redirect('admin/t_kepalasekolah');
    }
  }

  // GURU

  public function t_pengguna()
  {
    $tittle['subtittle'] = "Table Pengguna";
    $tittle['dashboard'] = "Pengguna";
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('template/t_pengguna');
    $this->load->view('template/footer');
  }
  public function t_prestasi()
  {
    $tittle['subtittle'] = "Table Pengguna";
    $tittle['dashboard'] = "Pengguna";
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('template/t_prestasi');
    $this->load->view('template/footer');
  }
  public function soal()
  {
    $tittle['subtittle'] = "Halaman Soal";
    $tittle['dashboard'] = "Soal ";
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('template/soal');
    $this->load->view('template/footer');
  }

  public function t_rekap()
  {
    $tittle['subtittle'] = "Halaman Rekap";
    $tittle['dashboard'] = "Rekap ";
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('template/t_rekap');
    $this->load->view('template/footer');
  }
  public function c_triwulan1()
  {
    $tittle['subtittle'] = "Halaman Rekap";
    $tittle['dashboard'] = "Rekap ";
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('template/c_triwulan1');
    $this->load->view('template/footer');
  }

  public function coba()
  {
    $tittle['subtittle'] = "Halaman Rekap";
    $tittle['dashboard'] = "charts ";
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('charts/coba');
    $this->load->view('template/footer');
  }

  public function t_kelas()
  {
    $tittle['subtittle'] = "Halaman Data Kelas";
    $data['sekolah'] = $this->Admin_model->tampildata('tb_kelas', 'sekolah');
    $data['kl'] = $this->Admin_model->tampildata('tb_kelas', 'id_kelas');

    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('template/t_kelas', $data);
    $this->load->view('template/footer');
  }
  public function f_kelas()
  {

    $tittle['subtittle'] = "Halaman form Kelas";
    $tittle['dashboard'] = "Form Kelas ";
    $this->load->view('template/header', $tittle);
    $data['dinamis1'] = $this->Admin_model->dinamis1();

    $data['error'] = "";
    $this->load->view('template/navbar');
    $this->load->view('formulir/f_kelas', $data);
    $this->load->view('template/footer');
  }
  public function sm_kelas()
  {
    $this->form_validation->set_rules('sk', 'sekolah / lembaga', 'required', array('required' => 'Sekolah Wajib di Isi'));
    $this->form_validation->set_rules('kl', 'Kelas', 'required', array('required' => 'Kelas Wajib di Isi'));
    $this->form_validation->set_rules('j', 'Jurusan', 'required', array('required' => 'Jurusan Wajib di Isi'));
    if ($this->form_validation->run() == FALSE) {
      # code...
      $tittle['subtittle'] = "Halaman form Kelas";
      $tittle['dashboard'] = "Form Kelas ";
      $this->load->view('template/header', $tittle);
      $this->load->view('template/navbar');
      $this->load->view('formulir/f_kelas');
      $this->load->view('template/footer');
    } else {
      $data = array(
        'sekolah' => $this->input->post('sk'),
        'kelas' => $this->input->post('kl'),
        'jurusan' => $this->input->post('j')
      );
      $query = $this->Admin_model->simpandata('tb_kelas', $data);

      if ($query) {
        $this->session->set_flashdata('info', 'Data Tersimpan');
        redirect('admin/t_kelas');
      } else {
        $this->session->set_flashdata('danger', 'Gagal Tersimpan');
        redirect('admin/t_kelas');
      }
    }
  }
  public function hapuskelas($id)
  {
    // $this->Admin_model->hapusdata('tb_kelas', 'kelas'); //permasalahgannya pada $id
    $this->Admin_model->hapusdata('tb_kelas', $id, 'id_kelas');
    if ($this->db->affected_rows()) {
      $this->session->set_flashdata('info', 'Data Kelas Berhasil Dihapus');
      redirect('admin/t_kelas');
    } else {
      $this->session->set_flashdata('error', 'Data Kelas Gagal Terhapus');
      redirect('admin/t_kelas');
    }
  }
  public function edkelas($id)
  {
    $tittle['subtittle'] = "Halaman Edit Kelas";
    $tittle['dashboard'] = "Form Edit Kelas ";
    $data['sk'] = $this->Admin_model->formedit('tb_kelas', 'sekolah', $id);
    $data['ek'] = $this->Admin_model->formedit('tb_kelas', 'id_kelas', $id);
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('formulir/E_kelas', $data);
    $this->load->view('template/footer');
  }

  public function ed_kelas()
  {
    $id = $this->input->post('id');
    $data = array(
      'sekolah' => $this->input->post('sk'),
      'kelas' => $this->input->post('kl'),
      'jurusan' => $this->input->post('j')
    );
    $query = $this->Admin_model->editdata('tb_kelas', 'id_kelas', $id, $data);

    if ($query) {
      $this->session->set_flashdata('info', 'Data Teredit');
      redirect('admin/t_kelas');
    } else {
      $this->session->set_flashdata('danger', 'Gagal Teredit');
      redirect('admin/t_kelas');
    }
  }

  public function t_mapel()
  {
    $tittle['subtittle'] = " Data Mata Pelajaran";
    $data['mp'] = $this->Admin_model->tampildata('tb_mapel', 'nama_pelajaran');
    $data['mp'] = $this->Admin_model->tampildata('tb_mapel', 'id_pelajaran');
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('template/t_mapel', $data);
    $this->load->view('template/footer');
  }

  public function ed_mapel()
  {
    $id = $this->input->post('id');
    $data = array(

      'nama_pelajaran' => $this->input->post('mp')
    );
    $query = $this->Admin_model->editdata('tb_mapel', 'id_pelajaran', $id, $data);

    if ($query) {
      $this->session->set_flashdata('info', 'Data Teredit');
      redirect('admin/t_mapel');
    } else {
      $this->session->set_flashdata('danger', 'Gagal Teredit');
      redirect('admin/t_mapel');
    }
  }
  public function f_mapel()
  {

    $tittle['subtittle'] = "Halaman form Mata Pelajaran";
    $tittle['dashboard'] = "Form Mata Pelajaran ";
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('formulir/f_mapel');
    $this->load->view('template/footer');
  }
  public function sm_mapel()
  {

    $this->form_validation->set_rules('mp', 'mapel', 'required', array('required' => 'Mata Pelajaran Wajib di Isi'));
    if ($this->form_validation->run() == FALSE) {
      # code...
      $tittle['subtittle'] = "Halaman form Mata Pelajaran";
      $tittle['dashboard'] = "Form Mata Pelajaran";
      $this->load->view('template/header', $tittle);
      $this->load->view('template/navbar');
      $this->load->view('formulir/f_mapel');
      $this->load->view('template/footer');
    } else {
      $data = array(

        'nama_pelajaran' => $this->input->post('mp')
      );
      $query = $this->Admin_model->simpandata('tb_mapel', $data);

      if ($query) {
        $this->session->set_flashdata('info', 'Data Tersimpan');
        redirect('admin/t_mapel');
      } else {
        $this->session->set_flashdata('danger', 'Gagal Tersimpan');
        redirect('admin/t_mapel');
      }
    }
  }
  public function hapusmapel($id)
  {
    // $this->Admin_model->hapusdata('tb_jurusan', 'nm_jurusan'); //permasalahgannya pada $id
    $this->Admin_model->hapusdata('tb_mapel', $id, 'id_pelajaran');
    if ($this->db->affected_rows()) {
      $this->session->set_flashdata('info', 'Data Mata Pelajaran Berhasil Dihapus');
      redirect('admin/t_mapel');
    } else {
      $this->session->set_flashdata('error', 'Data Mata Pelajaran Gagal Terhapus');
      redirect('admin/t_mapel');
    }
  }
  public function edmapel($id)
  {
    $tittle['subtittle'] = "Halaman Edit Mata Pelajaran";
    $tittle['dashboard'] = "Form Edit Mata Pelajaran ";
    $data['mp'] = $this->Admin_model->formedit('tb_mapel', 'nama_pelajaran', $id);
    $data['mp'] = $this->Admin_model->formedit('tb_mapel', 'id_pelajaran', $id);
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('formulir/E_mapel', $data);
    $this->load->view('template/footer');
  }


  // JURUSAN
  public function jurusan()
  {
    $tittle['subtittle'] = " Data Jurusan";
    $data['sekolah'] = $this->Admin_model->tampildata('tb_jurusan', 'nm_jurusan');
    $data['jr'] = $this->Admin_model->tampildata('tb_jurusan', 'id_jurusan');
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('template/t_jurusan', $data);
    $this->load->view('template/footer');
  }

  // 
  public function ed_jurusan()
  {
    $id = $this->input->post('id');
    $data = array(

      'nm_jurusan' => $this->input->post('j')
    );
    $query = $this->Admin_model->editdata('tb_jurusan', 'id_jurusan', $id, $data);

    if ($query) {
      $this->session->set_flashdata('info', 'Data Teredit');
      redirect('admin/jurusan');
    } else {
      $this->session->set_flashdata('danger', 'Gagal Teredit');
      redirect('admin/jurusan');
    }
  }
  public function f_jurusan()
  {

    $tittle['subtittle'] = "Halaman form jurusan";
    $tittle['dashboard'] = "Form jurusan ";
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('formulir/f_jurusan');
    $this->load->view('template/footer');
  }
  public function sm_jurusan()
  {

    $this->form_validation->set_rules('j', 'Jurusan', 'required', array('required' => 'Jurusan Wajib di Isi'));
    if ($this->form_validation->run() == FALSE) {
      # code...
      $tittle['subtittle'] = "Halaman form jurusan";
      $tittle['dashboard'] = "Form jurusan ";
      $this->load->view('template/header', $tittle);
      $this->load->view('template/navbar');
      $this->load->view('formulir/f_jurusan');
      $this->load->view('template/footer');
    } else {
      $data = array(
        // 'sekolah' => $this->input->post('sk'),
        // 'jurusan' => $this->input->post('kl'),
        'nm_jurusan' => $this->input->post('j')
      );
      $query = $this->Admin_model->simpandata('tb_jurusan', $data);

      if ($query) {
        $this->session->set_flashdata('info', 'Data Tersimpan');
        redirect('admin/jurusan');
      } else {
        $this->session->set_flashdata('danger', 'Gagal Tersimpan');
        redirect('admin/jurusan');
      }
    }
  }
  public function hapusjurusan($id)
  {
    // $this->Admin_model->hapusdata('tb_jurusan', 'nm_jurusan'); //permasalahgannya pada $id
    $this->Admin_model->hapusdata('tb_jurusan', $id, 'id_jurusan');
    if ($this->db->affected_rows()) {
      $this->session->set_flashdata('info', 'Data jurusan Berhasil Dihapus');
      redirect('admin/jurusan');
    } else {
      $this->session->set_flashdata('error', 'Data jurusan Gagal Terhapus');
      redirect('admin/jurusan');
    }
  }
  public function edjurusan($id)
  {
    $tittle['subtittle'] = "Halaman Edit jurusan";
    $tittle['dashboard'] = "Form Edit jurusan ";
    $data['sk'] = $this->Admin_model->formedit('tb_jurusan', 'nm_jurusan', $id);
    $data['ek'] = $this->Admin_model->formedit('tb_jurusan', 'id_jurusan', $id);
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('formulir/E_jurusan', $data);
    $this->load->view('template/footer');
  }

  // SEKOLAH

  public function sekolah()
  {
    $tittle['subtittle'] = "Halaman Data Kelas";
    $data['sekolah'] = $this->Admin_model->tampildata('tb_sekolah', 'nm_sekolah');
    $data['sk'] = $this->Admin_model->tampildata('tb_sekolah', 'id_sekolah');
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('template/t_sekolah', $data);
    $this->load->view('template/footer');
  }

  public function ed_sekolah()
  {
    $id = $this->input->post('id');
    $data = array(

      'nm_sekolah' => $this->input->post('s')
    );
    $query = $this->Admin_model->editdata('tb_sekolah', 'id_sekolah', $id, $data);

    if ($query) {
      $this->session->set_flashdata('info', 'Data Teredit');
      redirect('admin/sekolah');
    } else {
      $this->session->set_flashdata('danger', 'Gagal Teredit');
      redirect('admin/sekolah');
    }
  }
  public function f_sekolah()
  {

    $tittle['subtittle'] = "Halaman form sekolah";
    $tittle['dashboard'] = "Form sekolah ";
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('formulir/f_sekolah');
    $this->load->view('template/footer');
  }
  public function sm_sekolah()
  {

    $this->form_validation->set_rules('j', 'sekolah', 'required', array('required' => 'sekolah Wajib di Isi'));
    if ($this->form_validation->run() == FALSE) {
      # code...
      $tittle['subtittle'] = "Halaman form sekolah";
      $tittle['dashboard'] = "Form sekolah ";
      $this->load->view('template/header', $tittle);
      $this->load->view('template/navbar');
      $this->load->view('formulir/f_sekolah');
      $this->load->view('template/footer');
    } else {
      $data = array(
        // 'sekolah' => $this->input->post('sk'),
        // 'sekolah' => $this->input->post('kl'),
        'nm_sekolah' => $this->input->post('j')
      );
      $query = $this->Admin_model->simpandata('tb_sekolah', $data);

      if ($query) {
        $this->session->set_flashdata('info', 'Data Tersimpan');
        redirect('admin/sekolah');
      } else {
        $this->session->set_flashdata('danger', 'Gagal Tersimpan');
        redirect('admin/sekolah');
      }
    }
  }
  public function hapussekolah($id)
  {
    // $this->Admin_model->hapusdata('tb_sekolah', 'nm_sekolah'); //permasalahgannya pada $id
    $this->Admin_model->hapusdata('tb_sekolah', $id, 'id_sekolah');
    if ($this->db->affected_rows()) {
      $this->session->set_flashdata('info', 'Data sekolah Berhasil Dihapus');
      redirect('admin/sekolah');
    } else {
      $this->session->set_flashdata('error', 'Data sekolah Gagal Terhapus');
      redirect('admin/sekolah');
    }
  }
  public function edsekolah($id)
  {
    $tittle['subtittle'] = "Halaman Edit sekolah";
    $tittle['dashboard'] = "Form Edit sekolah ";
    $data['sk'] = $this->Admin_model->formedit('tb_sekolah', 'nm_sekolah', $id);
    $data['ek'] = $this->Admin_model->formedit('tb_sekolah', 'id_sekolah', $id);
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('formulir/E_sekolah', $data);
    $this->load->view('template/footer');
  }
}
