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
		$data = array();
		$data['listeObjetById'] = $this->Model->listeObjetById(1);
        $data['content'] = 'page/detail';
		$this->load->view('index',$data);
	}
    
}