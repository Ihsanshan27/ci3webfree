<main role="main" class="container-lg">
     <?php $this->load->view('layouts/_alert') ?>
     <div class="row">
          <div class="col-md-4 mx-auto">
               <div class="card">
                    <div class="card-header text-center">Form Login</div>
                    <div class="card-body">
                         <?= form_open('login', ['method' => 'POST']) ?>
                         <div class="form-group">
                              <label for="">Email</label>
                              <?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control',
                                   'placeholder' => 'Masukan alamat email', 'required' => true]) ?>
                              <?= form_error('email') ?>
                         </div>
                         <div class="form-group">
                              <label for="">Password</label>
                              <?= form_password('password', '', ['class' => 'form-control', 'placeholder' => 'Masukan Password',
                                   'required'    => true]) ?>
                              <?= form_error('password') ?>
                         </div>
                         <button type="submit" class="btn btn-primary">Login</button>
                         <?= form_close() ?>
                    </div>
               </div>
          </div>
     </div>
</main>