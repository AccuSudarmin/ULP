<?php
   class Article extends CI_Controller{
      function __construct(){
         parent::__construct();

         $this->load->model('marticle');
      }

      public function view($url){
         $singlearticle = $this->marticle->getByURL($url);

         $this->load->view('head');
         $this->load->view('header');
         $this->load->view('body-open');
         $this->load->view('left-sidebar');
         $this->load->view('center-container-open');
         $this->load->view('article-single', array('article' => $singlearticle));
         $this->load->view('center-container-close');
         $this->load->view('right-sidebar');
         $this->load->view('body-close');
         $this->load->view('footer');
      }
   }

?>
