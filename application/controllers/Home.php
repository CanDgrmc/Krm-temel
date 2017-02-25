<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller{
    public function index(){
      $this->homepage();
    }
    public function navbar(){
      $this->load->model('kategoriler_model');
      $data['kategoriler']=$this->kategoriler_model->kategoriler();
      $this->load->view('navbar',$data);
    }
    public function Homepage(){
    $data['Title']='Anasayfa';
    $this->load->view('header',$data);
    $this->navbar();
    $this->load->model('urunler_model');
    $data['urunler']=$this->urunler_model->urunall();
    $this->load->view('home_content', $data);
    $this->load->view('footer');
  }
  public function about(){
    $data['Title']='Hakkımızda';
    $this->load->view('header',$data);
    $this->navbar();
    $this->load->view('about_content');
    $this->load->view('footer');
  }
  public function contact(){
    $data['Title']='İletişim';
    $this->load->view('header',$data);
    $this->navbar();
    $this->load->view('contact_content');
    $this->load->view('footer');
  }
  public function urunler(){
    $this->load->model('kategoriler_model');
    $data['kategoriler']=$this->kategoriler_model->kategoriler();
    $this->load->model('urunler_model');
    $data['urunler']=$this->urunler_model->urunall();
    $data['Title']='Ürünler';
    $this->load->view('header',$data);
    $this->navbar();
    $this->load->view('urunler_content');
    $this->load->view('footer');
  }

  public function kategori_sirala(){
    $kategoriid=$this->input->get('id');
    $data['Title']='Kategoriye Göre ';
    $this->load->view('header',$data);
    $this->navbar();
    $this->load->model('kategoriler_model');
    $data['kategoriyegore'] =$this->kategoriler_model->kategoriyegore($kategoriid);
    $this->load->view('kategorisirala_content',$data);
    $this->load->view('footer');
  }
  
}
