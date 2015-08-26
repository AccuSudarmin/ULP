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
         $this->load->view('home', array(
            'article' => $data,
            'slider' => $dataslider

         ));
      }

   }

?>
