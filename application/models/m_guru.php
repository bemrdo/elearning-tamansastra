<?php
class M_guru extends CI_Model
{
  public function tampil_data()
  {
    return $this->db->get('guru');
  }

  public function tambah_guru($data)
  {
    $this->db->insert('guru', $data);
  }

  public function ambil_data($id)
  {
    $this->db->where('id_guru', $id);
    return $this->db->get('guru');
  }

  public function edit_guru($data)
  {
    $this->db->where('id_guru', $data['id_guru']);
    $this->db->update('guru', $data);
  }

  public function hapus_data($id)
  {
    $this->db->where('id_guru', $id);
    return $this->db->delete('guru');
  }
}
