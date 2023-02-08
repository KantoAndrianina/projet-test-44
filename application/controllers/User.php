<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('Model');
    }
    public function index()
	{
		$data = array();
		$data['listeObjet'] = $this->Model->listeObjet();
        $data['content'] = 'page/content';
		$this->load->view('index',$data);
	}
    public function detail()
	{
		$idObj=$_GET['id'];
		// $mail=$_SESSION['mail'];
		$data = array();
		$data['listeObjetById'] = $this->Model->listeObjetById($idObj);
		// $data['listeObjetUser'] = $this->Model->listeObjetUser($mail);
        $data['content'] = 'page/detail';
		$this->load->view('index',$data);
	}
	public function admin()
	{
		$data = array();
		$data['getCategorie'] = $this->Model->getCategorie();
		$data['countUser'] = $this->Model->countUser();
        $data['content'] = 'page/admin';
		$this->load->view('index',$data);
	}
    
}