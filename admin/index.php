 <?php
    //  header 
    require_once "include/header.php";
?>

<?php
    //  database
    require_once "include/conn.php";

?> 

<style>
    .box-sejajar {
        display: flex;
        margin-left: -13%;
    }
</style>



<!-- isi Dashboard -->
<div class="box-sejajar">
    
    <div class="container">
        <div class="row ">
            <div class="col-4 ">
            </div>
            <div class="col-12 col-lg-6 col-md-6">
                <div class="card shadow" style="width: 20rem;">
                <img src="upload/dp/1.jpg" class="rounded img-fluid  card-img-top"  style="height: 300px "  alt="...">
                    <div class="card-body">
                    <h2 class="text-center mb-4">Fa'iz Abiyyu Rizqullah Saputra </h2>
                        <p class="card-text">Npm : 06.2020.1.07293</p>
                        <p class="card-text">Jurusan : Teknik Informatika</p>
                        <p class="text-center">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row ">
            <div class="col-4 ">
            </div>
            <div class="col-12 col-lg-6 col-md-6">
                <div class="card shadow" style="width: 20rem;">
                <img src="upload/dp/1.jpg" class="rounded img-fluid  card-img-top"  style="height: 300px "  alt="...">
                    <div class="card-body">
                    <h2 class="text-center mb-4">Hirdan</h2>
                        <p class="card-text">Npm : 06.2020.1.0</p>
                        <p class="card-text">Jurusan : Teknik Informatika</p>
                        <p class="text-center">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php 
    //  footer
    require_once "include/footer.php";
?>