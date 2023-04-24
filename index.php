
<?php get_header(); ?>

<link rel="stylesheet" href='https://cracku.in/static/external/yt-lazy/yt-lazy.551e71f7135b.css'>

<div class="container">
  <div class="row mb-5">
    <div class="col-lg-4">
      <div class="badge-line mb-5"style="width:100%;border-bottom: 2px solid <?php echo return_class_name('CAT'); ?>;">
        <span class="badge badge-danger" style = 'background-color:<?php echo return_class_name('CAT'); ?>;border-color:<?php echo return_class_name('CAT'); ?>;'><?php  echo 'CAT';?></span>
      </div>
   

      <?php 
      
        $args = array(
          'post-type'     => 'post',
          'order'         => 'DESC',
          'category_name' => 'CAT',
        );
        $the_query = new WP_Query( $args );
        
        if ( $the_query->have_posts() ):
          while ( $the_query->have_posts() ) : $the_query->the_post();
          $post = get_post();

          if ( current_theme_supports( 'post-thumbnails' ) && has_post_thumbnail( $post->ID ) ) {
                  
              $page_bg_image     = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
              $page_bg_image_url = $page_bg_image[0]; // This returns just the URL of the image.

          } else {
              $page_bg_image_url = get_background_image();
          }
      ?>
      <style >
        .main-thumbnail-con{
          display:flex;
          flex-direction:column;
          justify-content:flex-end;
          color:#fff;
          background-blend-mode: multiply;
          background-color: rgba(0, 0, 0, 0.1);
          position:relative;
        }
        .main-thumbnail-con h4{
          font-family: 'Roboto', sans-serif;
          font-weight:700;
          font-size:17px;
          z-index:9;
          margin:1px 0;
          word-wrap:break-word;
        }
        .main-thumbnail-author{
          font-family: 'Open Sans', arial, sans-serif;
          font-size: 13px;
          font-weight:bold;
        }
        .main-thumbnail-date{
          color: #aaa;
          font-family: 'Open Sans', arial, sans-serif;
          font-size: 11px;
          line-height: 1;
          font-weight:bold;
        }
        .main-thumbnail-desc-con{
          background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.7) 100%);
          position:absolute;
          width:100%;
          bottom:0;
          z-index:9;
          padding:10px 20px;
        }


      </style>
      <a href = <?php echo get_permalink();?> title="<?php echo the_title()," [Latest Update]";?>">
      <div class="main-thumbnail-con mb-2" style="height:20vh;background-image:url('<?php echo $page_bg_image_url; ?>');background-size:cover;">
        <div class="main-thumbnail-desc-con">
          <h4><?php echo the_title();?> <span>[Latest Update]</span></h4>
          <span class="main-thumbnail-author"> <?php  the_author();?></span>
          <span> - </span>
          <span class="main-thumbnail-date"><?php $publish_date = get_the_date('F j, Y');echo $publish_date;?></span>
        </div>    
      </div>
      </a>
      
     
     <?php break; endwhile;?>
      <?php endif;?>
      <style>
        .thumbnail-list-con{
          padding:0;
          list-style:none;
        }
        .thumbnail-list-item-con{
          display:flex;
          
        }
        .item-title{
          font-size: 16px;
          font-weight: 500;
          line-height: 18px;
          margin: 0 0 10px 0;
          word-wrap: break-word;
          font-family: 'Roboto', sans-serif;
          color: #111111 ;
        }
        .cat:hover{
          color:#ff5062;
        }
        .item-date{
          font-family: 'Open Sans', arial, sans-serif;
          font-size: 12px;
          line-height: 1;
          margin:5px 0 0 0;
          color:#aaa;
        }
        .item-title-date{
          margin:0 0 0 20px;
        }

        
      </style>
      <ul class="thumbnail-list-con">
        <?php 
        
          $args = array(
            'posts_per_page'  => 3,
            'post-type'     => 'post',
            'order'         => 'DESC',
            'category_name' => 'CAT',
            'offset'        =>  1,
          );
          $the_query = new WP_Query( $args );
          
          if ( $the_query->have_posts() ):
            while ( $the_query->have_posts() ) : $the_query->the_post();?>  
              <li class="thumbnail-list-item-con mt-1">
                <a href=<?php echo get_permalink();?>> 
                  <?php the_post_thumbnail(array("custom_size",80,60));?>
                </a>
                <div class="item-title-date">
                  <a href = '<?php get_permalink();?>' class="item-title cat" >
                      <?php the_title();?>
                  </a>
                  <p class="item-date"><?php $publish_date = get_the_date('F j, Y');echo $publish_date;?> </p>
                </div>
              </li>       
          <?php endwhile;endif;?>
        </ul>
    </div>
    <div class="col-lg-4">
      <div class="badge-line mb-5"style="width:100%;border-bottom: 2px solid <?php echo return_class_name('TISSNET'); ?>;">
        <span class="badge badge-danger" style = 'background-color:<?php echo return_class_name('TISSNET'); ?>;border-color:<?php echo return_class_name('TISSNET'); ?>;'><?php  echo 'TISSNET';?></span>
      </div>
   

      <?php 
      
        $args = array(
          'post-type'     => 'post',
          'order'         => 'DESC',
          'category_name' => 'TISSNET',
        );
        $the_query = new WP_Query( $args );
        
        if ( $the_query->have_posts() ):
          while ( $the_query->have_posts() ) : $the_query->the_post();
          $post = get_post();

          if ( current_theme_supports( 'post-thumbnails' ) && has_post_thumbnail( $post->ID ) ) {
                  
              $page_bg_image     = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
              $page_bg_image_url = $page_bg_image[0]; // This returns just the URL of the image.

          } else {
              $page_bg_image_url = get_background_image();
          }


      ?>
      <style >
        .main-thumbnail-con{
          display:flex;
          flex-direction:column;
          justify-content:flex-end;
          color:#fff;
          background-blend-mode: multiply;
          background-color: rgba(0, 0, 0, 0.1);
          position:relative;
        }
        .main-thumbnail-con h4{
          font-family: 'Roboto', sans-serif;
          font-weight:700;
          font-size:17px;
          z-index:9;
          margin:1px 0;
          word-wrap:break-word;
        }
        .main-thumbnail-author{
          font-family: 'Open Sans', arial, sans-serif;
          font-size: 13px;
          font-weight:bold;
        }
        .main-thumbnail-date{
          color: #aaa;
          font-family: 'Open Sans', arial, sans-serif;
          font-size: 11px;
          line-height: 1;
          font-weight:bold;
        }
        .main-thumbnail-desc-con{
          background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.7) 100%);
          position:absolute;
          width:100%;
          bottom:0;
          z-index:9;
          padding:10px 20px;
        }


      </style>
      <a href = <?php echo get_permalink();?> title="<?php echo the_title()," [Latest Update]";?>">
      <div class="main-thumbnail-con mb-2" style="height:20vh;background-image:url('<?php echo $page_bg_image_url; ?>');background-size:cover;">
        <div class="main-thumbnail-desc-con">
          <h4><?php echo the_title();?> <span>[Latest Update]</span></h4>
          <span class="main-thumbnail-author"> <?php  the_author();?></span>
          <span> - </span>
          <span class="main-thumbnail-date"><?php $publish_date = get_the_date('F j, Y');echo $publish_date;?></span>
        </div>    
      </div>
      </a>
      
     
     <?php break; endwhile;?>
      <?php endif;?>
      <style>
        .thumbnail-list-con{
          padding:0;
          list-style:none;
        }
        .thumbnail-list-item-con{
          display:flex;
         
        }
        .item-title{
          font-size: 16px;
          font-weight: 500;
          line-height: 18px;
          margin: 0 0 10px 0;
          word-wrap: break-word;
          font-family: 'Roboto', sans-serif;
          color: #111111 ;
        }
        .tissnet:hover{
          color:#257002 ;
        }
        .item-date{
          font-family: 'Open Sans', arial, sans-serif;
          font-size: 12px;
          line-height: 1;
          margin:5px 0 0 0;
          color:#aaa;
        }
        .item-title-date{
          margin:0 0 0 20px;
        }

        
      </style>
      <ul class="thumbnail-list-con">
        <?php 
        
          $args = array(
            'posts_per_page'  => 3,
            'post-type'     => 'post',
            'order'         => 'DESC',
            'category_name' => 'TISSNET',
            'offset'        =>  1,
          );
          $the_query = new WP_Query( $args );
          
          if ( $the_query->have_posts() ):
            while ( $the_query->have_posts() ) : $the_query->the_post();?>  
              <li class="thumbnail-list-item-con mt-1">
                <a href=<?php echo get_permalink();?>> 
                  <?php the_post_thumbnail(array("custom_size",80,60));?>
                </a>
                <div class="item-title-date">
                  <a href = '<?php get_permalink();?>' class="item-title tissnet" >
                      <?php the_title();?>
                  </a>
                  <p class="item-date"><?php $publish_date = get_the_date('F j, Y');echo $publish_date;?> </p>
                </div>
              </li>       
          <?php endwhile;endif;?>
        </ul>
    </div>
    <div class="col-lg-4">
      <div class="badge-line mb-5"style="width:100%;border-bottom: 2px solid <?php echo return_class_name('CMAT'); ?>;">
        <span class="badge badge-danger" style = 'background-color:<?php echo return_class_name('CMAT'); ?>;border-color:<?php echo return_class_name('CMAT'); ?>;'><?php  echo 'CMAT';?></span>
      </div>
   

      <?php 
      
        $args = array(
          'post-type'     => 'post',
          'order'         => 'DESC',
          'category_name' => 'CMAT',
        );
        $the_query = new WP_Query( $args );
        
        if ( $the_query->have_posts() ):
          while ( $the_query->have_posts() ) : $the_query->the_post();
          $post = get_post();

          if ( current_theme_supports( 'post-thumbnails' ) && has_post_thumbnail( $post->ID ) ) {
                  
              $page_bg_image     = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
              $page_bg_image_url = $page_bg_image[0]; // This returns just the URL of the image.

          } else {
              $page_bg_image_url = get_background_image();
          }


      ?>
      <style >
        .main-thumbnail-con{
          display:flex;
          flex-direction:column;
          justify-content:flex-end;
          color:#fff;
          background-blend-mode: multiply;
          background-color: rgba(0, 0, 0, 0.1);
          position:relative;
        }
        .main-thumbnail-con h4{
          font-family: 'Roboto', sans-serif;
          font-weight:700;
          font-size:17px;
          z-index:9;
          margin:1px 0;
          word-wrap:break-word;
        }
        .main-thumbnail-author{
          font-family: 'Open Sans', arial, sans-serif;
          font-size: 13px;
          font-weight:bold;
        }
        .main-thumbnail-date{
          color: #aaa;
          font-family: 'Open Sans', arial, sans-serif;
          font-size: 11px;
          line-height: 1;
          font-weight:bold;
        }
        .main-thumbnail-desc-con{
          background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.7) 100%);
          position:absolute;
          width:100%;
          bottom:0;
          z-index:9;
          padding:10px 20px;
        }


      </style>
      <a href = <?php echo get_permalink();?> title="<?php echo the_title()," [Latest Update]";?>">
      <div class="main-thumbnail-con mb-2" style="height:20vh;background-image:url('<?php echo $page_bg_image_url; ?>');background-size:cover;">
        <div class="main-thumbnail-desc-con">
          <h4><?php echo the_title();?> <span>[Latest Update]</span></h4>
          <span class="main-thumbnail-author"> <?php  the_author();?></span>
          <span> - </span>
          <span class="main-thumbnail-date"><?php $publish_date = get_the_date('F j, Y');echo $publish_date;?></span>
        </div>    
      </div>
      </a>
      
     
     <?php break; endwhile;?>
      <?php endif;?>
      <style>
        .thumbnail-list-con{
          padding:0;
          list-style:none;
        }
        .thumbnail-list-item-con{
          display:flex;
         
        }
        .item-title{
          font-size: 16px;
          font-weight: 500;
          line-height: 18px;
          margin: 0 0 10px 0;
          word-wrap: break-word;
          font-family: 'Roboto', sans-serif;
          color: #111111 ;
        }
        .cmat:hover{
          color:#1e73be;
        }
        .item-date{
          font-family: 'Open Sans', arial, sans-serif;
          font-size: 12px;
          line-height: 1;
          margin:5px 0 0 0;
          color:#aaa;
        }
        .item-title-date{
          margin:0 0 0 20px;
        }

        
      </style>
      <ul class="thumbnail-list-con">
        <?php 
        
          $args = array(
            'posts_per_page'  => 3,
            'post-type'     => 'post',
            'order'         => 'DESC',
            'category_name' => 'CMAT',
            'offset'        =>  1,
          );
          $the_query = new WP_Query( $args );
          
          if ( $the_query->have_posts() ):
            while ( $the_query->have_posts() ) : $the_query->the_post();?>  
              <li class="thumbnail-list-item-con mt-1">
                <a href=<?php echo get_permalink();?>> 
                  <?php the_post_thumbnail(array("custom_size",80,60));?>
                </a>
                <div class="item-title-date">
                  <a href = '<?php get_permalink();?>' class="item-title cmat" >
                      <?php the_title();?>
                  </a>
                  <p class="item-date"><?php $publish_date = get_the_date('F j, Y');echo $publish_date;?> </p>
                </div>
              </li>       
          <?php endwhile;endif;?>
        </ul>
    </div>
  </div>
  





        <div class="row mt-5">
          <div class="col-lg-8">
    <?php

        $page = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

        $args = array(
          'post-type' => 'post',
          'posts_per_page' => 3,
          'order' => 'DESC',
          'paged' => $page,
        );

        $the_query = new WP_Query( $args );

        

        if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post();?>
                <?php $category = get_the_category();
                $firstCategory = $category[0]->cat_name;?>
        <div class="badge-line"style="width:50%;border-bottom: 2px solid <?php echo return_class_name($firstCategory); ?>;">

                  <span class="badge badge-danger" style = 'background-color:<?php echo return_class_name($firstCategory); ?>;border-color:<?php echo return_class_name($firstCategory); ?>;'><?php  echo $firstCategory;?></span>
        </div>
        <article class="card wow  animation-delay-5 mb-4" style="visibility: visible;">
             <div class="card-body overflow-hidden overflow-hidden">
                <div class="row">
                  <div class="col-xl-5" style="padding-left:15px;">
                    <?php the_post_thumbnail('medium');?>
                   
                  </div>
                  
                  <div class="col-xl-7" style="padding-left:30px;">
                    <h3 class="no-mt"><a href=<?php echo get_permalink();?> ><?php the_title();?></a></h3>
                    <p class="mb-4"><?php $excerpt = get_the_excerpt();
                    
                    $excerpt = substr( $excerpt, 0, 160 );
                    $result = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
                    echo $result;?></p>
                  </div>
                </div>
                <div class="row" style="align-items:center;">
                  <div class="col-lg-8">
                    by <a href="javascript:void(0)"><?php the_author();?></a>
                    <span class="ml-1 d-none d-sm-inline"><i class="zmdi zmdi-time mr-05 color-info"></i> <span class="color-medium-dark">
                      <?php 
                        $publish_date = get_the_date('F j, Y');
                        echo $publish_date;
                      ?>
                        </span>
                      </span>
                      <span class="ml-4"><i class="zmdi zmdi-eye"></i>
                          <?php gt_set_post_view(); ?>
                          <?= gt_get_post_view(); ?>
                      </span>  
                  </div>
                  <div class="col-lg-4 text-right">
                    <a href=<?php echo get_permalink();?> class="btn btn-primary btn-raised btn-block animate-icon">Read More <i class="ml-1 no-mr zmdi zmdi-long-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </article>


   <?php endwhile;

      $big = 999999999; // need an unlikely integer
      echo '<nav aria-label="Page navigation">';
      echo '<ul class="pagination pagination-plain">';
      echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $the_query->max_num_pages,
        'show_all' => 'true',
        'prev_text' => '<<',
        'next_text'  => ">>",
        'prev_next' => 'false',
      ) );
      echo '</ul>';
      echo '</nav>';
          wp_reset_postdata();
      endif;
      ?>
