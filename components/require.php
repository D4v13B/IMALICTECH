<?php

function single_feature($src, $title, $p)
{
   echo "
<div class='single-item'>
   <div class='features-icon'>
      <img src='$src' alt='$title'>
   </div>
   <div class='features-content'>
      <h3 class='title'>$title</h3>
      <p>$p</p>
   </div>
</div>";
}
