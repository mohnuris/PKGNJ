<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_relasi extends CI_Model
{
  public function get_relasi()
  {
    $this->db->select(['a.nm_jurusan','a.id_jurusan', 'b.tb_kelas','b.nm_kelas','b.id_kelas']);
    $this->db->from('tb_jurusan a');
    $this->db->join('tb_kelas b','b.id_jurusan = tables.column','left');
    $this->db->order_by('nm_jurusan','asc');
    $return = $this->db->get('');
    return $return->result();
  }

}