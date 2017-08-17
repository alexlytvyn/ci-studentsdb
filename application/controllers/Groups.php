<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Groups extends CI_Controller
{
    public function view($page = 'groups')
    {
        if (! file_exists(APPPATH.'views/templates/'.$page.'.php')) {
            // Whoops, we don't have a page for that!
                        show_404();
        }

				$data['title'] = 'Групи';

				$this->load->library('parser');

				$fixtures = array(
					'groups' => array(
                array('id' => '1',
											'leader_name' => 'Литвин Олександр',
											'group_name' => 'Ф-07'
										 ),
							 	array('id' => '2',
											'leader_name' => 'Желюк Михайло',
											'group_name' => 'Ф-08'
										 ),
							 	array('id' => '3',
											'leader_name' => 'Мороз Вікторія',
											'group_name' => 'Ф-09'
										 )
        )
);

        $this->load->view('parts/header', $data);
        $this->load->view('parts/tabs');
				$this->parser->parse('templates/groups', $fixtures);
        // $this->load->view('templates/'.$page);
        $this->load->view('parts/footer');
    }
}
