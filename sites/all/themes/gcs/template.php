<?php 

drupal_add_js(drupal_get_path('theme', 'gcs') .'/js/jquery-1.4.2.min.js', 'theme');
drupal_add_js(drupal_get_path('theme', 'gcs') .'/js/jquery-ui-1.8.2.custom.min.js', 'theme');
drupal_add_js(drupal_get_path('theme', 'gcs') .'/js/gallery.js', 'theme');
drupal_add_js(drupal_get_path('theme', 'gcs') .'/js/tabscript.js', 'theme');


        
        
function phptemplate_preprocess_views_view_fields(&$vars) {
  if (count($vars["row"]->image_attach_iids) > 0){
  	$imagenode = node_load($vars["row"]->image_attach_iids[0]);
  	$vars["image"] = "<img class='newsthumb' src='/" . $imagenode->images['thumbnail'] . "'/>";
  }
}



