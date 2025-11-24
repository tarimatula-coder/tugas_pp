<?php

// Ambil semua data skill
$qSkill = "SELECT * FROM skills ORDER BY id ASC";
$skill = mysqli_query($connect, $qSkill) or die(mysqli_error($connect));

// Siapkan array untuk kiri dan kanan
$skillsLeft = [];
$skillsRight = [];

while ($dataSkill = mysqli_fetch_assoc($skill)) {
    if ($dataSkill['skill'] === 'left') {
        $skillsLeft[] = $dataSkill;
    } else {

        $skillsRight[] = $dataSkill;
    }
}
?>

<!-- skills start -->
<section id="skills" class="skills">
    <div class="skill-content">
        <div class="section-heading text-center">
            <h2>skills</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="single-skill-content">
                        <?php foreach ($skillsRight as $skill): ?>
                            <div class="barWrapper">
                                <span class="progressText"><?= $skill['skill'] ?></span>
                                <br>
                                <span class="progressText"><?= $skill['description'] ?></span>
                                <div class="single-progress-txt">
                                    <div class="progress">
                                        <div class="progress-bar"
                                            role="progressbar"
                                            aria-valuenow="<?= $skill['percent'] ?>"
                                            aria-valuemin="10"
                                            aria-valuemax="100"
                                            style="width: <?= $skill['percent'] ?>%;">
                                        </div>
                                    </div>
                                    <h3><?= $skill['percent'] ?>%</h3>

                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>


    </div><!-- /.row -->
    </div><!-- /.container -->
    </div><!-- /.skill-content -->
</section>
<!-- skills end -->