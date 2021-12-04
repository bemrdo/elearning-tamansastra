<?php

class Login extends CI_Controller
{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') == True){
      redirect($this->session->userdata('level').'/dashboard/');
    }
  }
    public function index()
    {
        #$this->load->view('template_admin/header');
        $this->load->view('login');
        #$this->load->view('template_admin/footer');
    }
    public function proses_login()
    {
        $this->form_validation->set_rules('username', 'username', 'required', ['required' => 'Username wajib diisi!']);
        $this->form_validation->set_rules('password', 'password', 'required', ['required' => 'Passwoard wajib diisi!']);
        if ($this->form_validation->run() == FALSE) {
            #$this->load->view('template_admin/header');
            $this->load->view('login');
            #$this->load->view('template_admin/footer');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $username;
            $pass = md5($password);

            $cek = $this->m_login->cek_login($user, $pass);

            if ($cek->num_rows() == 1) {

                foreach ($cek->result() as $ck) {

                    $sess_data['logged_in'] = True;
                    $sess_data['username'] = $ck->username;
                    $sess_data['email'] = $ck->email;
                    $sess_data['level'] = $ck->level;

                    $this->session->set_userdata($sess_data);
                }
                if ($sess_data['level'] == 'admin') {
                    redirect('admin/dashboard');
                } else if ($sess_data['level'] == 'guru') {
                    redirect('guru/dashboard');
                } else if ($sess_data['level'] == 'siswa') {
                    redirect('siswa/dashboard');
                }
            } else {
                $this->session->set_flashdata('pesan', '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
					           Username atau Password Salah!
					           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					                <span aria-hidden="true">&times;</span>
					           </button>
					      </div>');
                redirect('');
            }
        }
    }
}
