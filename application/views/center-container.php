<div  class="center-container float-left margin10px">
 <div class="slider">
     <?php include "slider.php"; ?>
 </div>

 <div class="folder">
    <div id="berita-terbaru">
     <div class="title">
        Lorem Ipsum
     </div>

      <?php foreach( $article->result() as $mdata){
         echo '<div class="folder-fill-container berita-terbaru">
        <h2>'.$mdata->arTitle.'</h2>
        <div class="folder-fill">
          <img src="' . base_url('public/image/lkpp.png').'" alt="" />'.$mdata->arContent.'
        </div>
        <div class="meta-tag">
          posted in'.$mdata->arTgl.' by '.$mdata->arAuthor.' | <a href="#"> Readmore </a>
        </div>
     </div>';
      }
     ?>

 </div>

  </div>

 <div class="isi">
    <?php $this->load->view('isi');?>
 </div>
</div>
