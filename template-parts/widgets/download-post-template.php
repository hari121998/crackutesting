<div class='container'>
    <div class='row'>
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item"><a href="/blog/" target="_blank">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> 
                            <?php the_title();?>
                            </li>
                        </ol>
                    </nav>
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
                        </span>           
                    </div>                   
                    </div>
                   <div class="col-12">
                    <?php the_content();?>
                   </div>

                </div>    
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
            <?php get_sidebar('right');?>  
        </div>
    </div>
</div>