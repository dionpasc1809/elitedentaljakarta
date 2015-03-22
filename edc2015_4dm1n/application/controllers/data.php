<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
    }

    public function getAppointment() {
        $appointment = new Appointment();
        $app_data = $appointment->get_all();
        echo json_encode($app_data);
    }

    public function getDoctors() {
        $doctors = new Doctors();
        $app_data = $doctors->get_all();
        echo json_encode($app_data);
    }
}
