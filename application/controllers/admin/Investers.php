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
        $this->lang->load('admin/users');
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


    public function edit($id)
    {
        $id = (int) $id;

        if ( ! $this->ion_auth->logged_in() OR ( ! $this->ion_auth->is_admin() && ! ($this->ion_auth->user()->row()->id == $id)))
        {
            redirect('auth', 'refresh');
        }

        /* Breadcrumbs */
        $this->breadcrumbs->unshift(2, lang('menu_users_edit'), 'admin/users/edit');
        $this->data['breadcrumb'] = $this->breadcrumbs->show();

        /* Data */
        $user          = $this->ion_auth->user($id)->row();
        $groups        = $this->ion_auth->groups()->result_array();
        $currentGroups = $this->ion_auth->get_users_groups($id)->result();

        /* Validate form input */
        $this->form_validation->set_rules('first_name', 'lang:edit_user_validation_fname_label', 'required');
        $this->form_validation->set_rules('last_name', 'lang:edit_user_validation_lname_label', 'required');
        $this->form_validation->set_rules('phone', 'lang:edit_user_validation_phone_label', 'required');
        $this->form_validation->set_rules('company', 'lang:edit_user_validation_company_label', 'required');

        if (isset($_POST) && ! empty($_POST))
        {
            if ($this->_valid_csrf_nonce() === FALSE OR $id != $this->input->post('id'))
            {
                show_error($this->lang->line('error_csrf'));
            }

            if ($this->input->post('password'))
            {
                $this->form_validation->set_rules('password', $this->lang->line('edit_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
                $this->form_validation->set_rules('password_confirm', $this->lang->line('edit_user_validation_password_confirm_label'), 'required');
            }

            if ($this->form_validation->run() == TRUE)
            {
                $data = array(
                    'first_name' => $this->input->post('first_name'),
                    'last_name'  => $this->input->post('last_name'),
                    'company'    => $this->input->post('company'),
                    'phone'      => $this->input->post('phone')
                );

                if ($this->input->post('password'))
                {
                    $data['password'] = $this->input->post('password');
                }

                if ($this->ion_auth->is_admin())
                {
                    $groupData = $this->input->post('groups');

                    if (isset($groupData) && !empty($groupData))
                    {
                        $this->ion_auth->remove_from_group('', $id);

                        foreach ($groupData as $grp)
                        {
                            $this->ion_auth->add_to_group($grp, $id);
                        }
                    }
                }

                if($this->ion_auth->update($user->id, $data))
                {
                    $this->session->set_flashdata('message', $this->ion_auth->messages());

                    if ($this->ion_auth->is_admin())
                    {
                        redirect('admin/investers', 'refresh');
                    }
                    else
                    {
                        redirect('admin', 'refresh');
                    }
                }
                else
                {
                    $this->session->set_flashdata('message', $this->ion_auth->errors());

                    if ($this->ion_auth->is_admin())
                    {
                        redirect('auth', 'refresh');
                    }
                    else
                    {
                        redirect('/', 'refresh');
                    }
                }
            }
        }

        // display the edit user form
        $this->data['csrf'] = $this->_get_csrf_nonce();

        // set the flash data error message if there is one
        $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message',message_box('Update invester success','success'))));

        // pass the user to the view
        $this->data['user']          = $user;
        $this->data['groups']        = $groups;
        $this->data['currentGroups'] = $currentGroups;

        $this->data['first_name'] = array(
            'name'  => 'first_name',
            'id'    => 'first_name',
            'type'  => 'text',
            'class' => 'form-control',
            'value' => $this->form_validation->set_value('first_name', $user->first_name)
        );
        $this->data['last_name'] = array(
            'name'  => 'last_name',
            'id'    => 'last_name',
            'type'  => 'text',
            'class' => 'form-control',
            'value' => $this->form_validation->set_value('last_name', $user->last_name)
        );
        $this->data['company'] = array(
            'name'  => 'company',
            'id'    => 'company',
            'type'  => 'text',
            'class' => 'form-control',
            'value' => $this->form_validation->set_value('company', $user->company)
        );
        $this->data['phone'] = array(
            'name'  => 'phone',
            'id'    => 'phone',
            'type'  => 'tel',
            'pattern' => '^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$',
            'class' => 'form-control',
            'value' => $this->form_validation->set_value('phone', $user->phone)
        );
        $this->data['password'] = array(
            'name' => 'password',
            'id'   => 'password',
            'class' => 'form-control',
            'type' => 'password'
        );
        $this->data['password_confirm'] = array(
            'name' => 'password_confirm',
            'id'   => 'password_confirm',
            'class' => 'form-control',
            'type' => 'password'
        );


        /* Load Template */
        $this->template->admin_render('admin/investers/edit', $this->data);
    }

    public function delete($id = null){
        if(!empty($id)){
            $this->user_model->delete($id);
            $this->session->set_flashdata('message',message_box('Investers has been deleted','success'));
            redirect('admin/investers');
        }else{
            $this->session->set_flashdata('message',message_box('Invalid id','danger'));
            redirect('admin/investers');
        }
    }

    public function _get_csrf_nonce()
    {
        $this->load->helper('string');
        $key   = random_string('alnum', 8);
        $value = random_string('alnum', 20);
        $this->session->set_flashdata('csrfkey', $key);
        $this->session->set_flashdata('csrfvalue', $value);

        return array($key => $value);
    }

    public function _valid_csrf_nonce()
    {
        if ($this->input->post($this->session->flashdata('csrfkey')) !== FALSE && $this->input->post($this->session->flashdata('csrfkey')) == $this->session->flashdata('csrfvalue'))
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

}