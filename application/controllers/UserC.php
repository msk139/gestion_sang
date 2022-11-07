<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
   class UserC extends CI_Controller
   {
      public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    
    }


    public function index(){
        
        return $this->load->view('User/accueil');
                         
    }

    public function profile(){

       return $this->load->view('User/profile');
    }

    public function blank(){
       return $this->load->view('User/blank') ;
    }
    public function basic_table(){
       return $this->load->view('User/basic_table') ;
    }
    public function fontawesome (){
       return $this->load->view('User/fontawesome') ;
    }
    public function map_google (){
       return $this->load->view('User/map_google') ;
    }
    public function file_not_found (){
       return $this->load->view('User/404') ;
    }
    
}
?>
