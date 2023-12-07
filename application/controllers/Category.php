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
               base_url('/index.php/category'), 2, $data['total_rows']
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
               $data['form_action'] = base_url('/index.php/category/create');
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
          redirect(base_url('/index.php/category'));
     }

     public function edit($id) {
          $data['content'] = $this->category->where('id', $id)->first();
          if(!$data['content']) {
               # code...
               $this->session->set_flashdata('warning', 'Maaf! data tidak ditemukan!');
               redirect(base_url('/index.php/category'));
          }

          if(!$_POST) {
               $data['input'] = $data['content'];
          } else {
               $data['input'] = (object)$this->input->post(null, true);
          }

          if(!$this->category->validate()) {
               # code...
               $data['title'] = 'Ubah Kategori';
               $data['form_action'] = base_url("/index.php/category/edit/$id");
               $data['page'] = 'pages/category/form';

               $this->view($data);
               return;
          }
          if($this->category->where('id', $id)->update($data['input'])) {
               # code...
               $this->session->set_flashdata('success', 'Berhasil diperbarui!');
          } else {
               $this->session->set_flashdata('error', 'terjadi suatu kesalahan');
          }
          redirect(base_url('/index.php/category'));
     }

     public function delete($id) {
          if(!$_POST) {
               redirect(base_url('category'));
          }

          if(!$this->category->where('id', $id)->first()) {
               $this->session->set_flashdata('warning', 'Maaf! Data tidak ditemukan.');
               redirect(base_url('category'));
          }

          if($this->category->where('id', $id)->delete()) {
               $this->session->set_flashdata('success', 'Data sudah berhasil dihapus!');
          } else {
               $this->session->set_flashdata('error', 'Oops! Terjadi suatu kesalahan.');
          }
          redirect(base_url('/index.php/category'));
     }

     public function unique_slug() {
          $slug = $this->input->post('slug');
          $id = $this->input->post('id');
          $category = $this->category->where('slug', $slug)->first();

          if($category) {
               if($id == $category->id) {
                    # code...
                    return true;
               }
               # code...
               $this->load->library('form_validation');
               $this->form_validation->set_message('unique_slug', '%s sudah digunakan');
               return false;
          }
          return true;
     }

}

/* End of file Category.php */


?>