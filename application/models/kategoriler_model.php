<?php


class Kategoriler_model extends CI_Model
{
  function kategoriler(){
    $query= $this->db->get('kategoriler');
    return $query->result();
  }
  function kategoriyegore($id){
    $this->db->select('id, urun_adi, stokdurum, aciklama, img');
    $this->db->from('urunler');
    $this->db->where('kategori_id',$id);
    $query=$this->db->get();

    if ($query->num_rows()>=1) {
      return $query->result();
    }
    else {
      return false;
    }
  }
  function kategoriEkle($data){
    $this->db->insert('kategoriler',$data);
  }
}
