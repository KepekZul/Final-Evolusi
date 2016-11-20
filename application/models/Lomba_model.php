<?php
Class Lomba_model extends CI_Model{

    public function __construct()
    {
      parent::__construct();
      $this->load->database();
    }

    public function list_all_lomba()
    {
      // $query = $this->db->query("set @no = 0;");
      // $query = $this->db->query("select *, @no:=@no+1 as nomor from lomba where hapus = 0 order by tanggal desc");
      $query = $this->db->order_by('tanggal', 'DESC')
                        ->get_where('artikel', array('hapus' => 0, 'jenis' => 3));

      $data = $query->result();
      return $data;
    }

    public function list_lomba($kategori, $start, $jumlah)
    {
      $s = $start - 1;
      if($kategori == 'all')
        $query = $this->db->order_by('tanggal', 'DESC')
                          ->get_where('artikel', array('hapus' => 0, 'jenis' => 3), $s, $jumlah);                  
      else
        $query = $this->db->order_by('tanggal', 'DESC')
                          ->get_where('artikel', array('kategori'=>$kategori,'hapus' => 0, 'jenis' => 3), $s, $jumlah); 


      $data = $query->result();
      return $data;
    }

    public function detail_lomba($id)
    {
      //$id = $this->input->post('id');
      $query = $this->db->get_where('artikel', array('id' => $id, 'jenis' => 3));
      $data = $query->result();
      return $data;
    }
    public function jumlah_lomba($kategori)
    {
      if ($kategori == 'all') {
        // $query = $this->db->query("select count(1) as jumlah from lomba where hapus = 0");
         $query = $this->db->where('hapus', 0)
                           ->where('jenis', 3)
                           ->from('artikel')
                           ->count_all_results(); 
        return $query;
      }
      else {
        // $query = $this->db->query("select count(1) as jumlah from lomba where hapus = 0 and kategori = '$kategori' ");
         $query = $this->db->where('hapus', 0)
                           ->where('jenis', 3)
                           ->where('kategori', $kategori)
                           ->from('artikel')
                           ->count_all_results(); 
        return $query;
      }
    }

    public function tambah_lomba($judul, $kategori, $isi, $nmfile)
    {
      // $query = $this->db->query("insert into lomba(judul, kategori, isi, foto, tanggal) value('$judul', '$kategori', '$isi', '$nmfile', NOW());");
       $data = array(
        'judul' => $judul,
        'kategori' => $kategori,
        'isi' => $isi,
        'jenis' => 3,
        'foto' => $nmfile,
        'tanggal' => date('Y-m-d')
      );

      $this->db->insert('artikel', $data);
    }

    public function update_lomba($id, $judul, $kategori, $isi)
    {
      //$query = $this->db->query("update lomba set judul = '$judul', kategori = '$kategori', isi = '$isi' where id = '$id'");
      $data = array(
        'judul' => $judul,
        'kategori' => $kategori,
        'isi' => $isi
      );

      $this->db->where('id', $id);
      $this->db->where('jenis', 3);
      $this->db->update('artikel', $data);
    }

    public function hapus_lomba($id)
    {
      // $query = $this->db->query("update lomba set hapus = 1 where id = '$id'");
      $this->db->set('hapus', 1);
      $this->db->where('id', $id);
      $this->db->where('jenis', 3);
      $this->db->update('artikel');
    }
}

?>
