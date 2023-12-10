<main role="main" class="container">
     <?php $this->load->view('layouts/_alert'); ?>
     <div class="row">
          <div class="col-md-3">
               <?php $this->load->view('layouts/_menu');
               ?>
          </div>
          <div class="col-md-9">
               <div class="row">
                    <div class="col-md-4">
                         <div class="card">
                              <div class="card-body text-center">
                                   <img src="<?= $content->image ? base_url("/images/user/$content->image") : base_url("/images/user/default-profile.png") ?>"
                                        alt="" height="200" />
                              </div>
                         </div>
                    </div>
                    <div class="col-md-8">
                         <div class="card">
                              <div class="card-body">
                                   <p>Nama :
                                        <?= $content->name ?>
                                   </p>
                                   <p>Email :
                                        <?= $content->email ?>
                                   </p>
                                   <p>Bio :
                                        <?= $content->description ?>
                                   </p>
                                   <p>Sosial Media : </p>
                                   <div class="mt-3">
                                        <div class="btn-group mb-3" role="group" aria-label="Basic outlined example">
                                             <a href="https://www.instagram.com/<?= $content->sosmed_ig ?>"
                                                  target="_blank" class="btn btn-outline-primary"><i
                                                       class="fa-brands fa-instagram"></i>
                                                  <?= $content->sosmed_ig ?>
                                             </a>
                                             <!-- <a href="#" class="btn btn-outline-primary"><i
                                                       class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                                             <a href="#" class="btn btn-outline-primary"><i
                                                       class="fa-brands fa-tiktok"></i> Tiktok</a> -->
                                        </div>
                                   </div>
                                   <a href="<?= base_url("/index.php/profile/update/$content->id") ?>"
                                        class="btn btn-primary mt-3">Edit</a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</main>