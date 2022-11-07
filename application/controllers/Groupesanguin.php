<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
    class Groupesanguin extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function aplus()
    {
        
        $title['title'] = 'Groupe sanguin A+';
        $this->load->view('Admin/include/header', $title)
                   ->view('Admin/include/sidebar')
                   ->view('Admin/groupesanguin/aplus')
                   ->view('Admin/include/footer');
                         
    }

    public function amoins()
    {
        
        $title['title'] = 'Groupe sanguin A-';
        $this->load->view('Admin/include/header', $title)
                   ->view('Admin/include/sidebar')
                   ->view('Admin/groupesanguin/amoins')
                   ->view('Admin/include/footer');
                         
    }
    public function bmoins()
    {
        
        $title['title'] = 'Groupe sanguin B-';
        $this->load->view('Admin/include/header', $title)
                   ->view('Admin/include/sidebar')
                   ->view('Admin/groupesanguin/bmoins')
                   ->view('Admin/include/footer');
                         
    }
    public function bplus()
    {
        
        $title['title'] = 'Groupe sanguin B+';
        $this->load->view('Admin/include/header', $title)
                   ->view('Admin/include/sidebar')
                   ->view('Admin/groupesanguin/bplus')
                   ->view('Admin/include/footer');
                         
    }
    public function omoins()
    {
        
        $title['title'] = 'Groupe sanguin O-';
        $this->load->view('Admin/include/header', $title)
                   ->view('Admin/include/sidebar')
                   ->view('Admin/groupesanguin/omoins')
                   ->view('Admin/include/footer');
                         
    }
    public function oplus()
    {
        
        $title['title'] = 'Groupe sanguin O+';
        $this->load->view('Admin/include/header', $title)
                   ->view('Admin/include/sidebar')
                   ->view('Admin/groupesanguin/oplus')
                   ->view('Admin/include/footer');
                         
    }
    public function abmoins()
    {
        
        $title['title'] = 'Groupe sanguin AB-';
        $this->load->view('Admin/include/header', $title)
                   ->view('Admin/include/sidebar')
                   ->view('Admin/groupesanguin/abmoins')
                   ->view('Admin/include/footer');
                         
    }
    public function abplus()
    {
        
        $title['title'] = 'Groupe sanguin AB+';
        $this->load->view('Admin/include/header', $title)
                   ->view('Admin/include/sidebar')
                   ->view('Admin/groupesanguin/abplus')
                   ->view('Admin/include/footer');
                         
    }

}