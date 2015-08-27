<article id="main">
   <div class="container-header-page">
      <div class="title-page">ARTICLE</div>
      <div class="welcoming">Content Manager</div>
   </div>

   <div class="container960">
      <div class="div-new-article right">
         <a href="<?php echo site_url('/admin/article/add'); ?>">+ Tambahkan Artikel</a>
      </div>
      <table border="1" class="table-class">
         <tr>
            <th> No </th>
            <th> Judul </th>
            <th> Author </th>
            <th> Action </th>
         </tr>
         <?php $i = 1; foreach($article as $data): ?>
            <tr>
               <td> <?php echo $i; ?> </td>
               <td> <?php echo $data->arTitle; ?> </td>
               <td> <?php echo $data->amName; ?> </td>
               <td>
                  <a href="<?php echo site_url('/admin/article/edit/' . $data->arId) ?>"> Edit </a>
               </td>
            </tr>
         <?php $i++; endforeach; ?>
      </table>
   </div>
</article>
