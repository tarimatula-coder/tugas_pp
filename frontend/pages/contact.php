  <!--contact start -->
  <section id="contact" class="contact">
      <div class="section-heading text-center">
          <h2>contact me</h2>
      </div>
      <div class="container">
          <div class="contact-content">
              <div class="row">
                  <div class="col-md-offset-1 col-md-5 col-sm-6">
                      <div class="single-contact-box">
                          <div class="contact-form">
                              <form action="./actions/contact.php" method="post">
                                  <div class="row">
                                      <div class="col-sm-6 col-xs-12">
                                          <div class="form-group">
                                              <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                                          </div><!--/.form-group-->
                                      </div><!--/.col-->
                                      <div class="col-sm-6 col-xs-12">
                                          <div class="form-group">
                                              <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                                          </div><!--/.form-group-->
                                      </div><!--/.col-->
                                  </div><!--/.row-->
                                  <div class="row">
                                      <div class="col-sm-12">
                                          <div class="form-group">
                                              <input type="text" class="form-control" id="subject" placeholder="subject" name="subject">
                                          </div><!--/.form-group-->
                                      </div><!--/.col-->
                                  </div><!--/.row-->
                                  <div class="row">
                                      <div class="col-sm-12">
                                          <div class="form-group">
                                              <textarea class="form-control" rows="8" id="message" placeholder="message" name="message"></textarea>
                                          </div><!--/.form-group-->
                                      </div><!--/.col-->
                                  </div><!--/.row-->
                                  <div class="row">

                                      <button type="submit" class="btn btn-primary" name="tombol">Kirim</button>

                                  </div><!--/.row-->
                              </form><!--/form-->
                          </div><!--/.contact-form-->
                      </div><!--/.single-contact-box-->
                  </div><!--/.col-->
                  <div class="col-md-offset-1 col-md-5 col-sm-6">
                      <div class="single-contact-box">
                          <div class="contact-adress">

                              <?php
                                $qAbout = "SELECT * FROM abouts LIMIT 1";
                                $about = mysqli_query($connect, $qAbout) or die(mysqli_error($connect));
                                $dataAbout = mysqli_fetch_assoc($about);
                                ?>
                              <div class="contact-add-head">
                                  <h3>Nama: <?= $dataAbout['name'] ?></h3>
                              </div>
                              <br>
                              <div class="single-contact-add-info">
                                  <h3>Sekolah: <?= $dataAbout['work'] ?></h3>
                              </div>
                              <div class="single-contact-add-info">
                                  <h3>Phone: <?= $dataAbout['phone'] ?></h3>
                              </div>
                              <div class="single-contact-add-info">
                                  <h3>Email: <?= $dataAbout['email'] ?></h3>
                              </div>
                          </div>
                      </div><!--/.contact-adress-->
                      <div class="hm-foot-icon">

                          <?php
                            $qSocmed = "SELECT * FROM socmeds LIMIT 3";
                            $resultSocmed = mysqli_query($connect, $qSocmed) or die(mysqli_error($connect));
                            ?>
                          <?php
                            while ($item = $resultSocmed->fetch_object()):
                            ?>
                              <a href="<?= $item->link ?>">
                                  <img src="../storages/socmed/<?= $item->icon; ?>" alt="<?= $item->icon; ?>" style=" width: 60px; height:60px; border-radius: 50%;">
                              </a></li>
                          <?php endwhile; ?>
                      </div>

                  </div><!--/.single-contact-box-->
              </div><!--/.col-->
          </div><!--/.row-->
      </div><!--/.contact-content-->
      </div><!--/.container-->

  </section><!--/.contact-->
  <!--contact end -->