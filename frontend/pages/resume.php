<?php

$qResume = "SELECT * FROM resumes";
$resume = mysqli_query($connect, $qResume) or die(mysqli_error($connect));
?>

<!-- education start -->
<section id="education" class="education">
    <div class="section-heading text-center">
        <h2>Resume</h2>
    </div>
    <div class="container">
        <div class="education-horizontal-timeline">
            <div class="row">
                <?php while ($dataResume = mysqli_fetch_assoc($resume)) { ?>
                    <div class="col-sm-4">
                        <div class="single-horizontal-timeline">
                            <div class="experience-time">
                                <h1><?= $dataResume['place'] ?></h1>
                                <h2><?= $dataResume['date'] ?></h2>
                                <h3><?= $dataResume['job'] ?></h3>
                            </div><!--/.experience-time-->
                            <div class="timeline-horizontal-border">
                                <i class="fa fa-circle" aria-hidden="true"></i>
                                <span class="single-timeline-horizontal"></span>
                            </div>
                            <div class="timeline">
                                <div class="timeline-content">
                                    <!-- Potong teks sampai 5 baris -->
                                    <p class="description text-multiline-ellipsis">
                                        <?= $dataResume['description'] ?>
                                    </p>
                                    <!-- Tombol dengan animasi -->
                                    <a href="./pages/detail/resume.php/?id=<?= $dataResume['id'] ?>" style="margin-top: 20px;">
                                        <button type="button" class="btn btn-primary">
                                            Lihat selengkapnya
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div><!--/.single-horizontal-timeline-->
                    </div>

                <?php } ?>
            </div><!--/.row-->
        </div><!--/.education-horizontal-timeline-->
    </div><!--/.container-->
</section>
<!-- education end -->