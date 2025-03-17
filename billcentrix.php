<?php

include "./components/require.php";
include "components/header.php";
include "components/navbar.php";
?>

<?php
//service_header("assets/images/profesor-learn-live.png", "Learn Live") 
$images_items = [
   [
      "src" => "assets/images/billcentrix.png",
      "title" => "LearnLive1"
   ]
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
               <!-- <?php carousel("carouselMockUpsLearnLive", $images_items) ?> -->

               <?php what_is_section([], "Billcentrix", "Recurrencia de Cobros Inteligentes. Recuperación de Cartera y Portales de suscripción: La solución completa para automatizar el proceso de cobro recurrente con Tarjeta de Crédito, actualización de clientes y gestión de deuda. Totalmente integrado con las empresas.", "¿Por qué BillCentrix?", "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis deserunt excepturi ipsum error dignissimos animi, ullam ab laudantium eum? Ea alias minus reprehenderit dignissimos sunt velit, a impedit veritatis, voluptatem saepe, ex quas iure nostrum inventore veniam fugiat! Vel, officia fugit voluptas quidem qui hic vero nesciunt architecto velit laudantium laborum alias aliquid temporibus quo incidunt sit natus et soluta ut neque officiis, voluptate quod itaque quia. Magni praesentium, ratione corrupti cupiditate repudiandae impedit sequi quaerat accusamus ad porro vero maiores eius velit laboriosam libero alias cum dicta perspiciatis aperiam delectus? Dolor quibusdam nisi, ex quisquam nulla accusamus repellendus neque.
", "https://learnlive.club/", carousel("carouselMockUpsLearnLive", $images_items, 300, true)) ?>
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