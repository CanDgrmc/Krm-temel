<?php
  header( "refresh:2; url=http://localhost:8080/efemob/efemob_admin/panel" );
?>
<div class="container">
  <div class="well col-md-6 col-md-offset-3">
    <h4 class="text text-success">Ürün Başarıyla Eklendi.. <strong></strong> sn sonra yönlendiriliyorsunuz..</h4>
  </div>
</div>
<script type="text/javascript">
$(window).load(function(){
    var sure=2
    setInterval(function(){
      $('strong').html(sure);
      --sure;
    },1000);
  })
</script>
