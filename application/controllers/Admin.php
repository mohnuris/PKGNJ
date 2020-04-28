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
    $this->load->view('template/header', $tittle);
    $this->load->view('form_users');
    $this->load->view('template/footer');
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
    $this->form_validation->set_rules('niup', '', 'required', array('required' => ' niup WAJIB di ISI'));
    $this->form_validation->set_rules('nm_guru', '', 'required', array('required' => ' nama WAJIB di ISI'));
    $this->form_validation->set_rules('sekolah', '', 'required', array('required' => ' jenis kelamin WAJIB di ISI'));
    $this->form_validation->set_rules('kelas', '', 'required', array('required' => ' jenis kelamin WAJIB di ISI'));
    $this->form_validation->set_rules('jurusan', '', 'required', array('required' => ' telpon WAJIB di ISI'));
    $this->form_validation->set_rules('mapel', '', 'required', array('required' => ' telpon WAJIB di ISI'));
    $this->form_validation->set_rules('jk_guru', '', 'required', array('required' => ' alamat WAJIB di ISI'));

    if ($this->form_validation->run() == FALSE) {
      // gagal
      $tittle['subtittle'] = " Tambah Guru";
      $tittle['dashboard'] = "Tambah Guru ";
      // $tittle['dashboard'] = "formulir ";
      $this->load->view('template/header', $tittle);
      $this->load->view('template/navbar', $tittle);
      $this->load->view('formulir/f_guru', array('error' => ''));
      $this->load->view('template/footer');
    } else {
      //  berhasil
      if ($_FILES['foto']['name']) {
        $config['upload_path'] = './assets/guru/';
        $config['allowed_types'] = 'gif|png|jpg|JPG|PNG|jpeg';
        $config['max_size'] = 100;
        // $config['max_width'] = 1600;
        // $config['max_height'] = 1500;
        $config['encrypt_name'] = True;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')) {
          $error = array('error' => $this->upload->display_errors(' '));
          $tittle['subtittle'] = "Halaman Guru";
          $tittle['dashboard'] = "guru";
          $data['gr'] = $this->Admin_model->tampildata('tb_guru', 'id_guru');
          $this->load->view('template/header', $tittle);
          $this->load->view('template/navbar');
          $this->load->view('template/t_guru', $data);
          $this->load->view('template/footer');
        } else {
          $gbr = $this->upload->data();
          // $id = $this->input->post('gr');
          // compress gambar
          $config['image_library'] = 'gd2';
          $config['source_image'] = './assets/guru/' . $gbr['file_name'];
          $config['create_thumb'] = FALSE;
          $config['maintain_ration'] = FALSE;
          $config['quality'] = '50%';
          $config['width'] = 600;
          $config['height'] = 600;
          $config['new_image'] = './assets/guru/' . $gbr['file_name'];
          $this->load->library('image_lib', $config);
          $this->image_lib->resize('file_name');
          // compress gambar
          $foto = $gbr['file_name'];
          // simpan
          $data = array(
            'niup' => $this->input->post('niup'),
            'nm_guru' => $this->input->post('nm_guru'),
            'sekolah' => $this->input->post('sekolah'),
            'kelas' => $this->input->post('kelas'),
            'jurusan' => $this->input->post('jurusan'),
            'mapel' => $this->input->post('mapel'),
            'jk_guru' => $this->input->post('jk_guru'),
            'ft_guru' => $foto
          );
          $query = $this->Admin_model->simpandata('guru', $data);
          // $query = $this->Admin_model->editdata('guru', 'id_guru', $id, $data);
          if ($query) {
            $this->session->set_flashdata('info', 'Data guru Berhasil Tersimpan');
            redirect('Admin/guru');
          } else {
            $this->session->set_flashdata('info', 'Data guru Gagal Tersimpan');
            redirect('Admin/guru');
          }
        }
      } else {
        $data = array(
          'niup' => $this->input->post('niup'),
          'nm_guru' => $this->input->post('nm_guru'),
          'sekolah' => $this->input->post('sekolah'),
          'kelas' => $this->input->post('kelas'),
          'jurusan' => $this->input->post('jurusan'),
          'mapel' => $this->input->post('mapel'),
          'jk_guru' => $this->input->post('jk_guru')
        );
        $query = $this->Admin_model->simpandata('tb_guru', $data);
        // $query = $this->Admin_model->editdata('guru', 'id_guru', $id, $data);
        if ($query) {
          $this->session->set_flashdata('info', 'Data guru Berhasil Tersimpan');
          redirect('Admin/guru');
        } else {
          $this->session->set_flashdata('info', 'Data guru Gagal Tersimpan');
          redirect('Admin/guru');
        }
      }
    }
  }



  public function f_guru()
  {
    $tittle['subtittle'] = " Tambah Guru";
    $tittle['dashboard'] = "Tambah Guru ";
    // $tittle['dashboard'] = "formulir ";
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar', $tittle);
    $this->load->view('formulir/f_guru', array('error' => ''));
    $this->load->view('template/footer');
  }



  public function ed_guru($id)
  {

    // $this->form_validation->set_rules('niup', 'niup', 'required', array('required' => ' niup WAJIB di ISI'));
    // $this->form_validation->set_rules('nm_guru', 'Nama Lengkap', 'required', array('required' => ' nama Lengkpa WAJIB di ISI'));
    // $this->form_validation->set_rules('sekolah', 'Sekolah', 'required', array('required' => ' Sekolah  WAJIB di ISI'));
    // $this->form_validation->set_rules('kelas', 'Kelas', 'required', array('required' => ' Kelas WAJIB di ISI'));
    // $this->form_validation->set_rules('jurusan', 'Jurusan', 'required', array('required' => ' Jurusan WAJIB di ISI'));
    // $this->form_validation->set_rules('mapel', 'Mata Pelajaran', 'required', array('required' => ' Mata Pelajaran WAJIB di ISI'));
    // $this->form_validation->set_rules('jk_guru', 'Jenis Kelamin', 'required', array('required' => ' alamat WAJIB di ISI'));

    $id = $this->input->post('gr');
    $ft_guru = $this->input->post('foto');
    if ($this->form_validation->run() == FALSE) {
      // gagal
      $tittle['subtittle'] = " Tambah Guru";
      $tittle['dashboard'] = "Tambah Guru ";
      // $tittle['dashboard'] = "formulir ";
      $this->load->view('template/header', $tittle);
      $this->load->view('template/navbar', $tittle);
      $this->load->view('template/t_guru', array('error' => ''));
      $this->load->view('template/footer');
    } else {
      //  berhasil


      if ($_FILES['foto']['name']) {
        $config['upload_path'] = './assets/guru/';
        $config['allowed_types'] = 'gif|png|jpg|JPG|PNG|jpeg';
        $config['max_size'] = 1024;
        // $config['max_width'] = 1600;
        // $config['max_height'] = 1500;
        $config['encrypt_name'] = True;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')) {
          $tittle['subtittle'] = " Tambah Guru";
          $tittle['dashboard'] = "Tambah Guru ";
          // $tittle['dashboard'] = "formulir ";
          $this->load->view('template/header', $tittle);
          $this->load->view('template/navbar', $tittle);
          $this->load->view('formulir/f_guru', array('error' => ''));
          $this->load->view('template/footer');
        } else {
          $gbr = $this->upload->data();
          unlink("./assets/guru/" . $ft_guru);
          // compress gambar
          $config['image_library'] = 'gd2';
          $config['source_image'] = './assets/guru/' . $gbr['file_name'];
          $config['create_thumb'] = FALSE;
          $config['maintain_ration'] = FALSE;
          $config['quality'] = '50%';
          $config['width'] = 400;
          $config['height'] = 600;
          $config['new_image'] = './assets/guru/' . $gbr['file_name'];
          $this->load->library('image_lib', $config);
          $this->image_lib->resize('file_name');
          // compress gambar
          $foto = $gbr['file_name'];
          // simpan
          $id = $this->input->post('gr');
          $data = array(
            'niup' => $this->input->post('niup'),
            'nm_guru' => $this->input->post('nm_guru'),
            'sekolah' => $this->input->post('sekolah'),
            'kelas' => $this->input->post('kelas'),
            'jurusan' => $this->input->post('jurusan'),
            'mapel' => $this->input->post('mapel'),
            'jk_guru' => $this->input->post('jk_guru'),
            'ft_guru' => $foto
          );
          $query = $this->Admin_model->editdata('tb_guru', 'id_guru', $id, $data);
          if ($query) {
            $this->session->set_flashdata('info', 'Data guru Berhasil Tersimpan');
            redirect('Admin/guru');
          } else {
            $this->session->set_flashdata('info', 'Data guru Gagal Tersimpan');
            redirect('Admin/guru');
          }
        }
      } else {
        $data = array(
          'niup' => $this->input->post('niup'),
          'nm_guru' => $this->input->post('nm_guru'),
          'sekolah' => $this->input->post('sekolah'),
          'kelas' => $this->input->post('kelas'),
          'jurusan' => $this->input->post('jurusan'),
          'mapel' => $this->input->post('mapel'),
          'jk_guru' => $this->input->post('jk_guru')
        );
        $query = $this->Admin_model->editdata('tb_guru', 'id_guru', $id, $data);
        if ($query) {
          $this->session->set_flashdata('info', 'Data guru Berhasil Tersimpan');
          redirect('Admin/guru');
        } else {
          $this->session->set_flashdata('info', 'Data guru Gagal Tersimpan');
          redirect('Admin/guru');
        }
      }
    }
  }

  public function edguru($id)
  {
    $tittle['subtittle'] = "Halaman Edit Guru";
    $tittle['dashboard'] = "Form Edit Guru ";
    // $data['gr'] = $this->Admin_model->formedit('tb_guru', 'id_guru', $id);
    $data['niup'] = $this->Admin_model->formedit('tb_guru', 'niup', $id);
    $data['nm_guru'] = $this->Admin_model->formedit('tb_guru', 'nm_guru', $id);
    $data['sekolah'] = $this->Admin_model->formedit('tb_guru', 'sekolah', $id);
    $data['kelas'] = $this->Admin_model->formedit('tb_guru', 'kelas', $id);
    $data['jurusan'] = $this->Admin_model->formedit('tb_guru', 'jurusan', $id);
    $data['jk_guru'] = $this->Admin_model->formedit('tb_guru', 'jk_guru', $id);
    $data['foto'] = $this->Admin_model->formedit('tb_guru', 'ft_guru', $id);
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('formulir/E_guru', $data);
    $this->load->view('template/footer');
  }

  public function hapusguru($id)
  {
    $this->Admin_model->hapusdata('tb_guru', $id, 'id_guru');
    $this->Admin_model->hapusdata('tb_guru', 'niup'); //permasalahgannya pada $id
    $this->Admin_model->hapusdata('tb_guru', 'nm_guru'); //permasalahgannya pada $id
    $this->Admin_model->hapusdata('tb_guru',  'sekolah');
    $this->Admin_model->hapusdata('tb_guru',  'mapel');
    $this->Admin_model->hapusdata('tb_guru',  'kelas');
    $this->Admin_model->hapusdata('tb_guru',  'jurusan');
    $this->Admin_model->hapusdata('tb_guru',  'jk_guru');
    $this->Admin_model->hapusdata('tb_guru',  'ft_guru');

    if ($this->db->affected_rows()) {
      $this->session->set_flashdata('info', 'Data Kelas Berhasil Dihapus');
      redirect('admin/guru');
    } else {
      $this->session->set_flashdata('error', 'Data Kelas Gagal Terhapus');
      redirect('admin/guru');
    }
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
    $this->form_validation->set_rules('nm', 'nama lengkap', 'required', array('required' => ' Nama WAJIB di ISI'));
    // $this->form_validation->set_rules('jk_siswa', '', 'required', array('required' => 'Kelas WAJIB di ISI'));
    $this->form_validation->set_rules('sk', '', 'required', array('required' => 'Sekolah WAJIB di ISI'));
    $this->form_validation->set_rules('kl', '', 'required', array('required' => 'Sekolah WAJIB di ISI'));
    $this->form_validation->set_rules('gr', '', 'required', array('required' => 'Sekolah WAJIB di ISI'));
    $this->form_validation->set_rules('jk', '', 'required', array('required' => 'Jenis Kelamin WAJIB di ISI'));
    // $this->form_validation->set_rules('alt_siswa', '', 'required', array('required' => 'Alamat WAJIB di ISI'));
    if ($this->form_validation->run() == FALSE) {

      // gagal
      $tittle['subtittle'] = "Halaman Tambah siswa";
      $tittle['dashboard'] = "From Tambah siswa";
      $this->load->view('template/header', $tittle);
      $this->load->view('template/navbar');
      // $this->load->view('template/t_siswa', $data);
      $this->load->view('template/footer');
      $data['combo'] = $this->Admin_model->comboxdinamis();
      $data['error'] = "";
      $this->load->view('template/t_siswa', $data);
      $this->load->view('template/footer');
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
          $this->load->view('tempalte/header', $tittle);
          $this->load->view('formulir/f_siswa', $error);
          $this->load->view('template/footer');
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
            'nm_siswa' => $this->input->post('nm'),
            's_sekolah' => $this->input->post('sk'),
            's_kelas' => $this->input->post('kl'),
            's_guru' => $this->input->post('gr'),
            'jk_siswa' => $this->input->post('jk'),
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
          'nm_siswa' => $this->input->post('nm'),
          's_sekolah' => $this->input->post('sk'),
          's_kelas' => $this->input->post('kl'),
          's_guru' => $this->input->post('gr'),
          'jk_siswa' => $this->input->post('jk'),
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
    $this->load->view('template/navbar');
    $this->load->view('formulir/f_kelas');
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
    $this->Admin_model->hapusdata('tb_kelas', 'sekolah'); //permasalahgannya pada $id
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
}
