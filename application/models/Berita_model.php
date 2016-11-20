<?php
Class Berita_model extends CI_Model{

     public function __construct()
    {
      parent::__construct();
      $this->load->database();
    }

    public function list_all_berita()
    {
      // $query = $this->db->query("set @no = 0;");
      // $query = $this->db->query("select *, @no:=@no+1 as nomor from berita where hapus = 0 order by tanggal desc");
      $query = $this->db->order_by('tanggal', 'DESC')
                        ->get_where('artikel', array('hapus' => 0, 'jenis' => 2));
                        
      $data = $query->result();
      return $data;
    }

    public function list_berita($kategori, $start, $jumlah)
    {
      $s = $start - 1;
      if($kategori == 'all')
      {
        //$query = $this->db->query("select * from berita where hapus = 0 order by tanggal desc limit $s, $jumlah ");
         $query = $this->db->order_by('tanggal', 'DESC')
                           ->get_where('artikel', array('hapus' => 0, 'jenis' => 2), $s, $jumlah);
      }
      else
      {
        // $query = $this->db->query("select * from berita where hapus = 0 order by tanggal desc where kategori = '$kategori' limit $s, $jumlah ");
        $query = $this->db->order_by('tanggal', 'DESC')
                          ->get_where('artikel', array('kategori'=>$kategori,'hapus' => 0, 'jenis' => 2), $s, $jumlah); 
      }
      $data = $query->result();
      return $data;
    }

    public function detail_berita($id)
    {
      //$query = $this->db->query("select * from berita where id = '$id'");
      $query = $this->db->get_where('artikel', array('id' => $id, 'jenis' => 2));
      $data = $query->result();
      return $data;
    }

    public function jumlah_berita($kategori)
    {
      if ($kategori == 'all') 
      {
        // $query = $this->db->query("select count(1) as jumlah from berita where hapus = 0 ");
        $query = $this->db->where('hapus', 0)
                           ->where('jenis', 2)
                           ->from('artikel')
                           ->count_all_results(); 
        return $query;
      }
      else {
        //$query = $this->db->query("select count(1) as jumlah from berita where kategori = '$kategori' and hapus = 0 ");
        $query = $this->db->where('hapus', 0)
                           ->where('jenis', 2)
                           ->where('kategori', $kategori)
                           ->from('artikel')
                           ->count_all_results(); 
        return $query;
      }
    }

    public function tambah_berita($judul, $kategori, $isi, $nmfile)
    {
      // $query = $this->db->query("insert into berita(judul, kategori, isi, foto, tanggal) value('$judul', '$kategori', '$isi', '$nmfile', NOW());");
      $data = array(
        'judul' => $judul,
        'kategori' => $kategori,
        'isi' => $isi,
        'jenis' => 2,
        'foto' => $nmfile,
        'tanggal' => date('Y-m-d')
      );

      $this->db->insert('artikel', $data);
    }

    public function update_berita($id, $judul, $kategori, $isi)
    {
      //$query = $this->db->query("update Berita set judul = '$judul', kategori = '$kategori', isi = '$isi' where id = '$id'");
      $data = array(
        'judul' => $judul,
        'kategori' => $kategori,
        'isi' => $isi
      );

      $this->db->where('id', $id);
      $this->db->where('jenis', 2);
      $this->db->update('artikel', $data);
    }

    public function hapus_berita($id)
    {
        //$query = $this->db->query("update berita set hapus = 1 where id = '$id'");
      $this->db->set('hapus', 1);
      $this->db->where('id', $id);
      $this->db->where('jenis', 2);
      $this->db->update('artikel');
    }
}

?>
