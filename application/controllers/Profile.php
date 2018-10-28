<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 30/10/2018
 * Time: 23:14
 */

class Profile extends Public_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->data['parent_menu'] = 'userhome';
        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');
    }


    public function index()
    {

        $this->template->auth_render('public/profile', $this->data);
        //$this->load->view('public/home', $this->data);
    }
}