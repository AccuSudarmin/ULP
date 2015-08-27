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

         $this->db->select('*');
         $this->db->from('article');
         $this->db->join('admin', 'article.arAuthor = admin.amId');

         $listArticle = array();
         foreach ($this->db->get()->result() as $data) {
            $obj = new stdClass();

            foreach ($data as $key => $val) {
               $obj->$key = $val;
            }

            $obj->arTgl = date('j F Y' , $data->arTgl);

            $listArticle[] = $obj;
         }

         return $listArticle;
      }

      public function getByURL ($url) {
         $result = $this->db->get_where('article' , array('arURL' => $url))->row();

         return $result;
      }
   }
?>
