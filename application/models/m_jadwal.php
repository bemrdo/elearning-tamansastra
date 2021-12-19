<?php
class M_jadwal extends CI_Model
{
  public function tampil_data()
  {
    return $this->db->get('jadwal');
  }

  public function tambah_jadwal($data)
  {
    $this->db->insert('jadwal', $data);
  }

  public function ambil_data($id)
  {
    $this->db->where('id_jadwal', $id);
    return $this->db->get('jadwal');
  }

  public function edit_jadwal($data)
  {
    $this->db->where('id_jadwal', $data['id_jadwal']);
    $this->db->update('jadwal', $data);
  }

  public function hapus_data($id)
  {
    $this->db->where('id_jadwal', $id);
    return $this->db->delete('jadwal');
  }
}
