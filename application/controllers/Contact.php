<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 22/09/2018
 * Time: 14:58
 */

class Contact extends Public_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->data['parent_menu'] = 'contact';
    }


    public function index()
    {

        $this->template->auth_render('public/contact', $this->data);
        //$this->load->view('public/home', $this->data);
    }
}
