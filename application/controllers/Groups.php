<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Groups extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('groups_model');
    }
    public function index($page = 'groups')
    {
        if (! file_exists(APPPATH.'views/templates/'.$page.'.php')) {
            // Whoops, we don't have a page for that!
                        show_404();
        }

        $data['title'] = 'Групи';
        $data['groups'] = $this->groups_model->get_all_groups();

        $this->load->view('parts/header', $data);
        $this->load->view('parts/tabs');
        $this->load->view('templates/groups', $data);
        // $this->load->view('templates/'.$page);
        $this->load->view('parts/footer');
    }

    public function ordered($page = 'groups')
    {
        if (! file_exists(APPPATH.'views/templates/'.$page.'.php')) {
            // Whoops, we don't have a page for that!
                        show_404();
        }

        $data['title'] = 'Групи';
        $data['groups'] = $this->groups_model->order_by();

        $this->load->view('parts/header', $data);
        $this->load->view('parts/tabs');
        $this->load->view('templates/groups', $data);
        // $this->load->view('templates/'.$page);
        $this->load->view('parts/footer');
    }

		public function add()
    {
        $data['title'] = 'Додавання Групи';
        if (isset($_POST['add_group_button'])) {
            if ($this->groups_model->group_add()) {
                $this->session->set_flashdata('success', 'Групу було успішно додано!');
                redirect('groups/add', 'refresh');
            } else {
                $this->session->set_flashdata('error', 'Сталася помилка при додаванні Групи.');
                redirect('groups/add', 'refresh');
            }
        }
        $this->load->view('parts/header', $data);
        $this->load->view('templates/group_add');
        $this->load->view('parts/footer');
    }

		public function delete($id)
    {
        $data['title'] = 'Видалення Групи';
        $data['current_group'] = $this->groups_model->get_group($id);

        if (isset($_POST['group_confirm_delete_button'])) {
            $this->groups_model->group_delete($id);
            redirect('groups', 'refresh');
        }

        $this->load->view('parts/header', $data);
        $this->load->view('templates/group_delete_confirm', $data);
        $this->load->view('parts/footer');
    }
}
