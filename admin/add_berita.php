<?php
    //  header 
    require_once "include/header.php";
?>

<?php
    //  database
    require_once "include/conn.php";


    //  Berita
    if(isset($_POST['create'])) {
        $data       = [
            'judul'      => $_POST['judul'],
            'desc'     => $_POST['desc']
        ];

        if($_FILES['file']) {
            if(move_uploaded_file($_FILES['file']['tmp_name'], 'upload/'.$_FILES['file']['name'])) {
                $data['fileName'] = $_FILES['file']['name'];
            } else {
                echo "";
            }
        }

        $result = $collection->insertOne($data);
        if($result->getInsertedCount()>0) {
            echo "";
        } else {
            echo "";
        }
    }
?>

<!-- Tampilan Tambah Berita -->
<!-- ckeditor js -->
<script src="include/ckeditor/ckeditor.js"></script>

<div class="container mb-5">
    <div id="form" class="pt-5 form-input-content">
        <div class="card login-form mb-0">
            <div class="card-body pt-3 shadow">
                <h4 class="text-center">Tambah Berita </h4>
                <form method="POST" enctype="multipart/form-data" action=""> 
                <div class="form-group">
                    <div class="form-group">
                        <label >judul berita</label>
                        <input type="text" class="form-control" value="" name="judul" >             
                    </div>
                    <div class="form-group">
                        <label> Deskripsi Berita</label>
                        <textarea name="desc" id="editor"></textarea>
                    </div>
                    <div class="form-group">
                        <label> Thumbnail berita </label>
                        <input type="file" name="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Tambah" class="btn login-form__btn submit w-10 " name="create">
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