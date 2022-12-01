<?php
defined('BASEPATH') or exit('No direct script access allowed');
use Mpdf\Mpdf;
require FCPATH.'/vendor/autoload.php';
class Structure extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('structure_model');
  }

  public function index()
  {

    // lister les structures
    $data['structure_de_sante'] = $this->structure_model->getAllData();
    $title['title'] = 'Structure';
    return $this->load->view('Admin/include/header', $title)
      ->view('Admin/include/sidebar')
      ->view('Admin/structure', $data)
      ->view('Admin/include/footer');
  }
  //ajouter les structures
  public function ajout()
  {
    $this->form_validation->set_rules('nom_structure',  'Nom',  'required|trim');
    $this->form_validation->set_rules('lieu_structure',  'Lieu',  'required|trim');
    if ($this->form_validation->run()  ==  true) {
      $this->load->model('structure_model');
      $this->structure_model->insert_data();
    } {
        $this->session->set_flashdata('error', 'Enregistrement effectué avec succès');
      redirect(base_url('Structure/ajout_structure'));
    }
  }
  // modifier les structures
  public function edit($id)
  {
    $title['title'] = 'Modification';
    $data['edit'] = $this->structure_model->edit($id);
    $this->load->model('structure_model');
    $this->load->view('Admin/include/header', $title)
               ->view('Admin/include/sidebar')
               ->view('Admin/edit_structure', $data)
               ->view('Admin/include/footer');
  }

  //Mettre à jour
  public function update($id)
  {
    $this->structure_model->update($id);
    $this->session->set_flashdata('error', 'Modification effectuée avec succès');
    redirect(base_url('Structure/index'));
  }

  //Supprimer
  public function delete($id)
  {
    $this->structure_model->delete($id);
    $this->session->set_flashdata('error', 'Suppression effectuée avec succès');
    redirect(base_url('Structure/index'));
  }

  public function ajout_structure(){
    $this->load->view('Admin/include/header')
                ->view('Admin/include/sidebar')
                ->view('Admin/ajout_structure')
                ->view('Admin/include/footer');  
  }
  function print()
  {
    $data['structure_de_sante']= $this->structure_model->getAllData();
    
    $html = $this->load->view('Admin/structure_pdf' ,$data, true);
    $mpdf = new \Mpdf\Mpdf();                                                                 
    $mpdf->WriteHTML($html);
    $mpdf->Output();
  }
  public function structure_pdf ()
  {
        
    $this->load->view('Admin/include/header')
               ->view('Admin/include/sidebar')
               ->view('Admin/structure_pdf')
               ->view('Admin/include/footer');
}

}
