<div id="main">
   <div class="container-header-page">
      <div class="title-page">Single Post Menu Manager</div>
   </div>

   <div class="container960">
      <div class="container960-child">
         <form
            fm-controller="editProfile"
            fm-target="<?php echo site_url('/admin/profile/update/' . $profile->pfId); ?>"
            fm-success="<?php echo site_url('/admin/profile/'); ?>"
            method="post"
            >
            <p>
               Title (ID): <br>
               <input type="text" class="input-element" name="title" value="<?php echo $profile->pfTitle; ?>" required>
            </p>
            <p>
               Description (ID): <br>
               <textarea name="desc" id="editor1"><?php echo $profile->pfContent; ?></textarea>
            </p>
            <input type="submit" class="right save-button" value="Update" name="update">
            <a href="<?php echo site_url('/admin/profile'); ?>">
               <div class="right cancel-button"> Cancel </div>
            </a>
         </form>
      </div>
   </div>
</div>
<script type="text/javascript">
    CKEDITOR.replace( 'editor1',{
        filebrowserBrowseUrl :'js/ckeditor/filemanager/browser/default/browser.html?Connector=http://unhas.ac.id/proposed8/dashboard/js/ckeditor/filemanager/connectors/php/connector.php',
        filebrowserImageBrowseUrl : 'js/ckeditor/filemanager/browser/default/browser.html?Type=Image&Connector=http://unhas.ac.id/proposed8/dashboard/js/ckeditor/filemanager/connectors/php/connector.php',
        filebrowserFlashBrowseUrl :'js/ckeditor/filemanager/browser/default/browser.html?Type=Flash&Connector=http://unhas.ac.id/proposed8/dashboard/js/ckeditor/filemanager/connectors/php/connector.php',
        filebrowserUploadUrl  :'http://unhas.ac.id/proposed8/dashboard/js/ckeditor/filemanager/connectors/php/upload.php?Type=File',
        filebrowserImageUploadUrl : 'http://unhas.ac.id/proposed8/dashboard/js/ckeditor/filemanager/connectors/php/upload.php?Type=Image',
        filebrowserFlashUploadUrl : 'http://unhas.ac.id/proposed8/dashboard/js/ckeditor/filemanager/connectors/php/upload.php?Type=Flash'
    });
</script>
