<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->model('admin_model');
		
    }
    
	public function index(){
		$username = $this->session->userdata('username');
		$data['admin']=$this->admin_model->get_admin($username);
		// $data['c_warung']=$this->admin_model->count_warung();
        $this->load->view('admin/header',$data);
        $this->load->view('admin/selamat_datang');
		$this->load->view('admin/footer');
		
    }

    public function data_user(){
		$username = $this->session->userdata('usernname');
        $data['admin']=$this->admin_model->get_admin($username);
        $data['users']=$this->admin_model->get_user();
		// $data['c_warung']=$this->admin_model->count_warung();
        $this->load->view('admin/header',$data);
        $this->load->view('admin/data_user',$data);
		$this->load->view('admin/footer');
		
    }

    public function tambah_user(){
		$username = $this->session->userdata('usernname');
        $data['admin']=$this->admin_model->get_admin($username);
        $this->load->view('admin/header',$data);
        $this->load->view('admin/tambah_user',$data);
		$this->load->view('admin/footer');
		
    }

    public function insert_user(){
        $nama	= $this->input->post('nama');
        $jk = $this->input->post('jk');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        $data = array('nama' => $nama,
                        'jenis_kelamin' => $jk,
                        'username' => $username,
                        'password'=>$password,
                        );
		$this->admin_model->insert_user($data);
		redirect('admin/data_user');
    }
    public function edit_user($id){
		$username = $this->session->userdata('usernname');
        $data['admin']=$this->admin_model->get_admin($username);
        $data['user']=$this->admin_model->get_one_user($id);

        $this->load->view('admin/header',$data);
        $this->load->view('admin/edit_user',$data);
		$this->load->view('admin/footer');
		
    }

    public function edit_user_exec($id){
        $nama	= $this->input->post('nama');
        $jk = $this->input->post('jk');
        $username = $this->input->post('username');
        
        $data = array('nama' => $nama,
                        'jenis_kelamin' => $jk,
                        'username' => $username,
                        );
		$this->admin_model->edit_user($id,$data);
		redirect('admin/data_user');
    }
    public function delete_user($id){
		$this->admin_model->delete_user($id);
		redirect('admin/data_user');
    }
    
	public function login_proses(){
		$username = $this->input->post('username');
		$password = url_title($this->input->post('password'), 'dash', TRUE);
		$data = $this->admin_model->get_login($username , $password);
	}
	
}
