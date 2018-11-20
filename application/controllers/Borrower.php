<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 19/11/2018
 * Time: 22:31
 */

class Borrower extends Public_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->data['parent_menu'] = 'userhome';
    }


    public function index()
    {

        $this->template->auth_render('public/loan', $this->data);
        //$this->load->view('public/home', $this->data);
    }

    public function listLoan()
    {

        $this->template->auth_render('public/loan/list', $this->data);
        //$this->load->view('public/home', $this->data);
    }
}
