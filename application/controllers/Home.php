<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{
     private $id;
     public function index($page = null)
     {
          $data['title'] = 'Homepage';
          $data['content'] = $this->home->select(
               [
                    'product.id AS id_product', 'product.title AS product_title',
                    'product.image',
                    'product.description AS description_product',
                    'category.title AS category_title',
                    'category.slug AS category_slug'
               ],
          )
               // ->where('id', $this->id)->first()
               ->join('category')
               ->paginate($page)
               ->get();
          $data['total_rows'] = $this->home->count();
          $data['pagination'] = $this->home->makePagination(
               base_url('/index.php/home'), 2, $data['total_rows']
          );
          $data['page'] = 'pages/home/index';
          $this->view($data);
     }
     public function reset()
     {
          $this->session->unset_userdata('keyword');
          redirect(base_url('/'));
     }
     // public function detail($id)
     // {
     //      $data['title'] = 'Detail Postingan';
     //      $data['content'] = $this->home->where('id', $this->id)->first();
     //      $data['page'] = 'pages/home/detail';
     //      $data['detail'] = $this->home->where('id', $id)->first();
     //      if (!$data['detail']) {
     //           $this->session->set_flashdata('warning', 'Data tidak ditemukan.');
     //           redirect(base_url('/'));
     //      }

     //      $this->home->table = 'product';
     //      $data['product_detail'] = $this->home->select([
     //           'product.id', 'product.id_category',
     //           'product.title', 'product.description', 'product.image',
     //           'category.title', 'category.id',
     //           'category.slug'

     //      ])
     //           ->join('category')
     //           ->where('product.id', $data['detail']->id)
     //           ->get();

     //      return $this->view($data);
     // }
}

/* End of file Home.php */
