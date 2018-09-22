<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 22/09/2018
 * Time: 16:49
 */

class Register extends Public_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->data['parent_menu'] = 'register';
    }


    public function index()
    {

        $this->template->auth_render('public/register', $this->data);
        //$this->load->view('public/home', $this->data);
    }
}