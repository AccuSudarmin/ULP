<?php
   class Mprofile extends CI_Model{
      function __construct(){
         parent::__construct();
      }

      public function getAll(){
         $result = $this->db->get('profile');

         return $result;

      }

      public function getById($id) {
         $result = $this->db->get_where('profile' , array('pfId' => $id))->row();

         return $result;
      }

      public function getByURL($url) {
         $result = $this->db->get_where('profile' , array('pfURL' => $url))->result();

         return $result;
      }

      public function update($id, $data) {
         $this->db->trans_start();
         $this->db->where('pfId', $id);
         $this->db->update('profile' ,$data);
         $this->db->trans_complete();

         if ($this->db->trans_status() === FALSE) {
            return false;
         } else {
            return true;
         }
      }
   }
?>
