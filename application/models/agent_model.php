<?php 
class agent_model extends CI_Model 
{

      //Inserer dans la base de donnée
	public function insert_data()
    {
		$data = array('nom_agent' => $this->input->post('nom_agent'),
                      'prenom_agent' => $this->input->post('prenom_agent'),
                       'email_agent' => $this->input->post('email_agent'),
                       'password_agent' => password_hash($this->input->post('password_agent'), PASSWORD_DEFAULT),
                       'confirm_password' => $this->input->post('confirm_password'),
                        'profession_agent' => $this->input->post('profession_agent'),
                    );

                    $this->db->insert('agent_de_sante', $data);
                    $msg = $this->session->flashdata('msg');
	}

       //Recuperer les noms
    public function getAllData()
    {
        $query =$this->db->query('SELECT * FROM agent_de_sante');
        return $query->result();
    }

    //Modifier
    public function edit($id)
    {
      $this->db->select('*');
      $this->db->where('id_agent', $id);
      $row = $this->db->get('agent_de_sante');
      return $row->row_array();
    }

    // Mise à jour
    public function update($id) 
    {
        $data= array('nom_agent' => $this->input->post('nom_agent'),
                     'prenom_agent' => $this->input->post('prenom_agent'),
                     'email_agent' => $this->input->post('email_agent'),
                     'password_agent' => $this->input->post('password_agent'),
                     'confirm_password' => $this->input->post('confirm_password'),
                     'profession_agent' => $this->input->post('profession_agent'),

         );
         $this->db->where('id_agent', $id);
         $this->db->update('agent_de_sante', $data);
    }
    
     //Supprimer
    public function delete($id)
    {
        $this->db->where('id_agent', $id);
        $this->db->delete('agent_de_sante');   
    }
}
