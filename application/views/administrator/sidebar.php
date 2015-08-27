<div id="button-sidebar">
   <div class="arrow-right" style="display:block" id="show-sidebar"></div>
   <div class="arrow-left" style="display:none" id="hide-sidebar"></div>
</div>

<aside id="sidebar-menu">
   <ul>
      <li class="first-level-menu active-side-menu">
         <a href="<?php echo site_url('/admin/dashboard'); ?>">
            <img src="<?php echo base_url('public/image/icon/home.png'); ?>" width="15px" style="margin-right:10px;">
            Dashboard
         </a>
      </li>

      <li>
         <input type="checkbox" id="main" style="display:none;">
         <label for="main" class="category-title-menu">MAIN</label>
         <ul class="show">
            <li class="second-level-menu">
               <a href="<?php echo site_url('/admin/profile') ?>">
                  <img src="<?php echo base_url('public/image/icon/rencana.png'); ?>" width="15px" style="margin-right:10px;">
                  Profil
               </a>
            </li>
         </ul>
      </li>

      <li>
         <input type="checkbox" id="content" style="display:none;">
         <label for="content" class="category-title-menu">KONTEN</label>
         <ul class="show">
            <li class="second-level-menu">
               <a href="<?php echo site_url('/admin/article'); ?>">
                  <img src="<?php echo base_url('public/image/icon/rencana.png'); ?>" width="15px" style="margin-right:10px;">
                  Artikel
               </a>
            </li>
         </ul>
      </li>
   </ul>
</aside>
