<?php
    $cat_name = $args['category'];
    $color  = $args['style'];
?>
<div class="badge-line badge-line-<?php echo $color;?>">
  <span class="badge-style badge badge-<?php echo $color;?>"><?php  echo $cat_name;?></span>
</div>
      <div class="card">
        <ul class="thumbnail-list-con list-group">
        <?php 

            $args = array(
              'posts_per_page'  => 4,
              'post-type'     => 'post',
              'order'         => 'DESC',
              'category_name' => $cat_name,
              'offset'        =>  0,
            );
            $the_query = get_posts( $args );
              
           
            foreach($the_query as $index => $post):
              
              if ($index===0): 
                $post = get_post();
                if ( current_theme_supports( 'post-thumbnails' ) && has_post_thumbnail( $post->ID ) ) {    
                    $page_bg_image     = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
                    $page_bg_image_url = $page_bg_image[0]; // This returns just the URL of the image.

                } else {
                    $page_bg_image_url = get_background_image();
                }
              ?>
              <li>
                <a href = <?php echo get_permalink();?> title="<?php echo the_title()," [Latest Update]";?>">
                  <div class="main-thumbnail-con" style="background-image:url('<?php echo $page_bg_image_url; ?>');">
                    <div class="main-thumbnail-desc-con">
                      <div class="sub-thumbnail-desc-con">
                        <h4><?php echo the_title();?> <span>[Latest Update]</span></h4>
                        <span class="main-thumbnail-author"> <?php the_author();?></span>
                        <span> - </span>
                        <span class="main-thumbnail-date"><?php $publish_date = get_the_date('F j, Y');echo $publish_date;?></span>
                      </div>
                    </div>    
                  </div>
                </a> 
              </li> 
                <?php else:?>  
                <li class="thumbnail-list-item-con list-group-item">
                  <a href=<?php echo get_permalink();?>> 
                    <?php the_post_thumbnail(array("custom-size",60,80));?>
                  </a>
                  <div class="item-title-date">
                    <a class="item-title thumbnail-item-link-<?php echo $color;?>" href = <?php echo get_permalink();?> >
                        <?php the_title();?>
                    </a>
                    <p class="item-date"><?php $publish_date = get_the_date('F j, Y');echo $publish_date;?> </p>
                  </div>
                </li>      
            
            <?php endif;?>
            <?php endforeach;?>
            </ul>
      </div>
   