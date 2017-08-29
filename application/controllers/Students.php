<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Students extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('students_model');
    }

    public function index($page = 'students')
    {
        if (! file_exists(APPPATH.'views/templates/'.$page.'.php')) {
            // Whoops, we don't have a page for that!
                        show_404();
        }

        $data['title'] = 'Студенти';
				$data['students'] = $this->students_model->get_all_students();

        $this->load->view('parts/header', $data);
        $this->load->view('parts/tabs');
				$this->load->view('templates/students', $data);
        // $this->load->view('templates/'.$page);
        $this->load->view('parts/footer');
    }

		public function ordered($page = 'students')
    {
        if (! file_exists(APPPATH.'views/templates/'.$page.'.php')) {
            // Whoops, we don't have a page for that!
                        show_404();
        }

        $data['title'] = 'Студенти';
				$data['students'] = $this->students_model->order_by();

        $this->load->view('parts/header', $data);
        $this->load->view('parts/tabs');
				$this->load->view('templates/students', $data);
        // $this->load->view('templates/'.$page);
        $this->load->view('parts/footer');
    }
}
