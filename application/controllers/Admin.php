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

  public function edit_kelas()
  {
    $id_kelas = $this->input->post('id_kelas');
    $kode_kelas = $this->input->post('kode_kelas');
    $nama_kelas = $this->input->post('nama_kelas');

    $data = array (
      'id_kelas' => $id_kelas,
      'kode_kelas' => $kode_kelas,
      'nama_kelas' => $nama_kelas
    );

    $this->m_kelas->edit_kelas($data);
    redirect('admin/kelas');
  }

  public function siswa($action = '', $id = '')
  {
    $data['kelas'] = $this->m_kelas->tampil_data()->result();
    $data['siswa'] = $this->m_siswa->tampil_data()->result();
    $data['edit'] = $this->m_siswa->ambil_data($id)->result();

    if ($action == 'edit' && $id != '') {
      $this->load->view('admin/siswa_edit', $data);
    } else if ($action == 'hapus' && $id != '') {
      $this->m_siswa->hapus_data($id);
      redirect('admin/siswa');
    } else {
      $this->load->view('admin/siswa', $data);
    }
  }

  public function tambah_siswa()
  {
    $id_kelas = $this->input->post('id_kelas');
    $nis = $this->input->post('nis_siswa');
    $nama_lengkap = $this->input->post('nama_siswa');
    $tempat_lahir = $this->input->post('tempat_lahir');
    $tanggal_lahir = $this->input->post('tanggal_lahir');
    $jenis_kelamin = $this->input->post('jenis_kelamin');
    $email = $this->input->post('email_siswa');
    $alamat = $this->input->post('alamat_siswa');
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $user = array (
      'username' => $username,
      'password' => md5($password),
      'level' => 'siswa',
      'email' => $email
    );

    $id = $this->m_siswa->tambah_user($user);

    $data = array (
      'id' => $id,
      'nis' => $nis,
      'nama_lengkap' => $nama_lengkap,
      'tempat_lahir' => $tempat_lahir,
      'tanggal_lahir' => $tanggal_lahir,
      'email' => $email,
      'alamat' => $alamat,
      'id_kelas' => $id_kelas,
      'jenis_kelamin' => $jenis_kelamin
    );

    $this->m_siswa->tambah_siswa($data);
    redirect('admin/siswa');
  }

  public function edit_siswa()
  {
    $id_siswa = $this->input->post('id_siswa');
    $id_kelas = $this->input->post('id_kelas');
    $nis = $this->input->post('nis_siswa');
    $nama_lengkap = $this->input->post('nama_siswa');
    $tempat_lahir = $this->input->post('tempat_lahir');
    $tanggal_lahir = $this->input->post('tanggal_lahir');
    $jenis_kelamin = $this->input->post('jenis_kelamin');
    $email = $this->input->post('email_siswa');
    $alamat = $this->input->post('alamat_siswa');

    $data = array (
      'id_siswa' => $id_siswa,
      'nis' => $nis,
      'nama_lengkap' => $nama_lengkap,
      'tempat_lahir' => $tempat_lahir,
      'tanggal_lahir' => $tanggal_lahir,
      'email' => $email,
      'alamat' => $alamat,
      'id_kelas' => $id_kelas,
      'jenis_kelamin' => $jenis_kelamin
    );

    $this->m_siswa->edit_siswa($data);
    redirect('admin/siswa');
  }

  public function mapel($action = '', $id = '')
  {
    $data['mapel'] = $this->m_mapel->tampil_data()->result();
    $data['edit'] = $this->m_mapel->ambil_data($id)->result();
    if ($action == 'edit' && $id != '') {
      $this->load->view('admin/mapel_edit', $data);
    } else if ($action == 'hapus' && $id != '') {
      $this->m_mapel->hapus_data($id);
      redirect('admin/mapel');
    } else if ($action == 'status' && $id != '') {
      $this->m_mapel->status_data($id);
      redirect('admin/mapel');
    } else {
      $this->load->view('admin/mapel', $data);
    }
  }

  public function tambah_mapel()
  {
    $nama_pelajaran = $this->input->post('nama_pelajaran');
    $keterangan = $this->input->post('keterangan');

    $data = array (
      'nama_pelajaran' => $nama_pelajaran,
      'keterangan' => $keterangan
    );

    $this->m_mapel->tambah_mapel($data);
    redirect('admin/mapel');
  }

  public function edit_mapel()
  {
    $id_pelajaran = $this->input->post('id_pelajaran');
    $nama_pelajaran = $this->input->post('nama_pelajaran');
    $keterangan = $this->input->post('keterangan');

    $data = array (
      'id_pelajaran' => $id_pelajaran,
      'nama_pelajaran' => $nama_pelajaran,
      'keterangan' => $keterangan
    );

    $this->m_mapel->edit_mapel($data);
    redirect('admin/mapel');
  }

// GURU ---------------------------------------------------------

  public function guru($action = '', $id = '')
  {
    $data['guru'] = $this->m_guru->tampil_data()->result();
    $data['edit'] = $this->m_guru->ambil_data($id)->result();
    if ($action == 'edit' && $id != '') {
      $this->load->view('admin/guru_edit', $data);
    } else if ($action == 'hapus' && $id != '') {
      $this->m_guru->hapus_data($id);
      redirect('admin/guru');
    } else if ($action == 'status' && $id != '') {
      $this->m_guru->status_data($id);
      redirect('admin/guru');
    } else {
      $this->load->view('admin/guru', $data);
    }
  }
}

?>
