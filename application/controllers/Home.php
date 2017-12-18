<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->site_dir = FCPATH.'site-member/';
	}

	public function index(){
		//$this->load->view('template/header.php');
		$this->load->view('home/index.php');
		//$this->load->view('template/footer.php');
	}

	// public function availablesite($siteparam)
	// {
	// 	$uri = trim(strtolower($siteparam));

	// 	switch( $uri)
	// 	{
	// 		default:
	// 			$sitesAvailable = null;
	// 			$selectSites = $this->db->get('sites');	

	// 			foreach( $selectSites->result() as $row)
	// 			{
	// 				$sitesAvailable[] = $row->address_site;
	// 			}

	// 			if ( ! in_array($uri, $sitesAvailable))
	// 			{
	// 				$this->load->view('home/index');
	// 			}
	// 			else
	// 			{
	// 				self::viewsite($uri);
	// 			}
	// 		break;
	// 	}
	// }

	public function viewsite($site = '' , $fileRequest = '')
	{
		$sitesAvailable = null;
		$selectSites = $this->db->get('sites');	

		if ( $selectSites->num_rows() > 0)
		{
			foreach( $selectSites->result() as $row)
			{
				$sitesAvailable[] = $row->address_site;
			}

			if ( ! in_array($site, $sitesAvailable))
			{
				echo 'Oops website not found :(';
			}
			else
			{
				$this->site_dir .= $site.'/';

				$siteFiles = $this->site_dir;

				$indexFile = $this->site_dir.'index.html';

				if ( $fileRequest == null && file_exists($indexFile))
				{
					include $indexFile;
				}
				else
				{
					$dirs = null;

					/* All data in Site Files */
					foreach( scandir($siteFiles) as $fileName)
					{
						if ( ! str_replace( array('..','.'), '' , $fileName))
							continue;

						$dirs[] = $fileName;
					}

					if ( $fileRequest != '')
					{
						$listdir = null;

						foreach($dirs as $dir)
						{
							$replaceHtml = str_replace('.html', '', $dir);
							$listdir[] = $replaceHtml;
						}

						if ( ! in_array($fileRequest, $listdir))
						{
							echo 'File tidak ditemukan :)';
						}
						else
						{
							$fileRequest .= '.html';
							include $this->site_dir.$fileRequest;
						}
					}
					else
					{
						$data['site_dir']	= $this->site_dir;
						$data['directory'] 	= $dirs;
						$data['mysite']		= $site;
						$this->load->view('builder/site_dir', $data);
					}
				}
			}
		}
		else
		{
			echo 'Oops, website not found!';
		}
	}

	/**
	 * User sudah login?
	 * @return boolean
	 */
	private function authUser()
	{
		return $this->session->userdata('is_logged_in') 
			? true : false;
	}
}
