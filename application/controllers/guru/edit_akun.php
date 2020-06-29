<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Edit_akun extends CI_Controller
{
    public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    
  }
  public function index()
  {
    $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(  'username' => $data->username, 
                        'role_id' => $data->role_id,
                    );
    $data['user'] = $this->db->get_where('user', ['email'=>
    $this->session->userdata('email')])->row_array();
    $data['data_guru'] = $this->db->get_where('data_guru', ['email'=>
    $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('passwordsekarang',
    'Passwordsekarang', 'required');
    $this->form_validation->set_rules('passwordbaru1',
    'Passwordbaru1', 'required|matches[passwordbaru2]');
    $this->form_validation->set_rules('passwordbaru2',
    'Passwordbaru2', 'required|matches[passwordbaru1]');

    if($this->form_validation->run() == FALSE)
    {
        $this->load->view('templates_guru/header');
        $this->load->view('templates_guru/sidebar',$data);
        $this->load->view('guru/edit_akun',$data);
        $this->load->view('templates_guru/footer');
    }else
    {
      $passwordsekarang = $this->input->post('passwordsekarang');
      $passwordbaru = $this->input->post('passwordbaru1');
      if(!password_verify($passwordsekarang, $data['user']['password']))
      {
        $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password yang anda masukan salah! </div>');
        redirect('guru/edit_akun');
      }else
      {
        if($passwordsekarang == $passwordbaru)
        {
          $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password yang anda masukan tidak boleh sama dengan password sebelumnya! </div>');
        redirect('guru/edit_akun');
        }else
        {
          $password_hash = password_hash($passwordbaru, PASSWORD_DEFAULT);

          $this->db->set('password', $password_hash);
          $this->db->where('email', $this->session->userdata('email'));
          $this->db->update('user');
          
          $password = htmlspecialchars($passwordbaru, true);

          $this->db->set('password', $password);
          $this->db->where('email', $this->session->userdata('email'));
          $this->db->update('data_guru');

          $this->session->set_flashdata('message','<div class="alert alert-succes" role="alert">Password berhasil diubah! </div>');
        redirect('guru/edit_akun');
        }
      }
    }
  }

}