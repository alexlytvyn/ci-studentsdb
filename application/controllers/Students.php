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
