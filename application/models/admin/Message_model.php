<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 25/10/2018
 * Time: 23:18
 */

class Message_model extends CI_Model {

    var $table = 'messages';

    public function __construct()
    {
        parent::__construct();
    }

    function find($limit = null, $offset = 0){
        $this->db->select('messages.*');
        $this->db->limit($limit, $offset);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get($this->table);
        return $query->result_array();
    }
}