<?php
   class Article extends CI_Controller{
      function __construct(){
         parent::__construct();

         $this->load->model('marticle');
      }

      public function view($url){
         $singlearticle = $this->marticle->getByURL('url');
      }
   }

?>
