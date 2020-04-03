<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_relasi extends CI_Controller
{
  public function kelas()
  {
    $data['tittle'] = "Kelas";
    $this->load->model('m_relasi');
    $data['data'] = $this->m_relasi->get_relasi();
    $this->load->view()('v_relasi');
  }
}
