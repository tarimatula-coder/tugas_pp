<?php
  include '../../partials/header.php';
  include '../../partials/sidebar.php';
  include '../../partials/navbar.php';
?>

   
<!-- content -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>Ubah data blog</h5>
            </div>
            <div class="card-body">
                <?php   
                    include '../../actions/blog/show.php';
                ?>
                <form action="../../actions/blog/update.php?id=<?= $blog->id?>"method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="dateInput" class="form-label">Nama</label>
                        <input type="date" name="date" class="form-control" id="nameInput" placeholder="Masukan Nama...." required value="<?=$blog->date?>">
                    </div>

                    <div class="mb-3">
                        <label for="authorInput" class="form-label">penulis</label>
                        <input type="text" name="author" class="form-control" id="authorInput" required  value="<?=$blog->author?>">
                    </div>

                    <div class="mb-3">
                        <label for="tittleInput" class="form-label">judul</label>
                        <input type="text" name="tittle" class="form-control" id="tittleInput" placeholder="Masukan judul..." required  value="<?=$blog->tittle?>">
                    </div>

                    <div class="mb-3">
                        <label for="descriptionInput" class="form-label">deskripsi</label>
                        <input type="text" name="description" class="form-control" id="descriptionInput" placeholder="Masukan deskripsi..." required  value="<?=$blog->description?>">
                    </div>

                    <div class="mb-3">
                        <img class="w-25" src="../../../storages/blog/<?=$blog->image?>" alt="">
                        <label for="imageInput" class="form-label">pilih gambar</label>
                        <input type="file" name="image" class="form-control" id="imageInput">
                    </div>

                    <button type="submit" class="btn btn-success" name="tombol">Simpan</button>
                    <a href="./index.php" class="btn btn-primary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include '../../partials/footer.php';
include '../../partials/script.php';
?>