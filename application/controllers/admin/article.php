<?php
   defined('BASEPATH') OR exit('No direct script access allowed');

   class Article extends CI_Controller
   {
      function __construct() {
         parent::__construct();

         $this->load->model('marticle');
         $this->load->library('session');
      }

      public function index()  {

         $article = $this->marticle->getAll();

         $this->load->view('administrator/header');
   		$this->load->view('administrator/navbar');
   		$this->load->view('administrator/sidebar');
   		$this->load->view('administrator/article/content' , array(
            "article" => $article
         ));
   		$this->load->view('administrator/footer');

      }

      public function add() {

         $this->load->view('administrator/header');
   		$this->load->view('administrator/navbar');
   		$this->load->view('administrator/sidebar');
   		$this->load->view('administrator/article/form');
   		$this->load->view('administrator/footer');

      }

      public function save(){

         $title = $this->input->post('title');
         $desc = $this->input->post('desc');
         $date = time();
         $user = $this->session->userdata('admin_ulp');
         $url = str_replace("&nbsp" , "-" , strtolower($title));

         $config['upload_path'] = './public/userfiles/image/';
         $config['file_name'] = $title;
		   $config['allowed_types'] = 'gif|jpg|png';

         $this->load->library('upload', $config);

         $data = array("type" => "modal-box");

		   if ( ! $this->upload->do_upload("pict")) {
			   $error = $this->upload->display_errors();
            $data['message'] = "Data Gagal Disimpan";
            $data['success'] = false;

         } else {
	         $file = $this->upload->data();

            $result = $this->marticle->addNew( array(
               "arTitle" => $title ,
               "arTgl" => $date ,
               "arAuthor" => $user['id'] ,
               "arContent" => $desc ,
               "arURL" => $url ,
               "arImage" => $file['file_name']
            ));

            if ($result) {
               $data['message'] = "Data Berhasil Disimpan";
               $data['delayURL'] = 1000;
            } else {
               $data['message'] = "Data Gagal Disimpan";
               $data['success'] = false;
            }
		   }

         echo json_encode($data);
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
