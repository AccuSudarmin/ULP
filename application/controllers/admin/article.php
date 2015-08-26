<?php
   defined('BASEPATH') OR exit('No direct script access allowed');

   class Article extends CI_Controller
   {
      function __construct() {
         parent::__construct();

         $this->load->model('marticle');
      }

      public function index()  {

         $profile = $this->marticle->getAll();

         $this->load->view('administrator/header');
   		$this->load->view('administrator/navbar');
   		$this->load->view('administrator/sidebar');
   		$this->load->view('administrator/article/content' , array(
            "article" => $article
         ));
   		$this->load->view('administrator/footer');

      }

      public function edit($id) {

         $profile = $this->marticle->getById($id);

         $this->load->view('administrator/header');
   		$this->load->view('administrator/navbar');
   		$this->load->view('administrator/sidebar');
   		$this->load->view('administrator/profile/form-edit' , array(
            "profile" => $profile
         ));
   		$this->load->view('administrator/footer');

      }

      public function update($id) {
         $title = $this->input->post('title');
         $content = $this->input->post('desc');

         $result = $this->mprofile->update( $id , array(
            "pfTitle" => $title ,
            "pfContent" => $content
         ));

         $data = array("type" => "modal-box");

         if ($result) {
            $data['message'] = "Data Berhasil Disimpan";
            $data['delayURL'] = 1000;
         } else {
            $data['message'] = "Data Gagal Disimpan";
            $data['success'] = false;
         }

         echo json_encode($data);
      }

      public function delete() {

      }
   }

?>
