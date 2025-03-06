<?php

include "./components/require.php";
include "components/header.php";
include "components/navbar.php";
include "./components/hero.php";
?>

<!-- Features Start -->
<div class="section features-section-3 features-section-4 features-section-6 section-padding" style="background-image: url(assets/images/bg//features-6-bg.jpg);">
   <div class="container">
      <!-- Features Wrap Start -->
      <div class="features-wrap-3">
         <div class="row">
            <div class="col-lg-8">
               <div class="section-title2">
                  <h2 class="title">Conoce nuestra <span>experiencia y soluciones</span> en IT</h2>
               </div>
            </div>
            <!-- <div class="col-lg-4">
               <div class="features-6-btn">
                  <a class="btn" href="#">All Services</a>
               </div>
            </div> -->
         </div>
         <div class="features-content-wrap">
            <div class="row">
               <div class="col-lg-4 col-sm-6">
                  <?php single_feature("assets/images/features-6.png", "Learn Live", "LearnLive es una plataforma LMS que ofrece más de 400 cursos en diversos temas, creados por expertos de todo el mundo, con apoyo de video streaming.")?>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <?php single_feature("assets/images/features-6.png", "Billcentrix", "Solución integral para cobros recurrentes, gestión de deuda y actualización de clientes, totalmente automatizada e integrada para empresas.")?>
               </div>
            </div>
         </div>
      </div>
      <!-- Features Wrap End -->
   </div>
</div>
<!-- Features End -->

<?php
include "components/footer.php";
?>