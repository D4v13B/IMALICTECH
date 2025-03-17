<?php

include "./components/require.php";
include "components/header.php";
include "components/navbar.php";
?>

<?php 
//service_header("assets/images/profesor-learn-live.png", "Learn Live") 
$images_items = [
   [
      "src" => "assets/images/LEARNLIVE-MOCK.png",
      "title" => "LearnLive1"
   ],
   [
      "src" => "assets/images/LEARNLIVE 2.png",
      "title" => "LearnLive2"
   ],
]
?>



<!-- Features Start -->
<div class="section features-section-3 features-section-4 section-padding">
   <div class="container">
      <!-- Features Wrap Start -->
      <div class="features-wrap-3">
         <!-- <div class="section-title2 text-center">
            <h2 class="title">Aprende en Vivo, <span>Crece sin Límites</span></h2>
         </div> -->
         <div class="tech-about-section-7">
            <div class="row">
               <!-- <?php carousel("carouselMockUpsLearnLive", $images_items)?> -->

               <?php what_is_section([], "LearnLive", "LearnLive es una plataforma LMS ( Learning Management System ó Sistema de Gestión de Aprendizaje) donde, apoyados con recursos de  Video Streaming, ponemos a disposición de nuestros usuarios más de 400 cursos, desarrollados por profesionales de todo el mundo y orientados a una gran variedad de temas.", "¿Por qué LearnLive?", "+66% De la población activa de Latinoamérica está desempleada, subempleada o tiene un trabajo informal y la causa principal es la deficiencia educativa<br>+7% El riesgo social de violencia de género y desintegración familiar se multiplica X7 en entornos con poca educación<br>5% Usuarios online aprenden 5 veces más rápido y con mayor retención del contenido", "https://learnlive.club/", carousel("carouselMockUpsLearnLive", $images_items, 300, true))?>
            </div>
         </div>
      </div>
      <!-- Features Wrap End -->
   </div>
</div>
<!-- Features End -->

<?php
include "./components/footer.php";
?>