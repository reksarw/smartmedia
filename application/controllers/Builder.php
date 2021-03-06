<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Builder extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->previewPath = "assets/builder/elements/";
	}
	public function index()
	{
		$getdata = $this->input->get();
		if ( ! self::authUser() || ! isset($getdata['site'])) redirect();
		
		$data['builderAssets'] = base_url().'assets/builder/';
		$data['site'] = $getdata['site'];
		$this->load->view('builder/home', $data);
	}
	
	/* Halaman */
	public function halaman($action)
	{
		if ( ! self::authUser()) redirect();

		$getdata = $this->input->get();

		switch ( trim($action))
		{
			case 'preview':
				$fileName = self::randomString(20);

				$path = FCPATH.$this->previewPath."preview_".$fileName.".html";
	
				$previewFile = fopen($path, "w");
				
				fwrite($previewFile, stripcslashes($_POST['page']));
				
				fclose($previewFile);
				
				redirect('web-builder/result?openid='.$fileName);
			break;

			case 'savefile':
				if ( ! $getdata['site'] || ! $getdata['content']) redirect();

				$myFile = FCPATH."site-member/{$getdata['site']}/generate.json";
				$fh = fopen($myFile, 'w') or die("can't open file");
				$stringData = $getdata["content"];
				fwrite($fh, $stringData);
				fclose($fh);
			break;

			case 'generatefile':
				if ( ! $getdata['site']) redirect();

				$generatefile = FCPATH.'site-member/'.$getdata['site'];

				if ( file_exists($generatefile.'/generate.json'))
				{
					// day 2,load json file
					$json = file_get_contents($generatefile.'/generate.json');
				}
				
				echo file_exists($generatefile.'/generate.json') ? $json: 'gada';
			break;

			case 'result':
				if ( ! $getdata['openid']) redirect();

				$fileLoad = 'preview_'.$getdata['openid'].'.html';
				$filePath = FCPATH.$this->previewPath.$fileLoad;

				if ( ! file_exists($filePath)) redirect();

				$data['loadedFile'] = base_url().$this->previewPath.$fileLoad;
				$this->load->view('builder/preview', $data);
			break;
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

	/**
	 * Generator untuk Random String
	 * 
	 * @param  integer $length Defaultnya adalah 10
	 * @return string
	 */
	private function randomString($length = 10)
	{
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}

}

/* End of file Builder.php */
/* Location: ./application/controllers/Builder.php */