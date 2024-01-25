<div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span>Upload Terbaru</span></h2>
          <div class="latest_post_container" style="height:500p; overflow: auto;">
            <ul class="latest_postnav" >

            <!-- ADDING LATEST NEWS---------------------------------------------------------------------- -->
            <?php
              $show = $collection->find(
                [],
                [
                  'limit' => 10
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
                <div class="media"> <a href="baca_berita.php?aid=<?php echo $berita['_id']; ?>" class="media-left"> <img alt="" src="./admin/upload/<?php echo $berita['fileName']; ?>"> </a>
                  <div class="media-body"> <a href="baca_berita.php?aid=<?php echo $berita['_id']; ?>" class="catg_title"> <?php echo $berita['judul']; ?> </a> </div>
                </div>
              </li>
              <?php }
            ?>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>
  
  <footer id="footer">
    <div class="footer_top">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="footer_widget wow fadeInDown">
            <h2>Kelompok</h2>
            <ul class="tag_nav">
                <li><a href="#"> faiz </a></li>
                <li><a href="#"> hirdan </a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="footer_widget wow fadeInRightBig">
             
            <h2>Ujian Akhir Semester</h2>
            <p>Project UAS basis data lanjut menggunakan database NoSQL MongoDB</p>
            <address>
              <P> Kelas     : Pagi</P>
              <P> Jurusan   : Teknik Informatika</P>
              <P> Institut Teknologi Adhi Tama Surabaya </P>
            </address>

          </div>
        </div>
      </div>
    </div>
    <div class="footer_bottom">
      <p class="copyright">Copyright &copy; by <?php echo date("Y" , strtotime("now") ); ?> <a href="./index.php">ALW</a></p>
      <p class="developer" style="color:white;">ALWDev</p>
      <!-- Wpfreeware -->
    </div>
  </footer>
</div>
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/jquery.li-scroller.1.0.js"></script> 
<script src="assets/js/jquery.newsTicker.min.js"></script> 
<script src="assets/js/jquery.fancybox.pack.js"></script> 
<script src="assets/js/custom.js"></script>
</body>
</html>