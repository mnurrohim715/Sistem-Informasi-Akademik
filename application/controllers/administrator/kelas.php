<?php

class Kelas extends CI_Controller
{
    public function index()
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(  'username' => $data->username, 
                        'role_id' => $data->role_id,
                    );
        $data['data_siswa'] = $this->siswa_model->tampil_data('data_siswa')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar',$data);
        $this->load->view('administrator/kelas',$data);
        $this->load->view('templates_administrator/footer');
    }
    public function _rules()
    {
         
        $this->form_validation->set_rules('name','Name','required',                     ['required'=> 'Nama wajib diisi']);
        $this->form_validation->set_rules('kelas','Kelas','required',                     ['required'=> 'Kelas wajib diisi']);
        $this->form_validation->set_rules('password','Password','required',             ['required'=> 'Password wajib diisi']);
        $this->form_validation->set_rules('email','Email','required',                   ['required'=> 'Email wajib diisi']);
        $this->form_validation->set_rules('nisn','Nisn','required',                     ['required'=> 'NISN wajib diisi']);
        $this->form_validation->set_rules('is_active','Is_active','required',           ['required'=> 'Aktif wajib diisi']);
        $this->form_validation->set_rules('role_id','Role_id','required',               ['required'=> 'User Role wajib diisi']);
    }

    public function kelas1()
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(  'username' => $data->username, 
                        'role_id' => $data->role_id,
                    );
        $data['data_siswa1'] = $this->kelas1_model->tampil_data_kelas1A('data_siswa')->result();
        $data['data_siswa2'] = $this->kelas1_model->tampil_data_kelas1B('data_siswa')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar',$data);
        $this->load->view('administrator/kelas1',$data);
        $this->load->view('templates_administrator/footer');
    }
    public function edit_kelas1($id)
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(  'username' => $data->username, 
                        'role_id' => $data->role_id,
                    );
        $where = array('id_siswa' => $id);
        $data['data_siswa']=$this->kelas1_model->edit_data($where,'data_siswa')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar',$data);
        $this->load->view('administrator/edit_kelas1',$data);
        $this->load->view('templates_administrator/footer');
    }
    public function update_aksi1()
    {
        
        $id= $this->input->post('id_siswa');
        $username=$this->input->post('username');
        $kelas= $this->input->post('kelas');

        $data= array(
            'kelas' => $kelas
        );
        $where = array(
            'id_siswa' => $id
        );
        $this->siswa_model->update_data($where,$data,'data_siswa');
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Siswa Berhasil di Ubah!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
        </div>');
        redirect('administrator/kelas/kelas1');
    }
    
    public function kelas2()
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(  'username' => $data->username, 
                        'role_id' => $data->role_id,
                    );
        $data['data_siswa1'] = $this->kelas2_model->tampil_data_kelas2A('data_siswa')->result();
        $data['data_siswa2'] = $this->kelas2_model->tampil_data_kelas2B('data_siswa')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar',$data);
        $this->load->view('administrator/kelas2',$data);
        $this->load->view('templates_administrator/footer');
    }
    public function edit_kelas2($id)
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(  'username' => $data->username, 
                        'role_id' => $data->role_id,
                    );
        $where = array('id_siswa' => $id);
        $data['data_siswa']=$this->kelas2_model->edit_data($where,'data_siswa')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar',$data);
        $this->load->view('administrator/edit_kelas2',$data);
        $this->load->view('templates_administrator/footer');
    }
    public function update_aksi2()
    {
        
        $id= $this->input->post('id_siswa');
        $username=$this->input->post('username');
        $kelas= $this->input->post('kelas');

        $data= array(
            'kelas' => $kelas
        );
        $where = array(
            'id_siswa' => $id
        );
        $this->siswa_model->update_data($where,$data,'data_siswa');
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Siswa Berhasil di Ubah!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
        </div>');
        redirect('administrator/kelas/kelas2');
    }
   

    public function kelas3()
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(  'username' => $data->username, 
                        'role_id' => $data->role_id,
                    );
        $data['data_siswa1'] = $this->kelas3_model->tampil_data_kelas3A('data_siswa')->result();
        $data['data_siswa2'] = $this->kelas3_model->tampil_data_kelas3B('data_siswa')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar',$data);
        $this->load->view('administrator/kelas3',$data);
        $this->load->view('templates_administrator/footer');
    }
    public function edit_kelas3($id)
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(  'username' => $data->username, 
                        'role_id' => $data->role_id,
                    );
        $where = array('id_siswa' => $id);
        $data['data_siswa']=$this->kelas3_model->edit_data($where,'data_siswa')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar',$data);
        $this->load->view('administrator/edit_kelas3',$data);
        $this->load->view('templates_administrator/footer');
    }
    public function update_aksi3()
    {
        
        $id= $this->input->post('id_siswa');
        $username=$this->input->post('username');
        $kelas= $this->input->post('kelas');

        $data= array(
            'kelas' => $kelas
        );
        $where = array(
            'id_siswa' => $id
        );
        $this->siswa_model->update_data($where,$data,'data_siswa');
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Siswa Berhasil di Ubah!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
        </div>');
        redirect('administrator/kelas/kelas3');
    }
}