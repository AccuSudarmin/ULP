<?php
   class Madmin extends CI_Model{
      function __construct(){
         parent::__construct();
      }

      public function getByName($name){
         $result = $this->db->get_where('admin' , array('amName' => $name))->row();

         return $result;
      }
   }
?>
