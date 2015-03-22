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
        $this->load->js('assets/themes/default/js/angular.min.js');
        $this->load->js('assets/themes/default/js/ng-grid.min.js');
        $this->load->js('assets/themes/default/js/loading-bar.min.js');
        $this->load->js('assets/themes/default/js/ng-grid-csv-export.js');


        $this->load->css('assets/themes/default/css/bootstrap.min.css');
        $this->load->css('assets/themes/default/css/general.css');
        $this->load->css('assets/themes/default/css/ng-grid.css');
	}

    public function index()
    {
        $app = new Appointment();
        $var_data = array();
        $var_data['appointment']=$app->get_all();
        $this->load->view('admin/appointment/index',$var_data);
    }

    public function EditAppointment($id) {
        $app = new Appointment();
        $var_data = array();
        $var_data['appointment']=$app->get_by_id($id);
        $this->load->view('admin/appointment/edit',$var_data);
    }

    public function doctors() {
        $app = new Doctors();
        $var_data = array();
        $var_data['doctors']=$app->get_all();
        $this->load->view('admin/doctors/index',$var_data);
    }

    public function redirect() {
        redirect('admin/appointment');
    }

    /*public function getAppointment() {
        $appointment = new Appointment();
        $app_data = $appointment->get_all();
        echo json_encode($app_data);
    }*/
}
