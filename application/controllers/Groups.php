<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Groups extends CI_Controller
{
	public function __construct()
	{
			parent::__construct();
			$this->load->model('groups_model');
	}
    public function view($page = 'groups')
    {
        if (! file_exists(APPPATH.'views/templates/'.$page.'.php')) {
            // Whoops, we don't have a page for that!
                        show_404();
        }

				$data['title'] = 'Групи';

				$this->load->library('parser');

				$fixtures = array(
          'groups' => $this->groups_model->get_all_groups()
				);

        $this->load->view('parts/header', $data);
        $this->load->view('parts/tabs');
				$this->parser->parse('templates/groups', $fixtures);
        // $this->load->view('templates/'.$page);
        $this->load->view('parts/footer');
    }
}
