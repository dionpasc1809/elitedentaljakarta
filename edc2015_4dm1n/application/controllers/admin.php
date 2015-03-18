<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        $this->load->helper('url');

        $this->_init();
    }

    private function _init()
    {
        $this->output->set_template('default');

        $this->load->js('assets/themes/default/js/jquery-1.9.1.min.js');
        $this->load->js('assets/themes/default/js/bootstrap.min.js');

        $this->load->css('assets/themes/default/css/bootstrap.min.css');
        $this->load->css('assets/themes/default/css/general.css');
	}

    public function index()
    {
        $app = new Appointment();
        $var_data = array();
        $var_data['appointment']=$app->get_all();
        $this->load->view('admin/appointment/index',$var_data);
    }
}
