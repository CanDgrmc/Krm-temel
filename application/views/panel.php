<div class="container">
    <div class="adminpanel col-md-12 col-xs-12">
    <div class="col-md-4 col-xs-12">
      <ul>


      <li><button type="button"  class="btn-lg  col-md-12 col-xs-12" id="add"><i class="glyphicon glyphicon-plus"></i> Yeni Ürün Girişi</button>
        <ul class="form-group form well">
            <?php echo form_open_multipart('efemob_admin/upload')?>
            <li><label for="urunad">Ürün Adı: </label> <input type="text" name="urunad" id="urunad" class="form-control"></li>
            <li><label for="kategori">Kategori:</label><select class="form-control" name="kategori">
              <?php
              foreach ($kategoriler as $kategori) {
                $id=$kategori->id;
                $kategoriadi=$kategori->kategori_adi;
                echo "<option value='".$id."'>";
                echo $kategoriadi;
                echo "</option>";
              }
              ?>

            </select></li>
            <li><label for="aciklama">Açıklama:</label>  <textarea name="aciklama" rows="8" cols="30" id="aciklama" class="form-control"></textarea></li>
            <li><label for="stok">Stok Durumu:</label> <select class="form-control" name ="stokdurum" id="stokdurum">
                <option value="1">Var</option>
                <option value="0">Yok</option>

            </select></li>


            <li><input type="file" name="userfile" id="img" class="form-control"></li><br>
            <li><input type="submit" name="name" value="Ekle" class="btn btn-default"></li>

          </form>
        </ul>
      </li>
      <li><button type="button" class="btn-lg  col-md-12  col-xs-12" id="edit"><i class="glyphicon glyphicon-pencil"></i> Ürün Düzenle</button>

      </li>
      <li><button type="button" class="btn-lg  col-md-12 col-xs-12" id="newcat"><i class="glyphicon glyphicon-plus-sign"></i> Yeni Kategori</button>
      <ul class="form-group form well">

          <select class="form-control" multiple>


            <?php
            foreach ($kategoriler as $kategori) {
              $id=$kategori->id;
              $kategoriadi=$kategori->kategori_adi;
              echo "<option>";
              echo $kategoriadi;
              echo "</option>";
            }
            ?>
          </select><br>
          <form class="" action="<?php echo base_url();?>efemob_admin/kategoriEkle" method="post">
          <li><label for="ykategoriad">Kategori Adı: </label> <input type="text" name="ykategoriad" class="form-control"></li><br>
          <input type="submit" id="kategoriekle" value="Ekle" class="btn btn-default">
        </form>
      </ul>
      </li>
      <li><a href="<?php echo base_url(); ?>efemob_admin/logout" class="btn btn-danger btn-lg col-md-12  col-xs-12"><i class="glyphicon glyphicon-off"></i> Çıkış</a></button></li>
    </div></ul>
    <div class="urunedit col-md-8 col-xs-12 well">
      <form  action="<?php echo base_url(); ?>efemob_admin/urunEdit" method="post" class="form-group">
        <label for="upid">Urun Kodu:</label><input type="text" name="upid" class="form-control" id="upid">
        <label for="upurunadi">Urun Adi:</label><input type="text" name="upurunadi" class="form-control">
        <label for="upaciklama">Açıklama:</label><textarea name="upaciklama" class="form-control"></textarea>
        <label for="upstok">Stok:</label>
        <select class="form-control" name="upstok">
        <option value="1">Var</option>
        <option value="0">Yok</option>
        </select>
      <label for="upkategori">Kategori:</label>
        <select class="form-control" name="upkategori" >

          <?php
          foreach ($kategoriler as $kategori) {
            $kategoriid=$kategori->id;
            $kategoriadi=$kategori->kategori_adi;
             echo '<option value="'.$kategoriid.'">';
             echo $kategoriadi;
             echo "</option>";
          }
          ?>
        </select><br>
        <input type="submit"  value="Bilgileri Değiştir" class="btn btn-warning col-md-12">
      </form>
    </div>
    <div class="col-md-8 col-md-offset-4 col-xs-12">
      <br><table class="table table-bordered well">
        <tr>
          <th>
              Ürün Kodu
          </th>
          <th>
              Ürün Adı
          </th>
          <th>
              Stok Durumu
          </th>
          <th>
              Foto
          </th>
          <th>
            Etkinlik
          </th>
        </tr>
        <?php
        foreach ($urunler as $urun) {
          $urunid=$urun->id;
          $urunadi=$urun->urun_adi;
          $stok=$urun->stokdurum;
          $img=$urun->img;
          echo "<tr>";
          echo '<th>'.$urunid.'</th>';
          echo '<th>'.$urunadi.'</th>';
          if ($stok==1) {
          echo '<th class="text text-success">Var</th>';
          }
          else {
          echo '<th class="text text-danger">Yok</th>';
          }
          echo '<th><a href="'.base_url().$img.'"><img src="'.base_url().$img.'" height="50"></a></th>';
          echo '<th><a href="'.base_url().'efemob_admin/urunsil?id='.$urunid.'"><i class="glyphicon glyphicon-remove text-danger"></i></a>  <i class="glyphicon glyphicon-pencil editinfo" urunid="'.$urunid.'"></i>';
          echo '</th>';
          echo "</tr>";
        }

        ?>
      </table>
    </div>
  </div>
  <script type="text/javascript">
    $('#add').on('click',function(){
      $(this).parent().children('.form').slideToggle();
    })
    $('#newcat').on('click',function(){
      $(this).parent().children('.form').slideToggle();
    })
    $('#edit').on('click', function(){
      $('.urunedit').slideToggle();
    })
    $('.editinfo').on('click', function(){
        $('.urunedit').show();
      var $urunid=$(this).attr('urunid');
      $('#upid').val($urunid).focus();

    })

  </script>
</div>
