<?php
class M_kelas extends CI_Model
{
  public function tampil_data()
  {
    return $this->db->get('kelas');
  }

  public function tambah_kelas($data)
  {
    $this->db->insert('kelas', $data);
  }

  public function ambil_data($id)
  {
    $this->db->where('id_kelas', $id);
    return $this->db->get('kelas');
  }

  public function hapus_data($id)
  {
    $this->db->where('id_kelas', $id);
    return $this->db->delete('kelas');
  }
}
