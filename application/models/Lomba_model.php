<?php
Class Lomba_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function list_all_lomba()
    {
      $query = $this->db->query("set @no = 0;");
      $query = $this->db->query("select *, @no:=@no+1 as nomor from lomba where hapus = 0 order by tanggal desc");
      $data = $query->result();
      return $data;
    }

    public function list_lomba($kategori, $start, $jumlah)
    {
      $s = $start - 1;
      if($kategori == 'all')
        $query = $this->db->query("select * from lomba where hapus = 0 order by tanggal desc limit $s, $jumlah ");
      else
        $query = $this->db->query("select * from lomba where hapus = 0 order by tanggal desc where kategori = '$kategori' limit $s, $jumlah ");
      $data = $query->result();
      return $data;
    }

    public function detail_lomba($id)
    {
      //$id = $this->input->post('id');
      $query = $this->db->query("select * from lomba where id = '$id'");
      $data = $query->result();
      return $data;
    }

    public function jumlah_lomba($kategori)
    {
      if ($kategori == 'all') {
        $query = $this->db->query("select count(1) as jumlah from lomba where hapus = 0");
      }
      else {
        $query = $this->db->query("select count(1) as jumlah from lomba where hapus = 0 and kategori = '$kategori' ");
      }

      $data = $query->result();
      foreach($data as $dat)
      {
        $hasil = $dat->jumlah;
      }
      return $hasil;
    }

    public function tambah_lomba($judul, $kategori, $isi, $nmfile)
    {
      $query = $this->db->query("insert into lomba(judul, kategori, isi, foto, tanggal) value('$judul', '$kategori', '$isi', '$nmfile', NOW());");
    }

    public function update_lomba($id, $judul, $kategori, $isi)
    {
      $query = $this->db->query("update lomba set judul = '$judul', kategori = '$kategori', isi = '$isi' where id = '$id'");
    }

    public function hapus_lomba($id)
    {
      $query = $this->db->query("update lomba set hapus = 1 where id = '$id'");
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
