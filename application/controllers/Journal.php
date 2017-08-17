<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Journal extends CI_Controller
{
    public function view($page = 'journal')
    {
        if (! file_exists(APPPATH.'views/templates/'.$page.'.php')) {
            // Whoops, we don't have a page for that!
                        show_404();
        }

        $this->load->view('parts/header');
        $this->load->view('templates/'.$page);
        $this->load->view('parts/footer');
    }
}
