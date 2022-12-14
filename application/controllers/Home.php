<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
    class Home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }


    public function index()
    {
        $title['title'] = 'Accueil';
        $this->load->view('Admin/include/header', $title)
                   ->view('Admin/include/sidebar')
                   ->view('accueil')
                   ->view('Admin/include/footer');

        $data['agent_de_sante'] = $this->agent_model->getAllData();

        return $this->load->view('Admin/agents', $data);        
    }

    public function agents()
    {
        
        
        $this->load->view('Admin/include/header')
                   ->view('Admin/include/sidebar')
                   ->view('Admin/agents')
                   ->view('Admin/include/footer');

        $data['structure_de_sante'] = $this->structure_model->getAllData();

        return $this->load->view('Admin/structure', $data); 
                         
    }

    public function structure()
    {
       $title['title'] = 'Structure';
        $this->load->view('Admin/include/header', $title)
                   ->view('Admin/include/sidebar')
                   ->view('Admin/structure')
                   ->view('Admin/include/footer');
    }

    public function stock()
    {
       $title['title'] = 'Stock';
        $this->load->view('Admin/include/header', $title)
                   ->view('Admin/include/sidebar')
                   ->view('Admin/stock')
                   ->view('Admin/include/footer');
    }

    public function fontawesome ()
    {
       
        $this->load->view('Admin/include/header')
                   ->view('Admin/include/sidebar')
                   ->view('Admin/fontawesome')
                   ->view('Admin/include/footer');
    }

    public function map_google ()
    {
       
        $this->load->view('Admin/include/header')
                   ->view('Admin/include/sidebar')
                   ->view('Admin/map-google')
                   ->view('Admin/include/footer');
    }

    
} 