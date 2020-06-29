<?php

class User extends CI_Controller
{
    public function index()
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(  'username' => $data->username, 
                        'role_id' => $data->role_id,
                    );
        $data['user'] = $this->user_model->tampil_data('user')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar',$data);
        $this->load->view('administrator/user',$data);
        $this->load->view('templates_administrator/footer');
    }
    
    public function delete($id)
    {
        $where = array('id' => $id);
        $this->user_model->hapus_data($where,'user');
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data user Berhasil diHapus!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
        </div>');
        redirect('administrator/user');
    }

}