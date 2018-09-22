<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messages extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();

        /* Load :: Common */
        $this->lang->load('admin/messages');
        $this->load->model('admin/message_model');
        /* Title Page :: Common */
        $this->page_title->push(lang('menu_messages'));
        $this->data['pagetitle'] = $this->page_title->show();

        /* Breadcrumbs :: Common */
        $this->breadcrumbs->unshift(1, lang('menu_messages'), 'admin/messages');
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

            /* Get messages */
            $this->data['messages'] = $this->message_model->find(10,0);
            $this->template->admin_render('admin/messages/index', $this->data);
        }


	}

}
