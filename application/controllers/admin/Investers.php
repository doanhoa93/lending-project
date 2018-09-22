<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 26/10/2018
 * Time: 23:30
 */

class Investers  extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();

        /* Load :: Common */
        $this->load->helper('number');

        $this->load->model('admin/user_model');

        $this->lang->load('admin/investers');
        /* Title Page :: Common */
        $this->page_title->push(lang('menu_investers'));
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
            $this->data['users'] = $this->user_model->find_investers(10,0);
            $this->template->admin_render('admin/investers/index', $this->data);
        }
    }

}