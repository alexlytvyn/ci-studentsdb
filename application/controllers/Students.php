<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Students extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('students_model');
    }

    public function view($page = 'students')
    {
        if (! file_exists(APPPATH.'views/templates/'.$page.'.php')) {
            // Whoops, we don't have a page for that!
                        show_404();
        }

        $data['title'] = 'Студенти';

        $this->load->library('parser');

        $fixtures = array(
          'students' => $this->students_model->get_all_students()
				);

        $this->load->view('parts/header', $data);
        $this->load->view('parts/tabs');
        $this->parser->parse('templates/students', $fixtures);
        // $this->load->view('templates/'.$page);
        $this->load->view('parts/footer');
    }
}
