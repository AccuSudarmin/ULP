<?php
   class Home extends CI_Controller{
      function __construct(){
         parent::__construct();

         $this->load->model('marticle');
         $this->load->model('mslider');
      }

      public function index(){
         $article = $this->marticle->getAll();
         $dataslider = $this->mslider->getSlider();

         $this->load->view('head');
         $this->load->view('header');
         $this->load->view('body-open');
         $this->load->view('left-sidebar');
         $this->load->view('center-container-open');
         $this->load->view('slider', array(
            'slider'=> $dataslider
         ));
         $this->load->view('article-all', array(
            'article' => $article
         ));
         $this->load->view('center-container-close');
         $this->load->view('right-sidebar');
         $this->load->view('body-close');
         $this->load->view('footer');
      }

   }

?>
