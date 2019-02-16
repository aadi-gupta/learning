<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

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

	public function book_email()
	{
		$this->load->view('includes/header.php');
		$this->load->view('includes/nav_menu.php');
		$this->load->view('booking.php');
		$this->load->view('includes/footer.php');

	}

	public function email_engine()
	{
		header("Access-Control-Allow-Origin: *");
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $number = $_POST['number'];
    $fromdate = $_POST['fromdate']; 
    $todate = $_POST['todate']; 
    $selectcity = $_POST['selectcity'];  
    $package = $_POST['package']; 
    $noofadults = $_POST['noofadults']; 
    $noofchildrens = $_POST['noofchildrens']; 
    $minprice = $_POST['minprice']; 
    $maxprice = $_POST['maxprice']; 

   
         $headers = "MIME-Version: 1.0" . "\r\n";
         $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        $body = "<b>Please find details below :- </b>"."<br/>"."<br/>"."Name :- ".$name."<br/>"."Email :- ".$email."<br/>"."Number :-  ".$number."<br/>"."City :- ".$selectcity."<br/>"."Package :- ".$package."<br/>"."Adults :- ".$noofadults."<br/>"."Childs :- ".$noofchildrens."<br/>"."Min Price :- ".$minprice."<br/>"."Max Price :- ".$maxprice."<br/>"."From Date :- ".$fromdate."<br/>"."To date :- ".$todate."<br/>";
        if($name != '' && $email != '' && $number != ''){ 
        echo mail('aditya.maiet@gmail.com',"New Query Leads",$body,$headers);
       

    }
	}

	
} ?>
