<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Product extends MY_Controller
{


     public function __construct()
     {
          parent::__construct();

     }


     public function index($page = null)
     {
          $data['title'] = 'Admin: Produk';
          $data['content'] = $this->product->select(
               [    'product.id',
                    'product.title AS product_title',
                    'product.image',
                    'product.price',
                    'product.is_available',
                    'category.title AS category_title',
                    'product.description AS description_product'
               ]
          )
               ->join('category')
               ->paginate($page)
               ->get();
          $data['total_rows'] = $this->product->count();
          $data['pagination'] = $this->product->makePagination(
               base_url('/index.php/product'), 2, $data['total_rows']
          );
          $data['page'] = '/pages/product/index';
          $this->view($data);
     }

     public function create()
     {
          if (!$_POST) {
               # code...
               $input = (object) $this->product->getValidationRules();
          } else {
               $input = (object) $this->input->post(null, true);
          }

          if (!empty($_FILES) && $_FILES['image']['name'] !== '') {
               # code...
               $imageName = url_title($input->title, '-', true) . '-' . date('YmdHis');
               $upload = $this->product->uploadImage('image', $imageName);
               if ($upload) {
                    # code...
                    $input->image = $upload['file_name'];
               } else {
                    redirect(base_url('/index.php/product/create'));
               }
          }

          if (!$this->product->validate()) {
               $data['title'] = 'Tambah Produk';
               $data['input'] = $input;
               $data['form_action'] = base_url('/index.php/product/create');
               $data['page'] = 'pages/product/form';

               $this->view($data);
               return;
          }
          if ($this->product->create($input)) {
               # code...
               $this->session->set_flashdata('success', 'data berhasil disimpan!');
          } else {
               $this->session->set_flashdata('error', 'Oops! terjadi kesalahan!');
          }

          redirect(base_url('/index.php/product'));
     }
}

/* End of file Product.php */


?>