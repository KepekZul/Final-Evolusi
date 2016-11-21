<?php
Class Lomba_model extends CI_Model{

    public function __construct()
    {
      parent::__construct();
      $this->load->database();
    }

    public function list_all_lomba()
    {
      $query = $this->db->order_by('tanggal', 'DESC')
                        ->get_where('artikel', array('hapus' => 0, 'jenis' => 3));

      $data = $query->result();
      return $data;
    }

    public function list_lomba($kategori, $start, $jumlah)
    {
      $s = $start - 1;
      if($kategori == 'all')
      {
        $query = $this->db->order_by('tanggal', 'DESC')
                          ->get_where('artikel', array('hapus' => 0, 'jenis' => 3), $s, $jumlah);                  
      }
      else
      {
        $query = $this->db->order_by('tanggal', 'DESC')
                          ->get_where('artikel', array('kategori'=>$kategori,'hapus' => 0, 'jenis' => 3), $s, $jumlah); 
      }

      $data = $query->result();
      return $data;
    }

    public function detail_lomba($id)
    {
      $query = $this->db->get_where('artikel', array('id' => $id, 'jenis' => 3));
      $data = $query->result();
      return $data;
    }
    public function jumlah_lomba($kategori)
    {
      if ($kategori == 'all') 
      {
         $query = $this->db->where('hapus', 0)
                           ->where('jenis', 3)
                           ->from('artikel')
                           ->count_all_results(); 
        return $query;
      }
      else 
      {
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
      $this->db->set('hapus', 1);
      $this->db->where('id', $id);
      $this->db->where('jenis', 3);
      $this->db->update('artikel');
    }
}

?>
