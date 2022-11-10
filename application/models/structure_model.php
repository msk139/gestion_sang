<?php 
class structure_model extends CI_Model 
{

      //Inserer dans la base de donnée
	public function insert_data()
    {
		$data = array('nom_structure' => $this->input->post('nom_structure'),
                      'lieu_structure' => $this->input->post('lieu_structure'),
                    );

                    $this->db->insert('structure_de_sante', $data);
	}

       //Recuperer les noms
    public function getAllData()
    {
        $query =$this->db->query('SELECT * FROM structure_de_sante');
        return $query->result();
    }

    //Modifier
    public function edit($id)
    {
      $this->db->select('*');
      $this->db->where('id_structure', $id);
      $row = $this->db->get('structure_de_sante');
      return $row->row_array();
    }

    // Mise à jour
    public function update($id) 
    {
        $data= array('nom_structure' => $this->input->post('nom_structure'),
                     'lieu_structure' => $this->input->post('lieu_structure'),
         );
         $this->db->where('id_structure', $id);
         $this->db->update('structure_de_sante', $data);
    }
    
     //Supprimer
    public function delete($id)
    {
        $this->db->where('id_structure', $id);
        $this->db->delete('structure_de_sante');   
    }
}
