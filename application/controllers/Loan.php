<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 25/11/2018
 * Time: 23:11
 */

class Loan extends Public_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('public/Loans');
        $this->data['parent_menu'] = 'userhome';
    }


    public function index()
    {

        $this->template->auth_render('public/loan-condition');
    }

    public function rules(){
        $tables = $this->config->item('tables', 'ion_auth');
        $this->template->auth_render('public/rules', $this->data);
    }
}
