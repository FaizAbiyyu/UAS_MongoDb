<?php 
	//	header
    require_once "include/header.php";
?>

<?php
    $filter     = ['_id' => new MongoDB\BSON\ObjectId($_GET['aid'])];
    $show = $collection->find($filter);
    foreach ($show as $key => $berita) {
        $show = json_encode( [
            'id'        => (string) $berita['_id'],
            'judul'     => $berita['judul'],
            'desc'      => $berita['desc']
        ], true);
?> 

<!-- baca berita -->
<section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">
            <h1> <?php echo $berita['judul']; ?> </h1>
            <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i>user</a> <span><i class="fa fa-calendar"></i> <?php echo date("l, F d, Y" , strtotime("now") ); ?> </span> <a href="#"><i class="fa fa-tags"></i></a> </div>
            <div class="single_page_content"> <img class="img-center" style="width:85%; height:300px" src="admin/upload/<?php echo $berita['fileName']; ?>" alt="">
              <blockquote> <?php echo $berita['desc']; ?> </blockquote>
              
            </div>
            <div class="social_link">
              <ul class="sociallink_nav">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
              </ul>
            </div>
            <div class="related_post">
              <h2>Related Post <i class="fa fa-thumbs-o-up"></i></h2>
              <ul class="spost_nav wow fadeInDown animated">

            <?php
	            $show = $collection->find(
	            	[],
	            	[
	            		'limit' => 3
	            	]
	            );

	        	foreach ($show as $key => $berita) {
	            $show = json_encode( [
	                'id'        => $berita['_id'],
	                'judul'     => $berita['judul'],
	                'desc'      => $berita['desc']
	            ], true);
	        ?>

	                <li>
	                  <div class="media"> <a class="media-left" href="baca_berita.php?aid=<?php echo $berita['_id']; ?>"> <img src="admin/upload/<?php echo $berita['fileName']; ?>" > </a>
	                    <div class="media-body"> <a class="catg_title" href="baca_berita.php?aid=<?php echo $berita['_id']; ?>"> <?php echo $berita['judul']; ?> </a> </div>
	                  </div>
	                </li>
                  <?php }
            	?>
              </ul>
            </div>
          </div>
        </div>
      </div>
	<?php }
	?>

<?php 
    //  footer
    require_once "include/footer.php";
?>