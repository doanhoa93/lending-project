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

        $this->lang->load('admin/groups');
        $this->load->model('public/Users');
        $this->data['parent_menu'] = 'register';
    }

    public function index()
    {
        $tables = $this->config->item('tables', 'ion_auth');
        $this->data['message'] = '';
        $this->template->auth_render('public/register', $this->data);
    }

    public function process(){
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $tables = $this->config->item('tables', 'ion_auth');

        $this->form_validation->set_rules('first_name', 'first name', 'required');
        $this->form_validation->set_rules('last_name', 'last name', 'required');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique['.$tables['users'].'.email]');
        $this->form_validation->set_rules('phone', 'phone', 'required');
        $this->form_validation->set_rules('password', 'password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
        $this->form_validation->set_rules('password_confirm', 'password confirm', 'required');
        $this->form_validation->set_rules('usertype', 'usertype');

        if ($this->form_validation->run() == TRUE)
        {
            $username = strtolower($this->input->post('first_name')) . ' ' . strtolower($this->input->post('last_name'));
            $email    = strtolower($this->input->post('email'));
            $password = $this->input->post('password');
            $additional_data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name'  => $this->input->post('last_name'),
                'email'  => $this->input->post('email'),
                'phone'      => $this->input->post('phone'),
                'password'  => $this->input->post('password'),
                'usertype'   => $this->input->post('usertype'),
            );
        }

        if ($this->form_validation->run() == TRUE && $this->ion_auth->register($username, $password, $email, $additional_data))
        {
            $this->data['message'] = message_box('Register success.','success');
            $this->template->auth_render('public/register', $this->data);
        } else {
            $this->data['message'] = message_box('Register error.','error');
            $this->data['first_name'] = array(
                'name' => 'first_name',
                'id' => 'first_name',
                'type' => 'text',
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('first_name'),
            );
            $this->data['last_name'] = array(
                'name' => 'last_name',
                'id' => 'last_name',
                'type' => 'text',
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('last_name'),
            );
            $this->data['email'] = array(
                'name' => 'email',
                'id' => 'email',
                'type' => 'email',
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('email'),
            );
            $this->data['company'] = array(
                'name' => 'company',
                'id' => 'company',
                'type' => 'text',
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('company'),
            );
            $this->data['phone'] = array(
                'name' => 'phone',
                'id' => 'phone',
                'type' => 'tel',
                'pattern' => '^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$',
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('phone'),
            );
            $this->data['password'] = array(
                'name' => 'password',
                'id' => 'password',
                'type' => 'password',
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('password'),
            );
            $this->data['password_confirm'] = array(
                'name' => 'password_confirm',
                'id' => 'password_confirm',
                'type' => 'password',
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('password_confirm'),
            );
            $this->data['usertype'] = array(
                'name' => 'usertype',
                'id' => 'invest',
                'type' => 'checkbox',
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('usertype'),
            );
            $this->template->auth_render('public/register', $this->data);
        }
    }
}