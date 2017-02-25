<div class="container well">

<?php
  if ($kategoriyegore){
    foreach ($kategoriyegore as $urunler) {
     $stok=$urunler->stokdurum;
     $urunid=$urunler->id;
     $urunadi=$urunler->urun_adi;
     $aciklama=$urunler->aciklama;
     $foto=$urunler->img;
     echo '<div class="thumbkapla col-md-3 col-xs-6">';
     echo '<div class="thumbnail">';
     echo "<div class='imgclass'>";
     echo '<img src="'.base_url().''.$foto.'" alt=".."></div>';
     echo '<div class="caption">';
     echo '<h5 class="text text-default">Ürün Kodu: #'.$urunid.'</h5>';
     echo '<h4>'.$urunadi.'</span></h4>';
     if ($stok==1){
       echo '<p>Stok Durumu: <strong class="text text-success">Stokta Var</strong></p>';
     }
     else{
       echo '<p>Stok Durumu: <strong class="text text-danger">Stokta Yok</strong></p>';
     }

     echo '<p><a href="'.base_url().'home/urunsayfa?id='.$urunid.'" class="btn btn-success"> Ürünü İncele </a></p> ';
     echo '</div></div></div>';
  }
  }
  else {
    echo '<p class="alert alert-danger">';
    echo 'Bu Kategoriye Ait Ürün Henüz Bulunmamakta.. Daha Sonra Tekrar Ziyaret Ediniz..';
    echo '</p>';
  }?>
</div>
