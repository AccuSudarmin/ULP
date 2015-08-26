<?php
   class Marticle extends CI_Model{
      function __construct(){
         // $this->con = mysqli_connect('localhost', 'root', '', 'ulp');
         //
         // if(mysqli_connect_errno()){
         //    echo "Failed to connect to the database : ".mysqli_connect_error();

         // }
         // $this->load->database();
         parent::__construct();
      }

      public function getAll(){
         $result = $this->db->get('article');

         return $result;

      }
   }
?>
