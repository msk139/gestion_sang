<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Groups_sang extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->model('Groups_sang_model');
    }

	public function index() {
        $data['result'] = $this->Groups_sang_model->getAllData();
		return $this->load->view('Admin/include/header')
                            ->view('Admin/include/sidebar')
                            ->view('Admin/fontawesome',$data)
                           ->view('Admin/include/footer');
    }
   
    public function create() {
        $this->Groups_sang_model->createData();
        redirect("Groups_sang");
    }

    public function edit($id) {
        $data['row'] = $this->Groups_sang_model->getData($id);
        $this->load->view('Admin/include/header')
                    ->view('Admin/Groups_sangEdit', $data)
                    ->view('Admin/include/sidebar')
                    ->view('Admin/include/footer');
    }

    public function update($id) {
        $this->Groups_sang_model->updateData($id);
        $this->session->set_flashdata('error', 'Modification effectuée avec succès');
        redirect("Groups_sang");
    }

    public function delete($id) {
        $this->Groups_sang_model->deleteData($id);
        $this->session->set_flashdata('error', 'Suppression effectuée avec succès');
        redirect("Groups_sang");
    }
    
}