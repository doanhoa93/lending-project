<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->data['parent_menu'] = 'userhome';
    }


	public function index()
	{

        $this->template->auth_render('public/home', $this->data);
		//$this->load->view('public/home', $this->data);
	}
}
