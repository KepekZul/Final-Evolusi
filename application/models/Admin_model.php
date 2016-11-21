<?php
Class Admin_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function login($email, $pass)
      {
          $this->db->select('role')
                   ->from('user')
                   ->where('email',$email)
                   ->where('pass',md5($pass));
          $query = $this->db->get();  

          $data = $query->result();
          if ($data == NULL) {
            return NULL;
          }
          else {
            foreach($data as $dat)
            {
              return $dat->role;
            }
          }
      }
}

?>
