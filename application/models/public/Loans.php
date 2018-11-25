<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 25/11/2018
 * Time: 23:58
 */

class Loans extends CI_Model {

    // Protected or private properties
    var $table = "loans";
    var $loanstatus = array(
        0 => 'pending',
        1 => 'approved',
        2 => 'on going',
        3 => 'paid'
    );
    // Constructor
    function __construct() {
        parent::__construct();
    }

    function find($limit = null, $offset = 0, $user_id = null, $q = null){
        $this->db->select('loans.*');
        $this->db->limit($limit, $offset);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    // Public methods
    public function findAll() {
        $this->db->select('*');
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get($this->table);

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    public function findAllName() {
        $this->db->select('loans.');
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get($this->table);

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    function findActive() {

        $this->db->select('*');
        $this->db->where('', 1);
        $query = $this->db->get($this->table);

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    public function findById($id) {
        $this->db->select('*');
        $this->db->where('id', $id);

        $query = $this->db->get($this->table, 1);

        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
    }

    public function create($data = array()) {

        $this->db->insert($this->table, $data);
    }
    public function update($data, $id) {
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);

        $this->db->delete($this->table);
    }

}
