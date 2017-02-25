<?php

class urunler_model extends CI_Model {

    function urunall(){
      $query= $this->db->get('urunler');
        return $query->result();
    }
    public function urunEkle($data){
      $this->db->insert('urunler',$data);
    }
    public function urunSil($data){
      $this->db->from('urunler');
      $this->db->where('id', $data);
      $this->db->delete();

    }
    public function urunUpdate($id,$data){
      $this->db->where('id', $id);
      $this->db->update('urunler',$data);

    }
}
