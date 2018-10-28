<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 27/07/2018
 * Time: 21:21
 */

class Menus extends Admin_Controller {

    function __construct() {
        parent::__construct();

        /* Load :: Common */
        $this->lang->load('admin/menus');

        $this->load->model('admin/Menu');

        /* Title Page :: Common */
        $this->page_title->push(lang('menu_menus'));
        $this->data['pagetitle'] = $this->page_title->show();

        /* Breadcrumbs :: Common */
        $this->breadcrumbs->unshift(1, lang('menu_menus'), 'admin/menus');

    }

    function index() {
        if ( ! $this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin())
        {
            redirect('auth/login', 'refresh');
        }else {
            /* Breadcrumbs */
            $this->data['breadcrumb'] = $this->breadcrumbs->show();
            $config['base_url'] = site_url('admin/menus/index/');
            $config['total_rows'] = count($this->Menu->find());
            $config['per_page'] = 10;
            $config["uri_segment"] = 4;
            $user_id = null;
            $this->data['menus'] = $this->Menu->find($config['per_page'], $this->uri->segment(4), $user_id);
            $this->data['status'] = $this->Menu->status;
            $this->data['menusList'] = $this->Menu->findList();
            $this->data['pagination'] = $this->bootstrap_pagination($config);
            /* Load Template */
            $this->template->admin_render('admin/menus/index', $this->data);
        }
    }

    function add() {
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('url', 'url', 'required');
        $this->form_validation->set_error_delimiters('', '<br/>');

        if ($this->form_validation->run() == TRUE) {
            $parent_id = 0;
			$bottom_menu = 0;
            if(!empty($this->input->post('parent_id'))){
                $parent_id = $this->input->post('parent_id');
            }
            if($this->input->post('bottom_menu') !== null){
				$bottom_menu = 1;
			}
            $data = array(
                'name' => $this->input->post('name'),
                'url' => $this->input->post('url'),
                'parent_id' => $parent_id,
                'status' => $this->input->post('status'),
				'bottom_menu' => $bottom_menu
            );
            $this->Menu->create($data);
            $menu_id = $this->db->insert_id();
            $this->Menu->setPosition($menu_id, $menu_id);
            $this->session->set_flashdata('success', 'Menu has been saved');
            redirect('admin/menus');
        }

        $this->data['menus'] = $this->Menu->findAll();
        $this->data['status'] = $this->Menu->status;
        $this->load_admin('menus/add');
    }

    function edit($id = null) {
        if ($id == null) {
            $id = $this->input->post('id');
        }

        $this->form_validation->set_rules('name', 'nama', 'required');
        $this->form_validation->set_rules('url', 'url', 'required');
        $this->form_validation->set_error_delimiters('', '<br/>');

        if ($this->form_validation->run() == TRUE) {
            $parent_id = 0;
            if(!empty($this->input->post('parent_id'))){
                $parent_id = $this->input->post('parent_id');
            }

            $data = array
                (
                'name' => $this->input->post('name'),
                'url' => $this->input->post('url'),
                'parent_id' => $parent_id,
                'status' => $this->input->post('status')
            );

            $this->Menu->update($data,$id);
            $this->session->set_flashdata('success', 'Menu updated');
            redirect('admin/menus');
        }

        $this->data['MenuModel'] = $this->Menu->findById($id);
        $this->data['menus'] = $this->Menu->findAll();
        $this->data['status'] = $this->Menu->status;
        $this->load_admin('menus/edit');
    }

    function up($position = null) {
        if ($position == null) {
            $this->session->set_flashdata('error', 'Invalid Menu');
            redirect('admin/menus');
        } else {
            $currentMenu = $this->Menu->findByPosition($position);
            $prevMenu = $this->Menu->getPrevMenu($position);
            if (!empty($prevMenu)) {
                $currentMenuId = $currentMenu['id'];
                $currentMenuNewPosition = $prevMenu['position'];
                $this->Menu->setPosition($currentMenuId, $currentMenuNewPosition);

                $prevMenuId = $prevMenu['id'];
                $prevMenuNewPosition = $currentMenu['position'];
                $this->Menu->setPosition($prevMenuId, $prevMenuNewPosition);
                redirect('admin/menus');
            } else {
                $this->session->set_flashdata('error', 'No previous menu found');
                redirect('admin/menus');
            }
        }
    }

    function down($position = null) {
        if ($position == null) {
            $this->session->set_flashdata('error', 'Invalid Menu');
            redirect('admin/menus');
        } else {
            $currentMenu = $this->Menu->findByPosition($position);

            $nextMenu = $this->Menu->getNextMenu($position);

            if (!empty($nextMenu)) {
                $currentMenuId = $currentMenu['id'];
                $currentMenuNewPosition = $nextMenu['position'];
                $this->Menu->setPosition($currentMenuId, $currentMenuNewPosition);

                $nextMenuId = $nextMenu['id'];
                $nextMenuNewPosition = $currentMenu['position'];
                $this->Menu->setPosition($nextMenuId, $nextMenuNewPosition);
                redirect('admin/menus');
            } else {
                $this->session->set_flashdata('error', 'No next menu found');
                redirect('admin/menus');
            }
        }
    }

    function delete($id = null) {
        if ($id == null) {
            $this->session->set_flashdata('success', 'Invalid Menu');
            redirect('admin/menus');
        } else {
            $this->Menu->delete($id);
            $this->session->set_flashdata('success', 'Menu deleted');
            redirect('admin/menus');
        }
    }


}

?>