</div>
          <div class="col-lg-4">
            
            <div class="card card-primary animated  animation-delay-7">
              <div class="card-header">
                <h3 class="card-title"><i class="zmdi zmdi-apps"></i> Navigation</h3>
              </div>
              <div class="card-tabs">
                <ul class="nav nav-tabs nav-tabs-transparent indicator-primary nav-tabs-full nav-tabs-4" role="tablist">
                  <li class="nav-item"><a href="#favorite" aria-controls="favorite" role="tab" data-toggle="tab" class="nav-link withoutripple"><i class="no-mr zmdi zmdi-star"></i></a></li>
                  <li class="nav-item"><a href="#categories" aria-controls="categories" role="tab" data-toggle="tab" class="nav-link withoutripple"><i class="no-mr zmdi zmdi-folder"></i></a></li>
                  <li class="nav-item"><a href="#archives" aria-controls="archives" role="tab" data-toggle="tab" class="nav-link withoutripple"><i class="no-mr zmdi zmdi-time"></i></a></li>
                  <li class="nav-item"><a href="#tags" aria-controls="tags" role="tab" data-toggle="tab" class="nav-link withoutripple"><i class="no-mr zmdi zmdi-tag-more"></i></a></li>
                <span id="i3" class="ms-tabs-indicator" style="left: 0px; width: 87.5px;"></span></ul>
              </div>
              
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade active show" id="favorite">
                  <div class="card-body overflow-hidden">
                    <div class="ms-media-list">
                    <?php

        // $page = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

        $args = array(
          'post-type' => 'post',
          'posts_per_page' => 5,
          'order_by' => 'date',
          'order' => 'DESC',
          // 'paged' => $page,
        );

        $the_query = new WP_Query( $args );

        // Loop Starts here

        if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post();?>

                      <div class="media mb-2">
                        <div class="media-left m-auto">
                          <a href="<?php echo get_permalink();?>" class="mr-3 media-object-circle">
                          <?php  the_post_thumbnail(array(50,50));?>
                            <!-- <img class="d-flex mr-3 media-object media-object-circle" src="" alt="..."> -->
                          </a>
                        </div>
                        <div class="media-body">
                          
                          <a href="<?php echo get_permalink();?>" class="media-heading"><?php the_title();?> </a>
                          <div class="media-footer text-small">
                            <span class="mr-1"><i class="zmdi zmdi-time color-info mr-05"></i> <?php $publish_date = get_the_date('F j, Y');
