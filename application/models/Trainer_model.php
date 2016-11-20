<?php
Class Trainer_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function list_all_trainer()
    {
      // $query = $this->db->query("set @no = 0;");
      // $query = $this->db->query("select *, @no:=@no+1 as nomor from trainer where hapus = 0 order by angkatan");
       $query = $this->db->order_by('angkatan', 'DESC')
                        ->get_where('trainer', array('hapus' => 0));

      $data = $query->result();
      return $data;
    }

    public function detail_trainer($email)
    {
      // $query = $this->db->query("select * from trainer where email = '$email'");
       $query = $this->db->get_where('trainer', array('email' => $email));
      $data = $query->result();
      return $data;
    }

    public function update_trainer($id, $data)
    {
      // query = $this->db->query("
      //     update trainer set
      //       nama = '$nama', nrp = '$nrp', angkatan = '$angkatan',
      //       jurusan = '$jurusan', fakultas = '$fakultas', hp = '$hp', email = '$email',
      //       asal_kota = '$asal_kota', asal_provinsi = '$asal_provinsi', line = '$line', twitter = '$twitter', facebook = '$facebook'
      //     where id = '$id';
      //   ");
      $this->db->set($data)->where('id', $id)->update('trainer');
    }

    public function tambah_trainer($data, $email, $pass) 
    {
      // $query = $this->db->query("
      //     insert into trainer(nama, nrp, angkatan, jurusan, fakultas, hp, email, asal_kota, asal_provinsi, line, twitter, facebook)
      //     value('$nama', '$nrp', '$angkatan', '$jurusan', '$fakultas', '$hp', '$email', '$asal_kota', '$asal_provinsi', '$line', '$twitter', '$facebook');
      //   ");

       // $query = $this->db->query("
      //     insert into user(email, pass, role)
      //     value('$email', md5('$pass'), 'trainer');
      //   ");
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
      // $query = $this->db->query("update trainer set hapus = 1 where id = '$id'");
      $this->db->set('hapus', 1);
      $this->db->where('id', $id);
      $this->db->update('trainer');
    }
}

?>
