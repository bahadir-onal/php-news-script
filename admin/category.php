<?php  
require_once 'header.php';
require_once 'sidebar.php';

?>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  

  <section class="content">


   <?php 

   if (isset($_GET['categoryInsert'])) {?>
    <div class="box box-primary">



      <div class="content-header">
        <h1 >Kategori Ekle</h1>
        <hr>       
      </div>

      <div class="box-body">

        <?php 
        if (isset($_POST['category_insert'])) {

         $sonuc=$db->insert("categorys",$_POST,
          [
            "form_name" => "category_insert",
            "dir" => "category",
          ]

        );

        if ($sonuc['status']) {?>
         <div class="alert alert-success">
           Kayıt Başarılı
         </div>
       <?php } else {?>

        <div class="alert alert-danger">
         Kayıt Başarısız.<?php echo $sonuc['error'] ?>
       </div>
     <?php }
   }
   ?>


      <!--  <div class="alert alert-success">
        Kayıt Başarılı
      </div> -->


      <form method="POST" enctype="multipart/form-data">



      <div class="form-group">
        <label>Kategori Ad</label>
        <div class="row">
          <div class="col-xs-12">
            <input type="text" name="kategori_ad" required="" class="form-control">
          </div>
        </div>
      </div>



      <div class="form-group">
        <label>Kategori Durum</label>
        <div class="row">
          <div class="col-xs-12">
            <select class="form-control" name="kategori_durum">
              <option value="1">Aktif</option>
              <option value="0">Pasif</option>
            </select>
          </div>
        </div>
      </div>

      <div align="right" class="box-footer">
        <button type="submit" class="btn btn-success" name="category_insert">Ekle</button>
      </div>



    </form>
  </div>

</div>
<?php } else if (isset($_GET['categoryUpdate'])) {?>

 <div class="box box-primary">



  <div class="content-header">
    <h1 >Kategori Düzenle</h1>
    <hr>       
  </div>

  <div class="box-body">

    <?php 
    if (isset($_POST['category_update'])) {

      $sonuc=$db->update("categorys",$_POST,[
        "form_name" => "category_update",
        "columns" => "kategori_id",
        "dir" => "categorys"

      ]);

      if ($sonuc['status']) {?>
       <div class="alert alert-success">
         Kayıt Başarılı
       </div>
     <?php } else {?>

      <div class="alert alert-danger">
       Kayıt Başarısız.<?php echo $sonuc['error'] ?>
     </div>
   <?php }
 }

 $sql=$db->wread("categorys","kategori_id",$_GET['kategori_id']);
 $row=$sql->fetch(PDO::FETCH_ASSOC);
 ?>


      <!--  <div class="alert alert-success">
        Kayıt Başarılı
      </div> -->


      <form method="POST" enctype="multipart/form-data">


        <div class="form-group">
          <label>Kategori Ad</label>
          <div class="row">
            <div class="col-xs-12">
              <input type="text" name="kategori_ad" required="" class="form-control" value="<?php echo $row['kategori_ad'] ?>">
            </div>
          </div>
        </div>





        <div class="form-group">
          <label>Kategori Durum</label>
          <div class="row">
            <div class="col-xs-12">
              <select class="form-control" name="kategori_durum">
                <option <?php echo $row['kategori_durum']==1 ? 'selected' : '' ?> value="1">Aktif</option>
                <option <?php echo $row['kategori_durum']==0 ? 'selected' : '' ?> value="0">Pasif</option>
              </select>
            </div>
          </div>
        </div>

        <input type="hidden" name="kategori_id" value="<?php echo $row['kategori_id']; ?>">

        <div align="right" class="box-footer">
          <button type="submit" class="btn btn-success" name="category_update">Düzenle</button>
        </div>



      </form>
    </div>

  </div>

<?php }
?>




<!-- Default box -->
<div class="box box-primary">

 <div class="content-header">
  <h1 >Kategoriler</h1>
  <div align="right">
    <a href="?categoryInsert=true"><button class="btn btn-success">Yeni Ekle</button></a>
    <br><br>
  </div>
   <?php 
if (isset($_GET['categoryDelete'])) {

 $sonuc=$db->delete("categorys","kategori_id",$_GET['kategori_id']);


   if ($sonuc['status']) {?>
       <div class="alert alert-success">
         Silme Başarılı
       </div>
     <?php } else {?>

      <div class="alert alert-danger ">
       Silme Başarısız.<?php echo $sonuc['error'] ?>
     </div>
   <?php }
 }
   ?>
</div>
<!-- /.box-header -->
<div class="box-body">
  <table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th align="center" width="5">#</th>

        <th>Kategori Ad</th>
        <th>Durum</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
   <tbody id="sortable">

      <?php 
     $sql=$db->read("categorys",[
        "columns_name" => "kategori_must",
        "columns_sort" => "ASC"
      ]);
      $say=1;
      while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {  ?>

        <tr id="item-<?php echo $row['kategori_id'] ?>">
          <td><?php echo $say++; ?></td>
          <td class="sortable"><?php echo $row['kategori_ad'] ?></td>
          <td><?php
          if ($row['kategori_durum']==0) {
            echo "Pasif";
          } else if ($row['kategori_durum']==1) {
            echo "Aktif";
          }
          ?></td>
          <td align="center" width="5"><a href="?categoryUpdate=true&kategori_id=<?php echo $row['kategori_id'] ?>"><i class="fa fa-pencil-square"></i></a></td>
           <td align="center" width="5"><a href="?categoryDelete=True&kategori_id=<?php echo $row['kategori_id'] ?>"><i class="fa fa-trash-o"></i></a></td>
        </tr>

      <?php } ?>

    </table>
  </div>
  <!-- /.box-body -->
</div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php require_once 'footer.php'; ?>

<script type="text/javascript">

  $(function() {
    $("#sortable").sortable({
      revert:true,
      handle:".sortable",
      stop:function(event,ui) {
        var data=$(this).sortable('serialize');
       
        $.ajax({
          type:"POST",
          dataType:"json",
          data:data,
          url:"netting/order-ajax.php?kategori_must=true",
          success:function(msg) {
          if (msg.islemMsj) {
            alert("Sıralama Başarılı");
          } else {
            alert("Hata Var...");
          }
          
          }
        });
      }



    });
    $("#sortable").disableSelection();
  });

</script>