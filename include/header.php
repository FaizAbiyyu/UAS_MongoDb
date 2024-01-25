<?php 
    require_once "./vendor/autoload.php";
    $client     = new MongoDB\Client;
    $dataBase   = $client->selectDatabase('db_berita');
    $collection = $dataBase->selectCollection('berita');
?>

<!DOCTYPE html>
<html>
<head>
<title>Berita Terkini</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/font.css">
<link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">

<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/jquery.dataTables.js"></script>

<link rel="stylesheet" href="assets/css/jquery.dataTables.css">
<link rel="stylesheet" href="assets/css/dataTables.bootstrap.css">
<link rel="stylesheet" href="assets/css/datatables.css">
</head>

<body>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav ">
              <li><a href="./index.php">Home</a></li>
            </ul>
          </div>
          <div class="header_top_right">
            <p> <?php echo date("l, F d, Y" , strtotime("now") ); ?> </p>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom ">
          <div class="logo_area"><a href="admin/login.php" class="logo">AF-News</a></div>
        </div>
      </div>
    </div>
  </header>

  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <li class="active"><a href="./index.php"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
          <li> <a href="semua_berita.php">Semua Berita</a>  </li>
        </ul>
      </div>
    </nav>
  </section>

<!--   <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>Latest News</span>
          <ul id="ticker01" class="news_sticker">

            <?php 
            //   $i = 1;
            //     $show = $collection->find();
            //     foreach ($show as $key => $berita) {
            //         $show = json_encode( [
            //             'id'        => (string) $berita['_id'],
            //             'judul'     => $berita['judul'],
            //             'desc'      => $berita['desc']
            //         ], true);
                    

            //     echo "<li>";
            //     echo "<a href='baca_berita.php?aid=".$berita['_id']."'>"; 
            //     echo "<img src='./admin/upload/".$berita['fileName']."' style='width:30px'>".$berita['judul']."</li>";
            //     echo "</a>";
            //     echo "</li>";

            //     if( $i > 4 ){
            //       break;
            //     }
            //     $i++;
            //   }
            // ?>


        </div>
      </div>
    </div>
  </section> -->