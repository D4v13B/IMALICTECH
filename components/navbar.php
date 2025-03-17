<?php

function menu_links()
{
   echo "
   <li>
      <a href='index.php'>Inicio</a>
   </li>
   <li>
      <a href='#'>Entretenimiento y Contenido</a>
      <ul class='sub-menu'>
         <li><a href='service.php'>LearnLive</a></li>
      </ul>
   </li>
   <li>
      <a href='billcentrix.php'>Billcentrix</a>
   </li>
   ";
}

?>

<!-- Header Start  -->
<div
   id="header"
   class="section header-section header-section-2 header-section-4 transparent-header">
   <div class="container">
      <!-- Header Wrap Start  -->
      <div class="header-wrap">
         <div class="header-logo">
            <a href="index.html"><img src="assets/images/logo.png" alt="" /></a>
         </div>

         <div class="header-menu d-none d-lg-block d-flex justify-content-center w-50">
            <ul class="main-menu">
               <?php echo menu_links() ?>
            </ul>
         </div>

         <!-- Header Meta Start -->
         <div class="header-meta header-meta-4">
            <!-- Header Search Start -->
            <!-- <div class="header-search">
               <a class="search-btn" href="#"><i class="flaticon-loupe"></i></a>
               <div class="search-wrap">
                  <div class="search-inner">
                     <i
                        id="search-close"
                        class="flaticon-close search-close"></i>
                     <div class="search-cell">
                        <form action="#">
                           <div class="search-field-holder">
                              <input
                                 class="main-search-input"
                                 type="search"
                                 placeholder="Search Your Keyword..." />
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div> -->
            <!-- Header Search End -->

            <div class="header-btn-2 d-none d-xl-block">
               <a class="btn" href="#">Contáctanos</a>
            </div>
            <!-- Header Toggle Start -->
            <div class="header-toggle d-lg-none">
               <button
                  data-bs-toggle="offcanvas"
                  data-bs-target="#offcanvasExample">
                  <span></span>
                  <span></span>
                  <span></span>
               </button>
            </div>
            <!-- Header Toggle End -->
         </div>
         <!-- Header Meta End  -->
      </div>
      <!-- Header Wrap End  -->
   </div>
</div>
<!-- Header End -->

<!-- Offcanvas Start-->
<div class="offcanvas offcanvas-start" id="offcanvasExample">
   <div class="offcanvas-header">
      <!-- Offcanvas Logo Start -->
      <div class="offcanvas-logo">
         <a href="index.html"><img src="assets/images/logo-white.png" alt=""></a>
      </div>
      <!-- Offcanvas Logo End -->
      <button type="button" class="close-btn" data-bs-dismiss="offcanvas"><i class="flaticon-close"></i></button>
   </div>

   <!-- Offcanvas Body Start -->
   <div class="offcanvas-body">
      <div class="offcanvas-menu">
         <ul class="main-menu">
            <?php echo menu_links() ?>
         </ul>
      </div>
   </div>
   <!-- Offcanvas Body End -->
</div>
<!-- Offcanvas End -->