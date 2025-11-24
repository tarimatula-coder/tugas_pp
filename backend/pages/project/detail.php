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
                <h5>Detail data Project</h5>
            </div>
            <div class="card-body">
                <?php
                include '../../actions/project/show.php';
                ?>
                <form>
                    <div class="mb-3">
                        <label for="titleInput" class="form-label">Judul</label>
                        <input type="text" class="form-control" value="<?= $project->title ?>" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="jobInput" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" value="<?= $project->job ?>" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="descriptionInput" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" value="<?= $project->description ?>" disabled>
                    </div>

                    <div class="mb-3">
                        <h6>Gambar</h6>
                        <img class="w-25" src="../../../storages/project/<?= $project->image ?>" alt="">

                    </div>

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