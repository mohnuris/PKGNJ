<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    // check_login();
    $this->load->model('Guru_model');
  }

  public function guru()
  {
    $tittle['subtittle'] = "Halaman Guru";
    $tittle['dashboard'] = "guru";
    // $data['gr'] = $this->Guru_model->joinguru();
    $data['gr'] = $this->Guru_model->tampildata('tb_guru', 'id_guru');
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('template/t_guru', $data);
    $this->load->view('template/footer');
  }

  public function sm_guru()
  {
    $this->form_validation->set_rules('niup', '', 'required', array('required' => ' niup WAJIB di ISI'));
    $this->form_validation->set_rules('nm_guru', '', 'required', array('required' => ' nama WAJIB di ISI'));
    $this->form_validation->set_rules('sekolah', '', 'required', array('required' => ' Sekolah WAJIB di ISI'));
    $this->form_validation->set_rules('kelas', '', 'required', array('required' => ' Kelas WAJIB di ISI'));
    $this->form_validation->set_rules('jurusan', '', 'required', array('required' => ' jurusan WAJIB di ISI'));
    $this->form_validation->set_rules('mapel', '', 'required', array('required' => ' Mata Pelajaran WAJIB di ISI'));
    $this->form_validation->set_rules('jk_guru', '', 'required', array('required' => ' Jenis Kelamin WAJIB di ISI'));

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
        $config['max_size'] = 1024;
        // $config['max_width'] = 512;
        // $config['max_height'] = 512;
        $config['encrypt_name'] = True;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
          $error = array('error' => $this->upload->display_errors(' '));

          $tittle['subtittle'] = "Halaman Guru";
          $tittle['dashboard'] = "guru";
          $data['gr'] = $this->Guru_model->tampildata('tb_guru', 'id_guru');
          $this->load->view('template/header', $tittle);
          $this->load->view('template/navbar');
          $this->load->view('template/t_guru', $data);
          $this->load->view('template/footer');
        } else {

          $gbr = $this->upload->data();
          // $id = $this->input->post('gr');
          $foto = $gbr['file_name'];
          // compress gambar
          $config['image_library'] = 'gd2';
          $config['source_image'] = './assets/guru/' . $gbr['file_name'];
          $config['create_thumb'] = FALSE;
          $config['maintain_ration'] = FALSE;
          $config['quality'] = '50%';
          $config['width'] = 512;
          $config['height'] = 512;
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
          $query = $this->Guru_model->simpandata('tb_guru', $data);
          // $query = $this->Guru_model->editdata('guru', 'id_guru', $id, $data);
          if ($query) {
            $this->session->set_flashdata('info', 'Data guru Berhasil Tersimpan');
            redirect('Guru/guru');
          } else {
            $this->session->set_flashdata('info', 'Data guru Gagal Tersimpan');
            redirect('Guru/guru');
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
        $query = $this->Guru_model->simpandata('tb_guru', $data);
        // $query = $this->Guru_model->editdata('guru', 'id_guru', $id, $data);
        if ($query) {
          $this->session->set_flashdata('info', 'Data guru Berhasil Tersimpan');
          redirect('Guru/guru');
        } else {
          $this->session->set_flashdata('info', 'Data guru Gagal Tersimpan');
          redirect('Guru/guru');
        }
      }
    }
  }
  public function f_guru()
  {
    $tittle['subtittle'] = " Tambah Guru";
    $tittle['dashboard'] = "Tambah Guru ";
    $this->load->view('template/header', $tittle);
    $data['combo'] = $this->Guru_model->combox();
    $data['combo1'] = $this->Guru_model->combox1();
    $data['combo2'] = $this->Guru_model->combox2();
    $data['combo3'] = $this->Guru_model->combox3();
    $data['combo4'] = $this->Guru_model->combox4();
    // $data['combo5'] = $this->Guru_model->combox5();
    $data['error'] = "";
    // $data['error'] = $this->upload->display_errors(' ');
    $this->load->view('template/navbar', $tittle);
    $this->load->view('formulir/f_guru', $data, array('error' => ''));
    $this->load->view('template/footer');
  }




  public function edit_guru()
  {

    $this->form_validation->set_rules('niup', '', 'required', array('required' => ' niup WAJIB di ISI'));
    $this->form_validation->set_rules('nm_guru', '', 'required', array('required' => ' nama WAJIB di ISI'));
    $this->form_validation->set_rules('sekolah', '', 'required', array('required' => ' Sekolah WAJIB di ISI'));
    $this->form_validation->set_rules('kelas', '', 'required', array('required' => ' Kelas WAJIB di ISI'));
    $this->form_validation->set_rules('jurusan', '', 'required', array('required' => ' jurusan WAJIB di ISI'));
    $this->form_validation->set_rules('mapel', '', 'required', array('required' => ' Mata Pelajaran WAJIB di ISI'));
    $this->form_validation->set_rules('jk_guru', '', 'required', array('required' => ' Jenis Kelamin WAJIB di ISI'));

    $id = $this->input->post('id_guru');
    $foto = $this->input->post('foto');
    // $data['gr'] = $this->Guru_model->editdata('tb_guru', 'id_guru', $id);
    if ($this->form_validation->run() == FALSE) {
      // gagal
      $tittle['subtittle'] = "  Edit Guru";
      $tittle['dashboard'] = "Edit data Guru ";
      $data['gr'] = " ";
      $this->load->view('template/header', $tittle);
      $this->load->view('template/navbar', $tittle);
      $this->load->view('formulir/E_guru', array('errors' => '$data'));
      $this->load->view('template/footer');
    } else {
      //  berhasil
      if ($_FILES['foto']['name']) {
        $config['upload_path'] = './assets/guru/';
        $config['allowed_types'] = 'gif|png|jpg|JPG|PNG|jpeg';
        $config['max_size'] = 1024;
        $config['max_width'] = 512;
        $config['max_height'] = 512;
        $config['encrypt_name'] = True;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
          $error = array('error' => $this->upload->display_errors(' '));
          $tittle['subtittle'] = "Halaman Guru";
          $tittle['dashboard'] = "guru";
          $data['gr'] = $this->Guru_model->tampildata('tb_guru', 'id_guru');
          $this->load->view('template/header', $tittle);
          $data['combo'] = $this->Guru_model->combox();
          $data['combo1'] = $this->Guru_model->combox1();
          $data['combo2'] = $this->Guru_model->combox2();
          $data['combo3'] = $this->Guru_model->combox3();
          $data['combo4'] = $this->Guru_model->combox4();
          // $data['combo5'] = $this->Guru_model->combox5();
          $data['error'] = $this->upload->display_errors(' ');
          $this->load->view('template/navbar');
          $this->load->view('template/t_guru', $data);
          $this->load->view('template/footer');
        } else {

          $gbr = $this->upload->data();
          unlink("./assets/guru/" . $foto);
          // $id = $this->input->post('gr');
          // $foto = $gbr['file_name'];
          // compress gambar
          $config['image_library'] = 'gd2';
          $config['source_image'] = './assets/guru/' . $gbr['file_name'];
          $config['create_thumb'] = FALSE;
          $config['maintain_ration'] = FALSE;
          $config['quality'] = '50%';
          $config['width'] = 512;
          $config['height'] = 512;
          $config['new_image'] = './assets/guru/' . $gbr['file_name'];
          $this->load->library('image_lib', $config);
          $this->image_lib->resize('file_name');
          // compress gambar
          $foto = $gbr['file_name'];
          // unlink("./assets/guru/" . $foto);

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
          // $query = $this->Guru_model->simpandata('tb_guru', $data);
          $query = $this->Guru_model->editdata('tb_guru', 'id_guru', $id, $data);
          if ($query) {
            $this->session->set_flashdata('info', 'Data guru Berhasil Tersimpan');
            redirect('Guru/guru');
          } else {
            $this->session->set_flashdata('info', 'Data guru Gagal Tersimpan');
            redirect('Guru/guru');
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
          'jk_guru' => $this->input->post('jk_guru'),
          'ft_guru' => $this->input->post('ft_guru')

        );
        // $query = $this->Guru_model->simpandata('tb_guru', $data);
        $query = $this->Guru_model->editdata('tb_guru', 'id_guru', $id, $data);
        if ($query) {
          $this->session->set_flashdata('info', 'Data guru Berhasil Tersimpan');
          redirect('Guru/guru');
        } else {
          $this->session->set_flashdata('info', 'Data guru Gagal Tersimpan');
          redirect('Guru/guru');
        }
      }
    }
  }

  public function edguru($id)
  {
    $tittle['subtittle'] = "Halaman Edit Guru";
    $tittle['dashboard'] = "Form Edit Guru ";
    $data['gr'] = $this->Guru_model->formedit('tb_guru', 'id_guru', $id);
    $data['errors'] = " ";
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('formulir/E_guru', $data);
    $this->load->view('template/footer');
  }

  public function hapusguru($id)
  {
    $data = $this->Guru_model->formedit('tb_guru', 'id_guru', $id);
    $this->Guru_model->hapusdata('tb_guru', $id, 'id_guru', $data);
    // $this->Guru_model->hapusdata('tb_guru', 'niup'); //permasalahgannya pada $id
    // $this->Guru_model->hapusdata('tb_guru', 'nm_guru'); //permasalahgannya pada $id
    // $this->Guru_model->hapusdata('tb_guru',  'sekolah');
    // $this->Guru_model->hapusdata('tb_guru',  'mapel');
    // $this->Guru_model->hapusdata('tb_guru',  'kelas');
    // $this->Guru_model->hapusdata('tb_guru',  'jurusan');
    // $this->Guru_model->hapusdata('tb_guru',  'jk_guru');
    // $this->Guru_model->hapusdata('tb_guru',  'ft_guru');

    if ($this->db->affected_rows()) {
      unlink("./assets/guru/" . $data->ft_guru);
      $this->session->set_flashdata('info', 'Data Kelas Berhasil Dihapus');
      redirect('Guru/guru');
    } else {
      $this->session->set_flashdata('error', 'Data Kelas Gagal Terhapus');
      redirect('Guru/guru');
    }
  }
}
