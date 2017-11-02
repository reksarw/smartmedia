<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Auth extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
		}
		public function index(){
			redirect("auth/login");
		}
		public function login(){
			if ($this->session->userdata('is_logged_in')){
	            redirect('dashboard');
	        }

	        if(isset($_POST['submit'])){
	            $un     = $this->input->post('username');
	            $pw     = md5($this->input->post('password'));
	            $login  =  $this->db->get_where('app_users',array('username'=>$un,'password'=>  $pw));
	            if($login->num_rows()>0)
	            {
	                $r      = $login->row_array();
	                if($r['type'] == '3'){	
	                	$clients  =  $this->db->get_where('clients',array('user_id' =>  $r['id_users']))->result_array();
	                	foreach($clients as $client){
	                		$client_id = $client['id_client'];
	                	}

	                	$data   = array('is_active_user' => $r['username'],
	                            'is_active_name' => $r['fullname'],
	                            'is_active_id' => $r['id_users'],
	                            'is_active_cid' => $client_id,
	                            'is_active_time' => date("H:i"),
	                            'is_logged_in' => 'TRUE');

		                $this->session->set_userdata($data);
		                redirect('dashboard');
	                }
	                else{
	                	$this->session->set_flashdata("message","You don't have privileges to access this feature");	
	                }
	                
	            }else{
	                $this->session->set_flashdata("message","Wrong username or password");	
	            }        
	        }
			$this->load->view('auth/login.php');
		}
		public function register(){
			$this->load->view('template/header.php');
			$this->load->view('about/register.php');
			$this->load->view('template/footer.php');
		}
		public function registersuccess(){
			$this->load->view('template/header.php');
			$this->load->view('about/register-success.php');
			$this->load->view('template/footer.php');
		}
		public function verification(){
			$this->load->view('template/header.php');
			$this->load->view('about/verification-success.php');
			$this->load->view('template/footer.php');
		}
		public function requestreset(){
			$this->load->view('auth/lupa-password.php');
		}

	    function logout()
	    {
	        $this->session->sess_destroy();
	        $data   = array('is_active_user' => '',
	                            'is_active_name' => '',
	                            'is_active_time' => '',
	                            'is_logged_in' => 'FALSE');
	        $this->session->unset_userdata($data);
	        $this->session->set_flashdata("message","You're logged out");	
	        $this->load->view('auth/login.php');
	    }

	    public function do_action()
	    {
	    	$getdata 	= $this->input->get();
	    	$postdata 	= $this->input->post();

	    	if ( ! $getdata['method']) redirect();
	    	if ( ! $postdata) redirect('auth/login','refresh');

	    	$method = trim($getdata['method']);
	    	$method = strtolower($getdata['method']);

	    	switch ( $method)
	    	{
	    		case 'resetpass':
	    			$email = $postdata['email'];

	    			if ( ! self::isValidEmail($email))
	    			{
	    				$this->session->set_flashdata("message","Email tidak valid!");
	    			}
	    			else
	    			{
	    				$selectUser = $this->db->get_where('app_users', array('email' => $email));

	    				$row = $selectUser->num_rows();

	    				if ( $row > 0)
	    				{
	    					// self::sendEmail($email);
	    					$this->session->set_flashdata("message","Password baru berhasil di kirim melalui email");
	    				}
	    				else
	    				{
	    					$this->session->set_flashdata("message","Email tidak ditemukan");
	    				}
	    			}

	    			redirect('auth/requestreset');
	    		break;

	    		default:
	    			redirect();
	    		break;
	    	}
	    }

	    private function isValidEmail($email) {
		    $pattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';

		    return (bool) preg_match($pattern, $email);
		}

		public function testEmail()
		{
			self::sendEmail("reksarw@gmail.com");
		}

		private function sendEmail($to)
		{
			$emailConfig = array(
					'protocol' => 'smtp',
				    'smtp_host' => 'mail.illiyin.lam2x.com',
				    'smtp_port' => 587,
				    'smtp_user' => 'no-reply@illiyin.lam2x.com',
				    'smtp_pass' => 'sQI@s7@46WO#',
				    'mailtype'  => 'html', 
				    'charset'   => 'iso-8859-1'
				);

			// mail.illiyin.lam2x.com
			// IMAP Port: 143 POP3 Port: 110 
			// mail.illiyin.lam2x.com
			// SMTP Port: 587 

			$this->load->library('email', $emailConfig);
			
			$this->email->from('noreply@lliyin.lam2x.com', 'Smart Media');
			$this->email->to($to);

			/* Update the table */
			$newPassword = self::generatePass();

			$dataUpdate = array(
					'password' => md5($newPassword)
				);

			$this->db->set($dataUpdate);
			$this->db->where('email', $to);
			$this->db->update('app_users');
			/* Update the table */
			
			/* Email Template */
			$content['nama'] 				= "Reksa Rangga"; // change here
			$content['new_password']		= $newPassword;
			$content['url']					= base_url()."auth/login"; 
			/* Email Template */

			$this->email->subject('Permintaan ubah password');
			$this->email->message($this->load->view('auth/email-template', $content, true));

			$this->email->send();
		}

		// public function test()
		// {
		// 	$content['nama'] 				= "Reksa Rangga";
		// 	$content['new_password']		= self::generatePass();
		// 	$content['url']					= base_url()."auth/login"; 
		// 	$this->load->view('auth/email-template', $content);	
		// }

		private function generatePass($length = 10) {
	        $possible = "0123456789abcdfghjkmnpqrstvwxyzABCDEFGHIJKLMNOPQRESTUVWXYZ"; // allowed chars in the password
	         if ($length == "" OR !is_numeric($length)){
	          $length = 8;
	         }

	         $i = 0; 
	         $password = ""; 
	         while ($i < $length) { 
	          $char = substr($possible, rand(0, strlen($possible)-1), 1);
	          if (!strstr($password, $char)) { 
	           $password .= $char;
	           $i++;
	           }
	          }
	         return $password;
	    }
	}
