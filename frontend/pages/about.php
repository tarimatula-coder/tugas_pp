 <?php
    $qAbout = "SELECT * FROM abouts LIMIT 1";
    $about = mysqli_query($connect, $qAbout) or die(mysqli_error($connect));
    $dataAbout = mysqli_fetch_assoc($about);
    ?>

 <!--about start -->
 <section id="about" class="about">
     <div class="section-heading text-center">
         <h2>Tentang Saya</h2>
     </div>
     <div class="container">
         <div class="about-content">
             <div class="row">
                 <div class="col-sm-6">
                     <div class="">
                         <p style="padding: 20px 0 20px;">Saya Merupakan Siswa dari SMkN 1 Bangsri Kls XII Mengambil Jurusan RPL, saya magang pkl di PT lauwba techno indonesia</p>
                         <h4>
                             <p style="padding: 20px 0 20px;">Nama: <?= $dataAbout['name'] ?></p>
                         </h4>
                         <h4>
                             <p style="padding: 20px 0 20px;">Tanggal Lahir: <?= $dataAbout['born'] ?></p>
                         </h4>
                         <h4>
                             <p style="padding: 20px 0 20px;">Alamat: <?= $dataAbout['address'] ?></p>
                         </h4>
                         <h4>
                             <p style="padding: 20px 0 20px;">Sekolah: <?= $dataAbout['work'] ?></p>
                         </h4>
                         <h4>
                             <p style="padding: 20px 0 20px;">Total project: <?= $dataAbout['total_project'] ?></p>
                         </h4>
                         <div class="row">
                             <div class="col-sm-4">
                                 <div class="single-about-add-info">
                                     <h3><?= $dataAbout['zip_code'] ?></h3>
                                     <p >Code pos</p>
                                 </div>
                             </div>
                             <div class="col-sm-4">
                                 <div class="single-about-add-info">
                                     <h3><?= $dataAbout['phone'] ?></h3>
                                     <p>Phone</p>
                                 </div>
                             </div>
                             <div class="col-sm-4">
                                 <div class="single-about-add-info">
                                     <h3><?= $dataAbout['email'] ?></h3>
                                     <p>Email</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-sm-offset-1 col-sm-5">
                     <div class="single-about-img">
                         <img src=" ../storages/about/<?= $dataAbout['image']; ?>" alt="<?= $dataAbout['image']; ?>" style="width: 100%; height: auto;" />
                         <div class="about-list-icon">
                             <h1 style="color: white; font-size: 30px;">Aslamiyah</h1>
                         </div><!-- /.about-list-icon -->
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section><!--/.about-->
 <!--about end -->