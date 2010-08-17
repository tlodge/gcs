<?php 

function phptemplate_preprocess_views_view_fields(&$vars) {
  if (count($vars["row"]->image_attach_iids) > 0){
  	$imagenode = node_load($vars["row"]->image_attach_iids[0]);
  	$vars["image"] = "<img class='newsthumb' src='/" . $imagenode->images['thumbnail'] . "'/>";
  }
}



