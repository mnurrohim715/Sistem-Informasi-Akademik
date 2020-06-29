<?php

class Absen extends CI_Controller
{
    
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
    $this->load->view('templates_guru/header');
    $this->load->view('templates_guru/sidebar',$data);
    $this->load->view('guru/absen',$data);
    $this->load->view('templates_guru/footer');
  }
}