<?php
Class Artikel_model extends CI_Model{

    public function __construct()
    {
      parent::__construct();
      $this->load->database();
    }

    public function list_all_artikel()
    {
      //$query = $this->db->query("select *, @no:=@no+1 as nomor from artikel where hapus = 0 order by tanggal desc");
      $query = $this->db->order_by('tanggal', 'DESC')
                        ->get_where('artikel', array('hapus' => 0, 'jenis' => 1));
      $data = $query->result();
      return $data;
    }

    public function list_artikel($kategori, $start, $jumlah)
    {
      $s = $start - 1;
      if($kategori == 'all')
        //$query = $this->db->query("select * from artikel where hapus = 0 order by tanggal desc limit $s, $jumlah ");
        $query = $this->db->order_by('tanggal', 'DESC')
                          ->get_where('artikel', array('hapus' => 0, 'jenis' => 1), $s, $jumlah); 
      else
        // $query = $this->db->
        //           query("select * from artikel where hapus = 0 order by tanggal desc where kategori = '$kategori' limit $s, $jumlah ");
        $query = $this->db->order_by('tanggal', 'DESC')
                          ->get_where('artikel', array('kategori'=>$kategori,'hapus' => 0, 'jenis' => 1), $s, $jumlah); 
        
      $data = $query->result();
      return $data;
    }

    public function detail_artikel($id)
    {
      //$id = $this->input->post('id');
      $query = $this->db->get_where('artikel', array('id' => $id, 'jenis' => 1));
      $data = $query->result();
      return $data;
    }

    public function jumlah_artikel($kategori)
    {
      if ($kategori == 'all') {
        //$query = $this->db->query("select count(1) as jumlah from artikel where hapus = 0 ");
        $query = $$this->db->where('hapus', 0)
                           ->where('jenis', 1)
                           ->from('artikel')
                           ->count_all_results(); 
        return $query;
      }
      else {
        //$query = $this->db->query("select count(1) as jumlah from artikel where kategori = '$kategori' and where hapus = 0 ");
        $query = $$this->db->where('hapus', 0)
                           ->where('jenis', 1)
                           ->where('kategori', $kategori)
                           ->from('artikel')
                           ->count_all_results(); 
        return $query;
      }
    }

    public function tambah_artikel($judul, $kategori, $isi, $nmfile)
    {
      // $query = $this->db->query("insert into artikel(judul, kategori, isi, foto, tanggal) value('$judul', '$kategori', '$isi', '$nmfile', NOW());");
      $data = array(
        'judul' => $judul,
        'kategori' => $kategori,
        'isi' => $isi,
        'jenis' => 1,
        'foto' => $nmfile,
        'tanggal' => date('Y-m-d')
      );

      $this->db->insert('artikel', $data);
    }

    public function update_artikel($id, $judul, $kategori, $isi)
    {
      //$query = $this->db->query("update Artikel set judul = '$judul', kategori = '$kategori', isi = '$isi' where id = '$id'");
      $data = array(
        'judul' => $judul,
        'kategori' => $kategori,
        'isi' => $isi
      );

      $this->db->where('id', $id);
      $this->db->where('jenis', 1);
      $this->db->update('artikel', $data);
    }

    public function hapus_artikel($id)
    {
      //$query = $this->db->query("update Artikel set hapus = 1 where id = '$id'");
      $this->db->set('hapus', 1);
      $this->db->where('id', $id);
      $this->db->where('jenis', 1);
      $this->db->update('artikel', $data);
    }
	
}

?>
