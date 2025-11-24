<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

$qServices = "SELECT * FROM services";
$result = mysqli_query($connect, $qServices) or die(mysqli_error($connect));
?>


<!-- content -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5>Tabel service</h5>
                <a href="./create.php" class="btn btn-primary">Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="text-center" id="datatable" class="table table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Icon</th>
                                <th class="text-center">Pekerjaan</th>
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
                                        <img src="../../../storages/service/<?= $item->icon ?>" alt="gambar" width="100" height="100"></img>
                                    </td>
                                    <td class="text-center"><?= $item->job ?></td>

                                    <td class="text-center">
                                        <a href="./edit.php?id=<?= $item->id ?>" class="btn btn-warning">Edit</a>
                                        <a href="../../actions/service/destory.php?id=<?= $item->id ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
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