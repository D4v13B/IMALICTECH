<?php

$socios_src = [
   [
      "socio" => "Digicel",
      "src_path" => "assets/images/DIGICEL.jpg"
   ],
   [
      "socio" => "Altice",
      "src_path" => "assets/images/ALTICE.png"
   ]
]

?>

<!-- Testimonial Start -->
<div class="section testimonial-section-2 section-padding-03">
   <div class="container">
      <div class="testimonial-2-wrap">
         <div class="section-title2 text-center">
            <h2 class="title" style="font-size: 30px;"><span>De un paso adelante</span> y conviertase en uno de nuestros socios de negocios</h2>
         </div>
         <div class="testimonial-slider-wrap">
            <div class="swiper-container testimonial-2-active slider-bullet">
               <div class="swiper-wrapper">
                  <?php foreach ($socios_src as $sc): ?>
                     <div class="swiper-slide">
                        <!-- Single Testimonial Start -->
                        <?php single_image_slider($sc["src_path"], $sc["socio"], 200) ?>
                        <!-- Single Testimonial End -->
                     </div>
                  <?php endforeach ?>
               </div>
               <!-- Add Pagination -->
               <div class="swiper-pagination"></div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Testimonial End -->