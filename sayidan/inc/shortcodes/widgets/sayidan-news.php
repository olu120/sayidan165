<?php 
if( 1 == $instance['search_bar'] ){ $instance['search_bar'] = "true"; }else{ $instance['search_bar'] = "false"; }
$instance['type'] = "normal";
echo do_shortcode( '[sayidan_blog title="'.$instance['title'].'" category="'.$instance['category'].'" records_per_page="'.$instance['records_per_page'].'" type="'.$instance['type'].'" search_bar="'.$instance['search_bar'].'" ]' ); ?>