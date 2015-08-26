<?php
   defined('BASEPATH') OR exit('No direct script access allowed');

   class MY_Model extends CI_Model
   {

      function __construct()
      {
         parent::__construct();

         $this->load->library('dbsql', array(
            'db_host' => 'localhost' ,
            'db_user' => 'root' ,
            'db_pass' => '' ,
            'db_name' => 'ulp'
         ));
      }
   }

?>
