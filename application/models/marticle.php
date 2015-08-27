<?php
   class Marticle extends CI_Model{
      function __construct(){
         parent::__construct();
      }

      public function addNew($data) {
         $this->db->trans_start();
         $this->db->insert('article', $data);
         $this->db->trans_complete();

         if ($this->db->trans_status() === FALSE) {
            return false;
         } else {
            return true;
         }
      }

      public function getAll(){
         $result = $this->db->get('article');

         return $result;

      }

      public function getByURL ($url) {
         $result = $this->db->get_where('article' , array('arURL' => $url))->row();

         return $result;
      }
   }
?>
