<div class="ninja-wrap">
   <div class="slider-cont">
         <div class="slide activeslide">
            <img src="<?php echo base_url('public/image/a.jpg');?>">
         </div>

         <div class="slide">
            <img src="<?php echo base_url('public/image/b.png');?>">
         </div>

         <div class="slide">
            <img src="<?php echo base_url('public/image/c.jpg');?>">
         </div>

         <?php foreach($slider->result() as $viewslider):?>
            <div class="slide">
               <img src="<?php echo base_url('public/image/'.$viewslider->slImg.'');?>">
            </div>
         <?php endforeach; ?>

   </div>

</div>

<div class="slider-nav">
   <div class="slider-nav-wrapper">
      <a href="#" class="arrow-prev"><img src="<?php echo base_url('public/image/arrow-prev.png');?>"></a>
      <ul class="slider-dots">
        <li class="dot activedot">&bull;</li>
        <li class="dot">&bull;</li>
        <li class="dot">&bull;</li>
        <?php
           foreach($slider->result() as $mslider){
             echo '<li class="dot">&bull;</li>';
           }
        ?>
      </ul>
      <a href="#" class="arrow-next"><img src="<?php echo base_url('public/image/arrow-next.png');?>"></a>
   </div>
</div>
