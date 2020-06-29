<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Nilai_uts extends CI_Controller
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
    $data['data_siswa'] = $this->db->get_where('data_siswa', ['email'=>
    $this->session->userdata('email')])->row_array();
    $data['b_indo'] = $this->db->get_where('b_indo', ['email'=>
    $this->session->userdata('email')])->row_array();
    $data['b_inggris'] = $this->db->get_where('b_inggris', ['email'=>
    $this->session->userdata('email')])->row_array();
    $data['b_mtk'] = $this->db->get_where('b_mtk', ['email'=>
    $this->session->userdata('email')])->row_array();
    
    $this->load->view('templates_siswa/header');
    $this->load->view('templates_siswa/sidebar',$data);
    $this->load->view('siswa/nilai_uts',$data);
    $this->load->view('templates_siswa/footer');
  }
}