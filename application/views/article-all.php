<div class="folder">
   <div id="berita-terbaru">
    <div class="title">
      Lorem Ipsum
    </div>

    <?php foreach($article->result() as $dataartikel):?>
    <div class="folder-fill-container berita-terbaru">
      <h2> <?php echo $dataartikel->arTitle; ?> </h2>
      <div class="folder-fill">
         <img src="<?php echo base_url('public/image/lkpp.png');?>" /> <?php echo $dataartikel->arContent;?>
      </div>
      <div class="meta-tag">
         posted in <?php echo $dataartikel->arTgl; ?> by <?php echo $dataartikel->arAuthor;?> | <a href="#"> Readmore </a>
      </div>
    </div>
    <?php endforeach;?>
</div>

 </div>
