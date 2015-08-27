<div id="main">
   <div class="container-header-page">
      <div class="title-page">Single Post Menu Manager</div>
   </div>

   <div class="container960">
      <div class="container960-child">
         <form
            enctype="multipart/form-data"
            fm-controller="editProfile"
            fm-target="<?php echo site_url('/admin/article/save/'); ?>"
            fm-success="<?php echo site_url('/admin/article/'); ?>"
            method="post"
            >
            <p>
               Judul: <br>
               <input type="text" class="input-element" name="title" required>
            </p>
            <p>
               Deskripsi: <br>
               <textarea name="desc" id="editor1"></textarea>
            </p>
            <p>
               Gambar: <br>
               <input type="file" name="pict">
            </p>
            <input type="submit" class="right save-button" value="Simpan" name="update">
            <a href="<?php echo site_url('/admin/profile'); ?>">
               <div class="right cancel-button"> Batal </div>
            </a>
         </form>
      </div>
   </div>
</div>
