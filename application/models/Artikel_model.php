<?php
Class Artikel_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function list_all_artikel()
    {
      $query = $this->db->query("set @no = 0;");
      $query = $this->db->query("select *, @no:=@no+1 as nomor from artikel where hapus = 0 order by tanggal desc");
      $data = $query->result();
      return $data;
    }

    public function list_artikel($kategori, $start, $jumlah)
    {
      $s = $start - 1;
      if($kategori == 'all')
        $query = $this->db->query("select * from artikel where hapus = 0 order by tanggal desc limit $s, $jumlah ");
      else
        $query = $this->db->query("select * from artikel where hapus = 0 order by tanggal desc where kategori = '$kategori' limit $s, $jumlah ");
      $data = $query->result();
      return $data;
    }

    public function detail_artikel($id)
    {
      //$id = $this->input->post('id');
      $query = $this->db->query("select * from artikel where id = '$id'");
      $data = $query->result();
      return $data;
    }

    public function jumlah_artikel($kategori)
    {
      if ($kategori == 'all') {
        $query = $this->db->query("select count(1) as jumlah from artikel where hapus = 0 ");
      }
      else {
        $query = $this->db->query("select count(1) as jumlah from artikel where kategori = '$kategori' and where hapus = 0 ");
      }

      $data = $query->result();
      foreach($data as $dat)
      {
        $hasil = $dat->jumlah;
      }
      return $hasil;
    }

    public function tambah_artikel($judul, $kategori, $isi, $nmfile)
    {
      $query = $this->db->query("insert into artikel(judul, kategori, isi, foto, tanggal) value('$judul', '$kategori', '$isi', '$nmfile', NOW());");
    }

    public function update_artikel($id, $judul, $kategori, $isi)
    {
      $query = $this->db->query("update Artikel set judul = '$judul', kategori = '$kategori', isi = '$isi' where id = '$id'");
    }

    public function hapus_artikel($id)
    {
      $query = $this->db->query("update Artikel set hapus = 1 where id = '$id'");
    }

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
