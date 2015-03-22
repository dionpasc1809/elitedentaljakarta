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

}
