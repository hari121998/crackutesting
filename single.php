<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
 
get_header(); ?>
     <div class="container">        
    <div class="row">
      <div class="col-lg-9">
        <div class="card animated fadeInLeftTiny animation-delay-5">
          <div class="card-body card-body-big">
          <nav aria-label="breadcrumb">
    <ol class="breadcrumb p-0">
        <li class="breadcrumb-item"><a href="https://cracku.in/blog/" target="_blank">Home</a></li>
        <li class="breadcrumb-item"><a href= <?php $category = get_the_category()[0]->cat_name; echo 'https://cracku.in/blog/category/' .strtolower($category);?>> <?php $category = get_the_category()[0]->cat_name; echo $category;?> </a></li>
        <li class="breadcrumb-item active" aria-current="page"> 
          <?php the_title();?>
        </li>
    </ol>
</nav>
<span class="badge badge-danger breadcrumb-item active">
<a  href= <?php $category = get_the_category()[0]->cat_name; echo 'https://cracku.in/blog/category/' .strtolower($category);?> style="color:#fff;"> <?php $category = get_the_category();
$firstCategory = $category[0]->cat_name; echo $firstCategory;?></a>  
</span>
<!-- <a href="https://cracku.in/blog/category/cat/" class="btn btn-raised btn-danger">CAT</a> -->
  
            <h1 class="no-mt"><?php the_title(); ?></h1>
            <div class="row">
              <div class="col-6">
              <span class="rounded-circle"> by <a href="javascript:void(0)">
              <?php the_post();?>
          <?php the_author(); ?>
        
              </a> </span>
              
              <span class="ml-1"><i class="zmdi zmdi-time mr-05 color-info"></i> <span class="color-medium-dark">
              <?php
$publish_date = get_the_date('F j, Y');
echo $publish_date;
?>
              </span></span>
              </div>
              <div class="col-6 text-right">
<span class="ml-4"><i class="zmdi zmdi-eye"></i>
<?php gt_set_post_view(); ?>
<?= gt_get_post_view(); ?>

</span>           </div>   
             
            </div>
            
            <img src="/media/15_Min_xYMevmx.png" alt="" class="img-fluid mb-4"/>
            <?php the_post_thumbnail("medium_large");?>
            <?php the_post_thumbnail_caption();?>
            
              <?php the_content();?>
          </div>
        </div>
      </div>
      
      <?php get_sidebar("right");?>
    </div>
 
  <h2>Related Articles</h2>   
      <div class="multiple-items slick-initialized slick-slider slick-dotted">        
            
         
      <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 0px; transform: translate3d(0px, 0px, 0px);"></div></div><ul class="slick-dots" role="tablist"></ul></div>  
  </div>
 
<?php get_footer(); ?>