<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Category extends MY_Controller {


     public function __construct() {
          parent::__construct();
          //Do your magic here
     }


     public function index($page = null) {
          $data['title'] = 'Admin: Category';
          $data['content'] = $this->category->paginate($page)->get();
          $data['total_rows'] = $this->category->count();
          $data['pagination'] = $this->category->makePagination(
               base_url('/category'), 2, $data['total_rows']
          );
          $data['page'] = '/pages/category/index';

          $this->view($data);
     }

     public function create() {
          if(!$_POST) {
               # code...
               $input = (object)$this->category->getDefaultValues();
          } else {
               $input = (object)$this->input->post(null, true);
          }

          if(!$this->category->validate()) {
               # code...
               $data['title'] = 'Tambah Kategori';
               $data['input'] = $input;
               $data['form_action'] = 'category/create';
               $data['page'] = 'pages/category/form';

               $this->view($data);
               return;
          }

          if($this->category->create($input)) {
               # code...
               $this->session->set_flashdata('success', 'data berhasil disimpan!');
          } else {
               $this->session->set_flashdata('error', 'Oops! terjadi kesalahan!');

          }
     }

}

/* End of file Category.php */


?>