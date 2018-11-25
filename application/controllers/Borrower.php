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
        $this->load->model('public/Loans');
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

    public function loan(){
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $tables = $this->config->item('tables', 'ion_auth');
        $userLogin  = $this->prefs_model->user_info_login($this->ion_auth->user()->row()->id);
        $this->form_validation->set_rules('fullname', 'full name', 'required');
        $this->form_validation->set_rules('city', 'city');
        $this->form_validation->set_rules('description', 'description');
        $this->form_validation->set_rules('termsof', 'terms of');

        if($this->form_validation->run() == true){
            $loan = array(
                'account' => $userLogin['username'],
                'borrower_id' => (int)$userLogin['id'],
                'loan_type_id' => 1,
                'loan_amount' => 100
            );
            $this->Loans->create($loan);
            $this->session->set_flashdata('message',message_box('Loans has been saved','success'));
            redirect('borrower/loan', 'refresh');
        }
        $this->template->auth_render('public/loan', $this->data);
    }
}
