<?php
defined('BASEPATH') or exit('No direct script access allowed');
use Mpdf\Mpdf;
require FCPATH.'/vendor/autoload.php';
class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('agent_model');
  }

  public function index()
  {

    // lister les noms
    $data['agent_de_sante'] = $this->agent_model->getAllData();
    $title['title'] = 'Agent';
    return $this->load->view('Admin/include/header', $title)
      ->view('Admin/include/sidebar')
      ->view('Admin/agents', $data)
      ->view('Admin/include/footer');
  }
  //ajouter les noms
  public function ajout()
  {
    $this->form_validation->set_rules('nom_agent',  'Nom',  'required|trim');
    $this->form_validation->set_rules('prenom_agent',  'Prenom',  'required|trim');
    $this->form_validation->set_rules('email_agent',  'Mail',  'required|trim|valid_email');
    $this->form_validation->set_rules('password_agent',  'Password',  'required|trim');
    $this->form_validation->set_rules('confirm_password',  'Confirmer mot de passe',  'required|trim', 'required|matches[password]');
    $this->form_validation->set_rules('profession_agent',  'Profession',  'required|trim');
    if ($this->form_validation->run()  ==  true) {
      $this->load->model('agent_model');
      $this->agent_model->insert_data();
    } {
      $this->session->set_flashdata('error', 'Enregistrement effectué avec succès');
      redirect(base_url('Admin/ajout_agent'));
    }
  }
  // modifier les noms
  public function edit($id)
  {
    $title['title'] = 'Modification';
    $data['edit'] = $this->agent_model->edit($id);
    $this->load->model('agent_model');
    $this->load->view('Admin/include/header', $title)
               ->view('Admin/include/sidebar')
               ->view('Admin/agentsEdit', $data)
               ->view('Admin/include/footer');
               //$this->session->set_flashdata('error', 'Modification effectuée avec succès');
              // redirect(base_url('Admin/agentsEdit'));
  }

  //Mettre à jour
  public function update($id)
  {
    $this->agent_model->update($id);
    $this->session->set_flashdata('error', 'Modification effectuée avec succès');
    redirect(base_url('Admin/index'));
  }

  //Supprimer
  public function delete($id)
  {
    $this->agent_model->delete($id);
    $this->session->set_flashdata('error', 'Suppression effectuée avec succès');
    redirect(base_url('Admin/index'));
  }
  public function ajout_agent(){
         $this->load->view('Admin/include/header')
                    ->view('Admin/include/sidebar')
                    ->view('Admin/ajout_agent')
                    ->view('Admin/include/footer');  
  }
  function print()
  {
    $data['agent_de_sante']= $this->agent_model->getAllData();
    
    $html = $this->load->view('Admin/agent_pdf' ,$data, true);
    $mpdf = new \Mpdf\Mpdf();                                                                 
    $mpdf->WriteHTML($html);
    $mpdf->Output();
  }
  public function agent_pdf ()
  {
        
    $this->load->view('Admin/include/header')
               ->view('Admin/include/sidebar')
               ->view('Admin/agent_pdf')
               ->view('Admin/include/footer');
}



}


