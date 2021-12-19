<?php
class M_guru extends CI_Model
{
  public function tampil_data()
  {
    $this->db->select('*');
    $this->db->from('guru');
    $this->db->join('mata_pelajaran', 'guru.id_pelajaran = mata_pelajaran.id_pelajaran');
    return $this->db->get();
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
