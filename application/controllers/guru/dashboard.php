<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
      parent::__construct();

        if (!isset($this->session->userdata['username']))
        {
            $this->session->set_flashdata('pesan',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Anda Belum Login!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          </div>');
            redirect('menu_auth');
        }
    }
    public function index()
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(  'username' => $data->username, 
                        'role_id' => $data->role_id,
                    );
                    $data['user'] = $this->db->get_where('user', ['email'=>
                    $this->session->userdata('email')])->row_array();
        $this->load->view('templates_guru/header');
        $this->load->view('templates_guru/sidebar',$data);
        $this->load->view('guru/dashboard',$data);
        $this->load->view('templates_guru/footer');
    }
}