echo $publish_date;?>  </span>
                          </div>
                        </div>
                      </div>
                      
                      <?php endwhile;
else:

    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif; 

wp_reset_postdata();

?>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="categories">
                  <div class="list-group">
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action withripple"><i class=" color-info zmdi zmdi-cocktail"></i>Design <span class="ml-auto badge-pill badge-pill-info">25</span></a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action withripple"><i class=" color-warning zmdi zmdi-collection-image"></i> Graphics <span class="ml-auto badge-pill badge-pill-warning">14</span></a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action withripple"><i class=" color-danger zmdi zmdi-case-check"></i> Productivity <span class="ml-auto badge-pill badge-pill-danger">7</span></a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action withripple"><i class=" color-royal zmdi zmdi-folder-star-alt"></i>Resources <span class="ml-auto badge-pill badge-pill-royal">67</span></a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action withripple"><i class=" color-success zmdi zmdi-play-circle-outline"></i>Multimedia <span class="ml-auto badge-pill badge-pill-success">32</span></a>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="archives">
                  <div class="list-group">
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action withripple"><i class="zmdi zmdi-calendar"></i> January 2016 <span class="ml-auto badge-pill">25</span></a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action withripple"><i class="zmdi zmdi-calendar"></i> February 2016 <span class="ml-auto badge-pill">14</span></a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action withripple"><i class="zmdi zmdi-calendar"></i> March 2016 <span class="ml-auto badge-pill">9</span></a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action withripple"><i class="zmdi zmdi-calendar"></i> April 2016 <span class="ml-auto badge-pill">12</span></a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action withripple"><i class="zmdi zmdi-calendar"></i> June 2016 <span class="ml-auto badge-pill">65</span></a>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tags">
                  <div class="card-body overflow-hidden overflow-hidden text-center">
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">Design</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">Productivity</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">Web</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">Resources</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">Multimedia</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">HTML5</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">CSS3</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">Javascript</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">Jquery</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">Bootstrap</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">Angular</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">Gulp</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">Atom</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">Fonts</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">Pictures</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">Developers</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">Code</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">SASS</a>
                    <a href="javascript:void(0)" class="ms-tag ms-tag-primary">Less</a>
                  </div>
                </div>
              </div> 
            </div>
          </div>
        </div>
      </div>
<!-- container -->


      <!-- container -->
      

      <?php get_footer(); ?>
