<?php
    //  header 
    require_once "include/header.php";
?>

<script>
    function kembali() {
        window.location.href = "show_berita.php";
    }
</script

<?php
//  database
    require_once "include/conn.php";

if(isset($_POST['update'])) {
    
    $filter     = ['_id' => new MongoDB\BSON\ObjectId($_GET['aid'])];

    $data       = [
        'judul'      => $_POST['judul'],
        'desc'     => $_POST['desc']
    ];

    $result = $collection->updateOne($filter, ['$set' => $data]);

    if($result->getModifiedCount()>0) {
        echo "update berita berhasil";
    } else {
        echo "Update berita gagal";
    }
}   
?>


<!-- Tampilan Tambah Berita -->
<!-- ckeditor js -->
<script src="include/ckeditor/ckeditor.js"></script>

<style>
    .tombol {
        display: flex;
        justify-content: space-between;
    }
</style>

<div class="container mb-5">
    <div id="form" class="pt-5 form-input-content">
        <div class="card login-form mb-0">
            <div class="card-body pt-3 shadow">
                <h4 class="text-center">Update Berita </h4>
                <form method="POST" enctype="multipart/form-data" action=""> 
                <div class="form-group">
                    <div class="form-group">
                        <label >judul berita</label>
                        <input type="text" class="form-control" value="" name="judul" >             
                    </div>
                    <div class="form-group">
                        <label> Deskripsi Berita</label>
                        <textarea name="desc" id="editor" value=""></textarea>
                    </div>
                    <div class="tombol">
                        <div>
                            <input type="submit" value="Update" class="btn login-form__btn submit w-10 " name="update">
                        </div>
                        <div>
                            <a href="show_berita.php" class="btn login-form__btn submit w-10">
                                Kembali
                            </a>
                        </div>
                    </div>

                </form>
            </div>
            <!-- ckeditor function call -->
            <script>
                CKEDITOR.replace('editor');
            </script>
        </div>
    </div>
</div>

<?php 
    //  footer
    require_once "include/footer.php";
?>