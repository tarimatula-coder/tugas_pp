<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

$qContacts = "SELECT * FROM contacts";
$result = mysqli_query($connect, $qContacts) or die(mysqli_error($connect));
?>


<!-- content -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5>Tabel Kontak</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="text-center" id="datatable" class="table table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">judul</th>
                                <th class="text-center">Pesan</th>
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
                                    <td class="text-center"><?= $item->name ?></td>
                                    <td class="text-center"><?= $item->email ?></td>
                                    <td class="text-center"><?= $item->subject ?></td>
                                    <td class="text-center"><?= $item->message ?></td>

                                    <td class="text-center">
                                        <a href="../../actions/contact/destory.php?id=<?= $item->id ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
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