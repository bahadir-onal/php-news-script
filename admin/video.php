<?php 
require_once 'header.php';
require_once 'sidebar.php'

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  

  <section class="content">


   <?php 

   if (isset($_GET['videosInsert'])) {?>
    <div class="box box-primary">



      <div class="content-header">
        <h1 >Video Ekle</h1>
        <hr>       
      </div>

      <div class="box-body">

        <?php 
        if (isset($_POST['videos_insert'])) {

         $sonuc=$db->insert("videos",$_POST,[
          "form_name" => "videos_insert",
          "dir" => "videos",
          "file_name" => "videos_file"
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
          <label>Resim Seç</label>
          <div class="row">
            <div class="col-xs-12">
              <input type="file" name="videos_file" required="" class="form-control">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label>Video Link</label>
          <div class="row">
            <div class="col-xs-12">
              <input type="text" name="videos_video" required="" class="form-control">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label>Video Title</label>
          <div class="row">
            <div class="col-xs-12">
              <input type="text" name="videos_title" required="" class="form-control">
            </div>
          </div>
        </div>




        <div class="form-group">
          <label>Video İçerik</label>
          <div class="row">
            <div class="col-xs-12">
              <textarea id="editor1" class="form-control" name="videos_content"></textarea>
            </div>
          </div>
        </div>

        <script>
          CKEDITOR.replace( 'editor1' );
        </script>


       <div class="form-group">
          <label>Video Yazarı</label>
          <div class="row">
            <div class="col-xs-12">
              <input type="text" name="videos_author" required="" class="form-control">
            </div>
          </div>
        </div>


        <div align="right" class="box-footer">
          <button type="submit" class="btn btn-success" name="videos_insert">Ekle</button>
        </div>



      </form>
    </div>

  </div>
<?php }  else if (isset($_GET['videosUpdate'])) {

  //bağlı id bilgilerini çek...


  ?>

  <div class="box box-primary">



    <div class="content-header">
      <h1 >Video Düzenle</h1>
      <hr>       
    </div>

    <div class="box-body">

      <?php 

      if (isset($_POST['videos_update'])) {

       $sonuc=$db->update("videos",$_POST,[
        "form_name" => "videos_update",
        "columns" => "videos_id",
        "dir" => "videos",
        "file_name" => "videos_file",
        "file_delete" => "delete_file"
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

$sql=$db->wread("videos","videos_id",$_GET['videos_id']);
$row=$sql->fetch(PDO::FETCH_ASSOC);



?>

<!-- update işlem sorgusu -->


<form method="POST" enctype="multipart/form-data">

  <div class="form-group">
    <label>Yüklü Resim</label>
    <div class="row">
      <div class="col-xs-12">
        <img width="100" src="dimg/videos/<?php echo $row['videos_file'] ?>">
      </div>
    </div>
  </div>

   <div class="form-group">
          <label>Video Link</label>
          <div class="row">
            <div class="col-xs-12">
              <input type="text" name="videos_video" value="<?php echo $row['videos_video'] ?>" required="" class="form-control">
            </div>
          </div>
        </div>

  <div class="form-group">
    <label>Resim Seç</label>
    <div class="row">
      <div class="col-xs-12">
        <input type="file" name="videos_file" class="form-control">
      </div>
    </div>
  </div>

  <div class="form-group">
    <label>Video Title</label>
    <div class="row">
      <div class="col-xs-12">
        <input type="text" name="videos_title" required="" value="<?php echo $row['videos_title'] ?>" class="form-control">
      </div>
    </div>
  </div>

  
</div>

<div class="form-group">
  <label>Video İçerik</label>
  <div class="row">
    <div class="col-xs-12">
      <textarea id="editor1" class="form-control" name="videos_content"><?php echo $row['videos_content'] ?></textarea>
    </div>
  </div>
</div>

<script>
  CKEDITOR.replace( 'editor1' );
</script>


        <div class="form-group">
          <label>Video Yazarı</label>
          <div class="row">
            <div class="col-xs-12">
              <input type="text" name="videos_author" value="<?php echo $row['videos_author'] ?>" class="form-control">
            </div>
          </div>
        </div>



<input type="hidden" name="videos_id" value="<?php echo $row['videos_id']; ?>">
<input type="hidden" name="delete_file" value="<?php echo $row['videos_file']; ?>">

<div align="right" class="box-footer">
  <button type="submit" class="btn btn-success" name="videos_update">Düzenle</button>
</div>



</form>
</div>

</div>

<?php }

?>




<!-- Default box -->
<div class="box box-primary">

 <div class="content-header">
  <h1 >Video Listele</h1>
  <div align="right">
    <a href="?videosInsert=true"><button class="btn btn-success">Yeni Ekle</button></a>
    <br><br>
  </div>
  <?php 
  if (isset($_GET['videosDelete'])) {

   $sonuc=$db->delete("videos","videos_id",$_GET['videos_id'],$_GET['file_delete']);


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
        <th>Video Başlık</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody id="sortable">

      <?php
      // $sql=$db->qSql("SELECT * FROM videos  order by videos_must ASC");

      $sql=$db->read("videos",[
        "columns_name" => "videos_must",
        "columns_sort" => "ASC"
      ]);
      $say=1;
      while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {  ?>

        <tr id="item-<?php echo $row['videos_id'] ?>">
          <td><?php echo $say++; ?></td>
          <td class="sortable"><img width="100" src="dimg/videos/<?php echo $row['videos_file'] ?>"></td>
          <td class="sortable"><?php echo $row['videos_title'] ?></td>
          <td> <?php
           if ($row['videos_onecikar']==0) { ?>
            <!--videos öne çıkar yapılacak-->
           <a href="?videosUpdate=videos_id=<?php echo $row['videos_id'] ?>&<?php echo $row['videos_onecikar'] ?>"><button class="btn btn-success btn-xs">Öne Çıkar</button></a>


          <?php } elseif ($row['videos_onecikar']==1){ ?>

           <a href="?videosUpdate=videos_id=<?php echo $row['videos_id'] ?>&<?php echo $row['videos_onecikar'] ?>"><button class="btn btn-warning btn-xs">Kaldır</button></a>

          <?php } ?>


          </td>
          <td align="center" width="5"><a href="?videosUpdate=true&videos_id=<?php echo $row['videos_id'] ?>"><i class="fa fa-pencil-square"></i></a></td>
          <td align="center" width="5"><a href="?videosDelete=True&videos_id=<?php echo $row['videos_id'] ?>&file_delete=<?php echo $row['videos_file'] ?>"><i class="fa fa-trash-o"></i></a></td>
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
          url:"netting/order-ajax.php?videos_must=true",
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