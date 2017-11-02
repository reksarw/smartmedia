<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Users extends CI_Controller {

		public function __construct() {
	        parent::__construct();
		     if (!$this->session->userdata('admin_logged_in')){
		        redirect('auth/login');
		     }
		    $this->userType = array(
                1 => 'Administrator',
                2 => 'Staff',
                3 => 'Client'
            );
		}
		
		public function index(){
			$data['users']	= $this->db->query("SELECT * FROM app_users")->result_array();

			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('user/user.php', $data);
			$this->load->view('template/footer-admin.php');
		}
		public function add(){
			//page add
		}
		public function update(){
			//page update
		}
		public function deactivate($id): int
		{
			//action delete
			if ( ! $id) redirect();

			$selectUser = $this->db->get_where('app_users', array('id_users' => $id))->result()[0];

			if ( $id == $this->session->userdata('admin_active_id'))
			{
				$this->session->set_flashdata('message','<div class="alert alert-warning">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Tidak bisa menghapus akun sendiri!</strong>
                </div>');
			}
			else
			{
				$this->db->delete('app_users' , array('id_users' => $id));
				if($this->db->error()){
					$this->session->set_flashdata('message','<div class="alert alert-success">
	                    <button class="close" data-dismiss="alert">×</button>
	                    <strong>Berhasil menghapus akun!</strong>
	                </div>');
				}else{
					$this->session->set_flashdata('message','<div class="alert alert-danger">
	                    <button class="close" data-dismiss="alert">×</button>
	                    <strong>Gagal Update</strong>'.$this->db->_error_message().
	                    '</div>');
				}
			}
			redirect("users/");
		}

		public function reset_password($id): int
		{
			$reset_pass = array("password" => md5("password"));
			$this->db->where('id_users', $id);
			$this->db->update("app_users",$reset_pass);

			if($this->db->error()){
				$this->session->set_flashdata('message','<div class="alert alert-success">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Reset Password Berhasil!</strong>
                </div>');
			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Gagal Update</strong>'.$this->db->_error_message().
                    '</div>');
			}
			redirect("users/index");
		}
		public function level(){

		}
		public function level_add(){

		}
		public function level_update(){

		}
		public function level_delete(){

		}
	}
