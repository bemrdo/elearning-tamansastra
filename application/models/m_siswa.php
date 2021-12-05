<?php
class M_siswa extends CI_Model
{
  public function tampil_data()
  {
    $this->db->select('*');
    $this->db->from('siswa');
    $this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
    return $this->db->get();
  }

  public function ambil_data($id)
  {
    $this->db->select('*');
    $this->db->from('siswa');
    $this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
    $this->db->where('siswa.id_siswa', $id);
    return $this->db->get();
  }

  public function tambah_user($data)
  {
    $this->db->insert('user', $data);
    return $this->db->insert_id();
  }

  public function tambah_siswa($data)
  {
    return $this->db->insert('siswa', $data);
  }

  public function edit_siswa($data)
  {
    $this->db->where('id_siswa', $data['id_siswa']);
    $this->db->update('siswa', $data);
  }

  public function hapus_data($id)
  {
    $this->db->select('id');
    $this->db->from('siswa');
    $this->db->where('id_siswa', $id);
    $id_user = $this->db->get()->result()[0]->id;

    $this->db->where('id_siswa', $id);
    $this->db->delete('siswa');

    $this->db->where('id', $id_user);
    $this->db->delete('user');
  }
}
