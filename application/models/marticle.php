<?php
   class Marticle extends CI_Model{
      function __construct(){
         parent::__construct();
      }

      public function getAll(){
         $result = $this->db->get('article');

         return $result;

      }

      public function getByURL ($url) {
         $result = $this->db->get_where('article' , array('articleURL' => $url))->row();

         return $result;
      }
   }
?>
