<?php
   class Home extends CI_Controller{
      function __construct(){
         parent::__construct();

         $this->load->model('marticle');
         $this->load->model('mslider');
      }

      public function index(){
         $data = $this->marticle->getAll();
         $dataslider = $this->mslider->getSlider();

         $this->load->view('head');
         $this->load->view('header');
         $this->load->view('body-open', array(
            'article' => $data,
            'slider' => $dataslider

         ));
         $this->load->view('slider');
         $this->load->view('body-close');
         $this->load->view('footer');
      }

   }

?>
