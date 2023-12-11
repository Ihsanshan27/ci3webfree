<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{

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
}

/* End of file Home.php */
