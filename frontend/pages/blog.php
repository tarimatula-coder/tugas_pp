<?php

$qBlog = "SELECT * FROM blogs ORDER BY id DESC";
$blog = mysqli_query($connect, $qBlog) or die(mysqli_error($connect));
?>

<!-- blog section start -->
<section id="blog" class="blog" style="padding: 50px 0 100px;">
    <div class="blog-details">
        <div class="section-heading text-center">
            <h2>Blog</h2>
        </div>
        <div class="container">
            <div class="row" style="padding-top: 100px;">
                <?php while ($dataBlog = mysqli_fetch_assoc($blog)) : ?>
                    <div class="col-sm-4 mb-2">
                        <div class="card border-primary h-100" style="padding-top: 100px;"> <!-- border warna biru -->
                            <img src="../storages/blog/<?= $dataBlog['image']; ?>" class="card-img-top" alt="<?= htmlspecialchars($dataBlog['tittle']); ?>" style="width: 100%; height: 220px;">
                            <div class="card-body">
                                <br>
                                <h6 class="card-subtitle text-muted mb-2"><?= htmlspecialchars($dataBlog['date']); ?> | <?= htmlspecialchars($dataBlog['author']); ?></h6>
                                <br>
                                <h5 class="card-title"><?= htmlspecialchars($dataBlog['tittle']); ?></h5>
                                <br>
                                <p class="card-text"><?= htmlspecialchars($dataBlog['description']); ?></p>
                                <a href="./pages/detail/blog.php/?id=<?= $dataBlog['id'] ?>" style="margin-top: 20px;">
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