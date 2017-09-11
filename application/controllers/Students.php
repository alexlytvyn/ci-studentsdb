<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Students extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('students_model');
    }

    public function index($page = 'students_list')
    {
        if (! file_exists(APPPATH.'views/templates/students/'.$page.'.php')) {
            // Whoops, we don't have a page for that!
                        show_404();
        }

        $data['title'] = 'Студенти';
        $data['students'] = $this->students_model->get_all_students();

				// $this->load->library('pagination');
        // $config = [
        //     'base_url' => base_url().'students/',
        //     'per_page' => 3,
        //     'total_rows' => $this->students_model->count_rows()
        // ];

				// $config['full_tag_open'] = '<ul class="pagination">';
        // $config['full_tag_close'] = '</ul>';
        // $config['num_tag_open'] = '<li class="page-item">';
        // $config['num_tag_close'] = '</li>';
        // $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        // $config['cur_tag_close'] = '</a></li>';
        // $config['next_tag_open'] = '<li class="page-item">';
        // $config['next_tagl_close'] = '</a></li>';
        // $config['prev_tag_open'] = '<li class="page-item">';
        // $config['prev_tagl_close'] = '</li>';
        // $config['first_tag_open'] = '<li class="page-item disabled">';
        // $config['first_tagl_close'] = '</li>';
        // $config['last_tag_open'] = '<li class="page-item">';
        // $config['last_tagl_close'] = '</a></li>';
        // $config['attributes'] = array('class' => 'page-link');
        // $this->pagination->initialize($config); // model function
				//
				// $data['students'] = $this->students_model->get_all_students($config['per_page'], $this->uri->segment(3)); // list of seeker
				// $data['pagination'] = $this->pagination->create_links();

        $this->load->view('parts/header', $data);
        $this->load->view('parts/tabs');
        $this->load->view('templates/students/students_list', $data);
        // $this->load->view('templates/'.$page);
        $this->load->view('parts/footer');
    }

    public function ordered($page = 'students_list')
    {
        if (! file_exists(APPPATH.'views/templates/students/'.$page.'.php')) {
            // Whoops, we don't have a page for that!
                        show_404();
        }

        $data['title'] = 'Студенти';
        $data['students'] = $this->students_model->order_by();

        $this->load->view('parts/header', $data);
        $this->load->view('parts/tabs');
        $this->load->view('templates/students/students_list', $data);
        // $this->load->view('templates/'.$page);
        $this->load->view('parts/footer');
    }

    public function add()
    {
        $data['title'] = 'Додавання студента';
        if (isset($_POST['add_student_button'])) {
            if ($this->students_model->student_add()) {

              //Check whether user upload picture
              $config['upload_path'] = 'assets/img/';
                $config['overwrite'] = true;
                $config['remove_spaces'] = false;
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['photo']['name'];

                  //Load upload library and initialize configuration
                  $this->load->library('upload', $config);

                if ($this->upload->do_upload('photo')) {
                    $uploadData = $this->upload->data();
                    $photo = $uploadData['full_path'];
                } else {
                    $photo = '';
                }

                $this->session->set_flashdata('success', 'Студента було успішно додано!');
                redirect('students/add', 'refresh');
            } else {
                $this->session->set_flashdata('error', 'Сталася помилка при додаванні Студента.');
                redirect('students/add', 'refresh');
            }
        }
        $this->load->view('parts/header', $data);
        $this->load->view('templates/students/student_add');
        $this->load->view('parts/footer');
    }

    public function delete($id)
    {
        $data['title'] = 'Видалення Студента';
        $data['current_student'] = $this->students_model->get_student($id);

        if (isset($_POST['student_confirm_delete_button'])) {
            $this->students_model->student_delete($id);
            redirect('students', 'refresh');
        }

        $this->load->view('parts/header', $data);
        $this->load->view('templates/students/student_delete_confirm', $data);
        $this->load->view('parts/footer');
    }

    public function edit($id)
    {
			$data['title'] = 'Редагування інформації про Студента';
			if (isset($_POST['edit_student_button'])) {
					if ($this->students_model->student_update($id)) {
							$this->session->set_flashdata('success', 'Дані про Студента було успішно оновлено!');
							redirect(base_url().'students/edit/'.$id, 'refresh');
					} else {
							$this->session->set_flashdata('error', 'A error occured during data updating. Please try again later.');
							redirect(base_url().'students/edit/'.$id, 'refresh');
					}
			}
			$data['current_student'] = $this->students_model->get_student($id);
			$this->load->view('parts/header', $data);
			$this->load->view('templates/students/student_edit', $data);
			$this->load->view('parts/footer');
    }
}
