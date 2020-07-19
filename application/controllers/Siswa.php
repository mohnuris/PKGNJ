<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    // check_login();
    $this->load->model('Siswa_model');
    // $this->load->library('pagination');
  }


  // dashboard user
  public function t_siswa()
  {
    $tittle['subtittle'] = "Halaman Data Siswa";
    $tittle['dashboard'] = "Siswa";
    $data['si'] = $this->Siswa_model->joinsiswa();
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
    $data['combo'] = $this->Siswa_model->combox();
    $data['combo1'] = $this->Siswa_model->combox1(); // kelas
    $data['combo2'] = $this->Siswa_model->combox2(); //sekolah
    $data['combo3'] = $this->Siswa_model->combox3(); // Jurusan
    $data['combo4'] = $this->Siswa_model->combox4(); // Mata Pelajaran
    $data['combo5'] = $this->Siswa_model->combox5(); // guru
    $data['error'] = " ";
    $this->load->view('template/navbar');
    $this->load->view('formulir/f_siswa', $data);
    $this->load->view('template/footer');
  }


  public function sm_siswa()
  {
    $this->form_validation->set_rules('nm_siswa', '', 'required', array('required' => ' Nama WAJIB di ISI'));
    $this->form_validation->set_rules('sekolah', '', 'required', array('required' => 'Sekolah WAJIB di ISI'));
    $this->form_validation->set_rules('id_kelas', '', 'required', array('required' => 'Kelas WAJIB di ISI'));
    $this->form_validation->set_rules('jurusan', '', 'required', array('required' => 'Jurusan WAJIB di ISI'));
    $this->form_validation->set_rules('mapel', '', 'required', array('required' => 'Mata Pelajaran WAJIB di ISI'));
    $this->form_validation->set_rules('guru', '', 'required', array('required' => 'Guru WAJIB di ISI'));
    $this->form_validation->set_rules('jk_siswa', '', 'required', array('required' => 'Jenis Kelamin WAJIB di ISI'));

    if ($this->form_validation->run() == FALSE) {

      // gagal
      $tittle['subtittle'] = "Halaman Tambah Siswa";
      $tittle['dashboard'] = "formulir";
      $this->load->view('template/header', $tittle);
      $data['combo'] = $this->Siswa_model->combox();
      $data['combo1'] = $this->Siswa_model->combox1();
      $data['combo2'] = $this->Siswa_model->combox2();
      $data['combo3'] = $this->Siswa_model->combox3();
      $data['combo4'] = $this->Siswa_model->combox4();
      $data['combo5'] = $this->Siswa_model->combox5(); // guru

      $data['error'] = " ";
      $this->load->view('template/navbar');
      $this->load->view('formulir/f_siswa', $data);
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
          // $error = array('error' => $this->upload->display_errors(' '));

          $tittle['subtittle'] = "Halaman Tambah Siswa";
          $tittle['dashboard'] = "Halaman Siswa";
          $data['si'] = $this->Siswa_model->tampildata('tb_siswa', 'id_siswa');
          $this->load->view('template/header', $tittle);
          $data['combo'] = $this->Siswa_model->combox();
          $data['combo1'] = $this->Siswa_model->combox1();
          $data['combo2'] = $this->Siswa_model->combox2();
          $data['combo3'] = $this->Siswa_model->combox3();
          $data['combo4'] = $this->Siswa_model->combox4();
          $data['combo5'] = $this->Siswa_model->combox5();
          $data['error'] = $this->upload->display_errors(' ');
          $this->load->view('template/navbar');
          $this->load->view('formulir/t_siswa', $data);
          $this->load->view('template/footer');
        } else {
          $gbr = $this->upload->data();
          // $id = $this->input->post('si');
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
            'sekolah' => $this->input->post('sekolah'),
            'kelas' => $this->input->post('kelas'),
            'jurusan' => $this->input->post('jurusan'),
            'mapel' => $this->input->post('mapel'),
            'guru' => $this->input->post('guru'),
            'jk_siswa' => $this->input->post('jk_siswa'),
            'ft_siswa' => $foto
          );
          $query = $this->Siswa_model->simpandata('tb_siswa', $data);

          if ($query) {
            $this->session->set_flashdata('info', 'Data siswa Berhasil Tersimpan');
            redirect('Siswa/t_siswa');
          } else {
            $this->session->set_flashdata('info', 'Data siswa Gagal Tersimpan');
            redirect('Siswa/t_siswa');
          }
        }
      } else {

        $data = array(
          'nm_siswa' => $this->input->post('nm_siswa'),
          'sekolah' => $this->input->post('sekolah'),
          'kelas' => $this->input->post('kelas'),
          'jurusan' => $this->input->post('jurusan'),
          'mapel' => $this->input->post('mapel'),
          'guru' => $this->input->post('guru'),
          'jk_siswa' => $this->input->post('jk_siswa')
        );

        $query = $this->Siswa_model->simpandata('tb_siswa', $data);

        if ($query) {
          $this->session->set_flashdata('info', 'Data siswa Berhasil Tersimpan');
          redirect('Siswa/t_siswa');
        } else {
          $this->session->set_flashdata('info', 'Data siswa Gagal Tersimpan');
          redirect('Siswa/t_siswa');
        }
      }
    }
  }

  public function ed_siswa()
  {
    $id = $this->input->post('id_siswa');
    $foto = $this->input->post('foto');
    if ($this->form_validation->run() == FALSE) {

      // gagal
      $tittle['subtittle'] = "Halaman Form Edit siswa";
      $tittle['dashboard'] = "From Edit siswa";
      $data['si'] = $this->Siswa_model->formedit('tb_siswa', 'id_siswa', $id);
      $this->load->view('template/header', $tittle);
      $data['combo'] = $this->Siswa_model->comboxdinamis();
      $data['error'] = "";
      $this->load->view('template/navbar');
      $this->load->view('formulir/E_siswa', $data);
      $this->load->view('template/footer');
    } else {
      # BERHASIL
      if ($_FILES['foto']['name']) {
        $config['upload_path'] = './assets/siswa/';
        $config['allowed_types'] = 'gif|JPG|PNG|jpg|png|jpeg';
        $config['max_size'] = 1024;
        $config['max_width'] = 1600;
        $config['max_height'] = 1600;
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('ft_siswa')) {
          $tittle['subtittle'] = "Halaman Tambah siswa";
          $tittle['dashboard'] = "From Tambah siswa";
          $this->load->view('template/header', $tittle);
          $data['s'] = $this->Siswa_model->formedit('tb_siswa', 'id_siswa', $id);
          $data['combo'] = $this->Siswa_model->comboxdinamis();
          $data['error'] = $this->upload->display_errors(' ');
          $this->load->view('formulir/f_siswa', $data);
          $this->load->view('template/footer');
        } else {

          $gbr = $this->upload->data();
          // unlink("./assets/siswa/" . $ft_siswa);
          // crop gambar
          $config['image_library'] = 'gd2';
          $config['source_image'] = './assets/siswa/' . $gbr['file_name'];
          $config['create_thumb'] = FALSE;
          $config['maintain_ration'] = FALSE;
          $config['quality'] = '50%';
          $config['width'] = 400;
          $config['height'] = 600;
          $config['new_image'] = './assets/siswa/' . $gbr['file_name'];
          $this->load->library('image_lib', $config);
          $this->image_lib->resize('file_name');
          // compress gambar
          $foto = $gbr['file_name'];
          // simpan
          $id = $this->input->post('id_siswa');
          $data = array(
            'nm_siswa' => $this->input->post('nm_siswa'),
            'sekolah' => $this->input->post('sekolah'),
            'kelas' => $this->input->post('kelas'),
            'jurusan' => $this->input->post('jurusan'),
            'mapel' => $this->input->post('mapel'),
            'guru' => $this->input->post('guru'),
            'jk_siswa' => $this->input->post('jk_siswa'),
            'ft_siswa' => $foto
          );
          $query = $this->Siswa_model->editdata('tb_siswa', 'id_siswa', $id, $data);

          if ($query) {
            $this->session->set_flashdata('info', 'Data siswa Berhasil Tersimpan');
            redirect('Siswa/t_siswa');
          } else {
            $this->session->set_flashdata('info', 'Data siswa Gagal Tersimpan');
            redirect('Siswa/t_siswa');
          }
        }
      } else {

        $data = array(
          'nm_siswa' => $this->input->post('nm_siswa'),
          'sekolah' => $this->input->post('sekolah'),
          'kelas' => $this->input->post('kelas'),
          'jurusan' => $this->input->post('jurusan'),
          'mapel' => $this->input->post('mp'),
          'guru' => $this->input->post('guru'),
          'jk_siswa' => $this->input->post('jk_siswa')

        );
        $query = $this->Siswa_model->editdata('tb_siswa', 'id_siswa', $id, $data);

        if ($query) {
          $this->session->set_flashdata('info', 'Data siswa Berhasil Tersimpan');
          redirect('Siswa/t_siswa');
        } else {
          $this->session->set_flashdata('info', 'Data siswa Gagal Tersimpan');
          redirect('Siswa/t_siswa');
        }
      }
    }
  }


  public function hs_siswa($id)
  {


    $data = $this->Siswa_model->formedit('siswa', 'id_siswa', $id);
    // echo $data->ft_siswa;
    $this->Siswa_model->hapusdata('siswa', $id, 'id_siswa');
    if ($this->db->affected_rows()) {
      unlink("./assets/siswa/" . $data->ft_siswa);
      $this->session->set_flashdata('info', 'Data siswa Berhasil Dihapus');
      redirect('Siswa/t_siswa');
    } else {
      $this->session->set_flashdata('info', 'Data siswa Gagal Terhapus');
      redirect('Siswa/t_siswa');
    }
  }
}
