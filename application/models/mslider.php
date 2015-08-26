<?php
      class mSlider extends CI_model{
         function __construct(){
            parent::__construct();
         }

         public function getSlider(){
            $sliderresult = $this->db->get('slider');
            return $sliderresult;
         }
      }
?>
