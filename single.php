<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
 
get_header(); ?>
<?php 
$category_name="";
  if(preg_match('/\/blog\/([a-zA-Z0-9-]+)\//', $_SERVER['REQUEST_URI'], $matches)){
    $category_name = $matches[1];
    if($category_name=="download"){
      get_template_part('template-parts/widgets/download-post-template');
    }
    else{
      get_template_part('template-parts/widgets/posts-template');

    }
  }
  else{
    get_template_part('template-parts/widgets/posts-template');
  }

  ?>

     
<?php get_footer(); ?>