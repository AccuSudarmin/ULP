<article id="main">
   <div class="container-header-page">
      <div class="title-page">ARTICLE</div>
      <div class="welcoming">Content Manager</div>
   </div>

   <div class="container960">
      <table border="1" class="table-class">
         <tr>
            <th> No </th>
            <th> Judul </th>
            <th> Author </th>
            <th> Action </th>
         </tr>
         <?php $i = 1; foreach($article->result() as $data): ?>
            <tr>
               <td> <?php echo $i; ?> </td>
               <td> <?php echo $data->arTitle; ?> </td>
               <td> <?php echo $data->arAuthor; ?> </td>
               <td>
                  <a href="<?php echo site_url('/admin/profile/edit/' . $data->arId) ?>"> Edit </a>
               </td>
            </tr>
         <?php $i++; endforeach; ?>
      </table>
   </div>
</article>
