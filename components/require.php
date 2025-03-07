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
   echo "<div class='features-item' style='background-image: url($bg_image);'>
                  <div class='features-icon'>
                     <img src='$src' alt='$text'>
                  </div>
                  <div class='features-text'>
                     <h3 class='title'>$text</h3>
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
