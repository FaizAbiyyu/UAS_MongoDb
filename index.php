<?php 
	//	header
    require_once "include/header.php";
?>


<!-- isi -->
<section id="sliderSection">
    <div class="row">
    		<div class="col-lg-12 col-md-12 col-sm-12">
        <div class="slick_slider">
        <?php 
	        $show = $collection->find();
	        foreach ($show as $key => $berita) {
	            $show = json_encode( [
	                'id'        => (string) $berita['_id'],
	                'judul'     => $berita['judul'],
	                'desc'      => $berita['desc']
	            ], true);
	        ?>

                <div class="single_iteam"> 
                	<a href="baca_berita.php?aid=<?php echo $berita['_id']?>">
                		<img src="admin/upload/<?php echo $berita['fileName']; ?>">
                	</a>
                	<div class="slider_article">
	                    <h2><a class="slider_tittle" href="baca_berita.php?aid=<?php echo $berita['_id']?>"><?php echo $berita['judul']; ?></a></h2>
	                    <p><?php 
	                    		if(strlen($berita['desc']) < 100){
					                echo $berita['desc'];
					            }else{
					                $titik = "...";
					                $potong = substr($berita['desc'] , 0 , 200); 
					                echo $potong, $titik ;
					            }
	                		?>
	                	</p>
	                </div>
	             </div>

        	    <?php }
            ?>
        </div>
      </div>
    </div>
</section>

<section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_post_content">
           <?php
	            echo   "<h2><span> Berita Terbaru </span></h2>";
	            $show = $collection->find(
	            	[],
	            	[
	            		'limit' => 1
	            	]
	            );

	        	foreach ($show as $key => $berita) {
	            $show = json_encode( [
	                'id'        => $berita['_id'],
	                'judul'     => $berita['judul'],
	                'desc'      => $berita['desc']
	            ], true);
		        ?>

               	<!-- kiri -->
                <div class="row" id="kiri">  
                    <div class="col-lg-6 col-md-6 col-sm-12">      
                        <ul class="wow fadeInDown">
                            <li>
                            <a href="baca_berita.php?aid=<?php echo $berita['_id']; ?>" > 
                            	<img alt="" style="height:300px; width: 300px" class="img-fluid img-responsive" src="admin/upload/<?php echo $berita['fileName']; ?>"> </a>

                                <div> <a href="baca_berita.php?aid=<?php echo $berita['_id']; ?>" > <h3> <?php echo ucwords($berita['judul']); ?> </h3> </a> </div> 
                                <div> <a href="baca_berita.php?aid=<?php echo $berita['_id']; ?>" > 
                                	<?php  
                                		if(strlen($berita['desc']) < 50){
							                echo ucwords($berita['desc']);
							            }else{
							                $potong = substr($berita['desc'] , 0 , 100); 
							                echo ucwords($potong);
							            }
                                	?>  </a> </div>     
	                            </li>
	                        </ul>      
	                    </div>
					    	<?php }
			            ?>

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
							
							<div  class=" d-flex flex-row justify-content-start kecil"> 
		                         <div class=" col-lg-2 col-md-2 col-sm-6">  
		                            <ul class="wow fadeInDown">
		                             <li>
		                                  <div> <a href="baca_berita.php?aid=<?php echo $berita['_id']; ?>" > <img style="height:60px;" class="img-fluid img-responsive" src="admin/upload/<?php echo $berita['fileName']; ?>"> </a>
		                                  </div>
		                             </li>
		                           </ul>
		                         </div>
		                        <div class="col-lg-4 col-md-4 col-sm-6">
		                            <ul class="wow fadeInDown">
		                              <li>
		                                  <div> <a href="baca_berita.php?aid=<?php echo $berita['_id']; ?>" > <b> <?php echo ucwords($berita['judul']); ?> </b> </a> </div>
		                                  <div> <a href="baca_berita.php?aid=<?php echo $berita['_id']; ?>" > 
		                                	<?php  
		                                		if(strlen($berita['desc']) < 50){
									                echo ucwords($berita['desc']);
									            }else{
									                $potong = substr($berita['desc'] , 0 , 100); 
									                echo ucwords($potong);
									            }
		                                	?>  </a> </div> 
		                                  <br>
		                              </li>
		                             </ul>
		                        </div>
		                        &nbsp;
		                    </div>
                    		<?php }
                    	?>
            		</div> 

            		<div style="position: relative;"> 
                        <a href="semua_berita.php" style="position: absolute; bottom: 8px; right: 16px; color:blue;">see more...</a> 
                    </div>
	      		</div> 
			</div>
	    </div> 



<?php 
    //  footer
    require_once "include/footer.php";
?>