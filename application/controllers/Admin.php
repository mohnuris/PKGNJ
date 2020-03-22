<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
  public function login()
  {
    $tittle['subtittle'] = "login";
    $tittle['dashboard'] = "user";
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('controllers/login');
    $this->load->view('template/footer');
  }
  public function index()
  {
    $tittle['subtittle'] = "DASBOARD";
    $tittle['dashboard'] = "MENU";
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('template/Admin');
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
    $tittle['subtittle'] = "TABLE";
    $tittle['dashboard'] = "Table";
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('template/tables');
    $this->load->view('template/footer');
  }
  public function t_user()
  {
    $tittle['subtittle'] = "Tables Users";
    $tittle['dashboard'] = "user";
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('template/t_user');
    $this->load->view('template/footer');
  }
  public function t_pengajar()
  {
    $tittle['subtittle'] = "Table Pengajar";
    $tittle['dashboard'] = "user";
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('template/t_pengajar');
    $this->load->view('template/footer');
  }
  public function t_siswa()
  {
    $tittle['subtittle'] = "Table Siswa";
    $tittle['dashboard'] = "Siswa";
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('template/t_siswa');
    $this->load->view('template/footer');
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
  public function formulir()
  {
    $tittle['subtittle'] = "Halaman formulir";
    $tittle['dashboard'] = "formulir ";
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('template/formulir');
    $this->load->view('template/footer');
  }
  public function rekap()
  {
    $tittle['subtittle'] = "Halaman Rekap";
    $tittle['dashboard'] = "Rekap Nilai ";
    $this->load->view('template/header', $tittle);
    $this->load->view('template/navbar');
    $this->load->view('template/t_rekap');
    $this->load->view('template/footer');
  }
}
