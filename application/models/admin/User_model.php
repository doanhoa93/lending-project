<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 25/10/2018
 * Time: 23:18
 */

class User_model extends CI_Model {

    var $table = 'users';

    public function __construct()
    {
        parent::__construct();
    }

    function find_borrowers($limit = null, $offset = 0){
        $this->db->select('users.*');
        $this->db->where('type', 'borrowers');
        $this->db->limit($limit, $offset);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    function find_investers($limit = null, $offset = 0){
        $this->db->select('users.*');
        $this->db->where('type', 'investers');
        $this->db->limit($limit, $offset);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get($this->table);
        return $query->result_array();
    }
}