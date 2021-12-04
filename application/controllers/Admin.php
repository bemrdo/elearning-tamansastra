<?php

class Admin extends CI_Controller
{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') != True){
      redirect('');
    }
  }

  public function index()
  {
    redirect('admin/dashboard');
  }

  public function dashboard()
  {
    $this->load->view('admin/dashboard');
  }

  public function kelas($action = '', $id = '')
  {
    $data['kelas'] = $this->m_kelas->tampil_data()->result();
    $data['edit'] = $this->m_kelas->ambil_data($id)->result();
    if ($action == 'edit' && $id != '') {
      $this->load->view('admin/kelas_edit', $data);
    } else if ($action == 'hapus' && $id != '') {
      $this->m_kelas->hapus_data($id);
      redirect('admin/kelas');
    } else {
      $this->load->view('admin/kelas', $data);
    }
  }

  public function tambah_kelas()
  {
    $kode_kelas = $this->input->post('kode_kelas');
    $nama_kelas = $this->input->post('nama_kelas');

    $data = array (
      'kode_kelas' => $kode_kelas,
      'nama_kelas' => $nama_kelas
    );

    $this->m_kelas->tambah_kelas($data);
    redirect('admin/kelas');
  }

  public function siswa()
  {
    // INSERT INTO Persons (FirstName) VALUES ('Joe');
    // SELECT ID AS LastID FROM Persons WHERE ID = @@Identity;
  }
}

?>
