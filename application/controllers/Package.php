<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent::__construct();
		
		
	}

	public function package_list()
	{
		$data['main_content'] = 'package/package-list.php';
		$this->load->view('includes/template', $data);
	}
	public function queen_of_the_hills()
	{
		$data['main_content'] = 'package/queen-of-the-hills.php';
		$this->load->view('includes/template', $data);
	}
	public function green_dooars()
	{
		$data['main_content'] = 'package/green-dooars.php';
		$this->load->view('includes/template', $data);
	}
	public function heaven_on_hills()
	{
		$data['main_content'] = 'package/heaven-on-hills.php';
		$this->load->view('includes/template', $data);
	}
	public function himalayan_tranquility()
	{
		$data['main_content'] = 'package/himalayan-tranquility.php';
		$this->load->view('includes/template', $data);
	}
	public function lost_kingdom()
	{
		$data['main_content'] = 'package/lost-kingdom.php';
		$this->load->view('includes/template', $data);
	}
	public function spendour_himalaya()
	{
		$data['main_content'] = 'package/spendour-himalaya.php';
		$this->load->view('includes/template', $data);
	}
	public function kerala_package()
	{
		$data['main_content'] = 'package/kerala-package.php';
		$this->load->view('includes/template', $data);
	}
	public function leh_package()
	{
		$data['main_content'] = 'package/leh-package.php';
		$this->load->view('includes/template', $data);
	}
	
}
