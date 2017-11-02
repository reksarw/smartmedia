<?php
	defined('BASEPATH') OR exit ('No direct script access allowed');
	
	class Manage extends CI_COntroller{
		var $table	=	"sites";
		var $user_id;

		function __construct() {
	        parent::__construct();
		     if (!$this->session->userdata('is_logged_in')){
		        redirect('auth/login');
		     }
		     $this->user_id = $this->session->userdata('is_active_cid');
		     $this->siteAddress = "http://%s.smartmedia.com/";
	    }
	    
		public function index()
		{
			$where = array('client_id =' => $this->user_id);
			$data['sites'] = $this->db->get_where($this->table, $where)->result_array();
			$data['total_sites'] = $this->db->get_where($this->table, $where)->num_rows();
			$data['user_account'] = $this->db->get_where("clients_package", $where)->result_array();
			$data['is_exist_account'] = $this->db->get_where("clients_package", $where)->num_rows();
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('manage/index.php', $data);
			$this->load->view('template/footer-member.php');
		}

		public function dashboard()
		{
			$this->load->view('template/header-manage.php');
			$this->load->view('template/navbar-manage.php');
			$this->load->view('manage/dashboard.php');
			$this->load->view('template/footer-manage.php');
		}

		function createsite(){

			if(isset($_POST['submit'])){
				$sitename		= $this->input->post("sitename");
				$siteaddress	= $this->input->post("siteaddress");
				$sitedesc		= $this->input->post("sitedesc");
				$webmail		= $this->input->post("webmail");
				$mail_exist		= $this->db->get_where("site_mails", "address_mail = '".$webmail."'")->result_array();

				$site_exist		= $this->db->get_where("sites", "address_site = '".$siteaddress."'")->result_array();

				if(empty($site_exist)){
					if(empty($mail_exist))
					{
						$sitedata	= array(
								"name_site" => $sitename,
								"address_site" => $siteaddress,
								"description_site" => $sitedesc,
								"client_id"	=> $this->session->userdata("is_active_cid"),
								"date_registered" => date("Y-m-d H:i:s"),
								'status_site' => 1
							);

						if($this->db->insert("sites",$sitedata)){
							redirect(base_url()."./../web-builder");
						}
						else{
							$this->session->set_flashdata("message","Failed to save site! ".$this->db->error());	
							redirect(base_url("manage"));
						}
					}
					else
					{
						$this->session->set_flashdata("message","Alamat email tidak tersedia");	
					redirect(base_url("manage"));
					}
				}
				else
				{
					$this->session->set_flashdata("message","Alamat website tidak tersedia");	
					redirect(base_url("manage"));
				}
				var_dump($this->db->error());
			}

			redirect();
		}

		function deleteSite(){
			$getdata = $this->input->get();
			if ( ! $getdata['addr']) redirect();

			$selectSites = $this->db->get_where('sites', array('address_site' => trim($getdata['addr'])));

			$row = $selectSites->num_rows();

			if ( $row > 0)
			{
				$this->db->where('address_site' , trim($getdata['addr']));
				$this->db->set(array('status_site' => 0));
				$this->db->update('sites');	
			}
			else
			{
				$this->session->set_flashdata("message","Sites tidak ditemukan!");
			}

			redirect('manage');
		}

		function activeSite()
		{
			$getdata = $this->input->get();
			if ( ! $getdata['addr']) redirect();

			$selectSites = $this->db->get_where('sites', array('address_site' => trim($getdata['addr'])));

			$row = $selectSites->num_rows();

			if ( $row > 0)
			{
				$this->db->where('address_site' , trim($getdata['addr']));
				$this->db->set(array('status_site' => 1));
				$this->db->update('sites');	
			}
			else
			{
				$this->session->set_flashdata("message","Sites tidak ditemukan!");
			}

			redirect('manage');
		}

		function permDelete()
		{
			$getdata = $this->input->get();
			if ( ! $getdata['addr']) redirect();

			$selectSites = $this->db->get_where('sites', array('address_site' => trim($getdata['addr'])));

			$row = $selectSites->num_rows();

			if ( $row > 0)
			{
				$this->db->where('address_site' , trim($getdata['addr']));
				$this->db->delete('sites');	
			}
			else
			{
				$this->session->set_flashdata("message","Sites tidak ditemukan!");
			}

			redirect('manage');
		}
	}
