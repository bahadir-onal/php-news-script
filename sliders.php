<section class="section first-section">
    <div class="container-fluid">
        <div class="masonry-blog clearfix">
            <?php
            //$sql=$db->qSql("SELECT * FROM sliders INNER JOIN categorys ON sliders.sliders_id=categorys.kategori_id where kategori_id order by sliders_id");
            $sql=$db->qSql("SELECT sliders.*,categorys.*,admins.* FROM sliders INNER JOIN admins ON sliders.admins_id=admins.admins_id INNER JOIN categorys ON categorys.kategori_id=sliders.kategori_id");
            //$sql=$db->read("sliders",[
             //   "columns_name" => "sliders_must",
               // "columns_sort" => "ASC",
               // "limit" => 2
           // ]);
            $say=1;
            while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {  ?>
            <div class="first-slot">
                <div class="masonry-box post-media">
                    <a href="mansetler-<?php echo $row['sliders_id'] ?>"><img src="nedmin/dimg/sliders/<?php echo $row['sliders_file'] ?>" alt="<?php echo $row['sliders_file'] ?>" class="img-fluid"></a>
                    <div class="shadoweffect">
                        <div class="shadow-desc">
                            <div class="blog-meta">
                                <span class="bg-orange"><a href="kategori-<?php echo $row ['kategori_id'] ?>" title=""><?php echo $row['kategori_ad'] ?></a></span>
                                <h4><a href="mansetler-<?php echo $row['sliders_id'] ?>" title=""><?php echo $row['sliders_title'] ?></a></h4>
                                <small><a href="tech-single.html" title="">24 July, 2017</a></small>
                                <small><a href="editor-<?php echo $row['admins_id'] ?>" title=""><?php echo $row['admins_namesurname'] ?></a></small>
                            </div><!-- end meta -->
                        </div><!-- end shadow-desc -->
                    </div><!-- end shadow -->
                </div><!-- end post-media -->
            </div><!-- end first-side -->


            <?php } ?>

        </div><!-- end masonry -->
    </div>
</section>