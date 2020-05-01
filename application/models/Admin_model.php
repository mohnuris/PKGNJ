<?php

class Admin_model extends CI_Model
{
  public function tampildata($table, $urut_id)
  {

    return $this->db->from($table)
      ->order_by($urut_id, 'DESC')
      ->get('');
  }

  public function simpandata($table, $data)
  {
    return $this->db->insert($table, $data);
  }

  public function hapusdata($table, $id, $primary)
  {
    return $this->db->delete($table, array($primary => $id));
  }

  public function formedit($table, $primary, $id)
  {
    return $this->db->get_where($table, array($primary => $id))->row();
  }

  public function editdata($table, $primary, $id, $data)
  {
    return $this->db->where($primary, $id)
      ->update($table, $data);
  }

  public function joinsiswa()
  {
    $query = $this->db->select('*')
      ->from('tb_siswa')
      ->join('tb_kelas', 'tb_siswa.id_kelas=tb_kelas.id_kelas', 'left')
      ->join('tb_sekolah', 'tb_siswa.id_sekolah=tb_sekolah.id_sekolah', 'right')
      ->join('tb_jurusan', 'tb_siswa.id_jurusan=tb_jurusan.id_jurusan', 'left')
      // ->join('tb_guru', 'tb_siswa.id_guru=tb_guru.id_guru', 'left')
      // ->join('tb_kelas', 'tb_siswa.id_kelas=tb_kelas.id_kelas', 'left')
      ->order_by('id_siswa', 'DESC')
      ->get();

    return $query;
  }
  public function joinguru()
  {
    $query = $this->db->select('*')
      ->from('tb_siswa')
      ->join('tb_guru', 'tb_siswa.id_guru=tb_guru.id_guru', 'left')
      ->order_by('id_siswa', 'DESC')
      ->get();

    return $query;
  }

  public function comboxdinamis()
  {
    $query = $this->db->get('tb_siswa');
    $tambah[set_value('s_guru')] = "---Pilih Guru---";
    if ($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $tambah[$row->s_guru] = $row->gr;
      }
    }
    return $tambah;
  }
}
