<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Sites extends CI_Controller {
		var $table	= "sites";

		public function __construct()
		{
			parent::__construct();

			$this->userType = array(
                1 => 'Administrator',
                2 => 'Staff',
                3 => 'Client'
            );
		}

		public function index(){
			$this->db->select("*");
			$this->db->from($this->table);
			$this->db->join("clients", "client_id = id_client");
			$data['sites']	= $this->db->get()->result_array();

			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('sites/index.php', $data);
			$this->load->view('template/footer-admin.php');
		}
		
		public function detail($id)
		{
			if ( ! $id) redirect('sites');

			$data['site'] = $this->db->get_where('sites', array('id_site' => $id));

			if ( $data['site']->num_rows()) 
			{
				$row = $data['site']->result()[0];
				$data['client'] = $this->db->select("*")->from('clients')
					->join("app_users as u" , 'u.id_users = clients.user_id')
					->where('clients.id_client = "'.$row->client_id.'"')
					->get()->result()[0];
			}
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('sites/detail.php', $data);
			$this->load->view('template/footer-admin.php');
		}
		public function add(){
			// add page	
		}
		public function update(){
			// update page
		}
		public function delete(){
			// delete
		}

	}
