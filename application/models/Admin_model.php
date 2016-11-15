<?php
Class Admin_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function login($email, $pass)
      {
          $query = $this->db->query("select role from user where email = '$email' and pass = md5('$pass')");
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

	/*
	--untuk hasilkan query
	public function nama_fungsi($parameter1, $parameter2)
    {
        $query_ = $this->db->query("query statement");
        $data = $query->result();
        return $data;
    }
	*/
}

?>
