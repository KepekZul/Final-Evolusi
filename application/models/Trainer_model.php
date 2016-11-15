<?php
Class Trainer_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function list_all_trainer()
    {
      $query = $this->db->query("set @no = 0;");
      $query = $this->db->query("select *, @no:=@no+1 as nomor from trainer where hapus = 0 order by angkatan");
      $data = $query->result();
      return $data;
    }

    public function detail_trainer($email)
    {
      $query = $this->db->query("select * from trainer where email = '$email'");
      $data = $query->result();
      return $data;
    }

    public function update_trainer(
      $id, $nama, $nrp, $angkatan, $jurusan, $fakultas, $hp, $email, $asal_kota, $asal_provinsi, $line, $twitter, $facebook
    ) {
      $query = $this->db->query("
          update trainer set
            nama = '$nama', nrp = '$nrp', angkatan = '$angkatan',
            jurusan = '$jurusan', fakultas = '$fakultas', hp = '$hp', email = '$email',
            asal_kota = '$asal_kota', asal_provinsi = '$asal_provinsi', line = '$line', twitter = '$twitter', facebook = '$facebook'
          where id = '$id';
        ");

    }

    public function tambah_trainer(
      $nama, $nrp, $angkatan, $jurusan, $fakultas, $hp, $email, $asal_kota, $asal_provinsi, $line, $twitter, $facebook, $pass
    ) {
      $query = $this->db->query("
          insert into trainer(nama, nrp, angkatan, jurusan, fakultas, hp, email, asal_kota, asal_provinsi, line, twitter, facebook)
          value('$nama', '$nrp', '$angkatan', '$jurusan', '$fakultas', '$hp', '$email', '$asal_kota', '$asal_provinsi', '$line', '$twitter', '$facebook');
        ");
      $query = $this->db->query("
          insert into user(email, pass, role)
          value('$email', md5('$pass'), 'trainer');
        ");
    }

    public function hapus_trainer($id)
    {
      $query = $this->db->query("update trainer set hapus = 1 where id = '$id'");
    }


    // public function list_artikel($kategori, $start, $jumlah)
    // {
    //   $s = $start - 1;
    //   if($kategori == 'all')
    //     $query = $this->db->query("select * from artikel where hapus = 0 order by tanggal desc limit $s, $jumlah ");
    //   else
    //     $query = $this->db->query("select * from artikel where hapus = 0 order by tanggal desc where kategori = '$kategori' limit $s, $jumlah ");
    //   $data = $query->result();
    //   return $data;
    // }
    //

    //
    // public function jumlah_artikel($kategori)
    // {
    //   if ($kategori == 'all') {
    //     $query = $this->db->query("select count(1) as jumlah from artikel where hapus = 0 ");
    //   }
    //   else {
    //     $query = $this->db->query("select count(1) as jumlah from artikel where kategori = '$kategori' and where hapus = 0 ");
    //   }
    //
    //   $data = $query->result();
    //   foreach($data as $dat)
    //   {
    //     $hasil = $dat->jumlah;
    //   }
    //   return $hasil;
    // }
    //
    // public function tambah_artikel($judul, $kategori, $isi, $nmfile)
    // {
    //   $query = $this->db->query("insert into artikel(judul, kategori, isi, foto, tanggal) value('$judul', '$kategori', '$isi', '$nmfile', NOW());");
    // }
    //

	/*
	--untuk hasilkan query
	public function nama_fungsi($parameter1, $parameter2)
    {
        $query = $this->db->query("query statement");
        $data = $query->result();
        return $data;
    }
	*/
}

?>
