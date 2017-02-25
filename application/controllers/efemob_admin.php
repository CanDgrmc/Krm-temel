<?php
/**
 *
 */
class efemob_admin extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
  }
  function login(){
    $this->load->view('login_content');
  }
  function log_me_in(){
    $username=$this->input->post('username');
    $password=$this->input->post('password');
    if ($username==='adminefemob' && $password==='efemob123') {
      $data=array(
        'username'=>$username,
        'is_logged_in'=>true
      );
      $this->session->set_userdata($data);
      redirect('efemob_admin/panel');
    }
    else{
      echo "yanlış";
    }
  }
  # Yönetim Paneli
  function panel(){
    $data['Title']='Yönetim Paneli';
    $is_logged_in=$this->session->userdata('is_logged_in');
    if(!isset($is_logged_in)){
      die('Giriş izniniz bulunmamaktadır');
    }
    else {
    $this->load->model('urunler_model');
    $data['urunler']=$this->urunler_model->urunall();
    $this->load->model('kategoriler_model');
    $data['kategoriler']=$this->kategoriler_model->kategoriler();
    $this->load->view('header',$data);
    $this->navbar();
    $this->load->view('panel',$data);
    $this->load->view('footer');
}

  }
  function logout(){
    $this->session->sess_destroy();
    redirect('efemob_admin/login');
  }

  # Menü
  public function navbar(){
    $this->load->model('kategoriler_model');
    $data['kategoriler']=$this->kategoriler_model->kategoriler();
    $this->load->view('navbar',$data);
  }
  # Yeni Ürün Ekleme
  public function urunEkle(){
  $this->upload();
  }
  public function upload(){
  $config['upload_path']='./images/photos/';
  $config['allowed_types']='jpg|jpeg|gif|png';
  $config['max_filename']='50';

  $newFileName = $_FILES['userfile']['name'];
  $tmp = explode(".", $newFileName);
  $fileExt=end($tmp);
  $filename = md5(time()).".".$fileExt;

  //set filename in config for upload
  $config['file_name'] = $filename;
  $this->load->library('upload',$config);
  $urunadi=$this->input->post('urunad');
  $aciklama=$this->input->post('aciklama');
  $stokdurum=$this->input->post('stokdurum');
  if (! $this->upload->do_upload() && empty($urunadi) || empty($aciklama)) {
    $error=array('error'=>$this->upload->display_errors());
  }
  else{

    $file_data=$this->upload->data();
    $data['img']= 'images/photos/'.$file_data['file_name'];
    $data['urun_adi']=$this->input->post('urunad');
    $data['aciklama']=$this->input->post('aciklama');
    $data['stokdurum']=$this->input->post('stokdurum');
    $data['kategori_id']=$this->input->post('kategori');
    $this->load->model('urunler_model');
    $this->urunler_model->urunEkle($data);
    $this->success();
    echo $data['img'];
  }
  }
  # Başarılı Upload Sayfası
  private function success(){
    $data['Title']='Başarılı Giriş..';
    $this->load->view('header',$data);
    $this->load->view('navbar');
    $this->load->view('success');
    $this->load->view('footer');
  }

  # Kategori Ekleme
  public function kategoriEkle(){
    $this->uploadCat();
  }
  private function uploadCat(){
    $data['kategori_adi']=$this->input->post('ykategoriad');
    if (!empty($data['kategori_adi'])){
    $this->load->model('kategoriler_model');
    $this->kategoriler_model->kategoriEkle($data);
    $this->success();
  }
  else {
    $alert="Boş Alan";
    $this->panel($alert);
  }
  }
  public function urunsil(){
    $data=$this->input->get('id');
    $this->load->model('urunler_model');
    $this->urunler_model->urunSil($data);
    $this->panel();
  }
  public function urunEdit(){
    $id=$this->input->post('upid');
    $data['urun_adi']=$this->input->post('upurunadi');
    $data['aciklama']=$this->input->post('upaciklama');
    $data['kategori_id']=$this->input->post('upkategori');
    $data['stokdurum']=$this->input->post('upstok');
    if (isset($data)) {
      $this->load->model('urunler_model');
      $this->urunler_model->urunUpdate($id,$data);
    }
  }
}
