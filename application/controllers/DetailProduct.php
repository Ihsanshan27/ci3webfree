<?php


defined('BASEPATH') or exit('No direct script access allowed');

class DetailProduct extends MY_Controller
{
     private $id;
     public function __construct()
     {
          parent::__construct();
          //Do your magic here

          $this->id = $this->session->userdata('id');

     }
     public function index($id)
     {
          $data['title'] = 'Detail Postingan';
          $data['content'] = $this->detailproduct->where('id', $this->id)->first();
          $data['page'] = 'pages/detailproduct/index';
          $data['detail'] = $this->detailproduct->where('id', $id)->first();
          if (!$data['detail']) {
               $this->session->set_flashdata('warning', 'Data tidak ditemukan.');
               redirect(base_url('/'));
          }

          $this->detailproduct->table = 'product';
          $data['detail_product'] = $this->detailproduct->select([
               'product.id', 'product.id_category',
               'product.description', 'product.image',
               'category.title AS category_title',
               'category.slug'

          ])
               ->join('category')
               ->where('product.id', $data['detail']->id)
               ->get();
          $data['page'] = 'pages/detailproduct/index';

          return $this->view($data);
     }
     public function reset()
     {
          $this->session->unset_userdata('keyword');
          redirect(base_url('/index.php'));
     }


}

/* End of file DetailProduct.php */


?>