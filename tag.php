<?php get_header();

    $tag_name ="";
    if(preg_match('/\/tag\/([a-zA-Z0-9-]+)\/page/', $_SERVER['REQUEST_URI'], $matches)){
    $tag_name = $matches[1];
    
    
    }
    elseif(preg_match('/\/tag\/(.*)\//', $_SERVER['REQUEST_URI'], $matches)){
    $tag_name = $matches[1];
    }
    $tag_modified = str_replace( '-', ' ', $tag_name );
     
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-0">
                <li class="breadcrumb-item"><a href="/blog/" target="_blank">Home</a></li>
                <li class="breadcrumb-item">Tags</li>
                <li class="breadcrumb-item active" aria-current="page"> 
                    <?php echo $tag_name;?>
                </li>
            </ol>
            </nav>
            </div>
            <div class="col-lg-12">
                <h1>Tag: <?php echo $tag_name;?> </h1>
            </div>
            <div class="col-lg-8">
                
                <?php get_template_part( 'template-parts/widgets/recent-posts-widgets',null,array('category' =>'','tag'=>$tag_name,'style'=>'primary','order'=>'DESC','posts_per_page'=>3));?> 
                
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
                                echo $publish_date;?>  
                            </span>
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
    </div>
   

<?php get_footer();?>

              
              