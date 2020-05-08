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
      // ->join('tb_sekolah', 'tb_siswa.id_sekolah=tb_sekolah.id_sekolah', 'right')
      // ->join('tb_jurusan', 'tb_siswa.id_jurusan=tb_jurusan.id_jurusan', 'left')
      // ->join('tb_guru', 'tb_siswa.id_guru=tb_guru.id_guru', 'left')
      // ->join('tb_kelas', 'tb_siswa.id_kelas=tb_kelas.id_kelas', 'left')
      ->order_by('id_siswa', 'DESC')
      ->get();

    return $query;
  }
  public function joinguru()
  {
    $query = $this->db->select('*')
      ->from('tb_guru')
      // ->join('tb_siswa', 'tb_guru.id_siswa=tb_guru.id_guru', 'left')
      ->join('tb_kelas', 'tb_guru.id_kelas=tb_kelas.id_kelas', 'left')
      ->join('tb_sekolah', 'tb_guru.id_sekolah=tb_sekolah.id_sekolah', 'right')
      ->join('tb_jurusan', 'tb_guru.id_jurusan=tb_jurusan.id_jurusan', 'left')
      ->order_by('id_guru', 'DESC')
      ->get();

    return $query;
  }

  public function comboxdinamis()
  {
    $query = $this->db->get('tb_kelas');
    $tambah[set_value('id_kelas')] = "---Pilih---";
    if ($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $tambah[$row->id_kelas] = $row->kelas;
      }
    }
    return $tambah;
  }

  // public function comboxdinamis1()
  // {
  //   $query = $this->db->get('tb_sekolah');
  //   $tambah[set_value('nm_sekolah')] = "---Pilih ---";
  //   if ($query->num_rows() > 0) {
  //     foreach ($query->result() as $row) {
  //       $tambah[$row->id_sekolah] = $row->nm_sekolah;
  //     }
  //   }
  //   return $tambah;
  // }

  // public function comboxdinamis2()
  // {
  //   $query = $this->db->get('tb_kelas');
  //   $tambah[set_value('jurusan')] = "---Pilih ---";
  //   if ($query->num_rows() > 0) {
  //     foreach ($query->result() as $row) {
  //       $tambah[$row->id_kelas] = $row->jurusan;
  //     }
  //   }
  //   return $tambah;
  // }

  public function comboxdinamis3()
  {
    $query = $this->db->get('tb_guru');
    $tambah[set_value('nm_guru')] = "---Pilih ---";
    if ($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $tambah[$row->id_guru] = $row->nm_guru;
      }
    }
    return $tambah;
  }
  // public function comboxdinamis4()
  // {
  //   $query = $this->db->get('tb_guru');
  //   $tambah[set_value('mapel')] = "---Pilih ---";
  //   if ($query->num_rows() > 0) {
  //     foreach ($query->result() as $row) {
  //       $tambah[$row->id_guru] = $row->mapel;
  //     }
  //   }
  //   return $tambah;
  // }

  // comboxdinamis Guru
  // public function comboxdinamis5()
  // {
  //   $query = $this->db->get('tb_kelas');
  //   $tambah[set_value('id_kelas')] = "---Pilih---";
  //   if ($query->num_rows() > 0) {
  //     foreach ($query->result() as $row) {
  //       $tambah[$row->id_kelas] = $row->id_kelas;
  //     }
  //   }
  //   return $tambah;
  // }
}
