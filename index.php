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
            <div class="row col-12 flex-column flex-md-row">
               <div class="col-lg-6 col-sm-12">
                  <?php single_feature("assets/images/features-4.png", "Entretenimiento/Contenido", "Ofrecemos innovadores servicios y soluciones de valor agregado. Nuestra apuesta por innovar, traer contenidos que localmente sean relevantes, ofrecer una experiencia de usuario de última generación y proveerle al Operador/Telco ingresos adicionales, son los ingredientes que componen la base de nuestra oferta.") ?>
               </div>
               <div class="col-lg-6 col-sm-12">
                  <?php single_feature("assets/images/billcentrix-solo-logo.png", "Billcentrix", "Recurrencia de Cobros Inteligentes. Recuperación de Cartera y Portales de suscripción:
                  La solución completa para automatizar el proceso de cobro recurrente con Tarjeta de Crédito, actualización de clientes y gestión de deuda. Totalmente integrado con las empresas.") ?>
               </div>
            </div>
            <div class="row col-12">
               <div class="col-lg-12 col-sm-12">
                  <?php single_feature("assets/images/features-6.png", "Learn Live", "LearnLive es una plataforma LMS ( Learning Management System ó Sistema de Gestión de Aprendizaje) donde, apoyados con recursos de Video Streaming, ponemos a disposición de nuestros usuarios más de 400 cursos, desarrollados por profesionales de todo el mundo y orientados a una gran variedad de temas.") ?>
               </div>
            </div>
         </div>
      </div>
      <!-- Features Wrap End -->
   </div>
</div>
<!-- Features End -->

<?php
include "./components/testiomonial_section.php";
include "./components/footer.php";
?>