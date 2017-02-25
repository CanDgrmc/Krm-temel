<div class="container-fluid">

    <ul class="col-md-2 nav nav-pills nav-stacked">


      <?php
      foreach ($kategoriler as $kategori) {
        $kategoriid=$kategori->id;
        $kategoriadi=$kategori->kategori_adi;
        echo '<li><a class="kategoriad" href="'.base_url().'home/kategori_sirala?id='.$kategoriid.'">';
        echo $kategoriadi;
        echo '</a></li>';
      }

      ?>
    </ul>

  <div class="urunler well col-md-10 col-xs-12">

       <?php
       foreach ($urunler as $urun){
         $urunid=$urun->id;
         $urunadi=$urun->urun_adi;
         $stok=$urun->stokdurum;
         $aciklama=$urun->aciklama;
         $foto=$urun->img;
         echo '<div class="thumbs col-md-3 col-xs-5">';
         echo "<div class='imgclass'>";
         echo '<img src="'.base_url().''.$foto.'" alt=".." ></div>';
         echo '<div class="thumbsicerik">';
         echo '<h5 class="text text-default">Ürün Kodu: #'.$urunid.'</h5>';
         echo '<h4>'.$urunadi.'</h4>';
         if ($stok==1){
           echo '<p>Stok Durumu: <strong class="text text-success">Stokta Var</strong></p>';
         }
         else{
           echo '<p>Stok Durumu: <strong class="text text-danger">Stokta Yok</strong></p>';
         }
         echo '<p class="detailsp"><a href="'.base_url().'home/urunsayfa?id='.$urunid.'" class="details"> Ürünü İncele </a></p> ';
         echo '</div></div>';

       }


       ?>



    </script>
  </div>
</div>
