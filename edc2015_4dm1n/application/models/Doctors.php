<?php
/**
 * Created by IntelliJ IDEA.
 * User: godhepaer
 * Date: 3/22/2015
 * Time: 9:44 PM
 */

class Doctors extends CI_Model {

    protected $_table_name = "tb_doctors";

    function __construct() {
        $this->load->database();
    }

    function get_all() {
        return $this->db->get($this->_table_name)->result();
    }

    function get_by_id($id) {
        $this->db->where('id',$id);
        return $this->db->get($this->_table_name)->row();
    }

    function save_edit($data, $id, $idval) {
        $this->db->where($id,$idval);
        $this->db->update($this->_table_name,$data);
    }

    function delete_data($id) {
        $this->db->where('id',$id);
        $this->db->delete($this->_table_name);
    }

}
