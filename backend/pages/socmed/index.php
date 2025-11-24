<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

$qSocmed = "SELECT * FROM socmeds";
$result = mysqli_query($connect, $qSocmed) or die(mysqli_error($connect));
?>


<!-- content -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5>Tabel socmed</h5>
                <a href="./create.php" class="btn btn-primary">Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="text-center" class="table table-striped" id="datatable">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Icon</th>
                                <th class="text-center">Link</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            while ($item = $result->fetch_object()):
                            ?>
                                <tr>
                                    <td class="text-center"><?= $no ?></td>
                                    <td class="text-center">
                                        <img src="../../../storages/socmed/<?= $item->icon ?>" alt="icon" width="100" height="100"></img>
                                    </td>
                                    <td class="text-center"><?= $item->link ?></td>

                                    <td class="text-center">
                                        <a href="./edit.php?id=<?= $item->id ?>" class="btn btn-warning">Edit</a>
                                        <a href="../../actions/socmeds/destory.php?id=<?= $item->id ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin')">Hapus</a>
                                    </td>
                                </tr>
                            <?php
                                $no++;
                            endwhile;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../../partials/footer.php';
include '../../partials/script.php';
?>