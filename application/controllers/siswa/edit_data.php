<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Edit_data extends CI_Controller
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
    

    $this->form_validation->set_rules('name','Name','trim|required');
    $this->form_validation->set_rules('nisn','Nisn','trim|required');
    $this->form_validation->set_rules('tempat_lahir','Tempat_lahir','trim|required');
    $this->form_validation->set_rules('tanggal_lahir','Tanggal_lahir','trim|required');
    $this->form_validation->set_rules('alamat','Alamat','trim|required');
    $this->form_validation->set_rules('rtrw','Rtrw','trim|required');
    $this->form_validation->set_rules('kel','Kel','trim|required');
    $this->form_validation->set_rules('kec','Kec','trim|required');
    $this->form_validation->set_rules('kab','Kab','trim|required');
    $this->form_validation->set_rules('prov','Prov','trim|required');
    $this->form_validation->set_rules('kode_p','Kode_p','trim|required');
    $this->form_validation->set_rules('hp','Hp','trim|required');
    $this->form_validation->set_rules('kelamin','Kelamin','trim|required');
    $this->form_validation->set_rules('agama','Agama','trim|required');
    
    if($this->form_validation->run() == FALSE)
    {

        $this->load->view('templates_siswa/header');
        $this->load->view('templates_siswa/sidebar',$data);
        $this->load->view('siswa/edit_data',$data);
        $this->load->view('templates_siswa/footer');
    }else {
      $name = $this->input->post('name');
      $email = $this->input->post('email');
      $nisn = $this->input->post('nisn');
      $tempat_lahir = $this->input->post('tempat_lahir');
      $tanggal_lahir = $this->input->post('tanggal_lahir');
      $alamat = $this->input->post('alamat');
      $rtrw = $this->input->post('rtrw');
      $kel = $this->input->post('kel');
      $kec = $this->input->post('kec');
      $kab = $this->input->post('kab');
      $prov = $this->input->post('prov');
      $kode_p = $this->input->post('kode_p');
      $hp = $this->input->post('hp');
      $kelamin = $this->input->post('kelamin');
      $agama = $this->input->post('agama');

      $upload_image = $_FILES['image']['name'];
      if($upload_image)
      {
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']     = '2048';
        $config['upload_path'] = './assets/img/siswa/';
        

        $this->load->library('upload', $config);

        if($this->upload->do_upload('image'))
        {
          
          $old_image = $data['data_siswa']['image'];
          if($old_image != 'default.jpg')
          {
            unlink(FCPATH . 'assets/img/siswa/' . $old_image);
          }
          $new_image = $this->upload->data('file_name');
          $this->db->set('image', $new_image);
        }else
        {
          echo $this->upload->display_errors();
        }
      }


      $this->db->set('name', $name);
      $this->db->set('email', $email);
      $this->db->set('nisn', $nisn);
      $this->db->set('tempat_lahir', $tempat_lahir);
      $this->db->set('tanggal_lahir', $tanggal_lahir);
      $this->db->set('alamat', $alamat);
      $this->db->set('rtrw', $rtrw);
      $this->db->set('kel', $kel);
      $this->db->set('kec', $kec);
      $this->db->set('kab', $kab);
      $this->db->set('prov', $prov);
      $this->db->set('kode_p', $kode_p);
      $this->db->set('hp', $hp);
      $this->db->set('kelamin', $kelamin);
      $this->db->set('agama', $agama);
      $this->db->where('email', $email);
      $this->db->update('data_siswa');

      

      $name = $this->input->post('name');
      $email = $this->input->post('email');
      $nisn = $this->input->post('nisn');

      $upload_image = $_FILES['image']['name'];
      if($upload_image)
      {
        $config['upload_path'] = './assets/img/siswa/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']     = '2048';
        

        $this->load->library('upload', $config);

        if($this->upload->do_upload('image'))
        {
          $old_image = $data['user']['image'];
          if($old_image != 'default.jpg')
          {
            unlink(FCPATH . 'assets/img/siswa/' . $old_image);
          }
          $new_image = $this->upload->data('file_name');
          $this->db->set('image', $new_image);
        }else
        {
          echo $this->upload->display_errors();
        }
      }

      $this->db->set('username', $name);
      $this->db->where('email', $email);
      $this->db->update('user');

      $this->session->set_flashdata('pesan',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data siswa Berhasil di Ubah!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          </div>');
            redirect('siswa/profile');
    }
  }
} 