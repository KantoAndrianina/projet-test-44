<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	
	public function index()
	{
		$this->load->view('page/login');
	}

	public function login()
	{
		$mail = $this->input->post("mail");
		$pass = $this->input->post("pass");
		// var_dump($mail);
		// var_dump($pass);

		$this->load->model('Model');
		// var_dump($this->Model->checkLogin($mail,$pass));

		if($this->Model->checkLogin($mail,$pass))
		{
			$this->session->set_userdata('mail', $mail);
			$_SESSION['mail']=$mail;
			if($this->Model->checkAdmin($mail))
			{
				$url=base_url().'index.php/user/admin';
				redirect($url);
			}else{
				$url=base_url().'index.php/user/index';
				redirect($url);
			}
			
		}
	}
	public function inscri()
	{
		$this->load->view('page/inscription');
	}
	
}
?>