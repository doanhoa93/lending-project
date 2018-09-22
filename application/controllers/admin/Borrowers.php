<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 25/10/2018
 * Time: 22:51
 */

class Borrowers extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();

        /* Load :: Common */
        $this->load->helper('number');

        $this->load->model('admin/user_model');

        $this->lang->load('admin/borrowers');
        /* Title Page :: Common */
        $this->page_title->push(lang('menu_borrowers'));
        $this->data['pagetitle'] = $this->page_title->show();

        /* Breadcrumbs :: Common */
        $this->breadcrumbs->unshift(1, lang('menu_users'), 'admin/users');
    }

    public function index()
    {
        if ( ! $this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin())
        {
            redirect('auth/login', 'refresh');
        }
        else
        {
            /* Breadcrumbs */
            $this->data['breadcrumb'] = $this->breadcrumbs->show();

            /* Get all Borrowers */
            $this->data['users'] = $this->user_model->find_borrowers(10,0);
            //echo json_encode($count);
            $this->template->admin_render('admin/borrowers/index', $this->data);
        }
    }

}