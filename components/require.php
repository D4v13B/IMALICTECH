<?php

function single_feature($src, $title, $p, $clases = "", $style = "")
{
   echo "
<div class='single-item $clases' style='$style'>
   <div class='features-icon'>
      <img src='$src' alt='$title'>
   </div>
   <div class='features-content'>
      <h3 class='title'>$title</h3>
      <p>$p</p>
   </div>
</div>";
}

function feature_item($src, $bg_image, $text)
{
   echo "<div class='features-item flex-column px-2' style='background-image: url($bg_image);'>
                  <div class='features-icon'>
                     <img src='$src' alt='$text'>
                  </div>
                  <div class='features-text' >
                     <h6 class='title' style='font-size: 16px'>$text</h6>
                  </div>
               </div>";
}

function single_testimonial()
{
   echo "<div class='single-testimonial'>
                        <div class='testimonial-image'>
                           <img src='assets/images/testimonial/testi-2.jpg' alt=''>
                        </div>
                        <div class='testimonial-content'>
                           <p>Accelerate innovation with world-class tech teams Beyond more stoic this along goodness hey this this wow manatee </p>
                           <span class='name'>Michel Holder</span>
                           <span class='designation'>CEO, Harlond inc</span>
                        </div>
                     </div>";
}

function service_header($url_bg, $title)
{
   $url_bg = htmlspecialchars($url_bg, ENT_QUOTES, 'UTF-8');
   $title = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');

   echo "<div class='section page-banner-section' style='background-image: url(\"$url_bg\");'>
           <div class='shape-2'></div>
           <div class='container'>
               <div class='page-banner-wrap'>
                   <div class='row'>
                       <div class='col-lg-12'>
                           <div class='page-banner text-center'>
                               <h2 class='title'>$title</h2>
                               <ul class='breadcrumb justify-content-center'>
                                   <li class='breadcrumb-item'><a href='#'>Home</a></li>
                                   <li class='breadcrumb-item active' aria-current='page'>$title</li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>";
}

function single_image_slider($src, $socio, $width = 300)
{
   echo "<div class='single-testimonial'>
            <div class='testimonial-image d-flex w-100 justify-content-center'>
               <img src='$src' alt='$socio' width='{$width}px'>
            </div>
         </div>";
}

function feature_single_item($image, $title, $description)
{
   $image = htmlspecialchars($image, ENT_QUOTES, 'UTF-8');
   $title = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
   $description = htmlspecialchars($description, ENT_QUOTES, 'UTF-8');

   echo "<div class='single-item'>
           <div class='features-icon'>
               <img src='$image' alt=''>
           </div>
           <div class='features-content'>
               <h3 class='title'>$title</h3>
               <p>$description</p>
           </div>
       </div>";
}

function what_is_section($url_bg, $title, $p1, $subtitle, $p2, $btn_href = '', $carousel = '')
{
   $slider = "";

   foreach ($url_bg as $bg) {
      $slider .= "
      <div class='swiper-slide'>
            <img src='$bg' alt='$title'>
      </div>";
   }

   if (!empty($carousel)) {
      $slider = $carousel;
   }

   echo "
      <div class='col-xl-5'>
         <div class='about-img-wrap'>
             <div class='about-img about-img-big'>
               $slider
             </div>
         </div>
      </div>
      <div class='col-xl-7'>
          <!-- About Content Start-->
          <div class='about-content'>
              <div class='section-title2'>
                  <h2 class='title'>$title</h2>
              </div>
              <p class='text'>$p1</p>
              <!-- About List Start-->
              <div class='about-list'>
                  <div class='about-list-item'>
                      <div class='list-content'>
                          <h3 class='title'>$subtitle</h3>
                          <p>$p2</p>
                      </div>
                  </div>
              </div>
              <!-- About List End-->
              <a class='btn' target='_blank' href='$btn_href'>Conocé $title</a>
          </div>
          <!-- About Content End-->
      </div>
   </div>
   ";
}

function carousel($id, $items, $width = 300, $return = false)
{
   $htmlItems = "";
   $i = 0;

   foreach ($items as $it) {
      $active = $i === 0 ? " active" : ""; // Agregamos espacio antes de "active" solo si es necesario
      $i++;

      $htmlItems .= "
        <div class='carousel-item$active'>
            <img src='" . htmlspecialchars($it['src']) . "' class='d-block w-100' 
                 alt='" . htmlspecialchars($it['title']) . "' 
                 style='width: {$width}px'>
        </div>";
   }

   $res = "
    <div id='$id' class='carousel slide' data-bs-ride='carousel'>
        <div class='carousel-inner'>
            $htmlItems
        </div>
        <button class='carousel-control-prev' type='button' data-bs-target='#$id' data-bs-slide='prev'>
            <span class='carousel-control-prev-icon' aria-hidden='true'></span>
            <span class='visually-hidden'>Previous</span>
        </button>
        <button class='carousel-control-next' type='button' data-bs-target='#$id' data-bs-slide='next'>
            <span class='carousel-control-next-icon' aria-hidden='true'></span>
            <span class='visually-hidden'>Next</span>
        </button>
    </div>";

   if ($return) {
      return $res;
   }

   echo $res;
}
