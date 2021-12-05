<?php
class M_mapel extends CI_Model
{
  public function tampil_data()
  {
    return $this->db->get('mata_pelajaran');
  }

  public function tambah_mapel($data)
  {
    $this->db->insert('mata_pelajaran', $data);
  }

  public function ambil_data($id)
  {
    $this->db->where('id_pelajaran', $id);
    return $this->db->get('mata_pelajaran');
  }

  public function edit_mapel($data)
  {
    $this->db->where('id_pelajaran', $data['id_pelajaran']);
    $this->db->update('mata_pelajaran', $data);
  }

  public function hapus_data($id)
  {
    $this->db->where('id_pelajaran', $id);
    return $this->db->delete('mata_pelajaran');
  }

}
