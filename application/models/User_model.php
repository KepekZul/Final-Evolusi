<?php
Class User_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function register($data, $user) 
    {
      $this->db->insert('mahasiswa', $data);
      $this->db->insert('user', $user);
    }

    public function checknrp($nrp)
    {
      $query = $this->db->select('nrp')
                        ->from('mahasiswa')
                        ->where('nrp', $nrp)
                        ->get();
      $data = $query->result();
      return $data;
    }

    public function checkhp($hp)
    {
      $query = $this->db->select('hp')
                        ->from('mahasiswa')
                        ->where('hp', $hp)
                        ->get();
      $data = $query->result();
      return $data;
    }

    public function checkemail($email)
    {
      $query = $this->db->select('email')
                        ->from('mahasiswa')
                        ->where('email', $email)
                        ->get();
      $data = $query->result();
      return $data;
    }

     public function list_all_user()
    {
      $query = $this->db->order_by('angkatan', 'DESC')
                        ->get_where('mahasiswa', array('hapus' => 0));

      $data = $query->result();
      return $data;
    }

     public function update_user($email, $data)
    {
    
      $this->db->set($data)->where('email', $email)->update('mahasiswa');
    }

     public function detail_user($email)
    {
      $query = $this->db->get_where('mahasiswa', array('email' => $email));
      $data = $query->result();
      return $data;
    }

    public function get_userid($email)
    {
      $query = $this->db->select('email')
                        ->from('mahasiswa')
                        ->where('email', $email)
                        ->get();
      $data = $query->row()->email;
      return $data;
    }

    

    public function hapus_user($email)
    {
      $this->db->set('hapus', 1);
      $this->db->where('email', $email);
      $this->db->update('mahasiswa');

      $this->db->set('hapus', 1);
      $this->db->where('email', $email);
      $this->db->update('user');
    }

    public function tambah_request($data) 
    {
      $this->db->insert('training', $data);
    }

    public function list_request($email) 
    {
      $query = $this->db->get_where('training', array('email' => $email));
      $data = $query->result();
      return $data;
    }

    public function list_requests() 
    {
      $query = $this->db->get('training');
      $data = $query->result();
      return $data;
    }


    public function get_requestid($id)
    {
      $query = $this->db->select('id')
                        ->from('training')
                        ->where('id', $id)
                        ->get();
      $data = $query->row()->id;
      return $data;
    }

    public function request_detail($id) 
    {
      $query = $this->db->get_where('training', array('id' => $id));
      $data = $query->row();
      return $data;
    }

    public function get_confirmedby($email) 
    {
      $query = $this->db->select('nama, hp')
                        ->from('trainer')
                        ->where('email', $email)
                        ->get();
      $data = $query->row();
      return $data;
    }

     public function request_terima($id, $nama, $hp) 
     {
        $this->db->set('status', 1);
        $this->db->where('id', $id);
        $this->db->update('training');

        $data = array('confirmedby' => $nama, 'noconfirmedby' => $hp);

        $this->db->where('id', $id);
        $this->db->update('training', $data);
     }

      public function request_tolak($id, $nama, $hp) 
     {
        $this->db->set('status', 2);
        $this->db->where('id', $id);
        $this->db->update('training');

        $data = array('confirmedby' => $nama, 'noconfirmedby' => $hp);

        $this->db->where('id', $id);
        $this->db->update('training', $data);
     }
    
}

?>
