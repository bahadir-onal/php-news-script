<?php
require_once 'header.php';
require_once 'sliders.php';
?>



<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-top clearfix">
                        <h4 class="pull-left">Yayın Akışı <a href="#"><i class="fa fa-rss"></i></a></h4>
                    </div><!-- end blog-top -->

                    <div class="blog-list clearfix">


                        <?php
                        //$sql=$db->qSql("SELECT blogs.*,admins.*,categorys.* FROM blogs INNER JOIN categorys and blogs INNER JOIN admins ON blogs.kategori_id=categorys.kategori_id and blogs.admins_id=admins.admins_id");
                        $sql=$db->qSql("SELECT admins.*,categorys.*,blogs.* FROM blogs INNER JOIN admins ON admins.admins_id=blogs.admins_id INNER JOIN categorys ON blogs.kategori_id=categorys.kategori_id");
                        //$sql=$db->read("blogs",[
                            //"columns_name" => "blogs_must",
                            //"columns_sort" => "ASC"
                        //]);
                        $say=1;
                        while ($row=$sql->fetch(PDO::FETCH_ASSOC)) { ?>
                          <div class="blog-box row">
                            <div class="col-md-4">
                                <div class="post-media">
                                    <a href="haberler-<?php echo $row['blogs_id'] ?>" title="">
                                        <img src="nedmin/dimg/blogs/<?php echo $row['blogs_file'] ?>" alt="" class="img-fluid">
                                        <div class="hovereffect"></div>
                                    </a>
                                </div><!-- end media -->
                            </div><!-- end col -->

                            <div class="blog-meta big-meta col-md-8">
                                <h4><a href="haberler-<?php echo $row['blogs_id'] ?>" title=""><?php echo $row['blogs_title'] ?></a></h4>
                                <hr class="invis">
                                <small class="firstsmall"><a class="bg-orange" href="kategori-<?php echo $row['kategori_id'] ?>" title=""><?php echo $row['kategori_ad'] ?></a></small>

                                <small><a href="editor-<?php echo $row['admins_id'] ?>" title=""><?php echo $row['admins_namesurname'] ?></a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                            <hr class="invis">


                        <?php } ?>



                    </div><!-- end blog-list -->
                </div><!-- end page-wrapper -->

                <hr class="invis">

                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-start">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end col -->

            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="sidebar">
                    <div class="widget">
                        <div class="banner-spot clearfix">
                            <div class="banner-img">
                                <img src="nedmin/dimg/reklam.jpg" alt="" class="img-fluid">
                            </div><!-- end banner-img -->
                        </div><!-- end banner -->
                    </div><!-- end widget -->

                    <div class="widget">
                        <h2 class="widget-title">Öne Çıkan Videolar</h2>
                        <div class="trend-videos">

                            <?php
                            $sql=$db->wread("videos","videos_onecikar",1);
                            while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {
                                ?>



                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="videohaber-<?php echo $row['videos_id'] ?>" title="">
                                            <img src="nedmin/dimg/videos/<?php echo $row['videos_file'] ?>" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span class="videohover"></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        <h4><a href="videohaber-<?php echo $row['videos_id'] ?>" title=""><?php echo $row['videos_title'] ?></a></h4>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                            <?php } ?>

                            <hr class="invis">


                        </div><!-- end videos -->
                    </div><!-- end widget -->

                    <div class="widget">
                        <h2 class="widget-title">Öne Çıkan Haberler</h2>
                        <div class="blog-list-widget">
                            <div class="list-group">

                                <?php
                                $sql=$db->wread("blogs","blogs_onecikar",1);
                                while ($row=$sql->fetch(PDO::FETCH_ASSOC)) { ?>

                                <a href="onecikanhaber-<?php echo $row['blogs_id'] ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <img src="nedmin/dimg/blogs/<?php echo $row['blogs_file'] ?>" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1"><?php echo $row['blogs_title'] ?></h5>
                                        <small>12 Jan, 2016</small>

                                    </div>
                                </a>

                                        <?php } ?>


                            </div>
                        </div><!-- end blog-list -->
                    </div><!-- end widget -->
                    <div class="widget">
                        <div class="banner-spot clearfix">
                            <div class="banner-img">
                                <img src="nedmin/dimg/reklam2.jpg" alt="" class="img-fluid">
                            </div><!-- end banner-img -->
                        </div><!-- end banner -->
                    </div><!-- end widget -->
                </div><!-- end sidebar -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

<?php
require_once 'footer.php';
?>