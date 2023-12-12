<main role="main" class="container">
     <div class="row">
          <div class="col-md-12">
               <div class="row">
                    <div class="col-md-12">
                         <div class="card mb-3">
                              <div class="card-body">
                                   Kategori: <strong>Semua Kategori</strong>
                                   <!-- <span class="float-end">
                                        Urutkan Postingan:
                                        <a href="#"><span class="badge bg-primary">Terbaru</span></a>
                                        |
                                        <a href="#"><span class="badge bg-primary">Terlama</span></a>
                                   </span> -->
                              </div>
                         </div>
                    </div>
               </div>
               <div class="row">

                    <div class="col-md-6">
                         <?php foreach ($detail_product as $row): ?>
                              <div class="card mb-3">
                                   <img src="<?= $row->image ? base_url("/images/product/$row->image") : base_url("/images/product/default.png") ?>"
                                        alt="" height="10%" class="card-img-top" />
                                   <!-- <img src="http://placehold.co/100x100" alt="" class="card-img-top" /> -->
                              </div>
                         <?php endforeach ?>
                    </div>
                    <div class="col-md-6">
                         <div class="card mb-3">
                              <div class="card-body">
                                   <h5 class="card-title">
                                        Judul :
                                        <?= $detail->title ?>
                                   </h5>
                                   <!-- <p class="card-text"><strong>YOUR NAME</strong></p> -->
                                   <p class="card-text">
                                        Deskripsi :
                                        <?= $detail->description ?>
                                   </p>
                                   <?php foreach ($detail_product as $row): ?>
                                        <a href="#"><span class="badge bg-primary"><i class="fa-solid fa-tag"></i>
                                                  Tag :
                                                  <?= $row->category_title ?>
                                             </span></a>
                                   <?php endforeach ?>
                                   <div class="card mb-3 mt-3">
                                        <!-- <div class="btn-group mb-3" role="group" aria-label="Basic outlined example">
                                             <a href="#" class="btn btn-outline-primary"><i
                                                       class="fa-brands fa-instagram"></i> Instagram</a>
                                             <a href="#" class="btn btn-outline-primary"><i
                                                       class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                                             <a href="#" class="btn btn-outline-primary"><i
                                                       class="fa-brands fa-tiktok"></i> Tiktok</a>
                                        </div> -->
                                        <a href="<?= base_url("/index.php/home/reset") ?>"
                                             class="btn btn-primary">Kembali</a>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </div>
</main>