<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 10/11/2018
 * Time: 23:15
 */

class Profile extends Public_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->data['parent_menu'] = 'userhome';
    }


    public function index()
    {

        $this->template->auth_render('public/profile', $this->data);
    }
}
