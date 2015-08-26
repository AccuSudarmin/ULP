<div class="slider">
    <div class="ninja-wrap">
   <div class="slider-cont">

         <?php $i=0; foreach($slider->result() as $sliderin):?>
            <?php if($i===0):?>
            <div class="slide activeslide">
               <img src="<?php echo base_url('public/image/slider/'.$sliderin->{'slImg'}.''); ?>">
            </div>

            <?php else:?>
               <div class="slide">
                  <img src="<?php echo base_url('public/image/slider/'.$sliderin->{'slImg'}.''); ?>">
               </div>
            <?php endif;?>

         <?php $i++; endforeach; ?>
   </div>

</div>

<div class="slider-nav">
   <div class="slider-nav-wrapper">
      <a href="#" class="arrow-prev"><img src="<?php echo base_url('public/image/arrow-prev.png');?>"></a>
      <ul class="slider-dots">
        <?php $i=0; foreach($slider->result() as $adot):?>
           <?php if($i===0):?>
               <li class="dot activedot">&bull;</li>
           <?php else:?>
               <li class="dot">&bull;</li>
           <?php endif;?>
        <?php $i++; endforeach; ?>
      </ul>
      <a href="#" class="arrow-next"><img src="<?php echo base_url('public/image/arrow-next.png');?>"></a>
   </div>
</div>
</div>
