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

  //  KELAS --------------------------------------------------------

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

  //  SISWA ---------------------------------------------------------------

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
      'nama' => $nama_lengkap,
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

  //  MATA PELAJARAN ---------------------------------------------

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
    $data['mapel'] = $this->m_mapel->tampil_data()->result();
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

  public function tambah_guru()
  {
    $nip = $this->input->post('nip');
    $nama_lengkap = $this->input->post('nama_lengkap');
    $tempat_lahir = $this->input->post('tempat_lahir');
    $tanggal_lahir = $this->input->post('tanggal_lahir');
    $id_pelajaran = $this->input->post('id_pelajaran');
    $email = $this->input->post('email');
    $alamat = $this->input->post('alamat');
    $jenis_kelamin = $this->input->post('jenis_kelamin');

    $data = array (
      'nip' => $nip,
      'nama_lengkap' => $nama_lengkap,
      'tempat_lahir' => $tempat_lahir,
      'tanggal_lahir' => $tanggal_lahir,
      'id_pelajaran' => $id_pelajaran,
      'email' => $email,
      'alamat' => $alamat,
      'jenis_kelamin' => $jenis_kelamin
    );

    $this->m_guru->tambah_guru($data);
    redirect('admin/guru');
  }

  public function edit_guru()
  {
    $id_guru = $this->input->post('id_guru');
    $nip = $this->input->post('nip');
    $nama_lengkap = $this->input->post('nama_lengkap');
    $tempat_lahir = $this->input->post('tempat_lahir');
    $tanggal_lahir = $this->input->post('tanggal_lahir');
    $id_pelajaran = $this->input->post('id_pelajaran');
    $email = $this->input->post('email');
    $alamat = $this->input->post('alamat');
    $jenis_kelamin = $this->input->post('jenis_kelamin');

    $data = array (
      'id_guru' => $id_guru,
      'nip' => $nip,
      'nama_lengkap' => $nama_lengkap,
      'tempat_lahir' => $tempat_lahir,
      'tanggal_lahir' => $tanggal_lahir,
      'id_pelajaran' => $id_pelajaran,
      'email' => $email,
      'alamat' => $alamat,
      'jenis_kelamin' => $jenis_kelamin
    );

    $this->m_guru->edit_guru($data);
    redirect('admin/guru');
  }

// USER ---------------------------------------------------------

  public function user($action = '', $id = '')
  {
    $data['user'] = $this->m_user->tampil_data()->result();
    $data['edit'] = $this->m_user->ambil_data($id)->result();
    if ($action == 'edit' && $id != '') {
      $this->load->view('admin/user_edit', $data);
    } else if ($action == 'hapus' && $id != '') {
      $this->m_user->hapus_data($id);
      redirect('admin/user');
    } else if ($action == 'status' && $id != '') {
      $this->m_user->status_data($id);
      redirect('admin/user');
    } else {
      $this->load->view('admin/user', $data);
    }
  }

  public function edit_user()
  {
    $id = $this->input->post('id');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $level = $this->input->post('level');

    if ($password != '') {
      $data = array (
        'id' => $id,
        'username' => $username,
        'password' => md5($password),
        'nama' => $nama,
        'email' => $email,
        'level' => $level,
      );
    } else {
      $data = array (
        'id' => $id,
        'username' => $username,
        'nama' => $nama,
        'email' => $email,
        'level' => $level,
      );
    }

    $this->m_user->edit_user($data);
    redirect('admin/user');
  }

// JADWAL ---------------------------------------------------------

  public function jadwal()
  {
    $data['kelas'] = $this->m_kelas->tampil_data()->result();
    $this->load->view('admin/jadwal', $data);
  }

  public function buka_jadwal()
  {
    $id_kelas = $this->input->post('id_kelas');
    $data['pilih_kelas'] = $this->m_kelas->ambil_data($id_kelas)->result()[0];
    $data['kelas'] = $this->m_kelas->tampil_data()->result();
    $data['jadwal'] = $this->m_jadwal->tampil_data()->result();
    $data['mapel'] = $this->m_mapel->tampil_data()->result();
    $data['guru'] = $this->m_guru->tampil_data()->result();
    $data['edit'] = $this->m_jadwal->ambil_data($id_kelas)->result();
    $this->load->view('admin/jadwal_buka', $data);
  }

}
