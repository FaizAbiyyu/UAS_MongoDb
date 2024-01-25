<?php
    //  header 
    require_once "include/header.php";
?>

<?php
//  database
    require_once "include/conn.php";
?>

<!-- delete berita -->
<?php
    if(isset($_GET['action']) && $_GET['action'] == 'delete') {
                        
        $filter     = ['_id' => new MongoDB\BSON\ObjectId($_GET['aid'])];

        $berita = $collection->findOne($filter);
        if(!$berita) {
            echo "";
        }

        $fileName = 'upload/'.$berita['fileName'];
        if(file_exists($fileName)) {
            if(!unlink($fileName)) {
                echo ""; exit;
            }
        }

        $result = $collection->deleteOne($filter);

        if($result->getDeletedCount()>0) {
            echo "";
        } else {
            echo "";
        }                   
    }
?>

<!-- Tampilan Lihat Berita -->
<style>
    table, th, td {
      border: 1px solid black;
      padding: 15px;
    }
    table {
      border-spacing: 10px;
    }
</style>


<div class="container bg-white shadow mb-5">
    <div class="py-4 mt-3"> 
        <div class='text-center pb-2'><h4>Lihat Berita</h4></div>
        <table style="width:100%" class="table-hover text-center ">
        
        <thead>
            <tr class="bg-dark">
                <th>Thumnail Berita</th>
                <th>Judul Berita</th>
                <th>Deskripsi Berita</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php


            $show = $collection->find();
            foreach ($show as $key => $berita) {
                $show = json_encode( [
                    'id'        => (string) $berita['_id'],
                    'judul'     => $berita['judul'],
                    'desc'      => $berita['desc']
                ], true); 
                ?>
                
                <tr>
                <th scope="row"><img src="upload/<?php echo $berita['fileName']; ?>" class="img-fluid" style="height:70px"></th>
                <td><?php echo $berita['judul'] ?></td>
                <td><?php 
                        if(strlen($berita['desc']) < 100){
                            echo ucwords($berita['desc']);
                        }else{
                            $potong = substr($berita['desc'] , 0 , 200); 
                            echo ucwords($potong);
                        }
                    ?></td>
                <td>
                <a href = "edit_berita.php?aid=<?php echo $berita['_id']?>" class="btn btn-primary fa fa-gear"></a>
                <a href = "show_berita.php?action=delete&aid=<?php echo $berita['_id']?>" class="btn btn-danger fa fa-trash"></a>
                </td>
                </tr>                               
            <?php }
        ?>
        </table>
    </div>
</div>

<?php 
    //  footer
    require_once "include/footer.php";
?>