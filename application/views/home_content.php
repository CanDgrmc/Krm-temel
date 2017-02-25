<style type="text/css">
.flexslider{
  max-height: 1000px;
  overflow: hidden;
}


</style>
<div class="container-fluid well">
  <div class="home col-md-12 col-xs-12">


  <div class="homeleft col-md-12 col-xs-12 well">
    <div class="flexslider">
    <ul class="slides">
      <?php
      foreach ($urunler as $urun) {
        $img=$urun->img;
        $urunad=$urun->urun_adi;
        echo '<li>';
        echo '<img src="'.base_url().$img.'"/>';
      }


      ?>


    </ul>
  </div>
  </div>
  <script type="text/javascript">
  $(window).load(function() {
$('.flexslider').flexslider({
  animation: "slide"
});
});
  </script>
  <div class="homeright col-md-12 col-xs-12 well">
    <p>
       İnsan yaşamı çeşitli mekânlar içinde geçmektedir. Bu mekânlar yapılış amaçlarına uygun olmalı, kullanıcısına gerekli konfor düzeyini sağlamalıdır. Mekân içindeki ısı, ışık, ses, renk, koku gibi fiziksel etmenler ve donatı öğeleri, kişi gereksinim ve eylemlerine göre dengeli bir biçimde kurulmalıdır. Duvar, kolon, kapı, pencere gibi yapısal bileşenler kadar donatı, aksesuar gibi mekânsal öğeler de mekân oluşturmada çok etkili rol oynar. Donatı, renk ve dokusunun seçimi ile birlikte, bunların mekân içindeki yoğunluk ve organizasyonu, o mekânın yaşanabilirliğini, olumlu ya da olumsuz yönde etkileyebilmektedir. Günümüz konutlarında mekânlar, içinde geçecek eylemlere göre bölünmüştür. Bir yemek odasında sadece yemek yeme eylemi gerçekleştirilmekte, dolayısıyla mekânlar o eylemlere olanak sağlayacak şekilde döşenmektedir. Örneğin, bir dinlenme mekânında donatıların rahat oturulabilir ve gerektiğinde uzanmaya elverişli olması gerekmektedir. Oturma düzleminin zemin etkisinden korunacak ve diz bükümünü karşılayacak kadar yükseltilmesi, omurgaya gelen baş ve kol yüklerinin başka yerlere aktarılması, dinlenmek için şarttır. Düz bir zemine oturmak dinlenme konforu açısından yetersizdir. Oturulan düzlemin kan dolaşımını kolaylaştıracak bir yumuşaklıkta olması, omurgadaki basıncı azaltmak için sırtın bir yere dayanması kol ağırlıklarının kolçak, yastık gibi bir elemana aktarılması gerekmektedir. Bunu karşılayacak elemanlar bağdaş kurulan sedirden başlayarak günümüz teknolojisinde yaratılan çok çeşitli kanepelere kadar gelmiştir.
    </p>
  </div>
</div>

</div>
