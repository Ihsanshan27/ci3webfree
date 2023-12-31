<main role="main" class="container">
     <div class="row">
          <div class="col-md-10 mx-auto">
               <div class="card mb-3">
                    <div class="card-header">
                         <span>Upload New Post</span>
                    </div>
                    <div class="card-body">
                         <?= form_open_multipart($form_action, ['method' => 'POST']) ?>
                         <?= isset($input->id) ? form_hidden('id', $input->id) : '' ?>
                         <div class="form-group">
                              <label for="">New Post</label>
                              <?= form_input('title', $input->title, ['class' => 'form-control', 'id' => 'title', 'onkeyup' => 'createSlug()', 'required' => true, 'autofocus' => true]) ?>
                              <?= form_error('title') ?>
                         </div>
                         <div class="form-group">
                              <label for="">Deskripsi</label>
                              <?= form_textarea(['name' => 'description', 'value' => $input->description, 'row' => 4, 'class' => 'form-control']) ?>
                              <?= form_error('description') ?>
                         </div>

                         <div class="form-group">
                              <label for="">Kategori</label>
                              <?= form_dropdown('id_category', getDropdownList('category', ['id', 'title']), $input->id_category, ['class' => 'form-control']) ?>
                              <?= form_error('id_category') ?>
                         </div>
                         <!-- <div class="form-group">
                              <label for="">Apakah Design sudah Selesai?</label>
                              <br>
                              <div class="form-check form-check-inline">
                                   <?= form_radio(['name' => 'is_available', 'value' => 1, 'checked' => $input->is_available == 1 ? true : false, 'form-check-input']) ?>
                                   <label for="" class="form-check-label">Finish</label>
                              </div>
                              <div class="form-check form-check-inline">
                                   <?= form_radio(['name' => 'is_available', 'value' => 0, 'checked' => $input->is_available == 0 ? true : false, 'form-check-input']) ?>
                                   <label for="" class="form-check-label">Draf</label>
                              </div>
                         </div> -->
                         <div class="form-group">
                              <label for="">Gambar</label>
                              <br>
                              <?= form_upload('image') ?>
                              <?php if ($this->session->flashdata('image_error')): ?>
                                   <small class="form-text text-danger">
                                        <?= $this->session->flashdata('image_error') ?>
                                   </small>
                              <?php endif ?>
                              <?php if ($input->image): ?>
                                   <img src="<?= base_url("/images/product/$input->image") ?>" alt="" height="150">
                              <?php endif ?>
                         </div>
                         <div class="form-group">
                              <label for="">Slug</label>
                              <?= form_input('slug', $input->slug, ['class' => 'form-control', 'id' => 'slug', 'required' => true]) ?>
                              <?= form_error('slug') ?>
                         </div>
                         <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                         <a href="<?= base_url("/index.php/product/reset") ?>" class="btn btn-primary mt-3">Cancel</a>
                         <?= form_close() ?>
                    </div>
               </div>
          </div>
     </div>
</main>