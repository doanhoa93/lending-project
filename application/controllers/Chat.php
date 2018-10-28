<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 07/11/2018
 * Time: 21:06
 */

class Chat extends Public_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->data['parent_menu'] = 'userhome';
    }


    public function index()
    {
        $data = $this->input->post('type');
        $response = null;
        if(!empty($data)){
            if(isset($_SESSION['user']) && isset($_SESSION['avatar'])){
                $response['status'] = 'success';
                $response['user'] 	= $_SESSION['user'];
                $response['avatar'] = $_SESSION['avatar'];
            }else{
                $response['status'] == 'error';
            }

            echo json_encode($response);
        } else {
            $this->template->auth_render('public/chat', $this->data);
        }
    }

    public function messages()
    {
        $data = $this->input->post('type');

        if(!empty($data)){

        }

        echo json_encode($data);
    }
}