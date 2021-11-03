<?php
require_once 'settings.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Site Metas -->
<title><?php echo $settings['title'] ?></title>
<meta name="keywords" content="">
<meta name="description" content="<?php echo $settings['description'] ?>">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

<!-- Design fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">

<!-- FontAwesome Icons core CSS -->
<link href="css/font-awesome.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="style.css" rel="stylesheet">

<!-- Responsive styles for this template -->
<link href="css/responsive.css" rel="stylesheet">

<!-- Colors for this template -->
<link href="css/colors.css" rel="stylesheet">

<!-- Version Tech CSS for this template -->
<link href="css/version/tech.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</html>
<body>

<div id="wrapper">
    <header class="tech-header header">
        <div class="container-fluid">
            <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/version/tech-logo.png" alt=""></a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Anasayfa</a>
                        </li>


                        <li class="nav-item dropdown has-submenu menu-large hidden-md-down hidden-sm-down hidden-xs-down">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategoriler</a>
                            <ul class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                                <li>
                                    <div class="container">
                                        <div class="mega-menu-content clearfix">



                                            <div class="tab">
                                                <?php
                                                $sql=$db->qSql("SELECT * FROM categorys where kategori_id IN('3')");
                                                $say=1;
                                                $row=$sql->fetch(PDO::FETCH_ASSOC); ?>
                                                    <button class="tablinks active" onclick="openCategory(event, 'cat01')"><?php echo $row['kategori_ad'] ?></button>

                                                <?php
                                                $sql=$db->qSql("SELECT * FROM categorys where kategori_id IN('4')");
                                                $say=1;
                                                $row=$sql->fetch(PDO::FETCH_ASSOC); ?>

                                                    <button class="tablinks" onclick="openCategory(event, 'cat02')"><?php echo $row['kategori_ad'] ?></button>

                                                <?php
                                                $sql=$db->qSql("SELECT * FROM categorys where kategori_id IN('5')");
                                                $say=1;
                                                $row=$sql->fetch(PDO::FETCH_ASSOC); ?>
                                                    <button class="tablinks" onclick="openCategory(event, 'cat03')"><?php echo $row['kategori_ad'] ?></button>
                                                <?php
                                                $sql=$db->qSql("SELECT * FROM categorys where kategori_id IN('6')");
                                                $say=1;
                                                $row=$sql->fetch(PDO::FETCH_ASSOC); ?>
                                                    <button class="tablinks" onclick="openCategory(event, 'cat04')"><?php echo $row['kategori_ad'] ?></button>
                                                <?php
                                                $sql=$db->qSql("SELECT * FROM categorys where kategori_id IN('7')");
                                                $say=1;
                                                $row=$sql->fetch(PDO::FETCH_ASSOC); ?>
                                                    <button class="tablinks" onclick="openCategory(event, 'cat05')"><?php echo $row['kategori_ad'] ?></button>


                                            </div>

                                            <div class="tab-details clearfix">

                                                <?php
                                                $sql=$db->qSql("SELECT * FROM blogs INNER JOIN categorys ON blogs.kategori_id=categorys.kategori_id WHERE blogs_must IN('0')");
                                                $row=$sql->fetch(PDO::FETCH_ASSOC);
                                                ?>
                                                <div id="cat01" class="tabcontent active">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title="">
                                                                        <img src="nedmin/dimg/blogs/<?php echo $row['blogs_file'] ?>" alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat"><?php echo $row['kategori_ad'] ?></span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title=""><?php echo $row['blogs_title'] ?></a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>

                                                        <?php
                                                        $sql=$db->qSql("SELECT * FROM blogs INNER JOIN categorys ON blogs.kategori_id=categorys.kategori_id WHERE blogs_must IN('1')");
                                                        $row=$sql->fetch(PDO::FETCH_ASSOC);
                                                        ?>

                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title="">
                                                                        <img src="nedmin/dimg/blogs/<?php echo $row['blogs_file'] ?>" alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat"><?php echo $row['kategori_ad'] ?></span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title=""><?php echo $row['blogs_title'] ?></a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>

                                                        <?php
                                                        $sql=$db->qSql("SELECT * FROM blogs INNER JOIN categorys ON blogs.kategori_id=categorys.kategori_id WHERE blogs_must IN('2')");
                                                        $row=$sql->fetch(PDO::FETCH_ASSOC);
                                                        ?>

                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title="">
                                                                        <img src="nedmin/dimg/blogs/<?php echo $row['blogs_file'] ?>" alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat"><?php echo $row['kategori_ad'] ?></span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title=""><?php echo $row['blogs_title'] ?></a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>


                                                        <?php
                                                        $sql=$db->qSql("SELECT * FROM blogs INNER JOIN categorys ON blogs.kategori_id=categorys.kategori_id WHERE blogs_must IN('3')");
                                                        $row=$sql->fetch(PDO::FETCH_ASSOC);
                                                        ?>

                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title="">
                                                                        <img src="nedmin/dimg/blogs/<?php echo $row['blogs_file'] ?>" alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat"><?php echo $row['kategori_ad'] ?></span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title=""><?php echo $row['blogs_title'] ?></a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>
                                                    </div><!-- end row -->
                                                </div>

                                                <!--Yapay zeka alanı bitti sirada yazılım-->


                                                <?php
                                                $sql=$db->qSql("SELECT * FROM blogs INNER JOIN categorys ON blogs.kategori_id=categorys.kategori_id WHERE blogs_must IN('4')");
                                                $row=$sql->fetch(PDO::FETCH_ASSOC);
                                                ?>

                                                <div id="cat02" class="tabcontent">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title="">
                                                                        <img src="nedmin/dimg/blogs/<?php echo $row['blogs_file'] ?>" alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat"><?php echo $row['kategori_ad'] ?></span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title=""><?php echo $row['blogs_title'] ?></a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>

                                                        <?php
                                                        $sql=$db->qSql("SELECT * FROM blogs INNER JOIN categorys ON blogs.kategori_id=categorys.kategori_id WHERE blogs_must IN('5')");
                                                        $row=$sql->fetch(PDO::FETCH_ASSOC);
                                                        ?>



                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title="">
                                                                        <img src="nedmin/dimg/blogs/<?php echo $row['blogs_file'] ?>" alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat"><?php echo $row['kategori_ad'] ?></span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title=""><?php echo $row['blogs_title'] ?></a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>


                                                        <?php
                                                        $sql=$db->qSql("SELECT * FROM blogs INNER JOIN categorys ON blogs.kategori_id=categorys.kategori_id WHERE blogs_must IN('6')");
                                                        $row=$sql->fetch(PDO::FETCH_ASSOC);
                                                        ?>

                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title="">
                                                                        <img src="nedmin/dimg/blogs/<?php echo $row['blogs_file'] ?>" alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat"><?php echo $row['kategori_ad'] ?></span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title=""><?php echo $row['blogs_title'] ?></a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>

                                                        <?php
                                                        $sql=$db->qSql("SELECT * FROM blogs INNER JOIN categorys ON blogs.kategori_id=categorys.kategori_id WHERE blogs_must IN('7')");
                                                        $row=$sql->fetch(PDO::FETCH_ASSOC);
                                                        ?>

                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title="">
                                                                        <img src="nedmin/dimg/blogs/<?php echo $row['blogs_file'] ?>" alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat"><?php echo $row['kategori_ad'] ?></span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="kategorihaber-<?php echo $row['blogs_id'] ?> " title=""><?php echo $row['blogs_title'] ?></a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>
                                                    </div><!-- end row -->
                                                </div>


                                                <!--yazılım alanı bitti sirada teknoloji-->


                                                <?php
                                                $sql=$db->qSql("SELECT * FROM blogs INNER JOIN categorys ON blogs.kategori_id=categorys.kategori_id WHERE blogs_must IN('8')");
                                                $row=$sql->fetch(PDO::FETCH_ASSOC);
                                                ?>

                                                <div id="cat03" class="tabcontent">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title="">
                                                                        <img src="nedmin/dimg/blogs/<?php echo $row['blogs_file'] ?>" alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat"><?php echo $row['kategori_ad'] ?></span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="kategorihaber-<?php echo $row['blogs_id'] ?> " title=""><?php echo $row['blogs_title'] ?></a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>


                                                        <?php
                                                        $sql=$db->qSql("SELECT * FROM blogs INNER JOIN categorys ON blogs.kategori_id=categorys.kategori_id WHERE blogs_must IN('9')");
                                                        $row=$sql->fetch(PDO::FETCH_ASSOC);
                                                        ?>

                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title="">
                                                                        <img src="nedmin/dimg/blogs/<?php echo $row['blogs_file'] ?>" alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat"><?php echo $row['kategori_ad'] ?></span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title=""><?php echo $row['blogs_title'] ?></a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>


                                                        <?php
                                                        $sql=$db->qSql("SELECT * FROM blogs INNER JOIN categorys ON blogs.kategori_id=categorys.kategori_id WHERE blogs_must IN('10')");
                                                        $row=$sql->fetch(PDO::FETCH_ASSOC);
                                                        ?>

                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title="">
                                                                        <img src="nedmin/dimg/blogs/<?php echo $row['blogs_file'] ?>" alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat"><?php echo $row['kategori_ad'] ?></span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title=""><?php echo $row['blogs_title'] ?></a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>


                                                        <?php
                                                        $sql=$db->qSql("SELECT * FROM blogs INNER JOIN categorys ON blogs.kategori_id=categorys.kategori_id WHERE blogs_must IN('11')");
                                                        $row=$sql->fetch(PDO::FETCH_ASSOC);
                                                        ?>

                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title="">
                                                                        <img src="nedmin/dimg/blogs/<?php echo $row['blogs_file'] ?>" alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat"><?php echo $row['kategori_ad'] ?></span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title=""><?php echo $row['blogs_title'] ?></a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>
                                                    </div><!-- end row -->
                                                </div>



                                                <!--teknoloji alanı bitti sirada oyun-->


                                                <?php
                                                $sql=$db->qSql("SELECT * FROM blogs INNER JOIN categorys ON blogs.kategori_id=categorys.kategori_id WHERE blogs_must IN('12')");
                                                $row=$sql->fetch(PDO::FETCH_ASSOC);
                                                ?>


                                                <div id="cat04" class="tabcontent">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title="">
                                                                        <img src="nedmin/dimg/blogs/<?php echo $row['blogs_file'] ?>" alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat"><?php echo $row['kategori_ad'] ?></span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title=""><?php echo $row['blogs_title'] ?></a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>

                                                        <?php
                                                        $sql=$db->qSql("SELECT * FROM blogs INNER JOIN categorys ON blogs.kategori_id=categorys.kategori_id WHERE blogs_must IN('13')");
                                                        $row=$sql->fetch(PDO::FETCH_ASSOC);
                                                        ?>

                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title="">
                                                                        <img src="nedmin/dimg/blogs/<?php echo $row['blogs_file'] ?>" alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat"><?php echo $row['kategori_ad'] ?></span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title=""><?php echo $row['blogs_title'] ?></a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>

                                                        <?php
                                                        $sql=$db->qSql("SELECT * FROM blogs INNER JOIN categorys ON blogs.kategori_id=categorys.kategori_id WHERE blogs_must IN('14')");
                                                        $row=$sql->fetch(PDO::FETCH_ASSOC);
                                                        ?>

                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title="">
                                                                        <img src="nedmin/dimg/blogs/<?php echo $row['blogs_file'] ?>" alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat"><?php echo $row['kategori_ad'] ?></span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title=""><?php echo $row['blogs_title'] ?></a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>

                                                        <?php
                                                        $sql=$db->qSql("SELECT * FROM blogs INNER JOIN categorys ON blogs.kategori_id=categorys.kategori_id WHERE blogs_must IN('15')");
                                                        $row=$sql->fetch(PDO::FETCH_ASSOC);
                                                        ?>

                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title="">
                                                                        <img src="nedmin/dimg/blogs/<?php echo $row['blogs_file'] ?>" alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat"><?php echo $row['kategori_ad'] ?></span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title=""><?php echo $row['blogs_title'] ?></a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>
                                                    </div><!-- end row -->
                                                </div>



                                                <!--oyun alanı bitti sirada bilim-->


                                                <?php
                                                $sql=$db->qSql("SELECT * FROM blogs INNER JOIN categorys ON blogs.kategori_id=categorys.kategori_id WHERE blogs_must IN('16')");
                                                $row=$sql->fetch(PDO::FETCH_ASSOC);
                                                ?>


                                                <div id="cat05" class="tabcontent">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title="">
                                                                        <img src="nedmin/dimg/blogs/<?php echo $row['blogs_file'] ?>" alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat"><?php echo $row['kategori_ad'] ?></span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title=""><?php echo $row['blogs_title'] ?></a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>

                                                        <?php
                                                        $sql=$db->qSql("SELECT * FROM blogs INNER JOIN categorys ON blogs.kategori_id=categorys.kategori_id WHERE blogs_must IN('17')");
                                                        $row=$sql->fetch(PDO::FETCH_ASSOC);
                                                        ?>


                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title="">
                                                                        <img src="nedmin/dimg/blogs/<?php echo $row['blogs_file'] ?>" alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat"><?php echo $row['kategori_ad'] ?></span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title=""><?php echo $row['blogs_title'] ?></a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>

                                                        <?php
                                                        $sql=$db->qSql("SELECT * FROM blogs INNER JOIN categorys ON blogs.kategori_id=categorys.kategori_id WHERE blogs_must IN('18')");
                                                        $row=$sql->fetch(PDO::FETCH_ASSOC);
                                                        ?>

                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title="">
                                                                        <img src="nedmin/dimg/blogs/<?php echo $row['blogs_file'] ?>" alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat"><?php echo $row['kategori_ad'] ?></span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title=""><?php echo $row['blogs_title'] ?></a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>

                                                        <?php
                                                        $sql=$db->qSql("SELECT * FROM blogs INNER JOIN categorys ON blogs.kategori_id=categorys.kategori_id WHERE blogs_must IN('19')");
                                                        $row=$sql->fetch(PDO::FETCH_ASSOC);
                                                        ?>

                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title="">
                                                                        <img src="nedmin/dimg/blogs/<?php echo $row['blogs_file'] ?>" alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat"><?php echo $row['kategori_ad'] ?></span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="kategorihaber-<?php echo $row['blogs_id'] ?>" title=""><?php echo $row['blogs_title'] ?></a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>
                                                    </div><!-- end row -->
                                                </div>
                                            </div><!-- end tab-details -->
                                        </div><!-- end mega-menu-content -->
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="videohaber.php">Video</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="genel_haber.php">Haber</a>
                        </li>
                    </ul>

                </div>
            </nav>
        </div><!-- end container-fluid -->
    </header><!-- end market-header -->