<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Groups_sang_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    function createData() {
        $data = array (
            'nom_rhesus' => $this->input->post('nom_rhesus'),
        );
        $this->db->insert('groupe_sanguin ', $data);
    }

    function getAllData() {
        $query = $this->db->query('SELECT * FROM groupe_sanguin');
        return $query->result();
    }

    function getData($id) {
        $query = $this->db->query('SELECT * FROM groupe_sanguin  WHERE `id_groupe_sanguin` =' .$id);
        return $query->row();
    }

    function updateData($id) {
        $data = array (
            'nom_rhesus ' => $this->input->post('nom_rhesus'),
        );
        $this->db->where('id_groupe_sanguin', $id);
        $this->db->update('groupe_sanguin', $data);
    }

    function deleteData($id) {
        $this->db->where('id_groupe_sanguin', $id);
        $this->db->delete('groupe_sanguin');
    }
}
