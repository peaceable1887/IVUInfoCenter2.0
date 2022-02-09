<?php


class slider
{
    function eventSlider($evenTile)
    {
        $slider = "<div class=\"sliderContainer\">
  <div class=\"sliderHeadline\"> 
    ANSTEHENDE VERANSTALTUNGEN 
  </div>
  <div class=\"slideshowContainer\">
   
   
   
  <div class=\"arrow\">
    <div class=\"prev\">
    <
    </div>
  </div>
  <div class=\"slideshowContent\">
   
    ".$evenTile."
  
  </div>
  <div class=\"arrow\">
    <div class=\"next\">
    >
    </div>
  </div>
  </div>
  <div class=sliderButton>
     <button>GESAMTE KURSÜBERSICHT</button>
  </div>
</div>";

        return $slider;
    }
}