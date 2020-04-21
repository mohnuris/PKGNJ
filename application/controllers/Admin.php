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
    $data['tw'] = $this->db->get('tb_triwulan')->num_rows(); //triwulan
    $data['ks'] = $this->db->get('tb_kepalasekolah')->num_rows(); //prestasi
    // $data['jr'] = $this->db->get('tb_jurusan')->num_rows(); //jurusan
    $data['kl'] = $this->db->get('tb_kelas')->num_rows(); //kelas
    $data['mp'] = $this->db->get('tb_mapel')->num_rows(); //mata pelajaran
    $data['ni'] = $this->db->get('tb_nilai')->num_rows(); //table
    $data['cr'] = $this->db->get('charts')->num_rows(); //charts
    $data['tb'] = $this->db->get('tables')->num_rows(); //table
    $data['us'] = $this->db->get('user')->num_rows(); //user
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

  public function users()
  {
    // if ($this->sesion->userdata('level') == 'admin') {
    $tittle['subtittle'] = "halaman Admin";
    $tittle['dashboard'] = "Admin";

    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('template/t_user');
    $this->load->view('template/footer');
    // // } else {
    // }
  }
  public function tb_users()
  {
    $tittle['subtittle'] = "Tambah users";
    $tittle['dashboard'] = "form users ";
    $this->load->view('dasbor/header', $tittle);
    $this->load->view('form_users');
    $this->load->view('dasbor/footer');
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
  public function guru()
  {
    $tittle['subtittle'] = "Halaman Guru";
    $tittle['dashboard'] = "guru";
    $data['gr'] = $this->Admin_model->tampildata('tb_guru', 'id_guru');
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('template/t_guru', $data);
    $this->load->view('template/footer');
  }

  public function sm_guru()
  {
    if ($_FILES['foto']['name']) {
      echo "Gambar atau File ada";
    } else {
      echo "Gambar atau File tidak ada";
    }
  }

  public function f_guru()
  {
    $tittle['subtittle'] = " Tambah Guru";
    $tittle['dashboard'] = "Tambah Guru ";
    // $tittle['dashboard'] = "formulir ";
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar', $tittle);
    $this->load->view('formulir/f_guru');
    $this->load->view('template/footer');
  }


  public function t_siswa()
  {
    $tittle['subtittle'] = "Halaman Data Siswa";
    $tittle['dashboard'] = "Siswa";
    $data['si'] = $this->Admin_model->tampildata('tb_siswa', 'id_siswa');

    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('template/t_siswa', $data);
    $this->load->view('template/footer');
  }
  public function f_siswa()
  {
    $tittle['subtittle'] = "Halaman Tambah Siswa";
    $tittle['dashboard'] = "formulir";
    $this->load->view('template/header', $tittle);
    // $data['combo'] = $this->Admin_model->comboxdinamis();
    // $data['error'] = "";
    $this->load->view('template/navbar');
    $this->load->view('formulir/f_siswa');
    $this->load->view('template/footer');
  }

  // public function sm_siswa()
  // {
  //   $this->form_validation->set_rules('kl', '', 'required');
  //   if ($this->form_validation->run() == FALSE) {
  //     # code...
  //     $tittle['subtittle'] = "Halaman form Kelas";
  //     $tittle['dashboard'] = "Form Kelas ";
  //     $this->load->view('template/header', $tittle);
  //     $this->load->view('template/navbar');
  //     $this->load->view('formulir/f_kelas');
  //     $this->load->view('template/footer');
  //   } else {
  //     $data = array(
  //       'kelas_jurusan' => $this->input->post('kl')
  //     );
  //     $query = $this->Admin_model->simpandata('tb_kelas', $data);

  //     if ($query) {
  //       $this->session->set_flashdata('info', 'Data Tersimpan');
  //       redirect('admin/t_kelas');
  //     } else {
  //       $this->session->set_flashdata('danger', 'Gagal Tersimpan');
  //       redirect('admin/t_kelas');
  //     }
  //   }
  // }
  public function sm_siswa()
  {
    $this->form_validation->set_rules('nm_siswa', '', 'required', array('required' => ' Nama WAJIB di ISI'));
    $this->form_validation->set_rules('id_kelas', '', 'required', array('required' => 'Nisn WAJIB di ISI'));
    $this->form_validation->set_rules('id_guru', '', 'required', array('required' => 'Nama WAJIB di ISI'));
    $this->form_validation->set_rules('jk_siswa', '', 'required', array('required' => 'Jenis Kelamin WAJIB di ISI'));
    // $this->form_validation->set_rules('alt_siswa', '', 'required', array('required' => 'Alamat WAJIB di ISI'));
    if ($this->form_validation->run() == FALSE) {

      // gagal
      $tittle['subtittle'] = "Halaman Tambah siswa";
      $tittle['dashboard'] = "From Tambah siswa";
      $this->load->view('dasbor/header', $tittle);
      $data['combo'] = $this->Admin_model->comboxdinamis();
      $data['error'] = "";
      $this->load->view('formulir/f_siswa', $data);
      $this->load->view('dasbor/footer');
    } else {
      # BERHASIL
      if ($_FILES['foto']['name']) {
        $config['upload_path'] = './assets/siswa/';
        $config['allowed_types'] = 'gif|png|jpg|JPG|PNG|jpeg';
        $config['max_size'] = 1024;
        // $config['max_width'] = 1600;
        // $config['max_height'] = 1500;
        $config['encrypt_name'] = True;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')) {
          $error = array('error' => $this->upload->display_errors(' '));
          $tittle['subtittle'] = "Halaman Tambah Siswa";
          $tittle['dashboard'] = "form Tambah Siswa ";
          $this->load->view('dasbor/header', $tittle);
          $this->load->view('formulir/f_siswa', $error);
          $this->load->view('dasbor/footer');
        } else {
          $gbr = $this->upload->data();
          // $id = $this->input->post('gr');
          // compress gambar
          $config['image_library'] = 'gd2';
          $config['source_image'] = './assets/siswa/' . $gbr['file_name'];
          $config['create_thumb'] = FALSE;
          $config['maintain_ration'] = FALSE;
          $config['quality'] = '50%';
          $config['width'] = 600;
          $config['height'] = 600;
          $config['new_image'] = './assets/siswa/' . $gbr['file_name'];
          $this->load->library('image_lib', $config);
          $this->image_lib->resize('file_name');
          // compress gambar
          $foto = $gbr['file_name'];
          // simpan
          $data = array(
            'nm_siswa' => $this->input->post('nm_siswa'),
            'id_kelas' => $this->input->post('k'),
            'id_guru' => $this->input->post('gr'),
            'jk_siswa' => $this->input->post('jk_siswa'),
            // 'alt_siswa' => $this->input->post('alt_siswa'),
            'ft_siswa' => $foto
          );
          $query = $this->Admin_model->simpandata('siswa', $data);

          if ($query) {
            $this->session->set_flashdata('info', 'Data siswa Berhasil Tersimpan');
            redirect('Admin/t_siswa');
          } else {
            $this->session->set_flashdata('info', 'Data siswa Gagal Tersimpan');
            redirect('Admin/t_siswa');
          }
        }
      } else {

        $data = array(
          'nm_siswa' => $this->input->post('nm_siswa'),
          'id_kelas' => $this->input->post('k'),
          'id_guru' => $this->input->post('gr'),
          'jk_siswa' => $this->input->post('jk_siswa'),
          // 'alt_siswa' => $this->input->post('alt_siswa')
        );
        $query = $this->Admin_model->simpandata('t_siswa', $data);

        if ($query) {
          $this->session->set_flashdata('info', 'Data siswa Berhasil Tersimpan');
          redirect('Admin/t_siswa');
        } else {
          $this->session->set_flashdata('info', 'Data siswa Gagal Tersimpan');
          redirect('Admin/t_siswa');
        }
      }
    }
  }

  public function ed_siswa()
  {
  }


  public function hs_siswa()
  {
  }

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
    $this->load->view('template/navbar');
    $this->load->view('formulir/f_kelas');
    $this->load->view('template/footer');
  }
  public function sm_kelas()
  {
    $this->form_validation->set_rules('kl', 'kelas jurusan', 'required');
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
        'kelas_jurusan' => $this->input->post('kl')
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
      'kelas_jurusan' => $this->input->post('kl')
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
}
