 <?php

    $qService = "SELECT * FROM services ORDER BY id ASC";
    $service = mysqli_query($connect, $qService) or die(mysqli_error($connect));
    ?>



 <!-- profiles start -->
 <section id="service" class="profiles">
     <div class="profiles-details">
         <div class="section-heading text-center">
             <h2>Service</h2>
         </div>
         <div class="container">
             <div class="profiles-content">
                 <div class="row">
                     <?php while ($dataService = mysqli_fetch_assoc($service)) : ?>
                         <div class="col-sm-3">
                             <div class="single-profile">
                                 <div class="profile-txt">
                                     <!-- tampilkan gambar dari folder jika 'icon' adalah nama file -->
                                     <a href="#">
                                         <img src="../storages/service/<?= $dataService['icon']; ?>" alt="<?= $dataService['icon']; ?>" width="80">
                                     </a>
                                     <div class="profile-icon-name"><?= $dataService['job']; ?></div>
                                 </div>
                                 <div class="single-profile-overlay">
                                     <div class="profile-txt">
                                         <a href="#">
                                             <img src="../storages/service/<?= $dataService['icon']; ?>" alt="<?= $dataService['icon']; ?>" width="80">
                                         </a>
                                         <div class="profile-icon-name"><?= $dataService['job']; ?></div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     <?php endwhile; ?>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- profiles end -->