<?php

function test(){
    $all_images = glob("/images/{*.jpg, *.JPG, *.JPEG, *.png, *.PNG}", GLOB_BRACE);

// shuffle($all_images); // uncomment this line to randomize the images

$images = array();

foreach ($all_images as $index => $image) {
     if ($index == 15) break;  // Only print 15 images
     $image_name = basename($image);
     
}
echo "<img src='/public/directory/{$image_name}' />";
}

?>