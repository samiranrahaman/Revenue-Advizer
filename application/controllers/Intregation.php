<?php
/*
  Description : Controller for Intregation
  Author      : samiran rahaman
  Date        : 16/02/2017
*/
class Intregation extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		 $this->load->library('session');
		//$this->load->model('Intregation_model');

		if(!$this->session->userdata('user_info'))
		{
		   redirect('Login');
		} 			
	}
	public function index()
    {   
      $data['user_info'] =$this->session->userdata('user_info');
      $this->load->view('common_header');
      $this->load->view('common_sidemenu',$data);
     // $this->load->view('Itregation/Main');
	 $this->load->view('Intregation/Main',$data);
      $this->load->view('common_footer');        	
    }
    
 }