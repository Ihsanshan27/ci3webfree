<main role="main" class="container">
    <?php $this->load->view('layouts/_alert') ?>
    <div class="row">
        <div class="row-md-8 mx-auto">
            <div class="card">
                <div class="card-header text-center">
                    Form Registrasi
                </div>
                <div class="card-body">
                    <?= form_open('register', ['method' => 'POST']) ?>
                    <div class="form-group">
                        <label for="">Nama</label>
                        <?= form_input('name', $input->name, ['class' => 'form-control', 'required' => true, 'autofocus' => true]) ?>
                        <?= form_error('name') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control',
                            'placeholder' => 'Masukan alamat email aktif', 'required' => true]) ?>
                        <?= form_error('email') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <?= form_password('password', '', ['class' => 'form-control', 'placeholder' => 'Masukan Password minimal 8 karakter',
                            'required'    => true]) ?>
                        <?= form_error('password') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Konfirmasi Password</label>
                        <?= form_password('password_confirmation', '', ['class' => 'form-control',
                            'placeholder' => 'Masukan Password yang sama', 'required' => true]) ?>
                        <?= form_error('form_confirmation') ?>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Register</button>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</main>