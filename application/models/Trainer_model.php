<?php
Class Trainer_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function list_all_trainer()
    {
      $query = $this->db->order_by('angkatan', 'DESC')
                        ->get_where('trainer', array('hapus' => 0));

      $data = $query->result();
      return $data;
    }

    public function detail_trainer($email)
    {
      $query = $this->db->get_where('trainer', array('email' => $email));
      $data = $query->result();
      return $data;
    }

    public function update_trainer($id, $data)
    {
    
      $this->db->set($data)->where('id', $id)->update('trainer');
    }

    public function tambah_trainer($data, $email, $pass) 
    {
      $this->db->insert('trainer', $data);

      $self = array(
        'email' => $email,
        'pass' => md5($pass),
        'role' => 'trainer'
      );

      $this->db->insert('user', $self);
    }

    public function hapus_trainer($id)
    {
      $this->db->set('hapus', 1);
      $this->db->where('id', $id);
      $this->db->update('trainer');

      $this->db->set('hapus', 1);
      $this->db->where('id', $id);
      $this->db->update('user');
    }
}

?>
