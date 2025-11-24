<?php

$qProject = "SELECT * FROM projects";
$project = mysqli_query($connect, $qProject) or die(mysqli_error($connect));
?>

<!-- blog section start -->
<section id="project" class="project" style="padding: 50px 0 100px;">
    <div class="project-details">
        <div class="section-heading text-center">
            <h2>Project</h2>
        </div>
        <div class="container">
            <div class="row" style="padding-top: 100px;">
                <?php while ($dataProject = mysqli_fetch_assoc($project)) : ?>
                    <div class="col-sm-4 mb-2">
                        <div class="card border-primary h-100" style="padding-top: 100px;"> <!-- border warna biru -->
                            <img src="../storages/project/<?= $dataProject['image']; ?>" class="card-img-top" alt="<?= htmlspecialchars($dataProject['title']); ?>" style="width: 100%; height: 220px;">
                            <div class="card-body">
                                <br>
                                <h5 class="card-title"><?= htmlspecialchars($dataProject['job']); ?></h5>
                                <br>
                                <p class="card-text"><?= htmlspecialchars($dataProject['description']); ?></p>
                                <a href="./pages/detail/project.php/?id=<?= $dataProject['id'] ?>" style="margin-top: 20px;">
                                    <button type="button" class="btn btn-primary">
                                        Lihat selengkapnya
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>
<!-- blog section end -->