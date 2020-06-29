<?php

class Guru extends CI_Controller
{
    public function index()
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(  'username' => $data->username, 
                        'role_id' => $data->role_id,
                    );
        $data['data_guru'] = $this->guru_model->tampil_data('data_guru')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('administrator/guru',$data);
        $this->load->view('templates_administrator/footer');
    }
    public function detail($id)
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(  'username' => $data->username, 
                        'role_id' => $data->role_id,
                    );
        $data['data_guru'] = $this->guru_model->tampil_data('data_guru')->result();
        $data['detail'] = $this->guru_model->ambil_id_guru($id);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('administrator/guru_detail',$data);
        $this->load->view('templates_administrator/footer');
    }
    public function tambah_guru()
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(  'username' => $data->username, 
                        'role_id' => $data->role_id,
                    );
        $data['data_guru'] = $this->guru_model->tampil_data('data_guru')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('administrator/guru_form',$data);
        $this->load->view('templates_administrator/footer');
    }
    public function tambah_guru_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run()== FALSE)
        {
            $this->tambah_guru();
        }else 
        {
            $name           = $this->input->post('name');
            $password       = $this->input->post('password');
            $email          = $this->input->post('email');
            $nip            = $this->input->post('nip');
            $is_active      = $this->input->post('is_active');
            $role_id        = $this->input->post('role_id');
            $image          = $_FILES['image'];
            if ($image=''){}else
            {
                $config['upload_path'] = './assets/img/guru';
                $config['allowed_types'] = 'jpg|png|gif|tiff';

                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('image'))
                {
                    echo "Gagal Upload"; die();
                }else
                {
                    $image=$this->upload->data('file_name');
                }
            }
            $data = array(
                'name'          => $name,
                'password'      => $password,
                'email'         => $email,
                'nip'           => $nip,
                'image'         => $image
            );

            $this->guru_model->insert_data($data,'data_guru');
            $data = array(
                'username'      => $name,
                'password'      => MD5($password),
                'email'         => $email,
                'is_active'     => $is_active,
                'role_id'       => $role_id,
                'image'         => $image
            );
            $this->user_model->insert_data($data,'user');

            $this->session->set_flashdata('pesan',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data guru Berhasil di Tambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          </div>');
            redirect('administrator/guru');
        }
    }
    public function _rules()
    {
        $this->form_validation->set_rules('name','Name','required',                     ['required'=> 'Nama wajib diisi']);
        $this->form_validation->set_rules('password','Password','required',             ['required'=> 'Password wajib diisi']);
        $this->form_validation->set_rules('email','Email','required',                   ['required'=> 'Email wajib diisi']);
        $this->form_validation->set_rules('nip','Nip','required',                       ['required'=> 'NIP wajib diisi']);
        $this->form_validation->set_rules('is_active','Is_active','required',           ['required'=> 'Aktif wajib diisi']);
        $this->form_validation->set_rules('role_id','Role_id','required',               ['required'=> 'User Role wajib diisi']);
    }
    public function update($id)
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(  'username' => $data->username, 
                        'role_id' => $data->role_id,
                    );
        $where = array('id_guru' => $id);
        $data['data_guru']=$this->guru_model->edit_data($where,'data_guru')->result();
        $data['detail'] = $this->guru_model->ambil_id_guru($id);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('administrator/guru_update',$data);
        $this->load->view('templates_administrator/footer');
    }
    public function update_aksi()
    {
        $id             = $this->input->post('id_guru');
        $name           = $this->input->post('name');
        $email          = $this->input->post('email');
        $password       = $this->input->post('password');
        $nip            = $this->input->post('nip');
        $kelamin        = $this->input->post('kelamin');
        $tempat_lahir   = $this->input->post('tempat_lahir');
        $tanggal_lahir  = $this->input->post('tanggal_lahir');
        $agama          = $this->input->post('agama');
        $alamat         = $this->input->post('alamat');
        $mengajar       = $this->input->post('mengajar');
        $hp             = $this->input->post('hp');
        $rtrw           = $this->input->post('rtrw');
        $kel            = $this->input->post('kel');
        $kec            = $this->input->post('kec');
        $kab            = $this->input->post('kab');
        $prov           = $this->input->post('prov');
        $kode_p         = $this->input->post('kode_p');
        $wali_kelas     = $this->input->post('wali_kelas');
        $image          = $_FILES['userfile']['name'];
        if ($image)
            {
                $config['upload_path'] = './assets/img/guru';
                $config['allowed_types'] = 'jpg|png|gif|tiff';

                $this->load->library('upload',$config);

                if($this->upload->do_upload('userfile'))
                {
                    $userfile = $this->upload->data('file_name');
                    $this->db->set('image', $userfile);
                }else
                {
                    echo "Gagal Upload"; die();
                }
            }
            $data = array(
                'name'          => $name,
                'email'         => $email,
                'password'      => $password,
                'nip'           => $nip,
                'kelamin'       => $kelamin,
                'tempat_lahir'  => $tempat_lahir,
                'tanggal_lahir' => $tanggal_lahir,
                'agama'         => $agama,
                'alamat'        => $alamat,
                'mengajar'      => $mengajar, 
                'hp'            => $hp,
                'rtrw'          => $rtrw,
                'kel'           => $kel,
                'kec'           => $kec,
                'kab'           => $kab,
                'prov'          => $prov,
                'kode_p'        => $kode_p,
                'wali_kelas'    => $wali_kelas
            );
            $where = array(
                'id_guru' => $id
            );

            $this->guru_model->update_data($where,$data,'data_guru');
            $this->session->set_flashdata('pesan',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data guru Berhasil di Ubah!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          </div>');
            redirect('administrator/guru');
        
    }
    public function delete($id)
    {
        $where = array('id_guru' => $id);
        $this->guru_model->hapus_data($where,'data_guru');
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data guru Berhasil diHapus!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
      </div>');
        redirect('administrator/guru');
    }

}