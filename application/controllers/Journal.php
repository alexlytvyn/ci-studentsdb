<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Journal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('journal_model');
    }

    public function index($page = 'journal')
    {
        if (! file_exists(APPPATH.'views/templates/journal/'.$page.'.php')) {
            // Whoops, we don't have a page for that!
                        show_404();
        }

        $data['title'] = 'Журнал Відвідування';
        $data['full_name'] = $this->journal_model->get_full_student_name();

        $this->load->view('parts/header', $data);
        $this->load->view('parts/tabs');
        $this->load->view('templates/journal/'.$page);
        $this->load->view('parts/footer');
    }
}
