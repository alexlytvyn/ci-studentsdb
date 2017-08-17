<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Students extends CI_Controller
{
    public function view($page = 'students')
    {
        if (! file_exists(APPPATH.'views/templates/'.$page.'.php')) {
            // Whoops, we don't have a page for that!
                        show_404();
        }

        $data['title'] = 'Студенти';

        $this->load->library('parser');

        $fixtures = array(
					'students' => array(
                array('id' => '1',
											'first_name' => 'Олександр',
											'last_name' => 'Литвин',
											'ticket' => '007',
											'image' => '/assets/img/alytvyn.jpg',
										 ),
                array('id' => '2',
											'first_name' => 'Михайло',
											'last_name' => 'Желюк',
											'ticket' => '609',
											'image' => '/assets/img/mzheljuk.jpg',
										 ),
                array('id' => '3',
											'first_name' => 'Вікторія',
											'last_name' => 'Мороз',
											'ticket' => '511',
											'image' => '/assets/img/vmoroz.jpg',
										 )
        )
);

				$this->load->view('parts/header', $data);
				$this->load->view('parts/tabs');
				$this->parser->parse('templates/students', $fixtures);
				// $this->load->view('templates/'.$page);
				$this->load->view('parts/footer');
    }
}
