
  <body>
    <div class="body-wrapper">
    <div class="body-container">

        <?php $this->load->view("header");?>

        <div id="body-wrapper">
          <?php $this->load->view('left-sidebar');

           $this->load->view('center-container');

           $this->load->view('right-sidebar');
           ?>



        </div>

        <?php $this->load->view('footer');?>
    </div>
  </div>


         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
         <script src="<?php echo base_url('public/js/slider.js');?> "></script>

  </body>
</html>
