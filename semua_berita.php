<?php 
	//	header
    require_once "include/header.php";
?>
<section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_post_content">
                <h2><span> SEMUA BERITA</span> </h2>

                <?php
                	$show = $collection->find();
				    foreach ($show as $key => $berita) {
				        $show = json_encode( [
				            'id'        => (string) $berita['_id'],
				            'judul'     => $berita['judul'],
				            'desc'      => $berita['desc']
				        ], true);
				?> 


               <div class="row">
                      <div class="card">
                        <div class="col-lg-4">
                            <a href="baca_berita.php?aid=<?php echo $berita['_id']; ?>" > <img  style="height:150px; width:100%; " class="card-img img-fluid img-responsive" src="admin/upload/<?php echo $berita['fileName']; ?>"> </a>
                        </div>
                          <div class="card-body">
                             <div class="card-text"> <a href="baca_berita.php?aid=<?php echo $berita['_id']; ?>" > <h3> <?php echo ucwords($berita['judul']); ?> </h3> </a> </div>
                             <div class="card-text"> <a href="baca_berita.php?aid=<?php echo $berita['_id'] ?>" >
                             	<?php  
                            		if(strlen($berita['desc']) < 100){
						                echo ucwords($berita['desc']);
						            }else{
						                $potong = substr($berita['desc'] , 0 , 200); 
						                echo ucwords($potong);
						            }
                            	?> </a> </div>
                        </div>
                    </div>
               </div>

                  <?php } 
                ?>
               
          </div>
        </div>
      </div>

<?php 
    //  footer
    require_once "include/footer.php";
?>