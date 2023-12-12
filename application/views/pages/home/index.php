<main role="main" class="container-fluid">
	<?php $this->load->view('layouts/_alert') ?>
	<div class="row">
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-12">
					<div class="card mb-3">
						<div class="card-body ">
							Kategori: <strong>
								<?= isset($category) ? $category : 'Semua Kategori' ?>
							</strong>
							<span class="float-end">
								<!-- Urutkan Postingan:
								<a href="#"><span class="badge bg-primary">Terbaru</span></a>
								|
								<a href="#"><span class="badge bg-primary">Terlama</span></a>
							</span> -->
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- List Postingan -->
				<?php foreach ($content as $row): ?>
					<div class="col-md-4">
						<div class="card mb-3">
							<img src="<?= $row->image ? base_url("/images/product/$row->image") : base_url("/images/product/default.png") ?>"
								alt="" height="10%" class="card-img-top" />
							<div class="card-body">
								<h5 class="card-title">
									<?= $row->product_title ?>
								</h5>
								<!-- <p class="card-text"><strong>
										<?= $this->session->userdata('name') ?>
									</strong></p> -->
								<p class="card-text">
									<?= $row->description_product ?>
								</p>
								<a href="<?= base_url("/index.php/shop/category/$row->category_slug") ?>">
									<span class="badge bg-primary">
										<i class="fas fa-tags"></i>
										<?= $row->category_title ?>
									</span>
								</a>
							</div>
							<div class="card-footer">
								<!-- <form action="">
								<div class="input-group">
								    <input type="number" class="form-control" />
								    <div class="input-group-append">
									   <button class="btn btn-primary">Add to cart</button>
								    </div>
								</div>
							 </form> -->
								<div class="d-grid gap-2">
									<a href="<?= base_url("index.php/detailproduct/index/$row->id_product") ?>"
										class="btn btn-primary">Lihat detail
										postingan</a>
									<!-- <button
								    class="btn btn-primary"
								    type="button"
								    src="/detail-product.html"
								>
								    Lihat detail
								</button> -->
								</div>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
			<nav aria-label="Page navigation example">
				<?= $pagination ?>
			</nav>
		</div>
		<div class="col-md-3">
			<div class="row">
				<div class="col-md-12">
					<div class="card mb-3">
						<div class="card-header">Pencarian</div>
						<div class="card-body">
							<!-- <form action="<?= base_url("/index.php/shop/search") ?>" method="POST">
								<div class="input-group">
									<input type="text" name="keyword" placeholder="Cari"
										value="<?= $this->session->userdata('keyword') ?>"
										class="form-control">
									<div class="input-group-append">
										<button class="btn btn-primary" type="submit">
											<i class="fas fa-search"></i>
										</button>
									</div>
								</div>
							</form> -->
							<form action="<?= base_url("/index.php/shop/search") ?>" method="POST">
								<div class="input-group">
									<input type="text" class="form-control" name="keyword" placeholder="Cari"
										value="<?= $this->session->userdata('keyword') ?>" />
									<div class="input-group-append">
										<button class="btn btn-info btn-sm" type="submit">
											<i class="fas fa-search"></i>
										</button>
										<a href="<?= base_url("/index.php/home/reset") ?>"
											class="btn btn-info btn-sm">
											<i class="fas fa-eraser"></i>
										</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card mb-3">
						<div class="card-header">Kategori</div>
						<ul class="list-group list-group-flush ">
							<li class="list-group-item "><a href="<?= base_url('/') ?>"
									class="btn btn-primary">Semua Kategori</a></li>
							<?php foreach (getCategories() as $category): ?>
								<li class="list-group-item">
									<a href="<?= base_url("/index.php/shop/category/$category->slug") ?>"
										class="btn btn-primary">
										<?= $category->title ?>
									</a>
								</li>
							<?php endforeach ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>