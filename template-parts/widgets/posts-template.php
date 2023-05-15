<div class="container">        
    <div class="row">
      <div class="col-lg-9">
        <div class="card animated fadeInLeftTiny animation-delay-5">
          <div class="card-body card-body-big">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-0">
                    <li class="breadcrumb-item"><a href="/blog/" target="_blank">Home</a></li>
                    <li class="breadcrumb-item"><a href= <?php $category = get_the_category()[0]->cat_name; echo '/blog/category/' .strtolower($category);?>> <?php $category = get_the_category()[0]->cat_name; echo $category;?> </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> 
                      <?php the_title();?>
                    </li>
                </ol>
            </nav>
<span class="badge badge-danger breadcrumb-item active">
<a  href= <?php $category = get_the_category()[0]->cat_name; echo '/blog/category/' .strtolower($category);?> style="color:#fff;"> <?php $category = get_the_category();
$firstCategory = $category[0]->cat_name; echo $firstCategory;?></a>  
</span>
<!-- <a href="https://cracku.in/blog/category/cat/" class="btn btn-raised btn-danger">CAT</a> -->
  
            <h1 class="no-mt"><?php the_title(); ?></h1>
            <div class="row">
              <div class="col-6">
              <span class="rounded-circle"> by <a href="<?php $author_name = get_the_author(); echo '/author/'.$author_name; ?>">
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
            <div class="post-thumbnail-image">
            <?php the_post_thumbnail("medium_large");?>
            </div>

            <?php the_post_thumbnail_caption();?>
            
              <?php the_content();?>
          </div>
          <?php
            $post_tags = get_the_tags();

              if ( $post_tags ) :?>
              
              
          
            <ul class="p-4 post-tag-container">
              <li><span>TAGS</span></li>
              <?php foreach($post_tags as $tag) :?>
                <?php $tag_modified = str_replace( ' ', '-', $tag->name );?>
                
              <li>
                  <a href="<?php echo '/blog/tag/'.$tag_modified;?>" class="btn btn-primary"><?php echo $tag->name;?> </a>
              </li>
              <?php endforeach;?>
            </ul>
            
          <?php endif;?>
        </div>
        <div class="row">
        
        <div class="col-lg-6">
        <?php 
              $prev_post = get_previous_post();
              $prev_post_link = get_permalink($prev_post->ID);
              $prev_thumbnail_url = get_the_post_thumbnail_url($prev_post->ID,'thumbnail');
              $prev_post_title  = get_the_title($prev_post->ID);
              $prev_post_date = get_the_date('F Y,j',$prev_post->ID)
            ?>
            <?php if(!empty($prev_post)):?>
        <span class="badge badge-default">Previous Post</span>
        <div class="card">
          <div class="prev-post-container">
          
            <a href="<?php echo $prev_post_link;?>" class='prev-post-thumbnail-con'>
              <img src="<?php echo $prev_thumbnail_url;?>" alt="thumbnail-image"/>
            </a>
            <div class="prev-post-content-con">
              <a href="<?php echo $prev_post_link;?>">
              <?php echo wp_trim_words( $prev_post_title, 5, '...' );
                
                ?>
              </a>
              <br/>
              <span>
                <?php echo $prev_post_date;?>
              </span>
            </div>
          </div>
          
            </div>
            <?php endif;?>
        </div>
        <div class="col-lg-6">
          <?php 
              $next_post = get_next_post();
              $next_post_link = get_permalink($next_post->ID);
              $next_thumbnail_url = get_the_post_thumbnail_url($next_post->ID,'thumbnail');
              $next_post_title  = get_the_title($next_post->ID);
              $next_post_date = get_the_date('F Y,j',$next_post->ID);
              if(!empty($next_post)):
            ?>
            <div class="text-right">
              <span class="badge badge-default text-right">Next Post</span>
            </div>
        <div class="card">
          <div class="prev-post-container next-post-container">
          
            <a href="<?php echo $next_post_link;?>" class='prev-post-thumbnail-con'>
              <img src="<?php echo $next_thumbnail_url;?>" alt="thumbnail-image"/>
            </a>
            <div class="prev-post-content-con">
              <a href="<?php echo $next_post_link;?>">
                <?php echo wp_trim_words( $next_post_title, 5, '...' );
                
               ?>
              </a>
              <br/>
              <span>
                <?php echo $next_post_date;?>
              </span>
            </div>
          </div>
            </div>
            <?php endif;?>
        </div>
        
    </div> 
      </div>  
      <div class="col-lg-3">
        <?php get_sidebar("right");?>
      </div>
      
    </div>
      <div class="multiple-items slick-initialized slick-slider slick-dotted">
        <div class="slick-list draggable">
          <div class="slick-track" style="opacity: 1; width: 0px; transform: translate3d(0px, 0px, 0px);">
          
        </div>
      </div>
      <ul class="slick-dots" role="tablist">
          
      </ul>  
    </div> 
  </div>