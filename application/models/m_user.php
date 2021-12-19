<?php
class M_user extends CI_Model
{
  public function tampil_data()
  {
    return $this->db->get('user');
  }

  public function tambah_user($data)
  {
    $this->db->insert('user', $data);
  }

  public function ambil_data($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('user');
  }

  public function edit_user($data)
  {
    $this->db->where('id', $data['id']);
    $this->db->update('user', $data);
  }

  public function status_data($id)
  {
    $user = $this->ambil_data($id);
    $status = $user->result()[0]->blokir;

    if ($status == 'N') {
      $data = array (
        'blokir' => 'Y'
      );
    } else if ($status == 'Y') {
      $data = array (
        'blokir' => 'N'
      );
    }

    $this->db->where('id', $id);
    $this->db->update('user', $data);
  }
}
