<main role="main" class="container-lg">
     <?php $this->load->view('layouts/_alert') ?>
     <div class="row">
          <div class="col-md-10 mx-auto">
               <div class="card">
                    <div class="card-header">
                         <span>Portofolio</span>
                         <a href="<?= base_url('/index.php/product/create') ?>"
                              class="btn btn-sm btn-secondary">Tambah</a>
                         <div class="float-end">
                              <form action="#">
                                   <div class="input-group">
                                        <input type="text" class="form-control form-control-sm text-center"
                                             placeholder="Cari" />
                                        <div class="input-group-append">
                                             <button class="btn btn-secondary btn-sm" type="submit">
                                                  <i class="fas fa-search"></i>
                                             </button>
                                             <a href="#" class="btn btn-secondary btn-sm">
                                                  <i class="fas fa-eraser"></i>
                                             </a>
                                        </div>
                                   </div>
                              </form>
                         </div>
                    </div>
                    <div class="card-body">
                         <table class="table">
                              <thead>
                                   <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Produk</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Status</th>
                                        <th scope="col"></th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <?php $no = 0;
                                   foreach ($content as $row):
                                        $no++; ?>
                                        <tr>
                                             <td>
                                                  <?= $no ?>
                                             </td>
                                             <td>
                                                  <p>
                                                       <img src="<?= $row->image ? base_url("images/product/$row->image") : base_url("images/product/default.png") ?>"
                                                            alt="" height="50" />
                                                       <?= $row->product_title ?>
                                                  </p>
                                             </td>
                                             <td>
                                                  <span class="badge bg-primary"><i class="fas fa-tags"></i>
                                                       <?= $row->category_title ?>
                                                  </span>
                                             </td>
                                             <td>
                                                  <?= $row->description_product ?>
                                             </td>
                                             <td>
                                                  <?= $row->is_available ? 'Available' : 'Not Available' ?>
                                             </td>
                                             <td>
                                                  <form action="#">
                                                       <a href="#" class="">
                                                            <button class="btn btn-sm">
                                                                 <i class="fas fa-edit text-info"></i></button></a>
                                                       <button class="btn btn-sm" type="submit"
                                                            onclick="return confirm('Kamu akan menghapus pengguna?')">
                                                            <i class="fas fa-trash text-danger"></i>
                                                       </button>
                                                  </form>
                                             </td>
                                        </tr>
                                   <?php endforeach ?>
                              </tbody>
                         </table>
                         <nav aria-label="Page navigation example">
                              <?= $pagination ?>
                         </nav>
                    </div>
               </div>
          </div>
     </div>
</main>