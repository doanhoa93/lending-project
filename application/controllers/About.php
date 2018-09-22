<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 22/09/2018
 * Time: 14:57
 */

class About extends Public_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->data['parent_menu'] = 'about';
    }


    public function index()
    {

        $this->template->auth_render('public/about', $this->data);
        //$this->load->view('public/home', $this->data);
    }
}
