<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Career extends CI_Controller {

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
		
		$this->load->model('Users');
		$this->load->model('Careers');
	}

	public function index()
	{
		
		$this->load->view('includes/header.php');
		
		$this->load->view('includes/nav_menu.php');
		$this->load->view('career.php');
		$this->load->view('includes/footer.php');

	}

	public function career_resume()
	{

		$name = $_POST['name'];
		$number = $_POST['number'];
		$email = $_POST['email'];
		$currentctc = $_POST['currentctc'];
		$expectedctc = $_POST['expectedctc'];
		$qualifications = $_POST['qualifications'];
		$designation = $_POST['designation'];
		$industry = $_POST['industry'];
		$address = $_POST['address'];
		$location = $_POST['location'];
	
		$data = array("name"=>"$name","number"=>"$number","email"=>"$email","currentctc"=>"$currentctc","expectedctc"=>"$expectedctc","qualifications"=>"$qualifications","designation"=>"$designation","industry"=>"$industry","address"=>"$address","location"=>"$location");

		$this->Careers->insert_info($data);
	}
	
} ?>
