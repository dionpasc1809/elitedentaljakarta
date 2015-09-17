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
        $var_data['errors']=false;
        $var_data['success']=false;

        if($this->input->server('REQUEST_METHOD')=="POST"){
            $this->form_validation->set_rules('inp_name', 'Name', 'required');
            $this->form_validation->set_rules('inp_email', 'Email', 'required');
            $this->form_validation->set_rules('inp_phone', 'Phone Number', 'required');
            $this->form_validation->set_rules('inp_address', 'Address', 'required');
            $this->form_validation->set_rules('inp_city', 'City', 'required');
            $this->form_validation->set_rules('inp_state', 'State', 'required');
            $this->form_validation->set_rules('inp_appointment_day', 'Appointment Day', 'required');
            $this->form_validation->set_rules('inp_appointment_time', 'Appointment Time', 'required');
            $this->form_validation->set_rules('inp_appointment_nature', 'Appointment Nature', 'required');

            $postdata = $this->input->post();

            if ($this->form_validation->run() == FALSE)
            {
                $var_data['errors']=true;
            }
            else
            {
                $var_data['success']=true;
                date_default_timezone_set('Asia/Jakarta');
                $this_date = date('Y-m-d H:i:s');

                $var_postdata['name']=$postdata['inp_name'];
                $var_postdata['email'] = $postdata['inp_email'];
                $var_postdata['phone'] = $postdata['inp_phone'];
                $var_postdata['address'] = $postdata['inp_address'];
                $var_postdata['city'] = $postdata['inp_city'];
                $var_postdata['state'] = $postdata['inp_state'];
                $var_postdata['appointment_day'] = $postdata['inp_appointment_day'];
                $var_postdata['appointment_time'] = $postdata['inp_appointment_time'];
                $var_postdata['appointment_nature'] = $postdata['inp_appointment_nature'];
                $var_postdata['status'] = $postdata['inp_status'];
                $var_postdata['modified_date'] = $this_date;

                $app->save_edit($var_postdata,"id", $id);
            }
        }

        $var_data['appointment']=$app->get_by_id($id);
        $this->load->view('admin/appointment/edit',$var_data);
    }

    public function deleteAppointment($id) {
        $app = new Appointment();
        $app->delete_data($id);
        redirect('admin/appointment');
    }

    public function doctors() {
        $app = new Doctors();
        $var_data = array();
        $var_data['doctors']=$app->get_all();
        $this->load->view('admin/doctors/index',$var_data);
    }

    public function editDoctors($id) {
        $app = new Doctors();
        $var_data = array();
        $var_data['errors']=false;
        $var_data['success']=false;

        if($this->input->server('REQUEST_METHOD')=="POST"){
            $this->form_validation->set_rules('inp_name', 'Name', 'required');
            $this->form_validation->set_rules('inp_tag', 'Tag Name', 'required');
            $this->form_validation->set_rules('inp_image', 'Image (inside Popup)', 'required');
            $this->form_validation->set_rules('inp_small_image', 'Image (thumbnail)', 'required');
            $this->form_validation->set_rules('inp_small_role', 'Role', 'required');
            $this->form_validation->set_rules('inp_description', 'Description', 'required');

            $postdata = $this->input->post();

            if ($this->form_validation->run() == FALSE)
            {
                $var_data['errors']=true;
            }
            else
            {
                $var_data['success']=true;
                date_default_timezone_set('Asia/Jakarta');
                $this_date = date('Y-m-d H:i:s');

                $var_postdata['name'] = $postdata['inp_name'];
                $var_postdata['tag'] = $postdata['inp_tag'];
                $var_postdata['image'] = $postdata['inp_image'];
                $var_postdata['small_image'] = $postdata['inp_small_image'];
                $var_postdata['small_title'] = $postdata['inp_small_title'];
                $var_postdata['small_role'] = $postdata['inp_small_role'];
                $var_postdata['description'] = $postdata['inp_description'];

                $app->save_edit($var_postdata,"id", $id);
            }
        }

        $var_data['doctors']=$app->get_by_id($id);
        $this->load->view('admin/doctors/edit',$var_data);
    }

    public function promo() {
        $app = new Promo();
        $var_data = array();
        $var_data['errors']=false;
        $var_data['success']=false;

        if($this->input->server('REQUEST_METHOD')=="POST"){
            $this->form_validation->set_rules('inp_promo_name','[Promo Name]','required');
            $this->form_validation->set_rules('inp_promo_image','[Promo Image]','required');
            $postdata = $this->input->post();

            if ($this->form_validation->run() == FALSE)
            {
                $var_data['errors']=true;
            }
            else
            {
                $var_data['success']=true;
                date_default_timezone_set('Asia/Jakarta');
                $this_date = date('Y-m-d H:i:s');

                $var_postdata['promo_name'] = $postdata['inp_promo_name'];
                $var_postdata['promo_image'] = $postdata['inp_promo_image'];
                $var_postdata['promo_link'] = $postdata['inp_promo_link'];
                $var_postdata['created_date'] = $this_date;
                $var_postdata['modified_date'] = $this_date;

                $app->save_new($var_postdata);
            }
        }

        $var_data['promo']=$app->get_all();
        $this->load->view('admin/promo/index',$var_data);
    }

    public function editPromo($id) {
        $app = new Promo();
        $var_data = array();
        $var_data['errors']=false;
        $var_data['success']=false;

        if($this->input->server('REQUEST_METHOD')=="POST"){
            $this->form_validation->set_rules('inp_promo_name','[Promo Name]','required');
            $this->form_validation->set_rules('inp_promo_image','[Promo Image]','required');
            $postdata = $this->input->post();

            if ($this->form_validation->run() == FALSE)
            {
                $var_data['errors']=true;
            }
            else
            {
                $var_data['success']=true;
                date_default_timezone_set('Asia/Jakarta');
                $this_date = date('Y-m-d H:i:s');

                $var_postdata['promo_name'] = $postdata['inp_promo_name'];
                $var_postdata['promo_image'] = $postdata['inp_promo_image'];
                $var_postdata['promo_link'] = $postdata['inp_promo_link'];
                $var_postdata['modified_date'] = $this_date;

                $app->save_edit($var_postdata,"id", $id);
            }
        }

        $var_data['promo']=$app->get_by_id($id);
        $this->load->view('admin/promo/edit',$var_data);
    }

	public function comments() {
		$app = new Comments();
		$var_data = array();
		$var_data['errors']=false;
		$var_data['success']=false;

		if($this->input->server('REQUEST_METHOD')=="POST") {
			$this->form_validation->set_rules('inp_promo_name', '[Promo Name]', 'required');
			$this->form_validation->set_rules('inp_promo_image', '[Promo Image]', 'required');
			$postdata = $this->input->post();

			if ($this->form_validation->run() == FALSE) {
				$var_data['errors'] = true;
			} else {
				$var_data['success'] = true;
				date_default_timezone_set('Asia/Jakarta');
				$this_date = date('Y-m-d H:i:s');

				$var_postdata['promo_name'] = $postdata['inp_promo_name'];
				$var_postdata['promo_image'] = $postdata['inp_promo_image'];
				$var_postdata['promo_link'] = $postdata['inp_promo_link'];
				$var_postdata['created_date'] = $this_date;
				$var_postdata['modified_date'] = $this_date;

				$app->save_new($var_postdata);
			}

		}

		$var_data['comments']=$app->get_all();
		$this->load->view('admin/comments/index',$var_data);
	}

	public function setComments() {
		$app = new Comments();

		$var_data = array();
		$var_data['errors']=false;
		$var_data['success']=false;

		$data = file_get_contents('php://input');

		$data_decoded = json_decode($data);
		$data_new = "";
		$data_due_update = array();
		foreach($data_decoded as $dd)
		{
			$dd = json_decode($dd);
			$data_due_update['id'] = $dd->id;
			$data_due_update['approved'] = $dd->approved;
		}

		print_r($data_due_update);

		$app->save_edit($data_due_update,'id',$data_due_update['id']);
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
