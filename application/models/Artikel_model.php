<?php
Class Artikel_model extends CI_Model{

    public function __construct()
    {
      parent::__construct();
      $this->load->database();
    }

    public function list_all_artikel()
    {
      $query = $this->db->order_by('tanggal', 'DESC')
                        ->get_where('artikel', array('hapus' => 0, 'jenis' => 1));
      $data = $query->result();
      return $data;
    }

    public function get_id($id)
    {
      $query = $this->db->select('id')
                        ->from('artikel')
                        ->where('id', $id)
                        ->where('jenis', 1)
                        ->get();
      $data = $query->row()->id;
      return $data;
    }

    public function list_artikel($kategori, $start, $jumlah)
    {
      $s = $start - 1;
      if($kategori == 'all')
      {
        $query = $this->db->order_by('tanggal', 'DESC')
                          ->get_where('artikel', array('hapus' => 0, 'jenis' => 1), $s, $jumlah); 
      }
      else
      {
        $query = $this->db->order_by('tanggal', 'DESC')
                          ->get_where('artikel', array('kategori'=>$kategori,'hapus' => 0, 'jenis' => 1), $s, $jumlah); 
      }
        
      $data = $query->result();
      return $data;
    }

    public function detail_artikel($id)
    {
      $query = $this->db->get_where('artikel', array('id' => $id, 'jenis' => 1));
      $data = $query->result();
      return $data;
    }

    public function jumlah_artikel($kategori)
    {
      if ($kategori == 'all') 
      {
        $query = $this->db->where('hapus', 0)
                           ->where('jenis', 1)
                           ->from('artikel')
                           ->count_all_results(); 
        return $query;
      }
      else 
      {
        $query = $this->db->where('hapus', 0)
                           ->where('jenis', 1)
                           ->where('kategori', $kategori)
                           ->from('artikel')
                           ->count_all_results(); 
        return $query;
      }
    }

    public function tambah_artikel($judul, $kategori, $isi, $nmfile)
    {
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

    public function update_artikel($id, $judul, $kategori, $isi, $nmfile)
    {
      $data = array(
        'judul' => $judul,
        'kategori' => $kategori,
        'isi' => $isi,
        'foto' => $nmfile
      );

      $this->db->where('id', $id);
      $this->db->where('jenis', 1);
      $this->db->update('artikel', $data);
    }

    public function hapus_artikel($id)
    {
      $this->db->set('hapus', 1);
      $this->db->where('id', $id);
      $this->db->where('jenis', 1);
      $this->db->update('artikel', $data);
    }
	
}

?>
